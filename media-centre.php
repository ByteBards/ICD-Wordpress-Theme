<?php 
  /* Template Name: Media Centre Page */ 
  get_header();
  $current_lang = pll_current_language(); 
?>

<?php get_template_part('template-parts/page-title'); ?>


<section class="icd__organisation media__intro">
  <div class="container smallContainer">
    <div class="row">
      <div class="col-md-12">
        <div class="icd__organisation__content">
          <?php if( get_field('media_intro') ): ?>
          <h1><?php echo get_field('media_intro') ?></h1>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="icd__press sectionHeight sectionSpacing">
  <div class="container smallContainer">
    <div class="row">
      <div class="col-md-12">
        <div class="icd__press__wrapper">
          <div class="icd__press__head">
            <?php if( get_field('press_release_title') ): ?>
            <div class="icd__press__title"><h2><?php echo get_field('press_release_title'); ?></h2></div>
            <?php endif; ?>
            <!-- <div class="icd__press__button"><a href="#" class="show-all-posts">Show All</a></div> -->
          </div>
          <div class="icd__press__body">
            <?php
              $args = array(
                'post_type'        => 'post',
                'posts_per_page'   => -1,
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) {
                $post_count = 0;
                while ( $query->have_posts() ) {
                  $query->the_post();
                  $date = get_the_date('j F, Y');
                  $post_count++;
                  $is_hidden = $post_count > 3 ? 'extra-posts' : '';
            ?>
            <div class="icd__press__card <?php echo $is_hidden; ?>" style="<?php echo $is_hidden ? 'display: none;' : ''; ?>">
              <div class="press__card__head">
                <h4><?php the_title(); ?></h4>
              </div>
              <div class="press__card__body">
                <?php if( get_field('media_excerpt') ): ?>
                <div class="press__content">
                  <p><?php echo get_field('media_excerpt'); ?></p>
                </div>
                <?php endif; ?>
                <div class="press__card__footer">
                  <div class="press__card__meta">
                    <p>
                      <?php
                        $date = get_the_date('j F, Y');
                        if ($current_lang == 'en') {
                            $translated_date = $date;
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
                            $translated_date = str_replace(array_keys($months), array_values($months), $date);
                        }
                        echo $translated_date;
                      ?>
                    </p>
                    <p><?php echo get_field('reading_time'); ?></p>
                  </div>
                  <div class="press__card__button">
                    <!-- Trigger Modal -->
                    <a class="media__readmore" href="#" 
                       data-bs-toggle="modal" 
                       data-bs-target="#postModal" 
                       data-title="<?php echo esc_attr(get_the_title()); ?>" 
                       data-date="<?php echo $translated_date; ?>" 
                       data-content="<?php echo the_content(); ?>"
                    >
                    <?php 
                        if ($current_lang == 'en') {
                            echo pll__('Read More'); 
                        } elseif ($current_lang == 'ar') {
                            echo pll__('اقرأ المزيد'); 
                        }
                    ?>
                  </a>
                  </div>
                </div>
              </div>
            </div>
            <?php
                }
              }
              wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="icd__video__sec sectionHeight sectionSpacing">
  <div class="container largeContainer">
    <div class="row">
      <div class="col-md-12">
        <!-- ICD Videos Section -->
        <div class="icd__video__wrapper video__wrapper">
          <div class="icd__video__title">
            <h2>
              <?php 
                  if ($current_lang == 'en') {
                      echo pll__('Corporate Videos'); 
                  } elseif ($current_lang == 'ar') {
                      echo pll__('مقاطع فيديو'); 
                  }
              ?>
            </h2>
          </div>
          <div class="icd__videos">
            <?php   
              $args = array(
                'post_type'        => 'videos', 
                'posts_per_page'   => 3,       
                'tax_query' => array(
                    array(
                        'taxonomy' => 'video_categories',
                        'field'    => 'slug',      
                        'terms'    => array('icd-videos-en', 'icd-videos-ar'),
                        'operator' => 'IN'
                    ),
                ),
              );
              $query = new WP_Query( $args ); 
              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post(); 
            ?>
            <div class="video_thumb">
              <video loop="" autoplay="" muted="" playsinline="" data-origwidth="0" data-origheight="0">
                <source class="video__link" src="<?php echo esc_url(get_field('icd_video')); ?>" type="video/mp4" style="max-width:100%;display:block;" autoplay="" muted="" loop="" preload="" playsinline="">
              </video>
              <div class="video__content">
                <h4><?php the_title(); ?></h4>
                <a class="video__btn" href="#" 
                   data-bs-toggle="modal" 
                   data-bs-target="#videoModal" 
                   data-title="<?php the_title(); ?>" 
                   data-video-url="<?php echo esc_url(get_field('icd_video')); ?>">
                  <img src="/wp-content/uploads/2024/11/play.svg" alt="Play Icon">
                  <span>
                  <?php 
                      if ($current_lang == 'en') {
                          echo pll__('Play Video'); 
                      } elseif ($current_lang == 'ar') {
                          echo pll__('تشغيل الفيديو'); 
                      }
                  ?>
                  </span>
                </a>
              </div>  
            </div>
            <?php
                } // end while 
              } else {
                echo '<p>No ICD Videos found.</p>';
              } // end if
              wp_reset_postdata(); 
            ?>
          </div>
        </div>

        <!-- Other Videos Section -->
        <div class="icd__others__wrapper video__wrapper">
          <div class="icd__video__title">
            <h2>                                
              <?php 
                  if ($current_lang == 'en') {
                      echo pll__('Others'); 
                  } elseif ($current_lang == 'ar') {
                      echo pll__('مقاطع أخرى'); 
                  }
              ?>
            </h2>
          </div>
          <div class="icd__videos">
            <?php   
              $args = array(
                'post_type'        => 'videos',  
                'posts_per_page'   => 3,  
                'tax_query' => array(
                    array(
                        'taxonomy' => 'video_categories',  
                        'field'    => 'slug',    
                        'terms'    => array('others-en', 'others-ar'),
                        'operator' => 'IN'          
                    ),
                ),
              );
              $query = new WP_Query( $args ); 
              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post(); 
            ?>
            <div class="video_thumb">
              <video loop="" autoplay="" muted="" playsinline="" data-origwidth="0" data-origheight="0">
                <source class="video__link" src="<?php echo esc_url(get_field('icd_video')); ?>" type="video/mp4">
              </video>
              <div class="video__content">
                <h4><?php the_title(); ?></h4>
                <a class="video__btn" href="#" 
                   data-bs-toggle="modal" 
                   data-bs-target="#videoModal" 
                   data-title="<?php the_title(); ?>" 
                   data-video-url="<?php echo esc_url(get_field('icd_video')); ?>">
                  <img src="/wp-content/uploads/2024/11/play.svg" alt="Play Icon">
                  <span>
                  <?php 
                      if ($current_lang == 'en') {
                          echo pll__('Play Video'); 
                      } elseif ($current_lang == 'ar') {
                          echo pll__('تشغيل الفيديو'); 
                      }
                  ?>
                  </span>
                </a>
              </div>  
            </div>
            <?php
                } // end while 
              } else {
                echo '<p>No Other Videos found.</p>';
              } // end if
              wp_reset_postdata(); 
            ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>





<?php get_footer(); ?>