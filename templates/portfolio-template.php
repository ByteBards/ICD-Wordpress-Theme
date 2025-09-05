<?php
   /**
    * Template name: Our Portfolio page
    * Theme Name: Investment Corporation of Dubai Theme
    */
   get_header();
   $current_lang = pll_current_language();
?>

<section class="portfoliohero">
   <div class="container smallContainer">
      <div class="row toprow">
         <div class="col-md-12">
            <!-- Page Title -->
            <div class="topheading fadeaniamtion_sc">
               <h1><?php echo get_the_title(); ?></h1>
            </div>
            
            <!-- Page Featured Image -->
            <div class="middleimg fadeaniamtion_sc">
               <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
               <?php else : ?>
                  <img src="/wp-content/uploads/2024/11/portfoliobanner.png" alt="Default Image">
               <?php endif; ?>
            </div>
            
            <!-- Page Description -->
            <div class="bottomdesc fadeaniamtion_sc">
               <p><?php echo get_the_excerpt(); ?></p>
            </div>
         </div>
      </div>
   </div>
</section>

<?php 
if( get_field('pei_chart_setting') == 'show' ) {
 ?>
 
<section class="paichart">
    <div class="conntainer">
        <div class="row">
            <div class="col-md-12 piechartcol">
                <div class="contectsec">
                    <?php if( have_rows('mainheading') ): ?>
                        <div class="pc-heading">
                            <?php while( have_rows('mainheading') ): the_row(); 
                                $mh_heading = get_sub_field('mh_heading');
                            ?>
                            <span>
                                <?php echo $mh_heading; ?>
                            </span>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                   <div class="pc-desc">
                      <p> <?php echo get_field('mainsub_heading'); ?></p>
                   </div>
                </div>
                <?php if ($current_lang == 'en') { ?>
                <div class="paichartimg desktop">
                    <img src="/wp-content/uploads/2025/04/portfolioGraphEN.svg">
                </div>
                <div class="paichartimg mobile">
                    <img src="/wp-content/uploads/2025/04/portfolioGraphMobileEN.svg">
                </div>
                <?php }  else { ?>
                <div class="paichartimg desktop">
                    <img src="/wp-content/uploads/2025/04/portfolioGraphDesktopAR.svg">
                </div>
                <div class="paichartimg mobile">
                    <img src="/wp-content/uploads/2025/04/portfolioGraphMobileAR.svg">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="paichart hide">
   <div class="conntainerfluid">
      <div class="row">
         <div class="col-md-12">
            <div class="contectsec">
            <?php if( have_rows('mainheading') ): ?>
                <div class="pc-heading">
                    <?php while( have_rows('mainheading') ): the_row(); 
                        $mh_heading = get_sub_field('mh_heading'); // Retrieve the subfield value
                    ?>
                        <span>
                            <?php echo $mh_heading; ?> <!-- Output the value directly -->
                        </span>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
               <div class="pc-desc">
                  <p> <?php echo get_field('mainsub_heading'); ?></p>
               </div>
            </div>
            <div class="piechartmain">
               <div class="pcm_desktop"><div class="pie-chart-container">
    <?php echo do_shortcode('[pie_chart]'); ?>
</div></div>
               <!-- <div class="pcm_mbile">
                    <div class="pcm_m_top">
                        <div class="pcmt_item">
                            <div class="pi_percentage">17%</div>
                            <div class="pi_heading">Hospitality& Leisure</div>
                        </div>
                        <div class="pcmt_item">
                            <div class="pi_percentage">17%</div>
                            <div class="pi_heading">Hospitality& Leisure</div>
                        </div>
                        <div class="pcmt_item">
                            <div class="pi_percentage">17%</div>
                            <div class="pi_heading">Hospitality& Leisure</div>
                        </div>
                    </div>
                    <canvas id="pieChart_mobile"></canvas>
                    <div class="pcm_m_bottom">
                        <div class="pcmt_item">
                            <div class="pi_percentage">17%</div>
                            <div class="pi_heading">Hospitality& Leisure</div>
                        </div>
                        <div class="pcmt_item">
                            <div class="pi_percentage">17%</div>
                            <div class="pi_heading">Hospitality& Leisure</div>
                        </div>
                        <div class="pcmt_item">
                            <div class="pi_percentage">17%</div>
                            <div class="pi_heading">Hospitality& Leisure</div>
                        </div>
                        <div class="pcmt_item">
                            <div class="pi_percentage">17%</div>
                            <div class="pi_heading">Hospitality& Leisure</div>
                        </div>
                    </div>
                </div> -->
                <?php
                // Fetch repeater field data
                $pie_chart_data = get_field('port_peichart', 'option');
$acf_data = [];
if ($pie_chart_data) {
    foreach ($pie_chart_data as $index => $item) {
        $acf_data[] = [
            'percentage' => intval($item['ppc_peipercentage']),
            'heading' => $item['ppc_heading'],
            'color' => $item['ppc_color'],
            'unique_class' => 'pcmt_item_' . $index // Add unique class based on index
        ];
    }
}
                ?>

                <div class="pcm_mbile">
                    <div class="pcm_m_top"></div>
                    <canvas id="pieChart_mobile" class="pieChart_mobile"></canvas>
                    <div class="pcm_m_bottom"></div>
                </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
}
if( get_field('port_setting') == 'show' ) {
?>
<section class="portfoliocards">
    <div class="container largeContainer">
        <div class="row">
            <?php
            // Custom query to fetch 'portfolios' posts
            $args = array(
                'post_type' => 'portfolios',
                'posts_per_page' => 4, // Limit to 4 posts
                'order' => 'ASC',
                'orderby' => 'date'
            );
            $portfolio_query = new WP_Query($args);

            // Check if posts are available
            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    // Get the featured image URL
                    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
                    <div class="col-md-3">
                        <div class="port-card">
                            <a href="<?php the_permalink(); ?>" class="portmainancho"></a>
                            <div class="port-feature">
                                <img src="<?php echo esc_url($featured_image); ?>" alt="">
                            </div>
                            <div class="pc_inner">
                                <!-- Dynamic Heading -->
                                <div class="pci-heading">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <!-- Dynamic Button -->
                                <div class="pci-btn">
                                    <a class="pcib-btn" href="<?php the_permalink(); ?>">
                                        <img src="/wp-content/uploads/2024/11/arrow-1.svg" alt="Arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset post data
            else :
                echo '<p>No portfolios found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>
<?php
}
?>
<?php get_template_part('template-parts/lines-animation'); ?>



<?php get_footer(); ?>


<script>
       // ACF data passed from PHP
       const acfData = <?php echo json_encode($acf_data); ?>;

document.addEventListener('DOMContentLoaded', () => {
    const topSection = document.querySelector('.pcm_m_top');
    const bottomSection = document.querySelector('.pcm_m_bottom');

    // Populate content dynamically in pcm_m_top and pcm_m_bottom
    if (acfData.length > 0) {
        // First 3 items for pcm_m_top
        acfData.slice(0, 3).forEach((item, index) => {
            const div = document.createElement('div');
            div.className = 'pcmt_item ' + item.unique_class; // Apply the unique class
            div.innerHTML = `
                <div class="pi_percentage">${item.percentage}%</div>
                <div class="pi_heading">${item.heading}</div>
            `;
            topSection.appendChild(div);
        });

        // Remaining items for pcm_m_bottom
        acfData.slice(3).forEach((item, index) => {
            const div = document.createElement('div');
            div.className = 'pcmt_item ' + item.unique_class; // Apply the unique class
            div.innerHTML = `
                <div class="pi_percentage">${item.percentage}%</div>
                <div class="pi_heading">${item.heading}</div>
            `;
            bottomSection.appendChild(div);
        });
    }

    // Chart data from ACF
    const mblData = acfData.map(item => item.percentage);
    const mblColors = acfData.map(item => item.color);

    // Existing canvas and chart logic
    const mblCanvas = document.getElementById('pieChart_mobile');
    const mblCtx = mblCanvas.getContext('2d');

    function mblAdjustCanvasSize() {
        const mblScreenWidth = window.innerWidth;
        const mblScreenHeight = window.innerWidth;

        mblCanvas.width = mblScreenWidth; // Full width of the screen
        mblCanvas.height = mblScreenHeight; // Maintain full height of the screen

        return {
            mblRadius: Math.min(mblCanvas.width, mblCanvas.height) / 2 * 0.8,
            mblScalingFactor: 1
        };
    }

    let { mblRadius } = mblAdjustCanvasSize();

    let mblProgress = 0;
    let mblExpansionFactor = 0;
    let mblExpanding = true;
    let mblAnimationStarted = false;
    let mblAnimationTimeout;

    const mblObserver = new IntersectionObserver((mblEntries) => {
        mblEntries.forEach(mblEntry => {
            if (mblEntry.isIntersecting && !mblAnimationStarted) {
                mblAnimationTimeout = setTimeout(() => {
                    mblAnimationStarted = true;
                    mblAnimateChart();
                }, 500);
            }
        });
    }, { threshold: 0.5 });

    mblObserver.observe(mblCanvas);

    function mblDrawConcentricCircles() {
        const mblBaseRadius = mblRadius + 10;
        const mblLineWidths = [4, 3, 2, 1];

        mblLineWidths.forEach((mblLineWidth, mblIndex) => {
            mblCtx.beginPath();
            mblCtx.arc(
                mblCanvas.width / 2, 
                mblCanvas.height / 2, 
                mblBaseRadius + (mblIndex * 10) + mblExpansionFactor, 
                0, 
                2 * Math.PI
            );
            mblCtx.lineWidth = mblLineWidth;
            mblCtx.strokeStyle = "#e0e0e0";
            mblCtx.stroke();
        });

        if (mblExpanding) {
            mblExpansionFactor += 0.1;
            if (mblExpansionFactor > 3) mblExpanding = false;
        } else {
            mblExpansionFactor -= 0.1;
            if (mblExpansionFactor < -1) mblExpanding = true;
        }
    }

    const mblRotateBy = -30;
    const mblStartAngleOffset = (mblRotateBy * Math.PI) / 180;

    function mblDrawPieChart() {
        let mblStartAngle = -Math.PI / 2 + mblStartAngleOffset;

        mblData.forEach((mblValue, mblIndex) => {
            const mblSliceAngle = (2 * Math.PI * mblValue) / 100;
            const mblDrawAngle = mblSliceAngle * mblProgress;

            mblCtx.beginPath();
            mblCtx.moveTo(mblCanvas.width / 2, mblCanvas.height / 2);
            mblCtx.arc(mblCanvas.width / 2, mblCanvas.height / 2, mblRadius, mblStartAngle, mblStartAngle + mblDrawAngle);
            mblCtx.closePath();
            mblCtx.fillStyle = mblColors[mblIndex];
            mblCtx.fill();

            mblStartAngle += mblSliceAngle;
        });
    }

    let mblSliceIndex = 0; // Track which slice is being animated

function mblAnimateChart() {
    mblCtx.clearRect(0, 0, mblCanvas.width, mblCanvas.height);

    // Draw all slices up to the current slice index
    let mblStartAngle = -Math.PI / 2 + mblStartAngleOffset;
    for (let i = 0; i < mblSliceIndex; i++) {
        const mblValue = mblData[i];
        const mblSliceAngle = (2 * Math.PI * mblValue) / 100;

        mblCtx.beginPath();
        mblCtx.moveTo(mblCanvas.width / 2, mblCanvas.height / 2);
        mblCtx.arc(mblCanvas.width / 2, mblCanvas.height / 2, mblRadius, mblStartAngle, mblStartAngle + mblSliceAngle);
        mblCtx.closePath();
        mblCtx.fillStyle = mblColors[i];
        mblCtx.fill();

        mblStartAngle += mblSliceAngle; // Update start angle for next slice
    }

    // Animate the current slice
    if (mblSliceIndex < mblData.length) {
        const mblValue = mblData[mblSliceIndex];
        const mblSliceAngle = (2 * Math.PI * mblValue) / 100;
        const mblDrawAngle = mblSliceAngle * mblProgress;

        mblCtx.beginPath();
        mblCtx.moveTo(mblCanvas.width / 2, mblCanvas.height / 2);
        mblCtx.arc(mblCanvas.width / 2, mblCanvas.height / 2, mblRadius, mblStartAngle, mblStartAngle + mblDrawAngle);
        mblCtx.closePath();
        mblCtx.fillStyle = mblColors[mblSliceIndex];
        mblCtx.fill();

        // Update the start angle for the next slice
        mblStartAngle += mblSliceAngle;

        if (mblProgress < 1) {
            mblProgress += 0.08;
        } else {
            mblProgress = 0;
            mblSliceIndex++; // Move to the next slice once current slice is done
        }
    }

    // Once all slices are done, draw concentric circles
    if (mblSliceIndex >= mblData.length) {
        mblDrawConcentricCircles();
    }

    requestAnimationFrame(mblAnimateChart);
}

    window.addEventListener('resize', () => {
        const mblNewSize = mblAdjustCanvasSize();
        mblRadius = mblNewSize.mblRadius;
        mblProgress = 0;
        if (mblAnimationStarted) {
            mblAnimateChart();
        }
    });
});
</script>