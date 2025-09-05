<?php
/**
 * @package InvestmentCorporationofDubai
 */
   get_header();
   $current_lang = pll_current_language(); 

    if (strpos($current_lang, 'en-US') !== false) {
        $href = '/our-portfolio';
    } elseif (strpos($current_lang, 'ar') !== false) {
        $href = '/ar/our-portfolio';
    } else {
        $href = '/our-portfolio';
    }
?>

<section class="singlebanner">
   <div class="container toprow smallContainer">
      <div class="row">
         <div class="col-md-12">
            <div class="parentname">
               <a class="pninn" href="<?php echo $href; ?>">
                <img src="/wp-content/uploads/2024/11/arrowleft.svg" alt="">
                <span>
                    <?php 
                        if ($current_lang == 'en') {
                            echo pll__('Our Portfolio'); 
                        } elseif ($current_lang == 'ar') {
                            echo pll__('محفظتنا'); 
                        }
                    ?>
                </span>
               </a>
            </div>
         </div>
      </div>
   </div>
    <?php
        $head_background_col = get_field('top_head_background_color');
        $head_background_img = get_field('top_head_background_image');
        if($head_background_col){
            ?>
            <div class="container mainrow smallContainer" style="background-color:<?php echo esc_attr($head_background_col); ?>;<?php if ($head_background_img) { echo 'background-image: url(' . esc_url($head_background_img) . '); background-size: cover; background-position: center;'; } ?>">
            <?php
        } else {
            ?>
            <div class="container mainrow smallContainer" style="background-color: #003142;<?php if ($head_background_img) { echo 'background-image: url(' . esc_url($head_background_img) . '); background-size: cover; background-position: center;'; } ?>">
            <?php
        }
    ?>

   
      <div class="row">
         <div class="col-md-12">
            <div class="clm-inner">
               <div class="ci-heading">
                  <h1><?php the_title(); ?></h1>
               </div>
               <div class="majorholder">
                  <?php 
                    if ( get_field('select_type') == 'sin_ser' ) {
                        // Single service case
                        $holders = get_field('add_sng_holder');
                        $total_holders = is_array($holders) ? count($holders) : 0;
                        ?>
                        <h1 class="mh-nmbrs counter" data-target="<?php echo esc_html($total_holders); ?>">0</h1>
                        <?php 
                    } else {
                        // Multiple services case
                        $total_major_holders = 0;

                        if ( have_rows('multiple_services') ) {
                            while ( have_rows('multiple_services') ) : the_row();

                                if ( have_rows('add_mult_holder') ) {
                                    while ( have_rows('add_mult_holder') ) : the_row();
                                        // Each parent counts as 1 by default
                                        $total_major_holders++;

                                        // Check for children
                                        $child_rows = get_sub_field('multi_sercives_childs');
                                        $child_count = (is_array($child_rows)) ? count($child_rows) : 0;

                                        if ( $child_count > 0 ) {
                                            // Add children, subtract 1 (since parent already counted)
                                            $total_major_holders += ($child_count - 1);
                                        }

                                    endwhile;
                                }

                            endwhile;
                        }
                        ?>
                        <h1 class="mh-nmbrs counter" data-target="<?php echo esc_html($total_major_holders); ?>">0</h1>
                        <?php 
                    }
                    ?>

               
                  <span> 
                    <?php 
                        echo get_field('portfolio_banner_subtitle1');
                    ?>
                    <br>
                    <?php 
                        echo get_field('portfolio_banner_subtitle2');
                    ?>
                </span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="secondsec sectionSpacing">
   <div class="container smallContainer">
      <div class="row">
         <div class="col-md-6">
            <div class="p-descrmain">
               
                  
               
               <?php if (have_rows('multiple_services')) : ?>
                <div class="p-desctop"><p>
                <?php 
                    if ($current_lang == 'en') {
                        echo pll__('This segment includes portfolio companies that operate mainly within the:'); 
                    } elseif ($current_lang == 'ar') {
                        echo pll__('
يشمل هذا القسم الشركات التابعة للمؤسسة التي تعمل بشكل رئيسي في:'); 
                    }
                ?>
                </p></div>
                    <div class="p-descextra">
                        <ul>
                            <?php 
                            $counter = 1; // Initialize the counter
                            while (have_rows('multiple_services')) : the_row(); 
                                $service_name = get_sub_field('mult_service_name'); // Get the subfield value
                            ?>
                                <li>
                                    <a href="javascript:void(0)" class="service-link" data-target="service-<?php echo $counter; ?>">
                                        <span><?php echo $counter++; ?>.</span> <!-- Display the counter -->
                                        <?php echo esc_html($service_name); ?> <!-- Display the service name -->
                                        <img src="/wp-content/uploads/2024/11/arrowdown.svg" alt="">
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php endif; ?>

               <div class="p-descp">
                  <?php the_content(); ?>
               </div>
            </div>
         </div>
         <div class="col-md-6 ss-leftchartsec">
            <div class="p-graphmain">
               <h3>
                <?php if( get_field('single_portfolio_title') ):
                    echo get_field('single_portfolio_title');
                endif; 
                    //the_title(); 
                ?>
                <br>
                <?php 
                    if ($current_lang == 'en') {
                        echo pll__('Segment Contribution'); 
                    } elseif ($current_lang == 'ar') {
                        echo pll__('مساهمة القطاعات'); 
                    }
                ?>
                <br>
                <?php 
                    if ($current_lang == 'en') {
                        echo pll__('to the Group'); 
                    } elseif ($current_lang == 'ar') {
                        echo pll__('في المجموعة'); 
                    }
                ?>
                </h3>
               <div class="p-graphs">
                    <div id="charts-container">
                        <?php if( have_rows('pie_chart_single') ): ?>
                            <?php while( have_rows('pie_chart_single') ): the_row(); 
                                $chart_id = uniqid('chart_'); // Unique ID for each chart
                            ?>
                                <div class="paichartmain">
                                            <?php if( have_rows('pie_innerr') ): ?>
                                                <?php while( have_rows('pie_innerr') ): the_row(); 
                                                    $pie_name = get_sub_field('pie_name_child');
                                                    $pie_value = get_sub_field('pie_value_child');
                                                    $pie_img = get_sub_field('piechart_graph_image');
                                                ?>
                                                        <?php if ($pie_img): ?>
                                                            <img class="paichartimg" src="<?php echo esc_url($pie_img['url']); ?>" alt="<?php echo esc_attr($pie_name); ?>">
                                                        <?php endif; ?>

                                    <div class="piechartcontent">
                                        <div class="pcc_inner" id="content-<?php echo $chart_id; ?>">
                                                    <div class="pcc_item">
                                                        <span class="pievalue">
                                                            <span class="counter" data-target="<?php echo esc_attr($pie_value); ?>">
                                                                <?php echo esc_html($pie_value); ?>
                                                            </span>%</span>
                                                        <span class="piename"><?php echo esc_html($pie_name); ?></span>
                                                    </div>
                                        </div>
                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php 
if ( get_field('select_type') == 'sin_ser' ) {
    $single_service_name = get_field('single_service_name');
   ?>
<section class="singleholder">
       <div class="container smallContainer">
          <div class="row holderheading">
             <div class="col-md-12">
                <h1><?php echo esc_attr($single_service_name); ?></h1>
             </div>
          </div>
          <div class="row">
          <div class="col-md-12">


            <div class="swiper-container" id="esg_logo">
                <?php 
                  if (have_rows('add_sng_holder')) :
                    $tab_index = 0;
                    while (have_rows('add_sng_holder')) : the_row();
                        $logo_url = get_sub_field('sng_holder_logo');
                        $logos[] = $logo_url;
                    endwhile;
                    if (count($logos) > 1): 
                ?>
                  <ul class="swiper-wrapper nav nav-tabs esg__groups_list" id="myTab" role="tablist">
                    <?php 
                    $tab_index = 0;
                    foreach ($logos as $logo_url): 
                        $holder_name = get_sub_field('sng_holder_name');
                    ?>
                    <li class="swiper-slide nav-item" role="presentation">
                        <button class="nav-link <?php echo $tab_index === 0 ? 'active' : ''; ?>" 
                                id="tab-<?php echo $tab_index; ?>" 
                                data-bs-toggle="tab" 
                                data-bs-target="#content-<?php echo $tab_index; ?>" 
                                type="button" 
                                role="tab" 
                                aria-controls="content-<?php echo $tab_index; ?>" 
                                aria-selected="<?php echo $tab_index === 0 ? 'true' : 'false'; ?>">
                            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($holder_name); ?>">
                        </button>
                    </li>
                    <?php
                        $tab_index++; 
                        endforeach; 
                    ?>
                    </ul>
                <?php 
                    endif; 
                    endif; 
                ?>
            </div>



        <div class="tab-content" id="myTabContent">
            <?php if (have_rows('add_sng_holder')) :
                $content_index = 0; // Counter to manage content indexing
                while (have_rows('add_sng_holder')) : the_row();
                    $holder_name = get_sub_field('sng_holder_name');
                    $holder_image = get_sub_field('sng_holder_image'); // URL of the image
                    $holder_description = get_sub_field('sng_holder_description');
                    $market_share_date1 = get_sub_field('sng_market_share_date');
                    if ($market_share_date1) {
                        $market_share_date = date('d F, Y', strtotime($market_share_date1));
                    }
                    $separate_market_share_table = get_sub_field('separate_market_share_table');
                    $uae_sng_market_share = get_sub_field('uae_sng_market_share');
                    ?>
                    <div class="tab-pane fade <?php echo $content_index === 0 ? 'show active' : ''; ?>" 
                         id="content-<?php echo $content_index; ?>" 
                         role="tabpanel" 
                         aria-labelledby="tab-<?php echo $content_index; ?>">
                        <div class="tabsinner">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="holderimg">
                                        <img src="<?php echo esc_url($holder_image); ?>" alt="<?php echo esc_attr($holder_name); ?>">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="holdercontent">
                                        <div class="holdercontent__wrapper">
                                            <div class="hc-top">
                                                <div class="holderlogo">
                                                    <img src="<?php echo esc_url(get_sub_field('sng_holder_logo')); ?>" alt="<?php echo esc_attr($holder_name); ?>">
                                                </div>
                                                <div class="holderlink">
                                                    <a href="<?php echo esc_url(get_sub_field('sng_holder_url_')); ?>" target="_blank"><img src="/wp-content/uploads/2024/11/arrowrht.svg" alt="Link"></a>
                                                </div>
                                            </div>
                                            <div class="hc-desc">
                                                <?php echo wp_kses_post($holder_description); ?>
                                            </div>
                                        </div>
                                        <div class="hc-bottom">
                                            <div class="holdermarketshare mb-5">
                                                <div class="hms-head">
                                                    <?php 
                                                    if($market_share_date && !$separate_market_share_table){
                                                    ?>
                                                    <h3> 
                                                    <?php 
                                                        if ($current_lang == 'en') {
                                                            echo pll__('UAE Market Share'); 
                                                        } elseif ($current_lang == 'ar') {
                                                            echo pll__('الحصة السوقية في الإمارات العربية المتحدة'); 
                                                        }
                                                    ?>
                                                        <span class="date">( 
                                                            <?php 
                                                                if ($current_lang == 'en') {
                                                                    echo pll__('as of'); 
                                                                } elseif ($current_lang == 'ar') {
                                                                    echo pll__('كما في'); 
                                                                }
                                                            ?>
                                                            <?php
                                                                if ($current_lang == 'en') {
                                                                    $translated_date = $market_share_date;
                                                                } elseif ($current_lang == 'ar') {
                                                                    $months = array(
                                                                        'January' => 'يناير',
                                                                        'February' => 'فبراير',
                                                                        'March' => 'مارس',
                                                                        'April' => 'أبريل',
                                                                        'May' => 'مايو',
                                                                        'June' => 'يونيو',
                                                                        'July' => 'يوليو',
                                                                        'August' => 'أغسطس',
                                                                        'September' => 'سبتمبر',
                                                                        'October' => 'أكتوبر',
                                                                        'November' => 'نوفمبر',
                                                                        'December' => 'ديسمبر',
                                                                    );
                                                                    $translated_date = str_replace(array_keys($months), array_values($months), $market_share_date);
                                                                }
                                                                echo $translated_date;
                                                            ?>
                                                        )</span></h3>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="row hms-shares">
                                                    <?php if (have_rows('sng_market_share')) :
                                                        while (have_rows('sng_market_share')) : the_row();
                                                            $type_inner = get_sub_field('sng_type_inner');

                                                            $value_inner = get_sub_field('sng_value_inner');
                                                            $value_inner_unit = get_sub_field('sng_area_unit');
                                                            $value_inner_child = get_sub_field('value_child_optional');
                                                            $child_entries = get_sub_field('child_entries');
                                                            $full_width = get_sub_field('full_width');
                                                            $inline_label = get_sub_field('inline_label')
                                                            ?>
                                                            <div class="<?= $full_width ? 'col-md-12' : 'col-md-6' ?> <?= $type_inner ? '' : 'empty-entry' ?>">
                                                                <div class="hms-s-inner <?php if ($child_entries) { echo "flex-column"; } ?> <?= $full_width ? 'full-width-col' : 'half-width-col' ?>">
                                                                    <?php if ($child_entries) { ?>
                                                                        <div class="parent-entries pb-2 d-flex w-100">
                                                                            <h2 class="hmss-i-nam"><b> <?php echo $type_inner; ?></b> &nbsp;<?php if ( ! $full_width ) : ?>
                                                                                <?php echo esc_html( $value_inner_child ); ?>
                                                                            <?php endif; ?>
                                                                             </h2>
                                                                            <h2 class="hmss-i-valu"><span><b><?php echo esc_html($value_inner); ?></b></span>&nbsp;<span class="smallchild"><?php if ($full_width) {  echo esc_html($value_inner_child);  } ?></span></h2>
                                                                        </div>
                                                                        <div class="child-entries flex-column d-flex w-100">
                                                                            <?php if (have_rows('child_entries_rows')) :
                                                                            while (have_rows('child_entries_rows')) : the_row(); 
                                                                                $child_type_inner = get_sub_field('child_sng_type_inner');
                                                                                $child_value_inner = get_sub_field('child_sng_value_inner');
                                                                                $child_value_inner_unit = get_sub_field('child_sng_area_unit');
                                                                                $child_value_inner_child = get_sub_field('child_value_child_optional');
                                                                                ?>
                                                                              <div class="child-entry-item pb-2 d-flex w-100">
                                                                                  <h2 class="hmss-i-nam">- <?php echo esc_html($child_type_inner); ?></h2>
                                                                                   <h2 class="hmss-i-valu"><span><b><?php echo esc_html($child_value_inner); ?></b> <?php echo esc_html($child_value_inner_unit); ?></span>&nbsp;<span class="smallchild"><?php echo esc_html($child_value_inner_child); ?></span></h2>
                                                                              </div>
                                                                            <?php endwhile;
                                                                            endif; ?>
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <h2 class="hmss-i-nam"><b><?php echo $type_inner; ?></b> &nbsp;<?php if (!$full_width && ($value_inner_child == "(AED)")) {  echo esc_html($value_inner_child);  } ?></h2>
                                                                        <h2 class="hmss-i-valu"><span><b><?php echo esc_html($value_inner); ?></b> <?php echo esc_html($value_inner_unit); ?></span>&nbsp;<span class="<?php if ($inline_label) { echo "Inline-label"; }?>" ><?php if ($full_width || ($value_inner_child != "(AED)")) {  echo esc_html($value_inner_child);  } ?></span></h2>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        <?php endwhile;
                                                    endif; ?>
                                                </div>
                                            </div>

                                            <!-- extra new table -->
                                            <?php 
                                                    if($separate_market_share_table && $uae_sng_market_share){
                                                    ?>
                                            <div class="holdermarketshare uae-share-table">
                                                <div class="hms-head">
                                                    <?php 
                                                    if($separate_market_share_table){
                                                    ?>
                                                    <h3> 
                                                    <?php 
                                                        if ($current_lang == 'en') {
                                                            echo pll__('UAE Market Share'); 
                                                        } elseif ($current_lang == 'ar') {
                                                            echo pll__('الحصة السوقية في الإمارات العربية المتحدة'); 
                                                        }
                                                    ?>
                                                        <span class="date">( 
                                                            <?php 
                                                                if ($current_lang == 'en') {
                                                                    echo pll__('as of'); 
                                                                } elseif ($current_lang == 'ar') {
                                                                    echo pll__('كما في'); 
                                                                }
                                                            ?>
                                                            <?php
                                                                if ($current_lang == 'en') {
                                                                    $translated_date = $market_share_date;
                                                                } elseif ($current_lang == 'ar') {
                                                                    $months = array(
                                                                        'January' => 'يناير',
                                                                        'February' => 'فبراير',
                                                                        'March' => 'مارس',
                                                                        'April' => 'أبريل',
                                                                        'May' => 'مايو',
                                                                        'June' => 'يونيو',
                                                                        'July' => 'يوليو',
                                                                        'August' => 'أغسطس',
                                                                        'September' => 'سبتمبر',
                                                                        'October' => 'أكتوبر',
                                                                        'November' => 'نوفمبر',
                                                                        'December' => 'ديسمبر',
                                                                    );
                                                                    $translated_date = str_replace(array_keys($months), array_values($months), $market_share_date);
                                                                }
                                                                echo $translated_date;
                                                            ?>
                                                        )</span></h3>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="row hms-shares">
                                                    <?php if (have_rows('uae_sng_market_share')) :
                                                        while (have_rows('uae_sng_market_share')) : the_row();
                                                            $type_inner = get_sub_field('uae_sng_type_inner');
                                                            $value_inner = get_sub_field('uae_sng_value_inner');
                                                            $value_inner_unit = get_sub_field('uae_sng_area_unit');
                                                            $value_inner_child = get_sub_field('uae_value_child_optional');
                                                            ?>
                                                            <div class="col-md-4">
                                                                <div class="hms-s-inner">
                                                                    <h2 class="hmss-i-nam"><b><?php echo esc_html($type_inner); ?></b></h2>
                                                                    <h2 class="hmss-i-valu"><span><b><?php echo esc_html($value_inner); ?></b> <?php echo esc_html($value_inner_unit); ?></span><span class="smallchild"></span></h2>
                                                                </div>
                                                            </div>
                                                        <?php endwhile;
                                                    endif; ?>
                                                </div>
                                            </div>
                                            <?php
                                                    }
                                                    ?>
                                            <!-- end new change -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $content_index++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


          </div>
   </div>
</section>


<section class="portfoliocards">
    <div class="container smallContainer">
        <div class="row portfoliocards__row">
            <?php
            $current_post_id = get_the_ID();
            $args = array(
                'post_type' => 'portfolios',
                'posts_per_page' => 3,
                'order' => 'ASC',
                'orderby' => 'date',
                'post__not_in' => array($current_post_id) 
            );
            $portfolio_query = new WP_Query($args);
            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
                    <div class="col-md-4">
                        <div class="port-card">
                            <a href="<?php the_permalink(); ?>" class="portmainancho"></a>
                            <div class="port-feature">
                                <img src="<?php echo esc_url($featured_image); ?>" alt="">
                            </div>
                            <div class="pc_inner">
                                <div class="pci-heading">
                                    <h3><?php the_title(); ?></h3>
                                </div>
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
                wp_reset_postdata();
            else :
                echo '<p>No portfolios found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php 
} else {
   ?>




<section class="sp-accor">
    <div class="container smallContainer">
        <div class="row">
            <div class="col-md-12">
                <div class="sp-accor-topline tpbtm-line one"></div>
                <div class="sp-accor-topline tpbtm-line two"></div>
                <div class="sp-accor-topline tpbtm-line three"></div>
                <div class="sp-accor-topline tpbtm-line four"></div>
                <div class="sp-accor-topline tpbtm-line five"></div>
                <?php if (have_rows('multiple_services')) : ?>
                    <div class="icd__org__faq__wrapper">
                        <?php 
                        $counter = 1; // To count service numbers dynamically
                        while (have_rows('multiple_services')) : the_row(); 
                            $service_name = get_sub_field('mult_service_name');
                            $service_desc = get_sub_field('mult_service_desc');
                        ?>
                            <div class="icd__org__faqs__block" id="service-<?php echo $counter; ?>">
                                <div class="icd__org__faq__parent">
                                    <div class="icd__org__faq__block__title">
                                        <div class="icd-cell-no"><?php echo $counter; ?></div>
                                        <h4><?php echo esc_html($service_name); ?></h4>
                                    </div>
                                    <div class="accordion__icon">
                                        <div class="plusminus"></div>
                                    </div>
                                </div>
                                <div class="icd__org__faq__child" style="display: none;">
                                    <div class="faq__inner__child style__one">
                                        <div class="inner__childinner">
                                            <div class="inner__child__top">
                                                <div class="ict_inner" style="display:none;">
                                                    <div class="icd-cell-no"><?php echo $counter; ?></div>
                                                    <h4><?php echo esc_html($service_name); ?></h4>
                                                </div>
                                                <div class="inner__child-content">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="holderno">                                          
                                                            <?php 
                                                                $total_count = 0;

                                                                if ( have_rows('add_mult_holder') ): 
                                                                    $parent_count = 0;

                                                                    while ( have_rows('add_mult_holder') ): the_row();
                                                                        $parent_count++; // count each parent

                                                                        // get child rows safely
                                                                        $child_rows = get_sub_field('multi_sercives_childs');
                                                                        $child_count = (is_array($child_rows)) ? count($child_rows) : 0;

                                                                        if ( $child_count > 0 ) {
                                                                            // add children, subtract 1 because parent is already counted
                                                                            $total_count += ($child_count - 1);
                                                                        }

                                                                       
                                                                    endwhile;

                                                                    // start with parent count
                                                                    $total_count += $parent_count;
                                                                endif;

                                                                
                                                                ?>

                                                                <h3><span class="hn_number"><?php echo $total_count; ?></span> 
                                                                <?php 
                                                                    if ($current_lang == 'en') {
                                                                        echo pll__('Major'); 
                                                                    } elseif ($current_lang == 'ar') {
                                                                        echo pll__('حيازات');
                                                                    }
                                                                ?>
                                                                <br>
                                                                <?php 
                                                                    if ($current_lang == 'en') {
                                                                        echo pll__('Holdings'); 
                                                                    } elseif ($current_lang == 'ar') {
                                                                        echo pll__('أساسية');  
                                                                    }
                                                                ?>
                                                            </h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="holderdescr">
                                                                <p><?php echo wp_kses_post($service_desc); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                            <section class="singleholder">
                                <div class="container">
                                    <div class="row holderheading">
                                        <div class="col-md-12">
                                            <h1><?php echo esc_html($service_name); ?></h1>
                                        </div>
                                    </div>
                                    <?php if( have_rows('add_mult_holder') ): ?>
                                        <div class="row">
                                            <div class="col-md-12">



                                                    <div class="swiper-container" id="esg_logo">
                                                        <ul class="swiper-wrapper nav nav-tabs esg__groups_list" id="myTab-service-<?php echo $counter; ?>" role="tablist">
                                                            <?php 
                                                                $tab_counter = 1;
                                                                while( have_rows('add_mult_holder') ): the_row(); 
                                                            ?>
                                                            <li class="swiper-slide nav-item" role="presentation">
                                                                <button class="nav-link <?php echo $tab_counter == 1 ? 'active' : ''; ?>" id="tab-<?php echo $tab_counter; ?>-<?php echo $counter; ?>" data-bs-toggle="tab" data-bs-target="#content-<?php echo $tab_counter; ?>-<?php echo $counter; ?>" type="button" role="tab">
                                                                    <img src="<?php echo esc_url(get_sub_field('mult_holder_logo')); ?>" alt="">
                                                                </button>
                                                            </li>
                                                            <?php 
                                                                $tab_counter++; 
                                                                endwhile; 
                                                            ?>
                                                        </ul>
                                                    </div>


                                                <div class="tab-content" id="myTabContent-service-<?php echo $counter; ?>">
                                                    <?php 
                                                    $content_counter = 1;
                                                    while( have_rows('add_mult_holder') ): the_row(); 
                                                        $holder_name = get_sub_field('mult_holder_name');
                                                        $holder_desc = get_sub_field('mult_holder_description');
                                                        $holder_image = get_sub_field('mult_holder_image');
                                                        $market_share_date = get_sub_field('mult_market_share_date');
                                                    ?>
                                                        <div class="tab-pane fade <?php echo $content_counter == 1 ? 'show active' : ''; ?>" id="content-<?php echo $content_counter; ?>-<?php echo $counter; ?>" role="tabpanel">
                                                        <?php
                                                        if( get_sub_field('multi_child_services') == 'no' ) {
                                                            // Do something.
                                                        ?>    
                                                        <div class="tabsinner">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="holderimg">
                                                                            <img src="<?php echo esc_url($holder_image); ?>" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="holdercontent">
                                                                            <div class="holdercontent__wrapper">
                                                                                <div class="hc-top">
                                                                                    <div class="holderlogo">
                                                                                        <img src="<?php echo esc_url(get_sub_field('mult_holder_logo')); ?>" alt="">
                                                                                    </div>
                                                                                    
                                                                                    <div class="holderlink">
                                                                                        <a href="<?php echo esc_url(get_sub_field('mult_holder_url_')); ?>" target="_blank"><img src="/wp-content/uploads/2024/11/arrowrht.svg" alt="Link"></a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="hc-desc">
                                                                                    <p><?php echo wp_kses_post($holder_desc); ?></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="hc-bottom">
                                                                            <?php if( have_rows('mult_market_share') ): ?>
                                                                                <div class="holdermarketshare">
                                                                                    <div class="hms-head">
                                                                                    <?php 
                                                                                        if($market_share_date){
                                                                                        ?>
                                                                                       <h3>
                                                                                        <?php 
                                                                                            if ($current_lang == 'en') {
                                                                                                echo pll__('UAE Market Share'); 
                                                                                            } elseif ($current_lang == 'ar') {
                                                                                                echo pll__('الحصة السوقية في الإمارات العربية المتحدة'); 
                                                                                            }
                                                                                        ?> 
                                                                                        <span class="date">(
                                                                                        <?php 
                                                                                            if ($current_lang == 'en') {
                                                                                                echo pll__('as of'); 
                                                                                            } elseif ($current_lang == 'ar') {
                                                                                                echo pll__('كما في'); 
                                                                                            }
                                                                                        ?>
                                                                                        <?php
                                                                                            if ($current_lang == 'en') {
                                                                                                $translated_date = $market_share_date;
                                                                                            } elseif ($current_lang == 'ar') {
                                                                                                $months = array(
                                                                                                    'January' => 'يناير',
                                                                                                    'February' => 'فبراير',
                                                                                                    'March' => 'مارس',
                                                                                                    'April' => 'أبريل',
                                                                                                    'May' => 'مايو',
                                                                                                    'June' => 'يونيو',
                                                                                                    'July' => 'يوليو',
                                                                                                    'August' => 'أغسطس',
                                                                                                    'September' => 'سبتمبر',
                                                                                                    'October' => 'أكتوبر',
                                                                                                    'November' => 'نوفمبر',
                                                                                                    'December' => 'ديسمبر',
                                                                                                );
                                                                                                $translated_date = str_replace(array_keys($months), array_values($months), $market_share_date);
                                                                                            }
                                                                                            echo $translated_date;
                                                                                        ?>
                                                                                        )</span></h3>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                    <div class="row hms-shares <?= $holder_name == "Emaar Properties" ? "emaar" : "" ?>">
                                                                                        <?php while( have_rows('mult_market_share') ): the_row(); 
                                                                                            $type = get_sub_field('mult_type_inner');
                                                                                            $value = get_sub_field('mult_value_inner');
                                                                                            $value_unit = get_sub_field('mult_value_unit');
                                                                                            $value_child = get_sub_field('mult_value_child_optional');
                                                                                            $full_width = get_sub_field('full_width');
                                                                                        ?>
                                                                                            <div class="<?= $full_width ? 'col-md-12' : 'col-md-6' ?>">
                                                                                                <div class="hms-s-inner <?php if ($child_entries) { echo "flex-column"; } ?> <?= $full_width ? 'full-width-col' : 'half-width-col' ?>">
                                                                                                    <h2 class="hmss-i-nam"><b><?php echo $type; ?></b> </h2>
                                                                                                    <h2 class="hmss-i-valu"><span><b><?php echo esc_html($value); ?></b> <?php echo esc_html($value_unit); ?></span>&nbsp;<span><?php if ($value_child) {?>
                                                                                                    <?php echo esc_html($value_child); ?> <?php } ?></span></h2>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?php endwhile; ?>
                                                                                    </div>
                                                                                </div>
                                                                            <?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        } else {
                                                        ?> 
                                                        <div class="tabsinner child-services-tbinner">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        
                                                                        <div class="holderimg">
                                                                            <img src="<?php echo esc_url($holder_image); ?>" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="holdercontent holdercontent-right">
                                                                            <div class="hc-top">
                                                                                <div class="holderlogo">
                                                                                    <img src="<?php echo esc_url(get_sub_field('mult_holder_logo')); ?>" alt="">
                                                                                </div>
                                                                                
                                                                                <div class="holderlink">
                                                                                    <a href="<?php echo esc_url(get_sub_field('mult_holder_url_')); ?>" target="_blank"><img src="/wp-content/uploads/2024/11/arrowrht.svg" alt="Link"></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="hc-desc">
                                                                                <p><?php echo wp_kses_post($holder_desc); ?></p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="accordion" id="holderchildrens">
                                                                        <?php if( have_rows('multi_sercives_childs') ): 
                                                                            $c = 1;
                                                                            ?>
                                                                            <?php while( have_rows('multi_sercives_childs') ): the_row(); 
                                                                                $sc_logo = get_sub_field('msc_logo');
                                                                                $sc_heading = get_sub_field('msc_heading');
                                                                                $sc_description = get_sub_field('msc_description');
                                                                            ?>

                                                                                <div class="holdercontent holdercontent-right">
                                                                                    <div class="holdercontent__wrapper">
                                                                                        <div class="hc-top collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $c; ?>" aria-expanded="true" aria-controls="collapse<?php echo $c; ?>">
                                                                                            <div class="holderlogo">
                                                                                                <img src="<?php echo esc_url(get_sub_field('msc_logo')); ?>" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="collapse<?php echo $c; ?>" class="hc-bottom accordion-collapse collapse" aria-labelledby="heading<?php echo $c; ?>" data-bs-parent="#holderchildrens">
                                                                                        <div class="hc-desc">
                                                                                            <p><?php echo wp_kses_post($sc_description); ?></p>
                                                                                        </div>
                                                                                    <?php if( have_rows('mult_market_share_child') ): ?>
                                                                                        <div class="holdermarketshare">
                                                                                            <div class="row hms-shares">
                                                                                                <?php while( have_rows('mult_market_share_child') ): the_row(); 
                                                                                                    $type_sc = get_sub_field('mult_type_inner_sc');
                                                                                                    $value_sc = get_sub_field('mult_value_inner_sc');
                                                                                                    $value_unit_sc = get_sub_field('mult_value_unit_sc');
                                                                                                    $value_child_sc = get_sub_field('mult_value_child_optional_sc');
                                                                                                ?>
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="hms-s-inner">
                                                                                                            <h2 class="hmss-i-nam"><b><?php echo $type_sc; ?></b>  <?php if ($value_child_sc == "(AED)") {?>
                                                                                                            <?php echo esc_html($value_child_sc); ?><?php } ?></h2>
                                                                                                            <h2 class="hmss-i-valu"><span><b><?php echo esc_html($value_sc); ?></b> <?php echo esc_html($value_unit_sc); ?></span>&nbsp;<span><?php if ($value_child_sc != "(AED)") {?>
                                                                                                            <?php echo esc_html($value_child_sc); ?><?php } ?></span></h2>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                <?php endwhile; ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            
                                                                            
                                                                        
                                                                        
                                                                        <?php $c++; endwhile; ?>
                                                                        <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    <?php 
                                                        $content_counter++; 
                                                    endwhile; 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php 
                            $counter++; 
                        endwhile; 
                        ?>
                    </div>
                <?php endif; ?>
                <div class="sp-accor-btmline tpbtm-line five"></div>
                <div class="sp-accor-btmline tpbtm-line four"></div>
                <div class="sp-accor-btmline tpbtm-line three"></div>
                <div class="sp-accor-btmline tpbtm-line two"></div>
                <div class="sp-accor-btmline tpbtm-line one"></div>
            </div>
        </div>
    </div>
</section>


<section class="portfoliocards">
    <div class="container smallContainer">
        <div class="row portfoliocards__row">
            <?php
            $current_post_id = get_the_ID();
            $args = array(
                'post_type' => 'portfolios',
                'posts_per_page' => 3,
                'order' => 'ASC',
                'orderby' => 'date',
                'post__not_in' => array($current_post_id) 
            );
            $portfolio_query = new WP_Query($args);
            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
                    <div class="col-md-4">
                        <div class="port-card">
                            <a href="<?php the_permalink(); ?>" class="portmainancho"></a>
                            <div class="port-feature">
                                <img src="<?php echo esc_url($featured_image); ?>" alt="">
                            </div>
                            <div class="pc_inner">
                                <div class="pci-heading">
                                    <h3><?php the_title(); ?></h3>
                                </div>
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
                wp_reset_postdata();
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
<?php 
   get_footer();?>

<script>
    $(document).ready(function () {
        // Scroll and open the accordion when a service name is clicked
        $('.service-link').click(function () {
            var target = $(this).data('target'); // Get the target ID
            var targetElement = $('#' + target);

            if (targetElement.length) {
                // Smooth scroll to the target element
                $('html, body').animate({
                    scrollTop: targetElement.offset().top - 50 // Adjust offset for header height
                }, 800, function () {
                    // Open the accordion
                    var plusButton = targetElement.find('.plus');
                    if (plusButton.is(':visible')) {
                        plusButton.click();
                    }
                });
            }
        });

        // Accordion toggle functionality
        $('.minus').hide();
        $('.icd__org__faq__child').hide();

        $('.plus').click(function () {
            var block = $(this).closest('.icd__org__faqs__block');
            block.find('.icd__org__faq__child').slideDown();
            $(this).hide();
            block.find('.minus').show();
        });

        $('.minus').click(function () {
            var block = $(this).closest('.icd__org__faqs__block');
            block.find('.icd__org__faq__child').slideUp();
            $(this).hide();
            block.find('.plus').show();
        });
    });
</script>





