<?php 
  /* Template Name: Terms & Conditions Page */ 
  get_header();
?>


<section class="terms__conditions single__pages sectionSpacing">
  <div class="container smallContainer">
    <div class="row">
      <div class="col-md-12">
        <div class="terms__conditions__wrapper single__pages__wrapper">
          <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>