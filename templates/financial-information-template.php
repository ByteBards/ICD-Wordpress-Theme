<?php
   /**
    * Template name: Financial Information Template
    * Theme Name: Investment Corporation of Dubai Theme
    */
   get_header();
   $current_lang = pll_current_language();
?>
<style>
 .dynamic-svg {
    width: 350px; /* Default width */
    height: 350px; /* Default height */
    max-width: 100%; /* Ensures responsiveness on smaller screens */
    max-height: 100%; /* Ensures responsiveness on smaller screens */
  }

  @media (max-width: 600px) {
    .dynamic-svg {
      width: 100%; /* Scales the SVG to the width of the container on smaller screens */
      height: auto; /* Adjust height proportionally */
    }
    .piechartmainfr .pcm_desktop {
    display: block !important;
    width: 100%!important;
    height: 100%!important;
}
  }
  .piechartmainfr canvas {
    transform: rotate(30deg);
}
.piechartmainfr .pcm_desktop {
    display: block !important;
    width: 350px;
    height: 100%;
}
</style>

<?php get_template_part('template-parts/page-title'); ?>

<section class="ft_banner">
<!--    <div class="container toprow">
      <div class="row">
         <div class="col-md-12">
            <div class="parentname">
               <div class="pninn"> <?php //the_title(); ?></div>
            </div>
         </div>
      </div>
   </div> -->
   <div class="container smallContainer">
      <div class="row">
         <div class="col-md-8">
            <div class="ft-desc fadeaniamtion_sc">
                <p><?php the_content(); ?></p>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="graphsec">
    <div class="container-fluid">
        <div class="row gs-topcol fadeaniamtion_sc">
            <div class="col-md-5">
                <h2><?php echo esc_html(get_field('gs_heading')); ?></h2>
            </div>
        </div>
        <?php if( have_rows('bar_graph') ): ?>
    <div class="row bargraph-row">
        <?php while( have_rows('bar_graph') ): the_row(); 
            $graph_title = get_sub_field('bg_name');
            $graph_subtitle = get_sub_field('bg_sub_heading');
            $graph_values = get_sub_field('bg_values');
            
            $values_array = [];
            $years_array  = [];
            if( $graph_values ) {
                foreach( $graph_values as $value_row ) {
                    $values_array[] = $value_row['bg_add_value'];
                    $years_array[]  = $value_row['value_year']; // <-- make sure this field exists
                }
            }

            $data = [
                "values" => $values_array,
                "years"  => $years_array,
            ];
            $data_values = json_encode($data);
        ?>
        <div class="col-md-3">
            <div class="graph-container">
                <div class="gc-innertop">
                    <div class="graph-title"><?php echo $graph_title; ?></div>
                    <div class="graph-subtitle"><?php echo esc_html($graph_subtitle); ?></div>
                </div>
                <div class="graph-value" id="graphValue">
                    <?php echo !empty($values_array) ? end($values_array) : '0'; ?>
                </div>
                <div class="graph" data-values='<?php echo esc_attr($data_values); ?>'>
                    <!-- Bars will be dynamically added by JavaScript -->
                </div>
				<div class="graph-year-wrap" data-values='<?php echo esc_attr($data_values); ?>'>
                    <!-- Bars inserted by JS -->
                    <div class="graph-years">
                        <?php foreach( $years_array as $year ): ?>
                            <div class="bar-year"><?php echo esc_html($year); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>




        

<div class="piegraph-row">
    <div class="row">
    <div class="col-md-2 pgr-first">
        <div class="pgr-f-inner">
            <h4><span><?php echo esc_html(get_field('pc_heading')); ?></span>
            <?php 
                if ($current_lang == 'en') {
                    echo pll__('by Segment'); 
                } elseif ($current_lang == 'ar') {
                    echo pll__('حسب القطاع'); 
                }
            ?>
            </h4>
        </div>
    </div>
    <?php if (have_rows('pc_pie_chart')) : ?>
    <div class="col-md-10 pgr-scnd">
        <?php while (have_rows('pc_pie_chart')) : the_row(); ?>
            <?php
            // Generate a unique ID for each chart
            $chart_id = uniqid('chart_');
            ?>
            <div class="piechartmainfr" id="chart-container-<?php echo esc_attr($chart_id); ?>">

                <img id="icd__assets__img" src="/wp-content/uploads/2025/08/Assets.svg">
                <img id="icd__revenue__img" src="/wp-content/uploads/2025/08/Revenue.svg">


                <div class="old__piechartmainfr">
                    <h5><span><?php echo esc_html(get_sub_field('pc_name')); ?></span>
                    <?php 
                        if ($current_lang == 'en') {
                            echo pll__('by Segment'); 
                        } elseif ($current_lang == 'ar') {
                            echo pll__('حسب القطاع'); 
                        }
                    ?>
                    </h5>
                    <div class="pcm_desktop">
                        <canvas id="canvas-<?php echo esc_attr($chart_id); ?>" style="display: block; width: 100%; height: auto;"></canvas>
                    </div>
                    <div class="piechartcontent">
                        <div class="pcc_inner" id="content-<?php echo esc_attr($chart_id); ?>">
                            <!-- Child repeater values will be injected here -->
                        </div>
                    </div>
                </div>
            </div>

            <script>
