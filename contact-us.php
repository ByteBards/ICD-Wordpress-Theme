<?php 
  /* Template Name: Contact Page */ 
  get_header();
?>


<section class="icd__contact sectionHeight sectionSpacing">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <div class="icd__contact__title">
          <?php if( get_field('contact_main_title') ): ?>
          <h1 class="contact__heading"><?php echo get_field('contact_main_title') ?></h1>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-7">
        <div class="icd__contact__wrapper">
          <div class="icd__contact__warning">
            <div class="contact__warning__block">
              <div class="contact__warning__head">
                <div class="warning__block__title">
                  <?php if( get_field('fraud_warning_title') ): ?>
                  <h3><?php echo get_field('fraud_warning_title') ?></h3>
                  <?php endif; ?>
                </div>
                <div class="warning__block__icon">
                  <button class="wraning_plus">+</button>
                  <button class="wraning_minus">-</button>
                </div>                
              </div>
              <div class="warning__block__body">
                <?php if( get_field('fraud_warning_content') ): ?>
                <p><?php echo get_field('fraud_warning_content') ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="icd__contact__form__wrapper">
            <?php if( get_field('contact_form_heading') ): ?>
            <div class="contact__form__heading">
              <h4><?php echo get_field('contact_form_heading') ?></h4>
            </div>
            <?php endif; ?>
            <div class="contact__form">
              <?php echo do_shortcode( '[contact-form-7 id="46e7118" title="Contact Form"]' );  ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>