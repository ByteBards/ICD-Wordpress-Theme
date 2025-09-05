<?php 
  /* Template Name: Organisation Page */ 
  get_header();
?>

<?php get_template_part('template-parts/page-title'); ?>


<section class="icd__organisation sectionHeight sectionSpacing">
  <div class="container smallContainer">
    <div class="row">
      <div class="col-md-12">
        <div class="icd__organisation__content">
          <?php if( get_field('organisation_content') ): ?>
          <h1><?php echo get_field('organisation_content') ?></h1>
          <?php endif; ?>
          <img class="icd__org__shape" src="/wp-content/uploads/2024/11/org-shape.png">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="icd__ceo director__message sectionHeight sectionSpacing">
  <div class="container smallContainer">
    <div class="row">
      <div class="icd__ceo__wrapper">
        <div class="icd__ceo__img">
          <?php if( get_field('organisation_director_image') ): ?>
          <img src="<?php echo get_field('organisation_director_image') ?>" alt="CEO">
          <?php endif; ?>
          <?php if( get_field('organisation_director_title') ): ?>
          <span class="icd__ceo__title"><?php echo get_field('organisation_director_title') ?></span>
          <?php endif; ?>
        </div>
        <div class="icd__ceo__msg">
          <?php if( get_field('organisation_director_message') ): ?>
          <p><?php echo get_field('organisation_director_message') ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="icd__orgfaqs sectionHeight sectionSpacing" id="icdGovernance">
  <div class="container largeContainer">
    <div class="row">
      <div class="col-md-12">
        <div class="icd__org__faq__wrapper orgfaqs___wrapper">

          <?php 
          if( have_rows('organisation_faq_lising') ):
          $counter = 1; 
            while( have_rows('organisation_faq_lising') ): the_row();
          ?>
          <div class="icd__org__faqs__block <?php echo 'faqBlock-' . $counter; ?>">
            <div class="icd__org__faq__parent">
              <div class="icd__org__faq__block__title">
                <h4><?php echo get_sub_field('organisation_faq_main_title'); ?></h4>
              </div>
              <div class="icd__org__faq__block__desc">
                <p><?php echo get_sub_field('organisation_faq_main_desc'); ?></p>
              </div>
              <div class="accordion__icon">