(function () {
    const canvas = document.getElementById("canvas-<?php echo esc_attr($chart_id); ?>");
    const ctx = canvas.getContext("2d");

    const contentDiv = document.getElementById("content-<?php echo esc_attr($chart_id); ?>");

    // Store original dimensions
    const originalWidth = canvas.getBoundingClientRect().width;

    // Set canvas size and calculate radius
    function setCanvasSize() {
        canvas.width = originalWidth;
        canvas.height = originalWidth; // Keep it square for the pie chart
        return originalWidth / 2 - 0; // Radius with padding
    }

    const radius = setCanvasSize();

    // Collect chart data
    const data = [];
    <?php if (have_rows('pc_pie_segment')) : ?>
        <?php while (have_rows('pc_pie_segment')) : the_row(); ?>
            data.push({
                name: "<?php echo esc_js(get_sub_field('pc_ps_heading')); ?>",
                percentage: <?php echo esc_js(get_sub_field('pc_ps_value')); ?>,
                color: "<?php echo esc_js(get_sub_field('pc_ps_color')); ?>"
            });
        <?php endwhile; ?>
    <?php endif; ?>

    // Inject segment data into pie chart content
    data.forEach(slice => {
        const div = document.createElement("div");
        div.classList.add("singlepieinfo");
        div.innerHTML = `
            <hr style="background-color: ${slice.color};">
            <div class="piepercentage"><span class="counter" data-target="${slice.percentage}">0</span>%</div>
            <div class="pielable">${slice.name}</div>
        `;
        contentDiv.appendChild(div);
    });

    const rotateBy = -30;
    const startAngleOffset = (rotateBy * Math.PI) / 180;

    // Function to draw the pie chart on the canvas
    function drawPieChart() {
        ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas

        const centerX = canvas.width / 2; // X-coordinate of the center of the pie
        const centerY = canvas.height / 2; // Y-coordinate of the center of the pie

        let startAngle = -Math.PI / 2 + startAngleOffset;

        data.forEach((value, index) => {
            const sliceAngle = (2 * Math.PI * value.percentage) / 100; // Calculate the angle for the slice

            // Draw each slice immediately without animation
            ctx.beginPath();
            ctx.moveTo(centerX, centerY); // Move to the center
            ctx.arc(centerX, centerY, radius, startAngle, startAngle + sliceAngle); // Draw arc
            ctx.closePath(); // Close the path
            ctx.fillStyle = value.color; // Set color for the slice
            ctx.fill(); // Fill the slice

            startAngle += sliceAngle; // Update the starting angle for the next slice
        });
    }

    // Immediately draw the pie chart
    drawPieChart();

    // If you want the chart to be redrawn properly when resized
    window.addEventListener("resize", () => {
        setCanvasSize(); // Update canvas size
        drawPieChart(); // Redraw the chart after resizing
    });
})();


            </script>
        <?php endwhile; ?>
    </div>
<?php endif; ?>





</div>
</div>






    </div>
</section>


<?php
// Get taxonomy terms associated with at least one post
$terms = get_terms([
    'taxonomy' => 'financial_reports_year',
    'hide_empty' => true, // Only show terms associated with posts
    'object_ids' => get_posts([
        'post_type' => 'financial_reports',
        'fields' => 'ids', // Get only post IDs
        'posts_per_page' => -1, // Get all posts
    ]),
]);

