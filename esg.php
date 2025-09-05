<?php 
  /* Template Name: ESG Page */ 
  get_header();
  $page_title = get_the_title();
?>


<section class="esg__framework sectionHeight sectionSpacing">
  <div class="container largeContainer">
    <div class="row">
      <div class="col-md-12">
        <?php if( get_field('esg_banner_image') || get_field('esg_banner_title') ): ?>
        <div class="esg__framework__img">
          <img src="<?php echo get_field('esg_banner_image') ?>" alt="<?php echo get_field('esg_banner_title') ?>">
          <h1 class="esg__framework__title"><?php echo get_field('esg_banner_title') ?></h1>
        </div>
        <?php endif; ?>
        <?php if( get_field('esg_banner_intro') || get_field('esg_banner_desc') ): ?>
        <div class="esg__framework__content">
          <h5><?php echo get_field('esg_banner_intro') ?></h5>
          <p><?php echo get_field('esg_banner_desc') ?></p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<section class="esg__walking sectionHeight sectionSpacing">
  <div class="container largeContainer">
    <div class="row">
      <div class="col-md-12">
        <div class="walking__talk">
          <?php if( get_field('walking_main_heading') ): ?>
          <h2><?php echo get_field('walking_main_heading') ?></h2>
          <?php endif; ?>
          <div class="walking__talk__head">
            <div class="wt__head__intro">
              <?php if( get_field('walking_head_intro') ): ?>
              <p><?php echo get_field('walking_head_intro') ?></p>
              <?php endif; ?>
            </div>
            <div class="wt__head__desc">
              <?php if( get_field('walking_head_desc') ): ?>
              <p><?php echo get_field('walking_head_desc') ?></p>
              <?php endif; ?>
            </div>
          </div>
          <div class="walking__talk__body">
            <div class="wt__body__intro">
              <?php if( get_field('walking_body_intro') ): ?>
              <h5><?php echo get_field('walking_body_intro') ?></h5>
              <?php endif; ?>
            </div>
            <div class="wt__body__desc">
              <ul>
                <?php 
                if( have_rows('walking_body') ): 
                  while( have_rows('walking_body') ): the_row();
                ?>
                <li><?php echo get_sub_field('walking_body_desc'); ?></li>
                <?php 
                    endwhile;
                  endif;
                ?> 
              </ul>
            </div>
          </div>

          <div class="walking__talk__footer first">
            <div class="wt__footer__intro">
              <?php if( get_field('walking_footer_intro_text_extra_1') ): ?>
              <p><?php echo get_field('walking_footer_intro_text_extra_1') ?></p>
              <?php endif; ?>
            </div>
            <div class="wt__footer__desc">
              <?php if( get_field('walking_footer_intro_text_extra_2') ): ?>
              <p><?php echo get_field('walking_footer_intro_text_extra_2') ?></p>
              <?php endif; ?>
            </div>
          </div>

          <div class="walking__talk__footer second">
            <div class="wt__footer__intro">
              <?php if( get_field('walking_footer_intro_title') ): ?>
              <h4><?php echo get_field('walking_footer_intro_title') ?></h4>
              <?php endif; ?>
              <?php if( get_field('walking_footer_intro_text') ): ?>
              <p><?php echo get_field('walking_footer_intro_text') ?></p>
              <?php endif; ?>
            </div>
            <div class="wt__footer__desc">
              <?php if( get_field('walking_footer_desc_title') ): ?>
              <h4><?php echo get_field('walking_footer_desc_title') ?></h4>
              <?php endif; ?>
              <?php if( get_field('walking_footer_desc_text') ): ?>
              <p><?php echo get_field('walking_footer_desc_text') ?></p>
              <?php endif; ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>