<!--                 <button class="plus">+</button>
                <button class="minus">-</button> -->
                <div class="plusminus"></div>
              </div>
            </div>


            <?php 
              if ( have_rows('org_faq_inner_styles_list') ):
                while ( have_rows('org_faq_inner_styles_list') ): the_row(); // Repeater
                  if( have_rows('org_faq_layout_syles') ):
                    while ( have_rows('org_faq_layout_syles') ) : the_row(); // Flexible Layout Styles
            ?>
            <div class="icd__org__faq__child">


              <!--------------------------------------- LAYOUT STYLE 01 --------------------------------------->
              <?php 
                $layout = get_row_layout();
                if ( $layout == 'intro_style' ):
              ?>
              <div class="faq__inner__child style__one">
                <div class="inner__child__title">
                  <h5><?php echo get_sub_field('intro_style_title'); ?></h5>
                </div>
                <div class="inner__child__desc">
                  <p><?php echo get_sub_field('intro_style_desc'); ?></p>
                </div>
              </div>
              <?php endif; ?>

              <!--------------------------------------- LAYOUT STYLE 02 --------------------------------------->
              <?php 
                $layout = get_row_layout();
                if ( $layout == 'accordion_style' ):
              ?>
              <div class="inner__child__accordions inner__sec__border style__two">
                <div class="inner__child__accordions__title">
                  <h5><?php echo get_sub_field('accordion_style_main_title'); ?></h5>
                  <p><?php echo get_sub_field('accordion_style_main_desc'); ?></p>
                </div>

                <div class="inner__child__faqs">
                  
                  <div class="accordion" id="Committees_accordion">
                    <?php 
                    $counter = 1;
                    if ( have_rows('accordion_style_inner_faqs') ):
                      while ( have_rows('accordion_style_inner_faqs') ): the_row();
                        
                  ?>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading<?php echo $counter; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapse<?php echo $counter; ?>">
                          <?php echo get_sub_field('accordion_style_inner_faqs_main_title'); ?>
                        </button>
                      </h2>
                      <div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $counter; ?>" data-bs-parent="#Committees_accordion">
                        <div class="accordion-body">
                          <?php 
                            if ( have_rows('accordion_style_inner_new_faqs') ):
                              while ( have_rows('accordion_style_inner_new_faqs') ): the_row();    
                          ?>
                            <div class="inner__child__faqs__block">
                              <div class="inner__child__faqs__title">
                                <h6><?php echo get_sub_field('accordion_style_inner_faqs_main_title'); ?></h6>
                              </div>
                              <div class="inner__child__faqs__desc">
                                <p><?php echo get_sub_field('accordion_style_inner_faqs_desc'); ?></p>
                              </div>
                              <div class="inner__accordion__icon">
                                <button class="open">
                                  <img src="/wp-content/uploads/2025/03/static-arrow.svg">
                                </button>
          <!--                       <button class="close">
                                  <img src="/wp-content/uploads/2024/11/up-arrow.svg">
                                </button> -->
                              </div>                    
                            </div>
                          <?php 
                              endwhile;
                            endif;
                          ?> 
                        </div>
                      </div>
                    </div>
                    <?php 
                    $counter++;
                      endwhile;
                    endif;
                  ?> 
                  </div>
                  
                  
                </div>                
              </div>
              <?php endif; ?>

              <!--------------------------------------- LAYOUT STYLE 03 --------------------------------------->
              <?php 
                $layout = get_row_layout();
                if ( $layout == 'content_style' ):
                  if ( have_rows('content_style_list') ):
                    while ( have_rows('content_style_list') ): the_row();
              ?>
              <div class="faq__inner__child inner__sec__border style__three">
                <div class="inner__child__title">
                  <h5><?php echo get_sub_field('content_style_title'); ?></h5>
                </div>
                <div class="inner__child__desc">
                  <p><?php echo get_sub_field('content_style_desc'); ?></p>
                </div>
              </div>
              <?php 
                    endwhile;
                  endif;
                endif; 
              ?>

              <!--------------------------------------- LAYOUT STYLE 04 --------------------------------------->

              <?php 
                $layout = get_row_layout();
                if ( $layout == 'content_border_style' ):
                 $border_style_title = get_sub_field('content_border_style_list_title');
                  if ( have_rows('content_border_style_list') ):
                    $c = 1;
                    while ( have_rows('content_border_style_list') ): the_row();
              ?>
              <?php if ($c == 1) { ?>
                <div class="faq__inner__child__border__layout style__four">
                  <div class="style__four__row">
                    <div class="style__four__title">
                      <h4><?php echo $border_style_title; ?></h4>
                    </div>
                    <div class="style__four__content">
                      <div class="inner__child__title">
                        <div class="style__four__line"></div>
                      <h5><?php echo get_sub_field('content_style_title'); ?></h5>
                    </div>
                    <div class="inner__child__desc">
                      <p><?php echo get_sub_field('content_style_desc'); ?></p>
                    </div>
                    </div>
                  </div>
                </div>
              <?php } else { ?>
                  <div class="faq__inner__child__border__layout style__four">
                    <div class="inner__child__title">
                      <div class="style__four__line"></div>
                      <h5><?php echo get_sub_field('content_style_title'); ?></h5>
                    </div>
                    <div class="style__four__wrapper">
                      <div class="inner__child__empty">
                      </div>
                      <div class="inner__child__desc">
                        <p><?php echo get_sub_field('content_style_desc'); ?></p>
                      </div>                      
                    </div>
                  </div>
              <?php } ?>
              <?php 
                    $c++;
                    endwhile;
                  endif;
                endif; 
              ?>

              <!--------------------------------------- LAYOUT STYLE 05 --------------------------------------->
              <?php 
                $layout = get_row_layout();
                if ( $layout == 'new_content_style' ):
                  if ( have_rows('content_style_list') ):
                    while ( have_rows('content_style_list') ): the_row();
              ?>
              <div class="faq__inner__child inner__sec__border style__five">
                <div class="inner__child__title">
                  <h5><?php echo get_sub_field('content_style_title'); ?></h5>
                </div>
                <div class="inner__child__desc">
                  <p><?php echo get_sub_field('content_style_desc'); ?></p>
                </div>
              </div>
              <?php 
                    endwhile;
                  endif;
                endif; 
              ?>


            </div>
            <?php 
                  endwhile; // Flexible Layout Styles Endwhile
                endif; // Flexible Layout Styles Endif
              endwhile; // Repeater While End
              else: // Repeater Else End
          ?>
          <p>No FAQ styles found.</p>
          <?php 
            endif; // Repeater If End
          ?>


          </div>
          <?php 
          $counter++;
            endwhile;
          endif; 
          ?>

        </div>
      </div>
    </div>
  </div>
</section>



<?php get_template_part('template-parts/lines-animation'); ?>

<?php get_footer(); ?>