if (!empty($terms)) : ?>
    <section class="financialreprtsec">
        <div class="container smallContainer">
            <div class="fri-main">
            <div class="row fr-toprow">
                <div class="col-md-12">
                    <div class="tr-heading">
                        <h1>
                        <?php 
                            if ($current_lang == 'en') {
                                echo pll__('Financial Reports'); 
                            } elseif ($current_lang == 'ar') {
                                echo pll__('التقارير المالية'); 
                            }
                        ?>
                        </h1>
                    </div>
                    <div class="tr-tabssec">
                        <div class="tr-r-left">
                            <h4>
                            <?php 
                                if ($current_lang == 'en') {
                                    echo pll__('Select a year to view'); 
                                } elseif ($current_lang == 'ar') {
                                    echo pll__('اختر السنة للعرض'); 
                                }
                            ?>
                            </h4>
                        </div>
                        <div class="tr-r-right">
                            <ul class="nav nav-tabs owl-carousel owl-theme owl-carouselfinancial" id="myTab" role="tablist">
                                <?php foreach ($terms as $index => $term) : ?>
                                    <li class="nav-item item" role="presentation">
                                        <button
                                            class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>"
                                            id="tab-<?php echo $index; ?>"
                                            data-bs-toggle="tab"
                                            data-bs-target="#content-<?php echo $index; ?>"
                                            type="button"
                                            role="tab"
                                            aria-controls="content-<?php echo $index; ?>"
                                            aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                                            <?php echo esc_html($term->name); ?>
                                        </button>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row tabscontentrow">
                <div class="col-md-12">
                    <div class="tab-content" id="myTabContent">
                        <?php foreach ($terms as $index => $term) : ?>
                            <div
                                class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>"
                                id="content-<?php echo $index; ?>"
                                role="tabpanel"
                                aria-labelledby="tab-<?php echo $index; ?>">
                                <div class="tabsinner">
                                    <?php
                                    // Query posts for the current taxonomy term
                                    $reports = new WP_Query([
                                        'post_type' => 'financial_reports',
                                        'tax_query' => [
                                            [
                                                'taxonomy' => 'financial_reports_year',
                                                'field' => 'term_id',
                                                'terms' => $term->term_id,
                                            ],
                                        ],
                                    ]);

                                    if ($reports->have_posts()) :
                                        while ($reports->have_posts()) : $reports->the_post();

                                            // Display Annual Reports
                                            if (have_rows('annual_reports_r')) : 
                                                
                                            ?>
                                           
                                                <div class="ti-annual">
                                                    <div class="tr-r-left">
                                                        <h2>
                                                        <?php 
                                                            if ($current_lang == 'en') {
                                                                echo pll__('Annual'); 
                                                            } elseif ($current_lang == 'ar') {
                                                                echo pll__('السنوية'); 
                                                            }
                                                        ?>
                                                        </h2>
                                                    </div>
                                                    <div class="tr-r-right">
                                                        <div class="tc-r-inner">
                                                            <?php while (have_rows('annual_reports_r')) : the_row(); 
                                                                $ar_report_file = get_sub_field('ar_report_file');
                                                                $external_url   = get_sub_field('external_url');
                                                                $report_link    = "";

                                                                if ($ar_report_file) {
                                                                    // Handle if File field returns array or string
                                                                    $report_link = is_array($ar_report_file) ? $ar_report_file['url'] : $ar_report_file;
                                                                } elseif (!empty($external_url)) {
                                                                    $report_link = $external_url;
                                                                }
                                                            
                                                            ?>
                                                                <div class="tcr-i-flex">
                                                                    <div class="reportname"><?php the_sub_field('ar_report_name'); ?></div>
                                                                    <div class="reportpdf">
                                                                        <a href="<?php echo $report_link; ?>" target="_blank">
                                                                            <?php 
                                                                                if ($current_lang == 'en') {
                                                                                    echo pll__('View'); 
                                                                                } elseif ($current_lang == 'ar') {
                                                                                    echo pll__('للاطلاع أكثر '); 
                                                                                }
                                                                            ?>
                                                                            <img src="/wp-content/uploads/2024/11/arrow-2.svg" alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            <?php endwhile; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif;

                                            // Display Interim Reports
                                            if (have_rows('interim_reports_r')) : ?>
                                                <div class="ti-interim">
                                                    <div class="tr-r-left">
                                                        <h2>
                                                        <?php 
                                                            if ($current_lang == 'en') {
                                                                echo pll__('Interim'); 
                                                            } elseif ($current_lang == 'ar') {
                                                                echo pll__('التقارير المرحليّة'); 
                                                            }
                                                        ?>
                                                        </h2>
                                                    </div>
                                                    <div class="tr-r-right">
                                                        <div class="tc-r-inner">
                                                            <?php while (have_rows('interim_reports_r')) : the_row(); ?>
                                                                <div class="tcr-i-flex">
                                                                    <div class="reportname"><?php the_sub_field('ir_report_name'); ?></div>
                                                                    <div class="reportpdf">
                                                                        <a href="<?php the_sub_field('ir_report_file'); ?>" target="_blank">
                                                                         <?php 
                                                                            if ($current_lang == 'en') {
                                                                                echo pll__('View'); 
                                                                            } elseif ($current_lang == 'ar') {
                                                                                echo pll__('للاطلاع أكثر'); 
                                                                            }
                                                                        ?>                                                                 
                                                                            <img src="/wp-content/uploads/2024/11/arrow-2.svg" alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            <?php endwhile; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif;

                                        endwhile;
                                        wp_reset_postdata();
                                    else : ?>
                                        <p>No reports available for this year.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php get_template_part('template-parts/lines-animation'); ?>



<?php get_footer(); ?>