<section class="singleholder esg__groups sectionHeight sectionSpacing">
  <div class="container smallContainer">
    <div class="row holderheading">
      <div class="col-md-12">
        <?php if( get_field('group_focus_heading') || get_field('group_focus_subheading') ): ?>
        <h2><?php echo get_field('group_focus_heading') ?></h2>
        <h5><?php echo get_field('group_focus_subheading') ?></h5> 
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="esg_logo_arrow">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="swiper-container" id="esg_logo">
          <!-- If we need navigation buttons -->

          <ul class="swiper-wrapper nav nav-tabs esg__groups_list" id="myTab" role="tablist">
            <?php 
              if (have_rows('esg_groups')) :
                $tab_index = 0;
                while (have_rows('esg_groups')) : the_row();
                  $logo_url = get_sub_field('esg_group_logo');
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
                    <img src="<?php echo esc_url($logo_url); ?>" alt="ESG">
                </button>
              </li>
            <?php $tab_index++; ?>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">
          <?php 
          if (have_rows('esg_groups')) :
            $content_index = 0;
            while (have_rows('esg_groups')) : the_row();
          ?>
          <div class="tab-pane fade <?php echo $content_index === 0 ? 'show active' : ''; ?>" 
            id="content-<?php echo $content_index; ?>" 
            role="tabpanel" 
            aria-labelledby="tab-<?php echo $content_index; ?>">
            <div class="tabsinner">
              <div class="esg_focus_wrapper">
                <div class="esg_focus_logo">
                  <div class="holderimg"> <img src="<?php echo esc_url(get_sub_field('esg_group_logo')); ?>" alt="ESG"> </div>
                </div>
                <div class="esg_focus_border"><hr></div>
                <div class="esg_focus_content">
                  <div class="holdercontent">
                    <div class="hc-desc">
                      <p><?php echo get_sub_field('esg_group_description'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php 
              $content_index++;
            endwhile;
          endif; 
          ?>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="icd__corp__social sectionHeight sectionSpacing">
  <div class="container largeContainer">
    <div class="row">
      <div class="col-md-12">
        <div class="corp__social__wrapper">
          <?php if( get_field('corporate_social_intro') ): ?>
          <div class="corp__social__intro">
            <h4><?php echo get_field('corporate_social_intro') ?></h4>
          </div>
          <?php endif; ?>
          <div class="corp__social__faqs">
            <?php 
            if( have_rows('corporate_social_listings') ): 
              while( have_rows('corporate_social_listings') ): the_row();
            ?>

            <div class="corp__social__faqs__wrapper">
              <div class="social__faq__head">
                <?php if (get_sub_field('corporate_social_heading_image')) {
                 ?>
                <div class="social__faq__head__img">
                  <img src="<?php echo get_sub_field('corporate_social_heading_image'); ?>">
                </div><?php 
                }?>
                <div class="social__faq__head__content_wrapper <?php if (!get_sub_field('corporate_social_heading_image')) { echo "no-image"; }?>">
                  <h5><?php echo get_sub_field('corporate_social_body_intro'); ?></h5>
                  <div class="social__faq__head__intro">
                    <p><?php echo get_sub_field('corporate_social_body_desc'); ?></p>
                  </div>
                  <!-- <div class="social__faq__body__content">
                      <p><?php //echo get_sub_field('corporate_social_body_desc'); ?></p>
                  </div> -->
                </div>
                <!-- <div class="social__accordion__icon">
                  <div class="plusminus"></div>
                </div> -->
              </div>
<!--               <div class="social__faq__body">
                <div class="social__faq__body__img">
                  <img src="<?php //echo get_sub_field('corporate_social_heading_image'); ?>">
                  <h5><?php //echo get_sub_field('corporate_social_body_intro'); ?></h5>
                </div>
                <div class="social__faq__body__content">
                  <p><?php //echo get_sub_field('corporate_social_body_desc'); ?></p>
                </div>
              </div> -->
            </div>
            <?php 
                endwhile;
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_template_part('template-parts/lines-animation'); ?>

<?php get_footer(); ?>