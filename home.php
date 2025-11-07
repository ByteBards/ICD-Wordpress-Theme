<?php 
  /* Template Name: Home Page */ 
  get_header();
  $current_lang = pll_current_language();
?>
<style type="text/css">
    #hero__video {
      position: absolute;
    }
    #icdBanner {
      padding: 235px 0 !important;
      height: 100vh;
    }
    @media (min-width: 1200px){
      section.icd__about {
        padding-top: 1300px !important;
      }
    }
    @media (min-width: 767px) and (max-width: 1199px) {
      section.icd__about {
        padding-top: 650px !important;
      }
    }
    @media (min-width: 800px) and (max-width: 830px) and (orientation: landscape) {
        body #icdBanner {
            padding: 50px 0 !important;
        }
        body section.icd__about {
            padding-top: 130vh !important;
        }
    }
    @media (min-width: 1000px) and (max-width: 1024px) and (orientation: landscape) {
        body section.icd__about {
            padding-top: 900px !important;
        }
    }
    @media (max-width: 767px) {
      section.icd__about {
        padding-top: 25vh !important;
      }
      body #icdBanner {
        height: 100%;
        padding: 250px 0 !important;
      }
      body section.icd__about {
          padding-top: 150px !important;
      }   
    }
    <?php if( get_field('select_hero_section') == 'fullwidth' ) { ?>
      @media (min-width: 700px){
.icd__header {
    background: #ededed00;
}
.icd__header__wrapper {
    background: #ededed00;
}
.icd_desktop_l_nav li a {
    color: #D0C89D !important;
}
.icd_desktop_l_nav .popup_trigger_main a:after {
    background-image: url(/wp-content/uploads/2025/10/searchy.svg);
}
#icd__primary__list li a, #icd__primary__list li .sub-menu a {
    color: #ffffff;
}
a:hover {
    color: #D0C89D !important;
}
img.custom-logo {
    filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(313deg) brightness(107%) contrast(105%);
}

.icd__header.sticky .icd_desktop_l_nav .popup_trigger_main a:after {
    background-image: url(/wp-content/uploads/2025/10/search.svg);
}
.icd__header.sticky {
    background: #ededed;
}
.icd__header.sticky .icd__header__wrapper {
    background: #ededed;
}
.icd__header.sticky .icd_desktop_l_nav li a {
    color: var(--greenCyan)!important;
}
.icd__header.sticky #icd__primary__list li a {
    color: var(--blueCyan);
}
.icd__header.sticky a:hover, .icd__header.sticky #icd__primary__list li .sub-menu a {
    color: var(--greenCyan) !important;
}
.icd__header.sticky img.custom-logo {
    filter: unset;
}
      }
     .home__nero_new a#muteToggleBtn {
    width: 50px;
    height: 50px;
}
.home__nero_new a#muteToggleBtn svg {
    width: 30px;
    height: 30px;
} 

@media screen and (max-width: 400px){
        html[lang="ar"] .home .icd__map__col.map svg {
        transform: scale(1.2) translate(-4%, -5%) !important;
    }
    .home .icd__map__col.map svg {
        transform: scale(1.2) translate(-15%, -6%) !important;
    }
}
@media (max-width: 767px) {
    body section.icd__about {
        padding-top: 80px !important;
        min-height: auto!important;
    }
    a#muteToggleBtn {
    width: 45px;
    height: 45px;
    }
}
      @media (max-width: 700px){
        section.home__nero_new {
    padding-top: 90px;
}
.home__hero__videoa {
    height: 236px;
}
    .home__hero__videoa wistia-player#hero__video {
             width: 104%;
        height: 103%;
    }
        .videomutbtn-main {
        height: 326px !important;
    }
    .hhn_text {
            height: unset;
        padding-bottom: 0;
        position: unset;
        padding: 80px 0;
}
.hhn_text * {
    color: #003241;
}
.hhn_text h1 {
    font-size: 34px;
    letter-spacing: 0px;
}
      }
@media (min-width: 1200px) {
    section.icd__about {
        padding-top: 200px !important;
    }
}
@media (min-width: 1801px) {
    section.icd__about {
        padding-top: 295px !important;
    }
}
@media (max-width: 380px){
  .home__hero__videoa {
    height: 222px!important;
}
    .videomutbtn-main {
        height: 312px !important;
    }
}
@media (max-width: 365px){
  .home__hero__videoa {
    height: 214px !important;
}
    .videomutbtn-main {
        height: 302px !important;
    }
}
@media (max-width: 345px) {
    .home__hero__videoa {
        height: 200px !important;
    }
        .videomutbtn-main {
        height: 290px !important;
    }
}
@media (min-width: 767px) and (max-width: 1199px) {
    section.icd__about {
        padding-top: 100px !important;
    }
    .popup_trigger svg {
    fill: #D0C89D !important;
}
    .icd__nav_wrapper .icd__nav {
        color: #D0C89D!important;
    }
}
@media (min-width: 767px) and (max-width: 830px){
  .hhn_text h1 {
    font-size: 44px !important;
    letter-spacing: 0px !important;
}
}
.videomutbtn-main a#muteToggleBtn {
  opacity: 1!important;
  pointer-events: auto!important;
}
    <?php } ?>
</style>
<?php if( get_field('select_hero_section') == 'fullwidth' ) { ?>
<section class="home__nero_new">
  <div class="home__hero__videoa" data-cursor="sound on" data-cursor-click="sound off">
      <script src="https://fast.wistia.com/player.js" async></script>
      <script src="https://fast.wistia.com/embed/i00xf7lqfs.js" async type="module"></script> 
      <div class="bg_overrelay"></div>
      <wistia-player class="hero__video1" id="hero__video" media-id="i00xf7lqfs"></wistia-player>
  </div>
  
  <div class="videomutbtn-main">
    <a id="muteToggleBtn" class="mute-toggle-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="" height="" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 3.75a.75.75 0 00-1.255-.555L5.46 8H2.75A1.75 1.75 0 001 9.75v4.5c0 .966.784 1.75 1.75 1.75h2.71l5.285 4.805A.75.75 0 0012 20.25V3.75zM6.255 9.305l4.245-3.86v13.11l-4.245-3.86a.75.75 0 00-.505-.195h-3a.25.25 0 01-.25-.25v-4.5a.25.25 0 01.25-.25h3a.75.75 0 00.505-.195z"/><path d="M16.28 8.22a.75.75 0 10-1.06 1.06L17.94 12l-2.72 2.72a.75.75 0 101.06 1.06L19 13.06l2.72 2.72a.75.75 0 101.06-1.06L20.06 12l2.72-2.72a.75.75 0 00-1.06-1.06L19 10.94l-2.72-2.72z"/></svg></a>
  </div>
  <div class="hhn_text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><?php echo get_field('hero_banner_heading'); ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
 <?php } else { ?>
<div class="videomutbtn-main">
        <a id="muteToggleBtn" class="mute-toggle-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="" height="" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 3.75a.75.75 0 00-1.255-.555L5.46 8H2.75A1.75 1.75 0 001 9.75v4.5c0 .966.784 1.75 1.75 1.75h2.71l5.285 4.805A.75.75 0 0012 20.25V3.75zM6.255 9.305l4.245-3.86v13.11l-4.245-3.86a.75.75 0 00-.505-.195h-3a.25.25 0 01-.25-.25v-4.5a.25.25 0 01.25-.25h3a.75.75 0 00.505-.195z"/><path d="M16.28 8.22a.75.75 0 10-1.06 1.06L17.94 12l-2.72 2.72a.75.75 0 101.06 1.06L19 13.06l2.72 2.72a.75.75 0 101.06-1.06L20.06 12l2.72-2.72a.75.75 0 00-1.06-1.06L19 10.94l-2.72-2.72z"/></svg></a>
      </div>
    <section id="icdBanner" class="home__hero icd_section sectionHeight sectionSpacing">
      <div class="container largeContainer">
        <div class="row">
          <div class="col-md-12">
            <div class="home__hero_inner">
              <h1 class="home__hero_heading">
                <?php if( get_field('hero_banner_title1') ): ?>
                    <div class="home__hero__line"><?php echo wpautop(get_field('hero_banner_title1')); ?></div>
                <?php endif; ?>
                <div class="home__hero__line">
                  <?php if( get_field('hero_banner_title2') ): ?>
                  <span class="home__hero__bold"><?php echo get_field('hero_banner_title2'); ?></span>
                  <?php endif; ?>
                  <?php if( !empty(get_field('hero_banner_image')) || !empty(get_field('hero_banner_video')) ): ?>
<!--                     <div class="home__hero__image">
                      <img id="hero__img" src="<?php //echo get_field('hero_banner_image'); ?>" alt="Hero" />
                    </div> -->
                    <div class="home__hero__video" data-cursor="sound on" data-cursor-click="sound off">
                      <script src="https://fast.wistia.com/player.js" async></script><script src="https://fast.wistia.com/embed/i00xf7lqfs.js" async type="module"></script><style>wistia-player[media-id='i00xf7lqfs']:not(:defined) { background: center / contain no-repeat url('https://fast.wistia.com/embed/medias/i00xf7lqfs/swatch'); display: block; filter: blur(5px); padding-top:56.25%; }</style> <wistia-player class="hero__video1" id="hero__video" media-id="i00xf7lqfs" style="height: 112px; width: 265px; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); will-change: transform, width, height; left: 1088px; top: 400px; position: absolute;"></wistia-player>

                     </div> 
                      
                      <!-- <video id="hero__video" src="<?php //echo get_field('hero_banner_video'); ?>" loop playsinline autoplay muted></video> -->
                      <!-- <iframe id="hero__video" src="https://www.youtube.com/embed/<?php //echo get_field('hero_banner_video'); ?>?autoplay=1&mute=1&loop=1&playlist=<?php //echo get_field('hero_banner_video'); ?>&controls=0&modestbranding=1&showinfo=0&rel=0&fs=0&iv_load_policy=3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
                    
                  <?php endif; ?>
                  <?php if( get_field('hero_banner_subheading') ): ?>
                  <span class="home__hero_subheading"><?php echo get_field('hero_banner_subheading'); ?></span>
                  <?php endif; ?>
                </div>
                <?php if( get_field('hero_banner_title3') ): ?>
                <div class="home__hero__line"><?php echo wpautop(get_field('hero_banner_title3')); ?></div>
                <?php endif; ?>
                <?php if( get_field('hero_banner_title4') ): ?>
                <div class="home__hero__line"><?php echo wpautop(get_field('hero_banner_title4')); ?></div>
                <?php endif; ?>
              </h1>
            </div>
          </div>
        </div>
      </div>
      
                     
    </section>
<?php } ?>
    <section class="icd__about icd_section sectionHeight sectionSpacing">
      <div class="container fullContainer">
        <div class="row">
          <div class="col-md-12">
            <div class="icd__about__wrapper">
              <h2 class="icd__about__title">
                <div class="icd__about__line"><?php echo get_field('about_icd_text1'); ?></div>
                <div class="icd__about__line"><?php echo get_field('about_icd_text2'); ?></div>
                <div class="icd__about__line"><?php echo get_field('about_icd_text3'); ?></div>
                <div class="icd__about__line"><?php echo get_field('about_icd_text4'); ?></div>
                <div class="icd__about__line"><?php echo get_field('about_icd_text5'); ?></div>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="icd__groups icd_section sectionHeight sectionSpacing">
      <div class="container smallContainer">
        <div class="row">
          <div class="col-md-12">
            <div class="icd__groups__wrapper">
              <div class="icd__groups__total__assets">
                <div class="icd__groups__tag">
                  <a href="#"><?php echo get_field('icd_group', 'options'); ?></a>
                </div>
                <div class="total__assets__box">
                  <div class="total__assets__box__bg">
                    <img src="/wp-content/uploads/2025/09/green.png">
                  </div>
                  <div class="total_assets__header">
                    <h6 class="total_assets__tag"><?php echo get_field('total_assets', 'options'); ?></h6>
                    <!-- <span class="total_assets__tag__info"><?php //echo get_field('total_assets_text', 'options'); ?></span> -->
                  </div>
                  <div class="total_assets__footer">
                    <h2 class="total_assets__price"><?php echo get_field('total_assets_number', 'options'); ?></h2>
                    <h4 class="total_assets__currency"><?php echo get_field('total_assets_currency', 'options'); ?></h4>
                  </div>
                </div>
              </div>
              <div class="icd__groups__total__revenue">
                <div class="total__revenue__box">
                  <div class="total__revenue__box__bg">
                    <img src="/wp-content/uploads/2025/09/yellow_-1.png">
                  </div>
                  <div class="total__revenue__header">
                    <h6 class="total_revenue__tag"><?php echo get_field('total_revenue', 'options'); ?></h6>
                  </div>
                  <div class="total__revenue__footer">
                    <h3 class="total__revenue__price"><?php echo get_field('total_revenue_number', 'options'); ?></h3>
                    <h5 class="total_revenue__currency"><?php echo get_field('total_revenue_currency', 'options'); ?></h5>
                  </div>
                </div>
              </div>
              <div class="icd__groups__total__employee">
                <div class="total__employee__box">
                  <div class="total__employee__box__bg">
                    <img src="/wp-content/uploads/2025/09/yellow_2.png">
                  </div>
                  <div class="total__employee__header">
                    <h6 class="total_employee__tag"><?php echo get_field('group_employees', 'options'); ?></h6>
                  </div>
                  <div class="total__employee__footer">
                    <h3 class="total__employee__price"><?php echo get_field('group_employees_number', 'options'); ?></h3>
                    <h5 class="total_revenue__currency total_employee__currency"><?php echo get_field('group_employees_currency', 'options'); ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="icd__vision icd_section sectionHeight sectionSpacing">
      <div class="container smallContainer">
        <div class="row">
          <div class="icd__vision__row first">
            <div class="icd__vision__wrapper">
              <div class="icd__vision__col img">
                <div class="icd__vision__img">
                  <img class="icd__vision__img__desktop" src="<?php echo get_field('icd_vision_image'); ?>" alt="Our Vision">
                  <img class="icd__vision__img__mobile" src="<?php echo get_field('icd_vision_image_mobile'); ?>" alt="Our Vision"> 
                </div>
              </div>
              <div class="icd__vision__content blue">
                <p><?php echo get_field('icd_vision_description'); ?></p>
              </div>
              <div class="icd__vision__content yellow">
                <span class="icd__vision__tag"><?php echo get_field('icd_vision_subheading'); ?></span>
                <h5>
                  <div class="icd__vision__title"><?php echo get_field('icd_vision_title1'); ?></div>
                  <div class="icd__vision__title"><?php echo get_field('icd_vision_title2'); ?></div>
                  <div class="icd__vision__title"><?php echo get_field('icd_vision_title3'); ?></div>
                  <div class="icd__vision__title"><?php echo get_field('icd_vision_title4'); ?></div>
                </h5>
              </div>
            </div>
          </div>
          <div class="icd__vision__row second">
            <div class="icd__vision__content green">
              <div class="icd__vision__content__col first">
                <h6><?php echo get_field('icd_company_intro'); ?></h6>
              </div>
              <div class="icd__vision__content__col second">
                <h5><?php echo get_field('icd_mandate_heading'); ?></h5>
                <div class="icd__vision__desc">
                  <p><?php echo get_field('icd_mandate_intro1'); ?></p>
                  <p><?php echo get_field('icd_mandate_intro2'); ?></p>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="icd__vision icd_section sectionHeight sectionSpacing">
      <div class="container smallContainer">
        <div class="row">
          <div class="icd__vision__row first">
            <div class="icd__vision__wrapper">
              <div class="icd__vision__col img">
                <div class="icd__vision__img">
                  <img class="icd__vision__img__desktop" src="<?php echo get_field('icd_vision_image'); ?>" alt="Our Vision">
                  <img class="icd__vision__img__mobile" src="<?php echo get_field('icd_vision_image_mobile'); ?>" alt="Our Vision"> 
                </div>
              </div>
              <div class="icd__vision__content yellow">
                <!-- <p><?php //echo get_field('icd_vision_description'); ?></p> -->
                <span class="icd__vision__tag"><?php echo get_field('icd_vision_subheading'); ?></span>
                <h5>
                  <div class="icd__vision__title"><?php echo get_field('icd_vision_title1'); ?></div>
                  <div class="icd__vision__title"><?php echo get_field('icd_vision_title2'); ?></div>
                  <div class="icd__vision__title"><?php echo get_field('icd_vision_title3'); ?></div>
                  <div class="icd__vision__title"><?php echo get_field('icd_vision_title4'); ?></div>
                </h5>
              </div>
            <div class="icd__vision__row second">
              <div class="icd__vision__content green">
                <div class="icd__vision__content__col first">
                  <!-- <h6><?php echo get_field('icd_company_intro'); ?></h6> -->
                </div>
                <div class="icd__vision__content__col second">
                  <h5><?php echo get_field('icd_mandate_heading'); ?></h5>
                  <div class="icd__vision__desc">
                    <p><?php echo get_field('icd_mandate_intro1'); ?></p>
                    <p><?php echo get_field('icd_mandate_intro2'); ?></p>                  
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!-- <div class="icd__vision__row second">
            <div class="icd__vision__content green">
              <div class="icd__vision__content__col first">
                <h6><?php echo get_field('icd_company_intro'); ?></h6>
              </div>
              <div class="icd__vision__content__col second">
                <h5><?php echo get_field('icd_mandate_heading'); ?></h5>
                <div class="icd__vision__desc">
                  <p><?php echo get_field('icd_mandate_intro1'); ?></p>
                  <p><?php echo get_field('icd_mandate_intro2'); ?></p>                  
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <section class="icd__map icd_section sectionHeight sectionSpacing">
      <div class="container largeContainer">
        <div class="row">
          <div class="icd__map__col content">
            <div class="border-right"></div>
            <div class="icd__map__heading">
              <?php if( get_field('map_heading') ): ?>
              <h2><?php echo get_field('map_heading') ?></h2>
              <?php endif; ?>
            </div>
            <div class="icd__map__counter">
              <?php if( get_field('map_continents_number', 'option') && get_field('map_continents_text', 'option') ): ?>
              <div class="icd__map__count">
                <span class="counter__number" data-target="<?php echo get_field('map_continents_number', 'option') ?>">0</span>
                <span class="counter__text"><?php echo get_field('map_continents_text', 'option') ?></span>
              </div>
              <?php endif; ?>
              <?php if( get_field('map_countries_number', 'option') && get_field('map_countries_text', 'option') ): ?>
              <div class="icd__map__count">
                <span class="counter__number" data-target="<?php echo get_field('map_countries_number', 'option') ?>">0</span>
                <span class="counter__text"><?php echo get_field('map_countries_text', 'option') ?></span>
              </div>
              <?php endif; ?>
              <?php if( get_field('map_investee_number', 'option') && get_field('map_investee_text', 'option') ): ?>
              <div class="icd__map__count">
                <span class="counter__number" data-target="<?php echo get_field('map_investee_number', 'option') ?>">0</span>
                <span class="counter__text"><?php echo get_field('map_investee_text', 'option') ?></span>
              </div>
              <?php endif; ?>
            </div>
            <?php if( get_field('map_button_url') && get_field('map_button_text') ): ?>
            <!-- <div class="icd_btn green desktop">
              <a href="<?php echo get_field('map_button_url') ?>">
                <span><?php echo get_field('map_button_text') ?></span>
                <img src="/wp-content/uploads/2024/11/arrow.svg">
              </a>
            </div> -->
            <?php endif; ?>
          </div>
          <div class="icd__map__col map">


<?php
          if ($current_lang == 'en') { ?>

<svg width="1394" height="769" viewBox="0 0 1394 769" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="Map-new">
<g id="Oceania">
<g id="Map">
<path id="Vector" d="M1284.7 502.682C1285.86 502.682 1286.49 502.682 1287.65 502.503C1288.73 497.936 1289.17 495.697 1290.16 491.219C1288.99 491.219 1288.37 491.219 1287.2 491.398C1286.22 495.876 1285.77 498.204 1284.7 502.772V502.682Z" fill="#3D8361"/>
<path id="Vector_2" d="M1231.23 492.025C1232.75 492.025 1233.47 492.025 1234.99 491.846C1235.8 487.189 1236.24 484.861 1236.96 480.293C1235.44 480.293 1234.63 480.293 1233.11 480.472C1232.39 485.129 1231.94 487.458 1231.14 492.115L1231.23 492.025Z" fill="#3D8361"/>
<path id="Vector_3" d="M1242.78 491.398C1243.95 491.398 1244.57 491.398 1245.74 491.219C1246.63 486.562 1246.99 484.323 1247.8 479.666C1246.63 479.666 1246.01 479.666 1244.84 479.845C1244.04 484.502 1243.68 486.741 1242.78 491.398Z" fill="#3D8361"/>
<path id="Vector_4" d="M1344.97 486.383H1346.94C1350.43 471.426 1351.95 463.993 1354.55 449.305H1352.58C1349.98 463.993 1348.46 471.516 1345.06 486.383H1344.97Z" fill="#3D8361"/>
<path id="Vector_5" d="M1354.82 485.935C1356.88 485.935 1357.87 485.756 1359.93 485.667C1362.25 476.084 1363.24 471.247 1365.12 461.754C1363.06 461.754 1361.98 461.754 1359.93 461.933C1358.04 471.516 1356.97 476.263 1354.73 485.935H1354.82Z" fill="#3D8361"/>
<path id="Vector_6" d="M1368.17 485.307H1369.69C1372.02 475.724 1373.09 470.978 1374.97 461.484H1373.45C1371.57 470.978 1370.49 475.724 1368.17 485.307Z" fill="#3D8361"/>
<path id="Vector_7" d="M1376.14 497.847C1377.03 497.847 1377.39 497.847 1378.29 497.847C1380.79 488.353 1382.05 483.517 1384.2 474.113H1382.05C1379.9 483.607 1378.73 488.353 1376.23 497.936L1376.14 497.847Z" fill="#3D8361"/>
<path id="Vector_8" d="M1386.62 497.309C1388.32 497.309 1389.21 497.309 1391 497.13C1392.17 492.831 1392.71 490.682 1393.78 486.383C1391.99 486.383 1391.18 486.383 1389.39 486.562C1388.32 490.861 1387.78 493.01 1386.62 497.309Z" fill="#3D8361"/>
<path id="Vector_9" d="M1337.89 600.84C1339.33 600.661 1339.95 600.661 1341.39 600.482C1350.43 581.227 1354.55 571.465 1361.81 551.672C1360.37 551.672 1359.66 551.851 1358.22 551.941C1350.97 571.733 1346.85 581.585 1337.8 600.84H1337.89Z" fill="#3D8361"/>
<path id="Vector_10" d="M1304.22 628.335C1305.29 628.156 1305.83 628.156 1306.91 627.977C1326.88 586.69 1342.55 545.134 1355 500.98C1353.84 500.98 1353.3 500.98 1352.13 501.16C1339.68 545.313 1324.1 586.958 1304.22 628.335Z" fill="#3D8361"/>
<path id="Vector_11" d="M1319.71 614.722C1322.04 614.454 1323.21 614.275 1325.53 614.006C1339.33 585.705 1351.24 556.419 1360.55 526.416C1358.13 526.595 1356.88 526.685 1354.46 526.774C1345.24 556.956 1333.42 586.332 1319.71 614.722Z" fill="#3D8361"/>
<path id="Vector_12" d="M1287.65 642.127C1288.37 642.127 1288.64 641.948 1289.35 641.859C1307.98 604.87 1323.03 567.524 1335.65 528.117C1334.94 528.117 1334.58 528.117 1333.86 528.117C1321.33 567.613 1306.28 605.049 1287.65 642.038V642.127Z" fill="#3D8361"/>
<path id="Vector_13" d="M1326.97 513.43C1327.68 513.43 1328.04 513.43 1328.85 513.43C1330.01 508.952 1330.64 506.802 1331.71 502.324C1331 502.324 1330.64 502.324 1329.83 502.324C1328.76 506.802 1328.13 508.952 1326.97 513.43Z" fill="#3D8361"/>
<path id="Vector_14" d="M1275.2 643.919C1277.44 643.56 1278.6 643.471 1280.84 643.113C1299.2 605.945 1314.07 568.33 1326.52 528.744C1324.1 528.923 1322.85 529.013 1320.43 529.192C1308.16 568.867 1293.38 606.662 1275.2 644.008V643.919Z" fill="#3D8361"/>
<path id="Vector_15" d="M1265.8 645.262C1267.32 644.993 1268.13 644.904 1269.65 644.725C1291.68 598.601 1308.43 552.209 1321.59 502.861C1319.89 502.861 1319.09 503.04 1317.39 503.13C1304.31 552.567 1287.74 599.139 1265.8 645.352V645.262Z" fill="#3D8361"/>
<path id="Vector_16" d="M1252.99 669.892C1254.24 669.713 1254.96 669.534 1256.21 669.355C1258.45 665.324 1259.62 663.265 1261.77 659.234C1260.42 659.413 1259.8 659.503 1258.54 659.772C1256.39 663.891 1255.23 665.862 1252.99 669.892Z" fill="#3D8361"/>
<path id="Vector_17" d="M1266.87 621.351C1268.66 621.082 1269.65 620.993 1271.44 620.724C1285.59 586.601 1297.32 552.389 1307.26 516.834C1305.29 516.834 1304.31 517.013 1302.43 517.103C1292.58 552.748 1280.93 587.049 1266.96 621.261L1266.87 621.351Z" fill="#3D8361"/>
<path id="Vector_18" d="M1262.3 609.617C1263.65 609.438 1264.36 609.348 1265.8 609.169C1277.53 579.346 1287.65 548.716 1295.44 517.639C1293.92 517.639 1293.2 517.818 1291.77 517.907C1283.98 549.074 1274.04 579.704 1262.3 609.617Z" fill="#3D8361"/>
<path id="Vector_19" d="M1251.74 610.961C1253.17 610.782 1253.89 610.692 1255.23 610.513C1266.69 580.421 1276.64 549.702 1284.25 518.355C1282.73 518.355 1282.01 518.535 1280.49 518.624C1272.87 549.97 1263.11 580.779 1251.65 610.961H1251.74Z" fill="#3D8361"/>
<path id="Vector_20" d="M1241.97 612.216C1242.87 612.216 1243.32 612.036 1244.21 611.947C1253.89 586.064 1262.13 559.644 1269.11 532.865C1268.13 532.865 1267.68 532.865 1266.78 533.044C1259.89 559.823 1251.65 586.243 1242.06 612.216H1241.97Z" fill="#3D8361"/>
<path id="Vector_21" d="M1225.68 626.992C1227.38 626.723 1228.18 626.634 1229.89 626.365C1239.83 600.482 1248.42 574.062 1255.59 547.283C1253.8 547.462 1252.9 547.462 1251.11 547.641C1243.95 574.51 1235.53 600.93 1225.68 626.902V626.992Z" fill="#3D8361"/>
<path id="Vector_22" d="M1217.08 628.246C1217.53 628.246 1217.71 628.246 1218.06 628.067C1225.77 606.214 1232.75 584.541 1239.29 562.24C1238.84 562.24 1238.66 562.24 1238.21 562.24C1231.77 584.541 1224.78 606.214 1217.08 628.067V628.246Z" fill="#3D8361"/>
<path id="Vector_23" d="M1205.61 629.857C1207.14 629.678 1207.85 629.588 1209.28 629.32C1216.81 607.288 1223.61 585.525 1229.97 563.135C1228.36 563.314 1227.64 563.314 1226.03 563.493C1219.76 585.883 1213.05 607.825 1205.52 629.857H1205.61Z" fill="#3D8361"/>
<path id="Vector_24" d="M1195.85 631.291C1197.11 631.112 1197.73 631.022 1198.99 630.843C1200.6 626.365 1201.31 624.037 1202.84 619.559C1201.58 619.738 1200.87 619.827 1199.61 620.006C1198.09 624.574 1197.37 626.813 1195.85 631.381V631.291Z" fill="#3D8361"/>
</g>
<g id="line_1">
<path id="line_2" d="M164 577.32H1247" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="circle" d="M1252 583.32C1254.77 583.32 1257 581.086 1257 578.32C1257 575.554 1254.77 573.32 1252 573.32C1249.23 573.32 1247 575.554 1247 578.32C1247 581.086 1249.23 583.32 1252 583.32Z" fill="white"/>
</g>
<g id="Home Oceania_Dot">
<g id="Europe">
<g id="bkg">
<rect id="Rectangle 11" x="1109" y="547.32" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="OCEANIA 3 Countries">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="1124" y="574.638">OCEANIA&#10;</tspan><tspan x="1124" y="593.638">3 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="1137.61" y="593.638">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation">
<circle id="Pulse" cx="1249" cy="578.32" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main" cx="1249.5" cy="578.82" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home Oceania_Dot_2">
<g id="Europe_2">
<g id="bkg_2">
<rect id="Rectangle 11_2" x="27" y="547.32" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="OCEANIA 3 Countries_2">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="42" y="574.638">OCEANIA&#10;</tspan><tspan x="42" y="593.638">3 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="55.61" y="593.638">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_2">
<circle id="Pulse_2" cx="167" cy="578.32" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_2" cx="167.5" cy="578.82" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
<g id="South America">
<g id="Map_2">
<path id="Vector_25" d="M479.907 411.241H483.848C483.669 406.674 483.579 404.345 483.489 399.867H479.549C479.638 404.345 479.728 406.674 479.907 411.241Z" fill="#3D8361"/>
<path id="Vector_26" d="M491.013 411.331H495.849C495.67 406.763 495.67 404.435 495.58 399.867H490.744C490.744 404.435 490.923 406.674 491.102 411.241L491.013 411.331Z" fill="#3D8361"/>
<path id="Vector_27" d="M517.074 527.222C517.97 527.222 518.417 527.222 519.313 527.222C511.969 484.86 507.312 442.946 505.879 399.867H503.461C504.894 442.856 509.641 484.77 516.985 527.043L517.074 527.222Z" fill="#3D8361"/>
<path id="Vector_28" d="M501.133 497.129H502.745C499.163 474.56 497.819 463.454 496.028 441.602H494.416C496.207 463.365 497.551 474.56 501.223 497.039H501.133V497.129Z" fill="#3D8361"/>
<path id="Vector_29" d="M530.868 542.716C531.763 542.716 532.211 542.716 533.017 542.716C523.524 490.592 517.882 439.363 517.344 386.344H515.016C515.553 439.363 521.195 490.502 530.868 542.626V542.716Z" fill="#3D8361"/>
<path id="Vector_30" d="M544.928 558.479C545.555 558.479 545.913 558.479 546.54 558.479C535.613 501.339 529.165 444.648 528.717 386.434H527.016C527.463 444.648 533.912 501.25 545.017 558.389H544.928V558.479Z" fill="#3D8361"/>
<path id="Vector_31" d="M592.306 693.446C593.381 693.625 593.918 693.625 594.993 693.805C560.602 594.124 541.794 492.025 541.167 386.523H537.764C538.48 492.025 557.646 593.945 592.395 693.446H592.306Z" fill="#3D8361"/>
<path id="Vector_32" d="M617.293 737.242C618.457 737.421 619.084 737.51 620.248 737.689C576.274 625.291 553.436 507.34 552.989 386.613H548.779C549.317 507.34 572.602 625.112 617.203 737.242H617.293Z" fill="#3D8361"/>
<path id="Vector_33" d="M630.188 752.107C632.159 752.465 633.233 752.555 635.204 752.913C590.871 640.067 568.302 521.489 566.153 400.314H558.898C561.317 521.489 584.692 639.799 630.188 752.107Z" fill="#3D8361"/>
<path id="Vector_34" d="M623.651 711.269C624.816 711.448 625.443 711.538 626.607 711.627C596.156 614.723 579.319 515.938 576.095 414.377H572.154C575.558 515.849 592.664 614.544 623.651 711.269Z" fill="#3D8361"/>
<path id="Vector_35" d="M624.367 683.146C624.994 683.146 625.262 683.146 625.889 683.325C602.514 595.018 589.259 505.816 586.662 414.465H584.781C587.378 505.816 600.723 594.929 624.367 683.146Z" fill="#3D8361"/>
<path id="Vector_36" d="M629.026 669.175C630.19 669.175 630.727 669.354 631.892 669.444C613.263 590.094 602.337 510.385 599.292 428.975H595.799C599.023 510.385 610.128 590.004 629.026 669.175Z" fill="#3D8361"/>
<path id="Vector_37" d="M632.339 639.799C632.966 639.799 633.324 639.799 633.951 639.978C622.397 579.794 614.695 519.699 611.023 458.529H609.143C612.904 519.699 620.696 579.794 632.339 639.889V639.799Z" fill="#3D8361"/>
<path id="Vector_38" d="M638.071 625.112C639.683 625.112 640.489 625.291 642.101 625.381C632.876 570.032 626.697 514.684 623.652 458.709H619.084C622.219 514.684 628.577 569.943 638.071 625.201V625.112Z" fill="#3D8361"/>
<path id="Vector_39" d="M642.727 594.75C644.698 594.75 645.772 594.929 647.743 595.019C642.459 554.806 638.249 514.504 636.1 473.934C633.861 473.934 632.786 473.934 630.637 473.934C632.786 514.415 637.175 554.717 642.727 594.84V594.75Z" fill="#3D8361"/>
<path id="Vector_40" d="M652.311 579.795C653.386 579.795 653.923 579.795 655.088 579.974C651.147 544.777 648.191 509.579 646.221 474.203H643.266C645.236 509.579 648.281 544.687 652.311 579.884V579.795Z" fill="#3D8361"/>
<path id="Vector_41" d="M658.4 533.313H660.998C659.386 513.61 658.221 493.906 657.415 474.203H654.729C655.535 493.906 656.788 513.61 658.4 533.313Z" fill="#3D8361"/>
<path id="Vector_42" d="M667.178 502.592H670.133C669.865 497.398 669.685 494.89 669.506 489.785H666.551C666.819 494.89 666.909 497.487 667.178 502.592Z" fill="#3D8361"/>
<path id="Vector_43" d="M634.129 739.748C635.025 739.748 635.472 739.927 636.368 740.107C634.577 735.449 633.771 733.121 632.069 728.374C631.173 728.374 630.726 728.195 629.83 728.105C631.532 732.852 632.427 735.181 634.219 739.838H634.129V739.748Z" fill="#3D8361"/>
<path id="Vector_44" d="M645.505 767.333C646.042 767.333 646.311 767.513 646.938 767.602C645.057 763.124 644.072 760.885 642.281 756.228C641.743 756.228 641.385 756.049 640.848 756.049C642.728 760.616 643.624 762.855 645.505 767.423V767.333Z" fill="#3D8361"/>
<path id="Vector_45" d="M652.132 768.407C653.565 768.676 654.282 768.766 655.715 768.945C653.924 764.467 653.028 762.138 651.326 757.571C649.893 757.391 649.177 757.212 647.654 757.033C649.446 761.601 650.341 763.929 652.132 768.407Z" fill="#3D8361"/>
</g>
<g id="line_3">
<path id="line_4" d="M115 524.828L590 524.828" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="circle_2" d="M595 529.828C597.766 529.828 600 527.594 600 524.828C600 522.062 597.766 519.828 595 519.828C592.234 519.828 590 522.062 590 524.828C590 527.594 592.234 529.828 595 529.828Z" fill="white"/>
</g>
<g id="Home SAmerica_Dot">
<g id="Europe_3">
<g id="bkg_3">
<rect id="Rectangle 11_3" x="455" y="483.828" width="164" height="82" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="SOUTH AMERICA 4 Countries">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="470" y="511.146">SOUTH&#10;</tspan><tspan x="470" y="530.146">AMERICA&#10;</tspan><tspan x="470" y="549.146">4 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="483.907" y="549.146">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_3">
<circle id="Pulse_3" cx="595" cy="524.828" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_3" cx="595.5" cy="525.328" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home SAmerica_Dot_2">
<g id="Europe_4">
<g id="bkg_4">
<rect id="Rectangle 11_4" y="483.828" width="164" height="82" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="SOUTH AMERICA 4 Countries_2">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="15" y="511.146">SOUTH&#10;</tspan><tspan x="15" y="530.146">AMERICA&#10;</tspan><tspan x="15" y="549.146">4 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="28.9069" y="549.146">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_4">
<circle id="Pulse_4" cx="140" cy="524.828" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_4" cx="140.5" cy="525.328" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
<g id="North America">
<g id="Map_3">
<path id="Vector_46" d="M435.754 342.727C436.918 342.727 437.545 342.727 438.709 342.817C439.246 335.563 439.515 332.07 440.053 325.174C438.888 325.174 438.261 325.174 437.097 325.084C436.47 331.98 436.201 335.563 435.664 342.817L435.754 342.727Z" fill="#3D8361"/>
<path id="Vector_47" d="M347 115.245H352.553C355.777 108.707 357.479 105.573 360.792 99.4824C358.553 99.4824 357.479 99.4824 355.24 99.6615C351.926 105.752 350.224 108.797 347 115.335V115.245Z" fill="#3D8361"/>
<path id="Vector_48" d="M359.807 115.334H361.598C368.315 101.452 371.808 95.2728 378.793 82.7344C378.077 82.7344 377.719 82.7344 377.002 82.7344C370.017 95.1832 366.524 101.363 359.807 115.155V115.334Z" fill="#3D8361"/>
<path id="Vector_49" d="M374.943 106.379H377.093C382.019 96.3478 384.616 91.6011 389.631 82.1973C388.825 82.1973 388.377 82.1973 387.571 82.1973C382.466 91.6011 379.959 96.2582 374.943 106.289V106.379Z" fill="#3D8361"/>
<path id="Vector_50" d="M385.422 106.288H388.377C395.005 92.4957 398.408 86.1369 405.125 73.2402C403.961 73.2402 403.423 73.2402 402.259 73.4194C395.453 86.2265 392.049 92.5852 385.422 106.288Z" fill="#3D8361"/>
<path id="Vector_51" d="M400.377 97.1545H403.512C408.348 87.0341 410.856 82.1979 415.781 72.5254C414.527 72.5254 413.901 72.5254 412.736 72.7045C407.81 82.377 405.303 87.2133 400.467 97.244L400.377 97.1545Z" fill="#3D8361"/>
<path id="Vector_52" d="M405.752 106.11H411.036C417.395 91.7805 420.709 85.2426 427.246 71.8086C425.187 71.8086 424.201 71.9877 422.052 72.1668C415.514 85.4218 412.111 92.0492 405.752 106.2V106.11Z" fill="#3D8361"/>
<path id="Vector_53" d="M405.125 135.933C406.737 135.933 407.543 135.933 409.065 136.112C418.827 111.035 429.664 86.5853 441.128 62.3145C439.605 62.3145 438.889 62.4936 437.366 62.5831C425.724 86.7644 414.887 111.035 405.035 135.933H405.125Z" fill="#3D8361"/>
<path id="Vector_54" d="M372.973 209.999C374.047 209.999 374.585 210.089 375.659 210.179C379.331 193.431 381.302 185.818 385.422 171.757C384.347 171.757 383.809 171.668 382.735 171.578C378.615 185.639 376.645 193.252 372.973 209.999Z" fill="#3D8361"/>
<path id="Vector_55" d="M373.42 259.437C376.196 259.617 377.629 259.706 380.406 259.885C386.675 222.27 393.661 184.923 406.02 148.741C403.333 148.651 401.99 148.562 399.303 148.383C386.764 184.386 379.689 221.822 373.42 259.348V259.437Z" fill="#3D8361"/>
<path id="Vector_56" d="M485.818 304.217C486.535 304.217 486.893 304.217 487.52 304.306C488.147 297.947 488.416 294.902 489.132 288.812C488.416 288.812 488.057 288.812 487.43 288.723C486.804 294.813 486.445 297.858 485.818 304.217Z" fill="#3D8361"/>
<path id="Vector_57" d="M381.213 298.215C383.004 298.305 383.9 298.395 385.691 298.484C396.438 214.118 416.41 138.619 451.697 61.5078C450.085 61.5078 449.279 61.6869 447.667 61.7765C412.022 138.709 391.96 213.939 381.213 298.215Z" fill="#3D8361"/>
<path id="Vector_58" d="M395.811 279.499C396.885 279.499 397.512 279.588 398.587 279.678C409.155 205.97 426.978 137.994 457.249 69.9277C456.264 69.9277 455.726 69.9277 454.741 70.1069C424.291 137.904 406.468 205.88 395.811 279.499Z" fill="#3D8361"/>
<path id="Vector_59" d="M402.707 319.98C404.14 319.98 404.767 320.07 406.2 320.159C415.425 232.122 433.337 150.801 467.907 69.3906C466.653 69.3906 466.026 69.3906 464.772 69.5697C429.844 150.801 411.932 232.032 402.707 319.98Z" fill="#3D8361"/>
<path id="Vector_60" d="M411.932 342.012C413.723 342.012 414.618 342.012 416.41 342.102C424.739 246.451 442.382 157.697 478.744 68.8535C477.131 68.8535 476.325 68.8535 474.803 69.0326C438.083 157.697 420.44 246.362 412.021 342.012H411.932Z" fill="#3D8361"/>
<path id="Vector_61" d="M424.381 342.369H426.978C435.218 246.629 452.861 157.606 488.148 68.3145C487.252 68.3145 486.715 68.3145 485.819 68.3145C450.353 157.516 432.62 246.45 424.381 342.19V342.369Z" fill="#3D8361"/>
<path id="Vector_62" d="M442.023 264.452C444.531 264.631 445.785 264.72 448.382 264.899C458.771 196.744 475.698 132.171 500.148 67.7773C497.819 67.7773 496.655 67.9565 494.416 68.046C469.518 132.082 452.502 196.475 442.023 264.362V264.452Z" fill="#3D8361"/>
<path id="Vector_63" d="M458.055 248.511C458.771 248.511 459.219 248.601 459.935 248.69C470.414 186.356 486.624 126.799 508.477 67.5098H506.775C484.923 126.709 468.533 186.177 458.055 248.421V248.511Z" fill="#3D8361"/>
<path id="Vector_64" d="M468.623 249.317C469.966 249.407 470.683 249.496 472.026 249.586C482.326 186.894 498.357 126.888 519.404 66.9727C518.15 66.9727 517.523 66.9727 516.359 66.9727C495.043 126.709 479.012 186.536 468.623 249.138V249.317Z" fill="#3D8361"/>
<path id="Vector_65" d="M480.445 250.301C481.43 250.301 481.878 250.391 482.863 250.48C492.984 187.43 508.746 126.977 529.256 66.6133H527.106C506.507 126.887 490.655 187.251 480.535 250.212H480.445V250.301Z" fill="#3D8361"/>
<path id="Vector_66" d="M492.445 251.286C492.893 251.286 493.072 251.286 493.52 251.376C504.715 180.533 523.881 113.721 545.555 45.4766H544.569C522.896 113.721 503.64 180.444 492.445 251.286Z" fill="#3D8361"/>
<path id="Vector_67" d="M498.535 286.483C499.699 286.483 500.326 286.573 501.491 286.662C511.79 203.192 532.031 125.006 556.391 44.8496C555.316 44.8496 554.869 44.8496 553.794 45.0287C529.165 125.096 508.924 203.103 498.535 286.483Z" fill="#3D8361"/>
<path id="Vector_68" d="M516.447 237.136C517.522 237.226 518.059 237.315 519.224 237.405C529.523 175.25 545.375 115.245 563.198 54.9707C562.213 54.9707 561.765 54.9707 560.69 54.9707C542.688 115.155 526.836 174.981 516.447 237.047V237.136Z" fill="#3D8361"/>
<path id="Vector_69" d="M558.273 96.2577H562.125C568.036 75.0319 574.036 53.8957 579.857 32.6699C578.424 32.6699 577.618 32.849 576.185 32.9386C570.275 54.0748 564.274 75.1215 558.273 96.1681V96.2577Z" fill="#3D8361"/>
<path id="Vector_70" d="M529.076 222.718C531.046 222.897 531.942 222.986 533.912 223.165C540.719 184.834 549.048 147.129 558.9 109.424C557.019 109.424 556.123 109.424 554.332 109.424C544.301 146.95 535.883 184.565 529.076 222.807V222.718Z" fill="#3D8361"/>
<path id="Vector_71" d="M543.227 209.104C544.749 209.194 545.466 209.284 546.988 209.463C552.451 179.818 558.81 150.622 565.975 121.335C564.542 121.335 563.825 121.246 562.392 121.156C555.138 150.353 548.779 179.55 543.227 209.104Z" fill="#3D8361"/>
<path id="Vector_72" d="M557.734 195.939C558.451 195.939 558.809 196.029 559.526 196.118C563.556 175.161 567.676 154.294 572.691 133.605C571.974 133.605 571.616 133.605 570.989 133.516C565.974 154.204 561.854 175.072 557.734 195.939Z" fill="#3D8361"/>
<path id="Vector_73" d="M570.633 183.131C571.976 183.22 572.603 183.31 573.857 183.399C577.887 162.89 582.097 142.47 586.933 122.14C585.679 122.14 585.052 122.14 583.798 121.961C578.872 142.202 574.753 162.621 570.633 183.041V183.131Z" fill="#3D8361"/>
<path id="Vector_74" d="M585.32 170.772H586.216C590.067 150.621 594.455 130.56 599.202 110.588H598.396C593.649 130.56 589.261 150.621 585.41 170.772H585.32Z" fill="#3D8361"/>
<path id="Vector_75" d="M593.291 185.101C594.007 185.101 594.276 185.191 594.993 185.28C601.083 152.501 607.889 119.991 615.412 87.4805H613.8C606.277 119.901 599.471 152.412 593.291 185.191V185.101Z" fill="#3D8361"/>
<path id="Vector_76" d="M581.648 52.3737H583.619C585.768 44.3133 586.843 40.3726 588.903 32.2227C588.097 32.2227 587.739 32.2227 587.022 32.2227C584.962 40.2831 583.887 44.3133 581.648 52.2841V52.3737Z" fill="#3D8361"/>
<path id="Vector_77" d="M573.139 85.2426H574.213C576.452 77.0926 577.527 73.0624 579.766 65.002H578.781C576.542 73.0624 575.467 77.003 573.228 85.153L573.139 85.2426Z" fill="#3D8361"/>
<path id="Vector_78" d="M593.201 40.999C595.082 40.999 596.067 40.8198 598.037 40.7303C598.933 37.0583 599.381 35.1775 600.366 31.416C598.485 31.416 597.5 31.5951 595.619 31.6847C594.724 35.3567 594.276 37.2374 593.291 40.9094H593.201V40.999Z" fill="#3D8361"/>
<path id="Vector_79" d="M582.992 85.2417H585.142C587.291 77.0022 588.366 72.8824 590.515 64.7324H588.366C586.216 72.8824 585.142 76.9126 582.992 85.1522V85.2417Z" fill="#3D8361"/>
<path id="Vector_80" d="M592.932 85.3321H595.887C600.276 67.8678 602.425 59.3596 606.545 42.1641C605.38 42.1641 604.843 42.1641 603.679 42.3432C599.47 59.5387 597.32 67.9574 592.932 85.4217V85.3321Z" fill="#3D8361"/>
<path id="Vector_81" d="M611.023 51.2992C612.546 51.2992 613.262 51.2992 614.785 51.2992C616.755 42.9701 617.651 38.7607 619.532 30.4316C618.099 30.4316 617.293 30.4316 615.86 30.6108C613.979 38.9399 612.994 43.0596 611.023 51.3887V51.2992Z" fill="#3D8361"/>
<path id="Vector_82" d="M603.322 85.3321H606.188C608.159 76.9134 609.233 72.7041 611.204 64.375H608.427C606.457 72.7041 605.382 76.8239 603.412 85.2425H603.322V85.3321Z" fill="#3D8361"/>
<path id="Vector_83" d="M614.875 73.868H620.607C624.637 56.1351 626.607 47.3582 630.369 29.7148C628.13 29.7148 627.055 29.894 624.906 29.9835C621.055 47.6269 619.084 56.2247 614.965 73.868H614.875Z" fill="#3D8361"/>
<path id="Vector_84" d="M624.1 85.601H626.786C630.906 66.8829 635.026 48.0752 638.787 29.2676C637.802 29.2676 637.265 29.2676 636.28 29.2676C632.429 48.0752 628.309 66.7933 624.189 85.4218H624.1V85.601Z" fill="#3D8361"/>
<path id="Vector_85" d="M611.293 146.412C612.189 146.412 612.726 146.501 613.622 146.591C617.473 127.067 619.533 117.752 623.473 99.3926H621.234C617.204 117.663 615.234 126.977 611.293 146.412Z" fill="#3D8361"/>
<path id="Vector_86" d="M605.113 172.385C606.994 172.564 607.979 172.654 609.95 172.743C610.756 168.265 611.203 166.116 612.009 161.727C610.129 161.548 609.143 161.548 607.263 161.369C606.457 165.758 606.009 167.907 605.203 172.385H605.113Z" fill="#3D8361"/>
<path id="Vector_87" d="M634.936 85.6905H636.458C641.205 62.763 645.862 39.9252 650.25 16.9082C649.623 16.9082 649.355 16.9082 648.817 16.9978C644.429 39.9252 639.772 62.763 634.936 85.6009V85.6905Z" fill="#3D8361"/>
<path id="Vector_88" d="M621.412 147.128C622.935 147.218 623.651 147.307 625.174 147.397C627.95 132.799 629.383 125.813 632.159 111.931C630.726 111.931 629.92 111.931 628.487 111.752C625.621 125.544 624.188 132.619 621.412 147.128Z" fill="#3D8361"/>
<path id="Vector_89" d="M630.369 161.011C631.354 161.011 631.892 161.1 632.966 161.19C639.594 124.739 646.848 88.4669 654.013 52.1055H651.595C644.43 88.3774 637.086 124.649 630.369 161.011Z" fill="#3D8361"/>
<path id="Vector_90" d="M653.654 86.0488C655.804 86.0488 656.968 86.0488 659.117 86.0488C660.819 77.0928 661.625 72.7044 663.237 63.8379H657.864C656.162 72.6148 655.356 77.0032 653.654 85.9593V86.0488Z" fill="#3D8361"/>
<path id="Vector_91" d="M641.475 161.906C642.281 161.906 642.728 161.996 643.535 162.085C645.057 153.219 645.774 148.92 647.296 140.322C646.49 140.322 646.042 140.322 645.326 140.232C643.803 148.83 642.997 153.129 641.475 161.996V161.906Z" fill="#3D8361"/>
<path id="Vector_92" d="M654.281 38.3117H656.61C658.222 29.6243 659.028 25.2359 660.55 16.459C659.655 16.459 659.207 16.459 658.311 16.5485C656.789 25.3254 655.983 29.6243 654.371 38.3117H654.281Z" fill="#3D8361"/>
<path id="Vector_93" d="M663.953 37.9537H666.819C668.342 29.1768 669.148 24.7883 670.581 15.9219C669.506 15.9219 668.879 16.0114 667.804 16.101C666.371 24.8779 665.565 29.2664 664.043 38.0433H663.953V37.9537Z" fill="#3D8361"/>
<path id="Vector_94" d="M673.984 37.6855H676.761C678.283 28.8191 679 24.3411 680.343 15.4746C679.268 15.4746 678.731 15.4746 677.656 15.5642C676.313 24.4306 675.507 28.9086 674.074 37.7751H673.984V37.6855Z" fill="#3D8361"/>
<path id="Vector_95" d="M684.643 37.4174H686.165C687.598 28.4614 688.315 23.9834 689.568 15.0273H688.046C686.702 23.9834 686.076 28.4614 684.643 37.4174Z" fill="#3D8361"/>
<path id="Vector_96" d="M693.509 37.2369H697.271C698.614 28.1913 699.241 23.6237 700.495 14.5781C698.973 14.5781 698.256 14.6677 696.734 14.7572C695.48 23.8028 694.853 28.2808 693.42 37.3264H693.509V37.2369Z" fill="#3D8361"/>
<path id="Vector_97" d="M706.227 24.6097H708.018C708.555 20.4899 708.824 18.3405 709.361 14.2207H707.57C707.033 18.3405 706.764 20.4004 706.227 24.6097Z" fill="#3D8361"/>
<path id="Vector_98" d="M695.031 99.8407H696.733C699.957 79.6001 703.092 59.2699 705.958 39.0293H704.346C701.48 59.2699 698.345 79.5105 695.121 99.7511H695.031V99.8407Z" fill="#3D8361"/>
<path id="Vector_99" d="M705.42 100.287H707.301C710.973 75.6582 714.555 51.0292 717.69 26.3105H715.898C712.764 50.9396 709.092 75.5687 705.42 100.198V100.287Z" fill="#3D8361"/>
<path id="Vector_100" d="M716.347 87.7491C718.228 87.7491 719.124 87.749 721.005 87.9282C724.497 63.12 727.722 38.3118 730.408 13.4141C728.617 13.4141 727.722 13.4141 725.93 13.5036C723.154 38.3118 719.751 63.0304 716.258 87.6595L716.347 87.7491Z" fill="#3D8361"/>
<path id="Vector_101" d="M729.691 75.2105H731.93C735.155 50.3128 738.11 25.415 740.439 0.427734H738.289C735.961 25.415 732.916 50.2232 729.691 75.121V75.2105Z" fill="#3D8361"/>
<path id="Vector_102" d="M739.453 75.48C740.797 75.48 741.513 75.48 742.856 75.48C745.901 50.4032 748.678 25.2367 750.827 0.0703125C749.573 0.0703125 748.857 0.0703125 747.603 0.159873C745.364 25.3263 742.588 50.4032 739.453 75.48Z" fill="#3D8361"/>
<path id="Vector_103" d="M751.006 75.8375H752.081C754.499 54.8804 756.738 33.8338 758.529 12.7871H757.544C755.753 33.8338 753.514 54.8804 751.095 75.8375H751.006Z" fill="#3D8361"/>
<path id="Vector_104" d="M760.5 62.8527C762.829 62.8527 763.993 62.8527 766.232 63.0318C768.292 42.7016 769.277 32.5813 770.799 12.6094C768.56 12.6094 767.486 12.6094 765.247 12.6989C763.635 32.6709 762.649 42.7016 760.5 62.9422V62.8527Z" fill="#3D8361"/>
<path id="Vector_105" d="M771.605 63.1205C773.307 63.1205 774.113 63.1205 775.815 63.1205C777.785 42.6112 778.68 32.4909 780.024 12.3398H775.904C774.471 32.4909 773.576 42.5216 771.516 63.0309L771.605 63.1205Z" fill="#3D8361"/>
<path id="Vector_106" d="M784.322 50.0447H786.113C787.367 34.8195 787.994 27.2964 788.89 12.3398H787.098C786.113 27.2964 785.576 34.8195 784.232 50.0447H784.322Z" fill="#3D8361"/>
<path id="Vector_107" d="M793.547 36.6997H799.458C800.174 26.848 800.443 21.9222 800.98 12.1602H795.159C794.622 21.9222 794.263 26.7585 793.547 36.6101V36.6997Z" fill="#3D8361"/>
<path id="Vector_108" d="M805.639 23.3552H809.669C809.938 18.8772 810.027 16.6382 810.296 12.1602H806.355C806.087 16.6382 805.997 18.8772 805.728 23.3552H805.639Z" fill="#3D8361"/>
<path id="Vector_109" d="M504.805 344.878C506.148 344.878 506.865 344.878 508.298 344.967C509.283 329.921 509.82 322.756 511.074 308.874C509.731 308.874 509.014 308.785 507.671 308.695C506.417 322.577 505.879 329.742 504.894 344.878H504.805Z" fill="#3D8361"/>
<path id="Vector_110" d="M516.27 345.236C517.702 345.236 518.509 345.236 519.942 345.326C520.389 338.519 520.568 335.205 521.106 328.667C519.673 328.667 518.956 328.578 517.434 328.488C516.986 335.026 516.717 338.34 516.27 345.146V345.236Z" fill="#3D8361"/>
<path id="Vector_111" d="M528.539 345.594H530.599C531.047 338.877 531.226 335.563 531.674 329.115C530.868 329.115 530.42 329.115 529.614 329.025C529.166 335.474 528.897 338.787 528.539 345.504V345.594Z" fill="#3D8361"/>
<path id="Vector_112" d="M539.465 345.952C540.808 345.952 541.525 345.952 542.958 346.042C543.316 339.414 543.585 336.19 544.032 329.742C542.689 329.742 541.973 329.652 540.54 329.562C540.092 336.011 539.823 339.235 539.465 345.952Z" fill="#3D8361"/>
<path id="Vector_113" d="M456.711 384.194H459.756C460.562 358.222 462.443 332.16 464.95 306.277C463.696 306.277 463.069 306.187 461.905 306.098C459.397 332.07 457.427 358.132 456.621 384.194H456.711Z" fill="#3D8361"/>
<path id="Vector_114" d="M468.891 397.538H470.862C470.593 382.224 471.041 371.566 472.653 347.385H470.682C469.07 371.566 468.623 382.313 468.891 397.538Z" fill="#3D8361"/>
<path id="Vector_115" d="M446.232 365.206H448.561C449.546 348.548 450.084 340.667 451.337 325.621C450.442 325.621 449.904 325.621 449.009 325.531C447.755 340.667 447.218 348.548 446.232 365.206Z" fill="#3D8361"/>
</g>
<g id="line_5">
<path id="Vector_116" d="M135 173.07L485 173.07" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="Vector_117" d="M487 178.07C489.766 178.07 492 175.836 492 173.07C492 170.304 489.766 168.07 487 168.07C484.234 168.07 482 170.304 482 173.07C482 175.836 484.234 178.07 487 178.07Z" fill="white"/>
</g>
<g id="Home NAmerica_Dot">
<g id="Europe_5">
<g id="bkg_5">
<rect id="Rectangle 11_5" x="339.461" y="131.57" width="164" height="82" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="NORTH AMERICA 8 Countries">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="354.461" y="158.888">NORTH&#10;</tspan><tspan x="354.461" y="177.888">AMERICA&#10;</tspan><tspan x="354.461" y="196.888">8 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="368.102" y="196.888">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_5">
<circle id="Pulse_5" cx="479.461" cy="172.57" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_5" cx="479.961" cy="173.07" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home NAmerica_Dot_2">
<g id="Europe_6">
<g id="bkg_6">
<rect id="Rectangle 11_6" x="27" y="131.57" width="164" height="82" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="NORTH AMERICA 8 Countries_2">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="42" y="158.888">NORTH&#10;</tspan><tspan x="42" y="177.888">AMERICA&#10;</tspan><tspan x="42" y="196.888">8 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="55.6412" y="196.888">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_6">
<circle id="Pulse_6" cx="167" cy="172.57" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_6" cx="167.5" cy="173.07" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
<g id="Asia">
<g id="Map_4">
<path id="Vector_118" d="M999.894 369.596H1006.88C1007.51 344.788 1007.95 319.98 1007.95 295.172C1005.18 295.261 1003.83 295.351 1001.06 295.53C1000.88 320.249 1000.52 344.967 999.805 369.686H999.894V369.596Z" fill="#3D8361"/>
<path id="Vector_119" d="M1013.95 353.924H1016.73C1017.09 336.28 1017.18 327.503 1017.27 310.039C1016.19 310.039 1015.66 310.039 1014.49 310.129C1014.49 327.503 1014.31 336.28 1013.87 353.924H1013.95Z" fill="#3D8361"/>
<path id="Vector_120" d="M1060.79 305.74H1062.59C1060.88 216.538 1053.45 128.142 1042.35 39.6562H1040.91C1051.93 128.142 1059.18 216.627 1060.79 305.829V305.74Z" fill="#3D8361"/>
<path id="Vector_121" d="M1072.17 305.292H1073.87C1071.72 216.18 1063.39 127.963 1051.12 39.7461H1049.78C1061.87 128.052 1070.02 216.269 1072.17 305.382V305.292Z" fill="#3D8361"/>
<path id="Vector_122" d="M1082.02 320.697C1084.17 320.697 1085.25 320.607 1087.31 320.518C1085.34 222.001 1074.77 124.829 1059.54 27.5661C1057.93 27.5661 1057.12 27.5661 1055.51 27.4766C1070.2 124.918 1080.23 222.18 1082.02 320.697Z" fill="#3D8361"/>
<path id="Vector_123" d="M1094.38 352.579H1098.05C1097.87 243.047 1085.87 135.754 1067.69 27.834H1064.91C1082.65 135.754 1094.29 243.226 1094.38 352.758V352.579Z" fill="#3D8361"/>
<path id="Vector_124" d="M1106.38 384.285H1107.9C1110.14 267.947 1098.05 154.474 1077.81 40.1055H1076.65C1096.71 154.563 1108.62 268.036 1106.38 384.375V384.285Z" fill="#3D8361"/>
<path id="Vector_125" d="M1117.04 411.6H1118.56C1123.04 285.768 1110.23 163.697 1086.77 40.2832H1085.6C1108.89 163.787 1121.52 285.857 1117.04 411.689V411.6Z" fill="#3D8361"/>
<path id="Vector_126" d="M1128.14 352.042H1133.7C1132.8 250.66 1119.82 151.785 1099.66 52.5527H1095.37C1114.8 151.875 1127.34 250.839 1128.14 352.221V352.042Z" fill="#3D8361"/>
<path id="Vector_127" d="M1128.5 411.421H1130.02C1130.2 406.853 1130.38 404.525 1130.56 399.957H1129.04C1128.86 404.525 1128.77 406.764 1128.5 411.421Z" fill="#3D8361"/>
<path id="Vector_128" d="M1140.06 335.295C1141.94 335.295 1142.83 335.295 1144.71 335.205C1142.3 239.555 1128.95 146.054 1108.35 52.6426H1104.77C1124.83 146.054 1137.82 239.734 1140.15 335.384H1140.06V335.295Z" fill="#3D8361"/>
<path id="Vector_129" d="M1150.09 318.547C1152.77 318.547 1154.12 318.458 1156.8 318.368C1152.77 228.271 1138.8 140.502 1118.11 52.8223C1115.96 52.8223 1114.89 52.8223 1112.83 52.8223C1132.44 140.86 1146.24 228.539 1150.09 318.727V318.547Z" fill="#3D8361"/>
<path id="Vector_130" d="M1164.06 318.188H1165.76C1161.46 228.091 1146.86 140.501 1125.19 53.0898H1123.85C1145.34 140.59 1159.76 228.27 1164.06 318.278V318.188Z" fill="#3D8361"/>
<path id="Vector_131" d="M1175.7 334.489H1177.94C1174.63 238.659 1158.69 145.875 1134.41 53.3594H1132.62C1156.63 145.965 1172.39 238.839 1175.61 334.668V334.489H1175.7Z" fill="#3D8361"/>
<path id="Vector_132" d="M1186.18 351.238H1190.93C1188.96 253.706 1173.46 159.4 1147.76 65.3613H1143.91C1169.07 159.489 1184.3 253.886 1186.18 351.417V351.238Z" fill="#3D8361"/>
<path id="Vector_133" d="M1196.66 384.105H1202.57C1204.54 274.931 1187.79 170.145 1157.52 65.5391C1155.64 65.5391 1154.65 65.5391 1152.77 65.5391C1182.33 170.325 1198.63 275.2 1196.66 384.284V384.105Z" fill="#3D8361"/>
<path id="Vector_134" d="M1210.09 384.106H1212.33C1214.39 266.244 1193.34 155.011 1158.33 42.9707H1156.54C1191.19 155.1 1212.06 266.334 1210 384.195L1210.09 384.106Z" fill="#3D8361"/>
<path id="Vector_135" d="M1220.75 397.092H1223.26C1228.63 279.141 1207.23 166.384 1171.13 54.6133H1169.16C1204.99 166.474 1226.12 279.32 1220.84 397.181L1220.75 397.092Z" fill="#3D8361"/>
<path id="Vector_136" d="M1231.94 316.309C1233.38 316.309 1234.09 316.309 1235.53 316.22C1229.17 226.122 1209.73 140.413 1180.63 55.0619C1179.46 55.0619 1178.83 55.0619 1177.76 54.8828C1206.42 140.323 1225.58 226.212 1231.94 316.309Z" fill="#3D8361"/>
<path id="Vector_137" d="M1232.39 397.003H1234.72C1235.71 382.225 1236.15 373.359 1236.06 353.477H1233.74C1233.74 373.359 1233.47 382.136 1232.39 397.003Z" fill="#3D8361"/>
<path id="Vector_138" d="M1244.22 315.951H1246.28C1239.56 225.853 1219.5 140.502 1189.31 55.5098H1187.61C1217.53 140.592 1237.59 226.032 1244.13 316.04H1244.22V315.951Z" fill="#3D8361"/>
<path id="Vector_139" d="M1255.41 315.682H1258.19C1251.47 229.346 1231.94 148.563 1203.02 67.1523C1202.12 67.1523 1201.67 67.1523 1200.69 67.1523C1229.35 148.652 1248.69 229.525 1255.32 315.861L1255.41 315.682Z" fill="#3D8361"/>
<path id="Vector_140" d="M1250.66 205.522C1252.72 205.522 1253.8 205.432 1255.86 205.343C1244.84 158.324 1230.87 112.737 1213.59 67.599C1211.79 67.599 1210.9 67.4199 1209.02 67.4199C1226.03 112.737 1239.74 158.413 1250.57 205.611L1250.66 205.522Z" fill="#3D8361"/>
<path id="Vector_141" d="M1265.44 298.664C1266.78 298.664 1267.5 298.664 1268.84 298.574C1267.32 279.767 1266.25 270.632 1263.56 252.988C1262.22 252.988 1261.59 252.988 1260.25 253.078C1262.84 270.721 1263.92 279.856 1265.44 298.664Z" fill="#3D8361"/>
<path id="Vector_142" d="M1236.15 112.201H1238.84C1232.3 93.5726 1228.9 84.7957 1222.27 67.9584C1221.29 67.9584 1220.75 67.9584 1219.76 67.7793C1226.39 84.6166 1229.7 93.4831 1236.24 112.112H1236.15V112.201Z" fill="#3D8361"/>
<path id="Vector_143" d="M1266.07 219.762H1268.58C1262.13 188.326 1253.8 157.159 1243.5 126.709H1241.17C1251.38 157.159 1259.62 188.326 1266.07 219.852V219.762Z" fill="#3D8361"/>
<path id="Vector_144" d="M1277.71 315.145C1279.41 315.145 1280.22 315.145 1281.92 315.055C1281.56 309.323 1281.38 306.547 1280.93 300.994C1279.23 300.994 1278.43 300.994 1276.72 301.084C1277.17 306.636 1277.35 309.502 1277.71 315.145Z" fill="#3D8361"/>
<path id="Vector_145" d="M1246.54 112.291H1248.69C1241.98 93.8414 1238.48 85.0645 1231.59 68.4062C1230.78 68.4062 1230.33 68.4062 1229.53 68.4062C1236.33 85.0645 1239.83 93.8414 1246.54 112.38V112.291Z" fill="#3D8361"/>
<path id="Vector_146" d="M1256.93 112.47H1258.72C1251.83 94.1996 1248.15 85.5123 1241.17 69.0332C1240.45 69.0332 1240.09 69.0332 1239.47 69.0332C1246.45 85.5123 1250.03 94.1996 1256.93 112.559V112.47Z" fill="#3D8361"/>
<path id="Vector_147" d="M1262.22 101.006H1264.63C1259.26 87.9299 1256.57 81.6607 1251.2 69.6596C1250.3 69.6596 1249.77 69.6596 1248.87 69.4805C1254.16 81.5711 1256.84 87.8403 1262.22 100.916V101.006Z" fill="#3D8361"/>
<path id="Vector_148" d="M1272.25 101.275C1273.32 101.275 1273.86 101.275 1275.02 101.275C1267.59 83.8105 1263.83 75.5709 1256.48 59.8979C1255.41 59.8979 1254.87 59.7188 1253.89 59.7188C1261.14 75.3918 1264.99 83.6313 1272.34 101.185L1272.25 101.275Z" fill="#3D8361"/>
<path id="Vector_149" d="M1292.76 125.007H1294.46C1287.2 106.736 1279.14 88.7349 1270.64 71.002C1270.01 71.002 1269.65 71.002 1269.02 71.002C1277.53 88.7349 1285.5 106.826 1292.76 125.096V125.007Z" fill="#3D8361"/>
<path id="Vector_150" d="M1292.94 102.081C1294.01 102.081 1294.46 102.081 1295.53 102.081C1289.8 89.3635 1286.85 83.363 1281.11 71.7201C1280.13 71.7201 1279.59 71.7201 1278.61 71.541C1284.34 83.1838 1287.2 89.2739 1292.94 101.991V102.081Z" fill="#3D8361"/>
<path id="Vector_151" d="M1308.16 137.277H1309.95C1306.46 128.32 1304.58 123.932 1300.91 115.424H1299.12C1302.79 123.932 1304.58 128.321 1308.07 137.366L1308.16 137.277Z" fill="#3D8361"/>
<path id="Vector_152" d="M1304.13 102.527H1305.12C1301.35 94.3772 1299.38 90.4366 1295.62 82.7344H1294.64C1298.4 90.4366 1300.37 94.3772 1304.13 102.527Z" fill="#3D8361"/>
<path id="Vector_153" d="M1312.91 102.977C1314.7 102.977 1315.68 103.156 1317.47 103.156C1313.62 95.0954 1311.65 91.2443 1307.8 83.6317C1306.01 83.4526 1305.12 83.4526 1303.32 83.2734C1307.18 90.8861 1309.15 94.8267 1313 102.887L1312.91 102.977Z" fill="#3D8361"/>
<path id="Vector_154" d="M1319.44 92.855C1320.25 92.855 1320.61 92.855 1321.42 92.855C1319.62 89.3622 1318.73 87.6605 1316.94 84.2572C1316.13 84.2572 1315.77 84.2572 1314.97 84.0781C1316.76 87.4814 1317.65 89.1831 1319.44 92.7655V92.855Z" fill="#3D8361"/>
<path id="Vector_155" d="M1270.45 190.566H1273.23C1267.77 168.982 1264.63 158.772 1258.27 139.248H1255.59C1261.95 158.772 1264.99 169.072 1270.45 190.656V190.566Z" fill="#3D8361"/>
<path id="Vector_156" d="M1277.08 176.505H1280.93C1276.55 161.011 1274.13 153.578 1269.29 139.248H1265.53C1270.37 153.667 1272.78 161.101 1277.08 176.595V176.505Z" fill="#3D8361"/>
<path id="Vector_157" d="M1287.74 176.236H1291.95C1288.99 166.294 1287.47 161.369 1284.34 151.965H1280.22C1283.35 161.458 1284.87 166.294 1287.74 176.325V176.236Z" fill="#3D8361"/>
<path id="Vector_158" d="M1313.8 233.375H1316.67C1313 214.925 1308.34 196.386 1302.88 178.385H1300.1C1305.56 196.386 1310.13 214.925 1313.8 233.375Z" fill="#3D8361"/>
<path id="Vector_159" d="M1313 189.671C1315.24 189.671 1316.4 189.671 1318.64 189.581C1317.3 184.924 1316.67 182.685 1315.24 178.207H1309.68C1311.03 182.775 1311.74 185.014 1313.09 189.671H1313Z" fill="#3D8361"/>
<path id="Vector_160" d="M1323.3 233.107C1325.89 233.107 1327.15 233.017 1329.74 232.927C1328.67 227.912 1328.13 225.404 1326.97 220.479C1324.37 220.479 1323.12 220.568 1320.52 220.658C1321.59 225.583 1322.22 228.091 1323.21 233.107H1323.3Z" fill="#3D8361"/>
<path id="Vector_161" d="M1280.22 234.361H1282.55C1281.56 229.346 1281.11 226.838 1280.13 221.912H1277.8C1278.78 226.838 1279.32 229.346 1280.22 234.451V234.361Z" fill="#3D8361"/>
<path id="Vector_162" d="M1293.47 249.317C1295 249.317 1295.8 249.317 1297.23 249.227C1296.34 244.033 1295.89 241.525 1295 236.42C1293.47 236.42 1292.76 236.42 1291.23 236.509C1292.22 241.614 1292.67 244.122 1293.47 249.317Z" fill="#3D8361"/>
<path id="Vector_163" d="M1305.12 248.959C1306.37 248.959 1307 248.959 1308.34 248.87C1307.44 243.675 1307 241.167 1306.01 236.062C1304.76 236.062 1304.13 236.063 1302.79 236.152C1303.77 241.167 1304.22 243.765 1305.12 248.959Z" fill="#3D8361"/>
<path id="Vector_164" d="M1289.8 349.805H1295.53C1295.53 343.804 1295.35 340.849 1295.17 335.027C1292.84 335.027 1291.68 335.027 1289.44 335.117C1289.62 340.938 1289.71 343.894 1289.8 349.894V349.805Z" fill="#3D8361"/>
<path id="Vector_165" d="M1289.8 396.644H1292.49C1293.2 387.24 1293.65 384.553 1293.92 371.029H1291.23C1290.97 384.463 1290.61 387.24 1289.8 396.644Z" fill="#3D8361"/>
<path id="Vector_166" d="M1300.91 409.362H1302.07C1303.06 399.868 1303.41 395.211 1304.04 385.986H1302.88C1302.25 395.211 1301.89 399.868 1300.91 409.362Z" fill="#3D8361"/>
<path id="Vector_167" d="M1184.48 424.407H1186.63C1186.99 419.84 1187.17 417.601 1187.52 413.033H1185.37C1185.02 417.511 1184.93 419.84 1184.48 424.407Z" fill="#3D8361"/>
<path id="Vector_168" d="M1193.08 438.02C1195.14 438.02 1196.21 438.02 1198.36 437.93C1198.81 433.363 1199.08 431.034 1199.43 426.467C1197.38 426.467 1196.3 426.467 1194.15 426.556C1193.79 431.124 1193.52 433.452 1193.08 438.02Z" fill="#3D8361"/>
<path id="Vector_169" d="M1204.72 451.545H1206.51C1208.39 435.783 1209.11 427.991 1210.36 412.766H1208.57C1207.41 427.991 1206.6 435.783 1204.81 451.545H1204.72Z" fill="#3D8361"/>
<path id="Vector_170" d="M1212.42 479.039H1213.67C1216.9 457.545 1218.24 446.887 1220.21 426.109H1218.87C1216.9 446.887 1215.55 457.545 1212.33 479.129L1212.42 479.039Z" fill="#3D8361"/>
<path id="Vector_171" d="M1225.59 464.62H1227.02C1227.65 459.963 1228 457.724 1228.63 453.066H1227.2C1226.57 457.634 1226.3 459.963 1225.68 464.62H1225.59Z" fill="#3D8361"/>
<path id="Vector_172" d="M1235.88 464.262C1237.32 464.262 1238.03 464.262 1239.47 464.083C1240.99 453.962 1241.62 448.947 1242.87 439.006C1241.44 439.006 1240.72 439.006 1239.29 439.095C1238.12 449.037 1237.41 454.052 1235.97 464.172L1235.88 464.262Z" fill="#3D8361"/>
<path id="Vector_173" d="M1246.99 463.814C1248.51 463.814 1249.32 463.814 1250.84 463.635C1253.26 448.141 1254.24 440.438 1255.86 425.303H1252.01C1250.39 440.438 1249.32 448.141 1246.99 463.724V463.814Z" fill="#3D8361"/>
<path id="Vector_174" d="M1259.53 463.367H1260.96C1264.28 442.499 1265.62 432.11 1267.5 411.959H1266.07C1264.1 432.11 1262.84 442.409 1259.53 463.367Z" fill="#3D8361"/>
<path id="Vector_175" d="M1269.65 462.918C1271.17 462.918 1271.98 462.918 1273.5 462.739C1276.9 441.961 1278.25 431.661 1280.22 411.689H1276.28C1274.31 431.751 1272.96 442.05 1269.56 462.828L1269.65 462.918Z" fill="#3D8361"/>
<path id="Vector_176" d="M1278.16 476.084C1280.04 476.084 1280.93 476.084 1282.82 475.905C1285.68 460.501 1286.94 452.888 1289 437.842C1287.11 437.842 1286.13 437.842 1284.25 437.931C1282.19 452.977 1280.93 460.68 1278.16 476.084Z" fill="#3D8361"/>
<path id="Vector_177" d="M1292.94 448.767C1295.8 448.678 1297.14 448.678 1300.01 448.588C1300.73 444.11 1301 441.961 1301.62 437.572C1298.76 437.572 1297.32 437.662 1294.55 437.751C1293.92 442.14 1293.56 444.379 1292.94 448.857V448.767Z" fill="#3D8361"/>
<path id="Vector_178" d="M1315.06 461.306C1316.67 461.306 1317.56 461.306 1319.18 461.127C1319.98 456.739 1320.34 454.5 1321.06 450.111C1319.45 450.111 1318.55 450.111 1316.94 450.201C1316.22 454.589 1315.86 456.828 1315.06 461.217V461.306Z" fill="#3D8361"/>
<path id="Vector_179" d="M1327.86 460.858H1329.21C1330.01 456.47 1330.37 454.231 1331.18 449.932H1329.83C1329.12 454.32 1328.67 456.47 1327.86 460.858Z" fill="#3D8361"/>
<path id="Vector_180" d="M990.133 369.686H993.447C994.969 304.576 995.148 239.466 993.715 174.355L990.67 174.535C991.924 239.555 991.655 304.576 990.133 369.686Z" fill="#3D8361"/>
<path id="Vector_181" d="M1002.67 277.709C1004.19 277.709 1004.91 277.619 1006.43 277.529C1006.25 237.765 1005.45 198.179 1004.01 158.504L1000.52 158.952C1001.86 198.537 1002.49 238.123 1002.67 277.709Z" fill="#3D8361"/>
<path id="Vector_182" d="M1010.55 153.308C1012.52 199.611 1013.69 245.913 1013.87 292.305C1015.57 292.305 1016.37 292.216 1018.17 292.126C1017.9 245.734 1016.64 199.342 1014.49 153.129L1010.64 153.398H1010.55V153.308Z" fill="#3D8361"/>
<path id="Vector_183" d="M1019.6 139.696C1023.63 210.986 1025.24 282.276 1024.17 353.835C1026.31 353.835 1027.48 353.835 1029.63 353.745C1030.61 282.097 1028.73 210.718 1024.34 139.428L1019.6 139.696Z" fill="#3D8361"/>
<path id="Vector_184" d="M1029.45 115.246C1035.09 189.312 1037.96 263.468 1037.6 337.803H1039.75C1040.11 263.378 1037.06 189.223 1031.24 115.156H1029.45V115.246Z" fill="#3D8361"/>
<path id="Vector_185" d="M1040.2 95.9899L1036.88 96.1691C1043.33 166.026 1047.36 235.883 1048.26 306.188C1049.87 306.188 1050.68 306.098 1052.29 306.009C1051.21 235.704 1047 165.847 1040.29 95.9004L1040.2 95.9899Z" fill="#3D8361"/>
<path id="Vector_186" d="M981.714 360.82C982.52 298.934 983.057 237.048 982.43 175.162H980.46C980.997 237.138 980.46 299.024 979.564 360.91H981.714V360.82Z" fill="#3D8361"/>
<path id="Vector_187" d="M967.742 339.595H970.876C972.041 284.963 972.668 230.421 972.399 175.789L969.444 175.968C969.623 230.51 968.906 285.053 967.652 339.595H967.742Z" fill="#3D8361"/>
<path id="Vector_188" d="M956.277 309.95C957.979 309.95 958.875 309.86 960.576 309.77C961.203 280.843 961.651 251.915 962.009 223.076C960.397 223.166 959.502 223.255 957.889 223.345C957.442 252.183 956.904 281.111 956.277 309.95Z" fill="#3D8361"/>
<path id="Vector_189" d="M944.277 295.62C946.695 295.53 947.86 295.441 950.278 295.351C950.815 271.528 951.353 247.616 951.8 223.703C949.472 223.882 948.308 223.882 945.979 224.061C945.442 247.884 944.904 271.707 944.277 295.62Z" fill="#3D8361"/>
<path id="Vector_190" d="M935.59 237.047C937.112 236.957 937.829 236.867 939.351 236.778C939.62 225.941 939.799 220.568 939.978 209.82C938.456 209.91 937.739 209.999 936.306 210.089C936.038 220.836 935.859 226.21 935.59 237.047Z" fill="#3D8361"/>
</g>
<g id="line_6">
<path id="line_7" d="M116 218.004H1122" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="circle_3" d="M1123.63 223.267C1126.19 223.267 1128.26 221.198 1128.26 218.636C1128.26 216.073 1126.19 214.004 1123.63 214.004C1121.07 214.004 1119 216.073 1119 218.636C1119 221.198 1121.07 223.267 1123.63 223.267Z" fill="white"/>
</g>
<g id="Home Asia_Dot">
<g id="Europe_7">
<g id="bkg_7">
<rect id="Rectangle 11_7" x="982.705" y="187.637" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="ASIA 24 Countries">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="997.705" y="214.955">ASIA&#10;</tspan><tspan x="997.705" y="233.955">24 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="1021.12" y="233.955">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_7">
<circle id="Pulse_7" cx="1122.71" cy="218.637" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_7" cx="1123.21" cy="219.137" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home Asia_Dot_2">
<g id="Europe_8">
<g id="bkg_8">
<rect id="Rectangle 11_8" x="8.5" y="187.637" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="ASIA 24 Countries_2">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="23.5" y="214.955">ASIA&#10;</tspan><tspan x="23.5" y="233.955">24 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="46.915" y="233.955">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_8">
<circle id="Pulse_8" cx="148.5" cy="218.637" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_8" cx="149" cy="219.137" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
<g id="Africa">
<g id="Map_5">
<path id="Vector_191" d="M996.043 564.749H997.834C998.998 547.016 999.536 538.15 1000.43 520.596H998.64C997.745 538.239 997.297 547.106 996.133 564.749H996.043Z" fill="#3D8361"/>
<path id="Vector_192" d="M982.967 596.632C983.862 596.632 984.31 596.632 985.295 596.453C986.549 578.72 987.087 569.764 988.072 552.031C987.087 552.031 986.639 552.031 985.654 552.031C984.668 569.764 984.131 578.72 982.967 596.453V596.632Z" fill="#3D8361"/>
<path id="Vector_193" d="M972.129 597.259C973.204 597.259 973.741 597.259 974.816 597.08C975.174 591.885 975.264 589.198 975.622 584.004C974.547 584.004 974.01 584.004 972.935 584.183C972.666 589.467 972.487 592.064 972.129 597.259Z" fill="#3D8361"/>
<path id="Vector_194" d="M1001.24 412.586H1004.73C1004.73 402.018 1004.91 396.913 1004.91 386.703H1001.33C1001.33 396.913 1001.33 402.107 1001.15 412.586H1001.24Z" fill="#3D8361"/>
<path id="Vector_195" d="M989.953 441.962H992.102C992.55 419.214 992.64 408.019 992.64 386.793H990.401C990.401 408.108 990.401 419.214 989.863 442.052L989.953 441.962Z" fill="#3D8361"/>
<path id="Vector_196" d="M964.338 472.502C966.935 472.502 968.279 472.502 970.876 472.502C971.592 439.185 971.682 405.779 971.861 372.463H965.233C965.054 405.869 964.965 439.185 964.338 472.591V472.502Z" fill="#3D8361"/>
<path id="Vector_197" d="M952.248 550.776C953.591 550.776 954.308 550.776 955.651 550.776C958.069 481.367 957.711 411.868 959.413 342.459C957.98 342.459 957.263 342.459 955.83 342.549C954.129 412.047 954.487 481.456 952.158 550.955L952.248 550.776Z" fill="#3D8361"/>
<path id="Vector_198" d="M964.338 550.418H965.771C966.219 538.865 966.487 533.044 966.935 521.58H965.502C965.054 533.044 964.875 538.865 964.427 550.418H964.338Z" fill="#3D8361"/>
<path id="Vector_199" d="M940.066 566.988C941.857 566.988 942.753 566.988 944.544 566.809C947.41 482.085 947.052 397.451 949.112 312.727C947.231 312.727 946.246 312.816 944.365 312.906C942.216 397.63 942.663 482.264 939.977 566.988H940.066Z" fill="#3D8361"/>
<path id="Vector_200" d="M940.426 598.692H941.859C942.038 593.408 942.217 590.811 942.396 585.438H940.963C940.784 590.722 940.694 593.408 940.426 598.692Z" fill="#3D8361"/>
<path id="Vector_201" d="M927.08 630.844C928.602 630.844 929.408 630.844 930.931 630.665C935.767 510.027 935.23 389.39 938.544 268.752C936.931 268.842 936.125 268.931 934.424 269.021C930.931 389.658 931.558 510.296 926.99 630.844H927.08Z" fill="#3D8361"/>
<path id="Vector_202" d="M915.348 647.054C917.228 647.054 918.124 647.054 920.005 646.875C924.393 525.969 923.408 405.063 927.17 284.156C925.199 284.246 924.125 284.335 922.154 284.425C918.303 405.242 919.467 526.238 915.437 647.054H915.348Z" fill="#3D8361"/>
<path id="Vector_203" d="M905.318 663.086H907.557C911.677 532.149 910.244 401.123 914.812 270.186C913.827 270.186 913.379 270.186 912.394 270.365C907.647 401.302 909.259 532.328 905.318 663.265V663.086Z" fill="#3D8361"/>
<path id="Vector_204" d="M894.123 663.534C895.377 663.534 896.004 663.534 897.347 663.534C900.661 532.687 898.78 401.66 903.885 270.812C902.542 270.812 901.825 270.902 900.482 270.992C895.287 401.75 897.258 532.687 894.213 663.624L894.123 663.534Z" fill="#3D8361"/>
<path id="Vector_205" d="M882.928 663.803C884.54 663.803 885.346 663.803 886.868 663.803C889.376 533.045 887.227 402.108 892.69 271.439C890.988 271.529 890.182 271.619 888.48 271.708C882.928 402.287 885.167 533.224 882.928 663.892V663.803Z" fill="#3D8361"/>
<path id="Vector_206" d="M871.822 632.367H877.106C878.539 512.267 876.479 391.987 881.853 271.977C879.614 272.066 878.539 272.156 876.39 272.335C870.927 392.256 873.076 512.446 871.912 632.456H871.822V632.367Z" fill="#3D8361"/>
<path id="Vector_207" d="M862.238 584.361H864.836C865.462 480.471 863.85 376.492 868.776 272.691C867.701 272.691 867.164 272.781 866.179 272.871C861.253 376.581 862.865 480.561 862.328 584.361H862.238Z" fill="#3D8361"/>
<path id="Vector_208" d="M851.76 473.128H852.924C853.103 401.57 853.282 330.369 857.133 258.9C856.686 258.9 856.417 258.99 855.969 258.9C852.118 330.369 851.939 401.57 851.76 473.039V473.128Z" fill="#3D8361"/>
<path id="Vector_209" d="M839.939 427.632H841.462C841.731 366.015 843.164 304.666 846.836 243.138C846.298 243.138 845.94 243.049 845.403 242.959C841.641 304.576 840.208 365.925 839.939 427.632Z" fill="#3D8361"/>
<path id="Vector_210" d="M828.117 427.722H829.819C830.267 365.656 831.789 303.86 835.64 241.884C835.013 241.884 834.655 241.795 834.028 241.705C830.087 303.77 828.565 365.567 828.117 427.722Z" fill="#3D8361"/>
<path id="Vector_211" d="M815.758 413.033H818.982C819.609 355.446 821.4 298.127 825.162 240.63C823.908 240.451 823.281 240.451 822.027 240.271C818.176 297.859 816.474 355.267 815.758 413.033Z" fill="#3D8361"/>
<path id="Vector_212" d="M803.219 413.034H808.145C808.861 359.925 810.294 307.084 813.697 254.065C811.817 253.886 810.831 253.706 808.951 253.527C805.547 306.726 804.025 359.746 803.219 413.034Z" fill="#3D8361"/>
<path id="Vector_213" d="M792.293 413.032H795.786C796.681 359.475 798.204 306.187 801.697 252.72C800.353 252.54 799.726 252.54 798.383 252.361C794.801 306.008 793.278 359.386 792.293 413.032Z" fill="#3D8361"/>
<path id="Vector_214" d="M780.828 427.72H783.515C784.321 368.879 785.933 310.128 790.053 251.376C788.978 251.287 788.53 251.197 787.456 251.107C783.336 309.948 781.724 368.7 780.828 427.72Z" fill="#3D8361"/>
<path id="Vector_215" d="M769.723 427.72H771.335C772.141 373.357 773.574 319.173 777.156 264.9C776.529 264.9 776.261 264.81 775.634 264.721C772.051 318.994 770.618 373.268 769.812 427.631L769.723 427.72Z" fill="#3D8361"/>
<path id="Vector_216" d="M757.902 412.943H760.231C760.947 373.268 761.664 333.503 764.082 293.917C763.186 293.917 762.739 293.828 761.843 293.738C759.425 333.413 758.619 373.268 757.902 413.033V412.943Z" fill="#3D8361"/>
<path id="Vector_217" d="M745.273 384.463H750.826C751.274 359.117 751.99 333.772 753.423 308.426C751.184 308.247 750.11 308.158 747.96 307.979C746.527 333.414 745.811 358.938 745.363 384.463H745.273Z" fill="#3D8361"/>
<path id="Vector_218" d="M751.453 274.931C752.528 275.021 752.976 275.11 754.05 275.2C754.409 270.184 754.588 267.677 754.946 262.661C753.961 262.572 753.423 262.482 752.349 262.393C751.99 267.408 751.811 269.916 751.453 274.931Z" fill="#3D8361"/>
<path id="Vector_219" d="M978.488 442.14H980.638C980.906 422.347 981.175 402.465 981.444 382.672H979.294C979.026 402.465 978.757 422.347 978.488 442.14Z" fill="#3D8361"/>
</g>
<g id="line_8">
<path id="Line" d="M101 375.32L912 375.32" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="circle_4" d="M912 381.32C914.766 381.32 917 379.086 917 376.32C917 373.554 914.766 371.32 912 371.32C909.234 371.32 907 373.554 907 376.32C907 379.086 909.234 381.32 912 381.32Z" fill="white"/>
</g>
<g id="Home Africa_Dot">
<g id="Europe_9">
<g id="bkg_9">
<rect id="Rectangle 11_9" x="773.439" y="345.32" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="AFRICA 20 Countries">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="788.439" y="372.638">AFRICA&#10;</tspan><tspan x="788.439" y="391.638">20 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="812.276" y="391.638">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_9">
<circle id="Pulse_9" cx="913.439" cy="376.32" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_9" cx="913.939" cy="376.82" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home Africa_Dot_2">
<g id="Europe_10">
<g id="bkg_10">
<rect id="Rectangle 11_10" x="19.5" y="345.32" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="AFRICA 20 Countries_2">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="34.5" y="372.638">AFRICA&#10;</tspan><tspan x="34.5" y="391.638">20 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="58.3369" y="391.638">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_10">
<circle id="Pulse_10" cx="159.5" cy="376.32" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_10" cx="160" cy="376.82" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
<g id="Europe_11">
<g id="Map_6">
<path id="Vector_220" d="M977.414 50.5823H978.758C978.579 46.1939 978.399 43.9549 978.22 39.5664H976.877C977.056 43.9549 977.235 46.1939 977.414 50.5823Z" fill="#3D8361"/>
<path id="Vector_221" d="M989.773 65.8982H987.086C988.608 97.5129 989.683 129.128 990.4 160.742L993.355 160.563C992.549 128.949 991.385 97.4234 989.773 65.8086V65.8982Z" fill="#3D8361"/>
<path id="Vector_222" d="M999.535 65.7185H996.4C997.923 92.2283 999.177 118.738 1000.16 145.158L1003.57 144.711C1002.49 118.38 1001.15 91.9596 999.535 65.6289V65.7185Z" fill="#3D8361"/>
<path id="Vector_223" d="M1008.13 52.3747H1004.64C1006.88 83.1834 1008.67 113.903 1010.1 144.711L1013.95 144.443C1012.43 113.723 1010.46 83.0043 1008.13 52.2852V52.3747Z" fill="#3D8361"/>
<path id="Vector_224" d="M1017.81 52.2852H1013.51C1015.57 76.8247 1017.27 101.364 1018.79 125.904L1023.45 125.635C1021.84 101.185 1019.96 76.7351 1017.81 52.2852Z" fill="#3D8361"/>
<path id="Vector_225" d="M1025.69 52.1953H1023.99C1025.69 69.7491 1027.21 87.3029 1028.64 104.767H1030.43C1029 87.1238 1027.48 69.6596 1025.69 52.1953Z" fill="#3D8361"/>
<path id="Vector_226" d="M1035.63 52.1953H1032.4C1033.75 64.5546 1034.91 76.8244 1036.17 89.1837L1039.48 89.0046C1038.32 76.7348 1036.97 64.4651 1035.63 52.1953Z" fill="#3D8361"/>
<path id="Vector_227" d="M979.742 66.1657H977.951C979.205 97.9596 979.921 129.664 980.28 161.458H982.25C981.802 129.574 980.996 97.8701 979.742 66.0762V66.1657Z" fill="#3D8361"/>
<path id="Vector_228" d="M768.918 89.8998C770.62 89.8998 771.426 89.8998 773.127 90.0789C773.575 85.6009 773.844 83.2724 774.292 78.7944C772.59 78.7944 771.784 78.7944 770.082 78.6152C769.634 83.0932 769.366 85.3323 768.918 89.8103V89.8998Z" fill="#3D8361"/>
<path id="Vector_229" d="M779.217 90.4369C781.098 90.4369 781.993 90.616 783.874 90.7056C784.322 86.138 784.501 83.899 784.949 79.3315C783.068 79.3315 782.172 79.3315 780.292 79.1523C779.844 83.6304 779.665 85.9589 779.217 90.4369Z" fill="#3D8361"/>
<path id="Vector_230" d="M795.517 79.7787C793.636 79.7787 792.651 79.5996 790.77 79.5996C790.322 84.1672 790.143 86.4062 789.695 90.9738C791.576 90.9738 792.561 91.1529 794.532 91.2424C794.979 86.6749 795.158 84.3463 795.517 79.7787Z" fill="#3D8361"/>
<path id="Vector_231" d="M853.911 97.2441C853.284 107.812 852.926 113.096 852.299 123.664C853.911 123.754 854.627 123.844 856.239 124.023C856.956 113.365 857.225 108.081 857.852 97.5128C856.239 97.5128 855.523 97.3337 853.911 97.2441Z" fill="#3D8361"/>
<path id="Vector_232" d="M809.757 122.59C808.861 132.979 808.413 138.173 807.518 148.562C808.324 148.562 808.771 148.652 809.577 148.741C810.473 138.263 810.921 133.068 811.816 122.769C811.01 122.769 810.563 122.679 809.757 122.59Z" fill="#3D8361"/>
<path id="Vector_233" d="M810.652 236.42C812.175 236.599 812.891 236.688 814.324 236.867C817.19 199.162 820.325 161.368 823.28 123.663C821.847 123.574 821.131 123.484 819.698 123.395C816.563 161.099 813.428 198.715 810.562 236.42H810.652Z" fill="#3D8361"/>
<path id="Vector_234" d="M799.009 235.076C800.801 235.255 801.696 235.435 803.487 235.614C804.741 219.045 805.458 210.716 806.801 194.326C805.01 194.147 804.114 194.058 802.323 193.789C800.89 210.179 800.263 218.418 798.92 234.987L799.009 235.076Z" fill="#3D8361"/>
<path id="Vector_235" d="M787.994 233.823C789.606 234.002 790.502 234.091 792.114 234.271C793.457 217.612 794.174 209.373 795.607 193.073C793.995 192.894 793.189 192.804 791.577 192.625C790.144 208.925 789.427 217.165 788.084 233.823H787.994Z" fill="#3D8361"/>
<path id="Vector_236" d="M824.535 208.566C825.52 208.656 826.058 208.745 827.043 208.835C828.744 186.445 829.64 175.339 831.342 153.218C830.357 153.128 829.819 153.039 828.834 152.949C827.132 175.071 826.237 186.176 824.535 208.566Z" fill="#3D8361"/>
<path id="Vector_237" d="M835.283 209.821C836.716 210.001 837.432 210.09 838.776 210.269C840.388 187.879 841.194 176.684 842.806 154.384C841.463 154.205 840.746 154.205 839.313 154.025C837.701 176.236 836.805 187.431 835.193 209.821H835.283Z" fill="#3D8361"/>
<path id="Vector_238" d="M848.537 196.656C849.164 196.656 849.433 196.746 849.97 196.835C851.134 180.267 851.672 171.937 852.836 155.458C852.299 155.458 851.94 155.369 851.403 155.279C850.239 171.758 849.701 180.087 848.537 196.656Z" fill="#3D8361"/>
<path id="Vector_239" d="M861.522 141.576C860 165.22 858.388 188.774 856.865 212.418C858.925 212.687 860 212.597 862.149 212.418C863.672 188.774 865.194 165.22 866.717 141.576C864.657 141.666 863.582 141.755 861.522 141.576Z" fill="#3D8361"/>
<path id="Vector_240" d="M876.48 69.0326C874.241 121.604 870.927 174.176 867.703 226.659C869.584 226.569 870.569 226.48 872.36 226.39C875.495 173.908 878.629 121.425 880.779 68.8535C879.077 68.8535 878.182 68.8535 876.48 68.8535V69.0326Z" fill="#3D8361"/>
<path id="Vector_241" d="M866.181 124.649C867.166 108.17 867.614 99.9308 868.42 83.6309H866.36C865.554 99.9308 865.106 108.17 864.121 124.649H866.181Z" fill="#3D8361"/>
<path id="Vector_242" d="M887.137 94.8254H889.197C889.644 84.3469 889.824 79.0628 890.092 68.6738H888.122C887.764 79.0628 887.585 84.3469 887.137 94.8254Z" fill="#3D8361"/>
<path id="Vector_243" d="M902.721 54.2539C900.302 54.2539 899.138 54.2539 896.631 54.433C896.451 64.7325 896.272 69.9269 895.914 80.3159C898.422 80.3159 899.586 80.1368 902.094 80.1368C902.362 69.7478 902.452 64.6429 902.631 54.3435L902.721 54.2539Z" fill="#3D8361"/>
<path id="Vector_244" d="M902 239.197C903.702 239.108 904.597 239.018 906.299 238.928C908.896 177.311 911.493 115.783 912.479 54.0762H908.627C907.463 115.783 904.776 177.401 902 239.108V239.197Z" fill="#3D8361"/>
<path id="Vector_245" d="M896.451 108.708C897.795 108.708 898.511 108.708 899.854 108.529C900.034 103.782 900.123 101.364 900.302 96.6172C898.959 96.6172 898.332 96.6172 896.899 96.7963C896.72 101.543 896.63 103.961 896.451 108.708Z" fill="#3D8361"/>
<path id="Vector_246" d="M890.361 225.225C892.332 225.135 893.227 225.045 895.198 224.866C896.81 191.64 898.422 158.502 899.765 125.275C897.974 125.365 896.989 125.455 895.198 125.544C893.765 158.771 892.063 191.998 890.361 225.225Z" fill="#3D8361"/>
<path id="Vector_247" d="M880.6 225.853C881.227 225.853 881.585 225.853 882.212 225.763C883.734 197.373 885.346 168.893 886.779 140.502C886.152 140.502 885.884 140.502 885.257 140.592C883.734 169.072 882.212 197.462 880.6 225.853Z" fill="#3D8361"/>
<path id="Vector_248" d="M913.02 209.195C915.438 209.016 916.602 208.926 919.02 208.837C920.632 161.818 922.244 114.798 922.602 67.7793C920.453 67.7793 919.378 67.7793 917.229 67.9584C916.602 115.067 914.9 162.176 913.109 209.284H913.02V209.195Z" fill="#3D8361"/>
<path id="Vector_249" d="M912.842 238.48C914.454 238.39 915.17 238.301 916.782 238.211C916.962 233.285 917.051 230.867 917.23 225.941C915.618 226.031 914.902 226.121 913.29 226.21C913.11 231.136 913.021 233.554 912.842 238.48Z" fill="#3D8361"/>
<path id="Vector_250" d="M924.484 237.673C925.827 237.673 926.454 237.584 927.708 237.494C927.887 232.569 927.977 230.15 928.066 225.225C926.723 225.225 926.096 225.314 924.842 225.404C924.663 230.33 924.574 232.748 924.395 237.673H924.484Z" fill="#3D8361"/>
<path id="Vector_251" d="M936.037 193.074C938.007 192.984 938.993 192.895 941.052 192.716C941.769 160.116 942.217 127.516 942.217 94.916C940.336 94.916 939.44 94.916 937.56 95.0951C937.381 127.785 936.754 160.385 936.037 193.074Z" fill="#3D8361"/>
<path id="Vector_252" d="M926.992 179.102C927.709 179.102 928.067 179.102 928.873 179.012C929.858 141.845 930.485 104.677 930.754 67.5098H929.052C928.783 104.767 928.067 141.934 927.082 179.102H926.992Z" fill="#3D8361"/>
<path id="Vector_253" d="M951.442 177.58C951.8 145.249 951.979 113.007 951.442 80.6758C950.098 80.6758 949.471 80.6758 948.128 80.6758C948.396 113.007 948.128 145.338 947.77 177.67C949.202 177.58 949.919 177.58 951.352 177.401L951.442 177.58Z" fill="#3D8361"/>
<path id="Vector_254" d="M959.502 191.55C960.219 191.55 960.488 191.55 961.204 191.461C961.383 154.383 961.204 117.394 960.577 80.3164H959.055C959.592 117.394 959.682 154.383 959.502 191.461V191.55Z" fill="#3D8361"/>
<path id="Vector_255" d="M970.07 52.9121H967.473C968.637 89.3631 969.264 125.725 969.443 162.176L972.309 161.996C972.04 125.635 971.324 89.2736 969.98 52.9121H970.07Z" fill="#3D8361"/>
<path id="Vector_256" d="M870.659 38.4922C870.838 33.835 870.838 31.4169 870.927 26.7598H867.972C867.972 31.4169 867.793 33.7455 867.703 38.4922H870.659Z" fill="#3D8361"/>
</g>
<g id="line_9">
<path id="line_10" d="M60 194.25H903" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="circld" d="M906.82 197.89C908.38 197.89 909.64 196.63 909.64 195.07C909.64 193.51 908.38 192.25 906.82 192.25C905.26 192.25 904 193.51 904 195.07C904 196.63 905.26 197.89 906.82 197.89Z" fill="white"/>
</g>

<g id="Home Europe_Dot">
<g id="Europe_12">
<g id="bkg_11">
<rect id="Rectangle 11_11" x="766" y="164.07" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="EUROPE 26 Countries">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="781" y="191.388">EUROPE&#10;</tspan><tspan x="781" y="210.388">26 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="804.384" y="210.388">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_12">
<circle id="Pulse_12" cx="906" cy="195.07" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_12" cx="906.5" cy="195.57" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home Europe_Dot_2">
<g id="Europe_13">
<g id="bkg_12">
<rect id="Rectangle 11_12" x="27" y="164.07" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="EUROPE 26 Countries_2">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="bold" letter-spacing="-0.02em"><tspan x="42" y="191.388">EUROPE&#10;</tspan><tspan x="42" y="210.388">26 </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="16" font-weight="500" letter-spacing="-0.02em"><tspan x="65.3838" y="210.388">Countries</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_13">
<circle id="Pulse_13" cx="167" cy="195.07" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_13" cx="167.5" cy="195.57" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
</g>
</svg>


              <?php
          }  else { ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="1340" height="769" viewBox="0 0 1340 769" fill="none">
<g id="Map-new">
<g id="South America">
<g id="Map">
<path id="Vector" d="M452.907 411.171H456.848C456.669 406.603 456.579 404.275 456.489 399.797H452.549C452.638 404.275 452.728 406.603 452.907 411.171Z" fill="#3D8361"/>
<path id="Vector_2" d="M464.013 411.261H468.849C468.67 406.693 468.67 404.364 468.58 399.797H463.744C463.744 404.364 463.923 406.603 464.102 411.171L464.013 411.261Z" fill="#3D8361"/>
<path id="Vector_3" d="M490.074 527.152C490.97 527.152 491.417 527.152 492.313 527.152C484.969 484.79 480.312 442.875 478.879 399.797H476.461C477.894 442.786 482.641 484.7 489.985 526.972L490.074 527.152Z" fill="#3D8361"/>
<path id="Vector_4" d="M474.133 497.059H475.745C472.163 474.489 470.819 463.384 469.028 441.531H467.416C469.207 463.294 470.551 474.489 474.223 496.969H474.133V497.059Z" fill="#3D8361"/>
<path id="Vector_5" d="M503.868 542.646C504.763 542.646 505.211 542.646 506.017 542.646C496.524 490.522 490.882 439.293 490.344 386.273H488.016C488.553 439.293 494.195 490.432 503.868 542.556V542.646Z" fill="#3D8361"/>
<path id="Vector_6" d="M517.928 558.408C518.555 558.408 518.913 558.408 519.54 558.408C508.613 501.269 502.165 444.577 501.717 386.363H500.016C500.463 444.577 506.912 501.18 518.017 558.319H517.928V558.408Z" fill="#3D8361"/>
<path id="Vector_7" d="M565.306 693.376C566.381 693.555 566.918 693.555 567.993 693.734C533.602 594.054 514.794 491.955 514.167 386.453H510.764C511.48 491.955 530.646 593.875 565.395 693.376H565.306Z" fill="#3D8361"/>
<path id="Vector_8" d="M590.293 737.171C591.457 737.35 592.084 737.44 593.248 737.619C549.274 625.221 526.436 507.27 525.989 386.543H521.779C522.317 507.27 545.602 625.042 590.203 737.171H590.293Z" fill="#3D8361"/>
<path id="Vector_9" d="M603.188 752.037C605.159 752.395 606.233 752.485 608.204 752.843C563.871 639.997 541.302 521.419 539.153 400.244H531.898C534.317 521.419 557.692 639.728 603.188 752.037Z" fill="#3D8361"/>
<path id="Vector_10" d="M596.651 711.199C597.816 711.378 598.443 711.467 599.607 711.557C569.156 614.653 552.319 515.868 549.095 414.307H545.154C548.558 515.778 565.664 614.474 596.651 711.199Z" fill="#3D8361"/>
<path id="Vector_11" d="M597.367 683.075C597.994 683.075 598.262 683.075 598.889 683.254C575.514 594.948 562.259 505.746 559.662 414.395H557.781C560.378 505.746 573.723 594.858 597.367 683.075Z" fill="#3D8361"/>
<path id="Vector_12" d="M602.026 669.105C603.19 669.105 603.727 669.284 604.892 669.374C586.263 590.023 575.337 510.315 572.292 428.904H568.799C572.023 510.315 583.128 589.934 602.026 669.105Z" fill="#3D8361"/>
<path id="Vector_13" d="M605.339 639.729C605.966 639.729 606.324 639.729 606.951 639.908C595.397 579.724 587.695 519.629 584.023 458.459H582.143C585.904 519.629 593.696 579.724 605.339 639.818V639.729Z" fill="#3D8361"/>
<path id="Vector_14" d="M611.071 625.042C612.683 625.042 613.489 625.221 615.101 625.31C605.876 569.962 599.697 514.614 596.652 458.639H592.084C595.219 514.614 601.577 569.872 611.071 625.131V625.042Z" fill="#3D8361"/>
<path id="Vector_15" d="M615.727 594.68C617.698 594.68 618.772 594.859 620.743 594.949C615.459 554.736 611.249 514.434 609.1 473.863C606.861 473.863 605.786 473.863 603.637 473.863C605.786 514.345 610.175 554.647 615.727 594.77V594.68Z" fill="#3D8361"/>
<path id="Vector_16" d="M625.311 579.724C626.386 579.724 626.923 579.724 628.088 579.903C624.147 544.706 621.191 509.509 619.221 474.133H616.266C618.236 509.509 621.281 544.617 625.311 579.814V579.724Z" fill="#3D8361"/>
<path id="Vector_17" d="M631.4 533.243H633.998C632.386 513.539 631.221 493.836 630.415 474.133H627.729C628.535 493.836 629.788 513.539 631.4 533.243Z" fill="#3D8361"/>
<path id="Vector_18" d="M640.178 502.522H643.133C642.865 497.327 642.685 494.82 642.506 489.715H639.551C639.819 494.82 639.909 497.417 640.178 502.522Z" fill="#3D8361"/>
<path id="Vector_19" d="M607.129 739.678C608.025 739.678 608.472 739.857 609.368 740.036C607.577 735.379 606.771 733.051 605.069 728.304C604.173 728.304 603.726 728.125 602.83 728.035C604.532 732.782 605.427 735.11 607.219 739.768H607.129V739.678Z" fill="#3D8361"/>
<path id="Vector_20" d="M618.505 767.263C619.042 767.263 619.311 767.442 619.938 767.532C618.057 763.054 617.072 760.815 615.281 756.158C614.743 756.158 614.385 755.979 613.848 755.979C615.728 760.546 616.624 762.785 618.505 767.353V767.263Z" fill="#3D8361"/>
<path id="Vector_21" d="M625.132 768.337C626.565 768.606 627.282 768.695 628.715 768.874C626.924 764.396 626.028 762.068 624.326 757.5C622.893 757.321 622.177 757.142 620.654 756.963C622.446 761.53 623.341 763.859 625.132 768.337Z" fill="#3D8361"/>
</g>
<g id="line_4">
<path id="line_2" d="M88 524.758L563 524.758" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="circle" d="M568 529.758C570.766 529.758 573 527.524 573 524.758C573 521.992 570.766 519.758 568 519.758C565.234 519.758 563 521.992 563 524.758C563 527.524 565.234 529.758 568 529.758Z" fill="white"/>
</g>
<g id="Home SAmerica_Dot">
<g id="Europe">
<g id="bkg">
<rect id="Rectangle 11" x="428" y="483.758" width="164" height="82" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<text id="ÙÙ Ø£ÙØ±ÙÙØ§ Ø§ÙØ¬ÙÙØ¨ÙØ©" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="530.757" y="511.076">في أمريكا </tspan><tspan x="530.757" y="530.076">الجنوبية</tspan></text>
<text id="4 Ø¯ÙÙ" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="530.757" y="549.318">4 دول</tspan></text>
</g>
<g id="Live Pulse Animation">
<circle id="Pulse" cx="568" cy="524.758" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main" cx="568.5" cy="525.258" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home SAmerica_Dot_2">
<g id="Europe_2">
<g id="bkg_2">
<rect id="Rectangle 11_2" y="483.758" width="164" height="82" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<text id="ÙÙ Ø£ÙØ±ÙÙØ§ Ø§ÙØ¬ÙÙØ¨ÙØ©_2" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="49.7706" y="511.318">في أمريكا </tspan><tspan x="62.5994" y="530.318">الجنوبية</tspan></text>
<text id="4 Ø¯ÙÙ_2" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="77.0144" y="549.318">4 دول</tspan></text>
</g>
<g id="Live Pulse Animation_2">
<circle id="Pulse_2" cx="140" cy="524.758" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_2" cx="140.5" cy="525.258" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
<g id="North America">
<g id="Map_2">
<path id="Vector_22" d="M408.754 342.657C409.918 342.657 410.545 342.657 411.709 342.747C412.246 335.492 412.515 331.999 413.053 325.103C411.888 325.103 411.261 325.103 410.097 325.014C409.47 331.91 409.201 335.492 408.664 342.747L408.754 342.657Z" fill="#3D8361"/>
<path id="Vector_23" d="M320 115.175H325.553C328.777 108.637 330.479 105.502 333.792 99.4121C331.553 99.4121 330.479 99.4121 328.24 99.5912C324.926 105.681 323.224 108.726 320 115.264V115.175Z" fill="#3D8361"/>
<path id="Vector_24" d="M332.807 115.264H334.598C341.315 101.382 344.808 95.2025 351.793 82.6641C351.077 82.6641 350.719 82.6641 350.002 82.6641C343.017 95.1129 339.524 101.293 332.807 115.085V115.264Z" fill="#3D8361"/>
<path id="Vector_25" d="M347.943 106.308H350.093C355.019 96.2775 357.616 91.5308 362.631 82.127C361.825 82.127 361.377 82.127 360.571 82.127C355.466 91.5308 352.959 96.1879 347.943 106.219V106.308Z" fill="#3D8361"/>
<path id="Vector_26" d="M358.422 106.218H361.377C368.005 92.4254 371.408 86.0666 378.125 73.1699C376.961 73.1699 376.423 73.1699 375.259 73.349C368.453 86.1562 365.049 92.5149 358.422 106.218Z" fill="#3D8361"/>
<path id="Vector_27" d="M373.377 97.0841H376.512C381.348 86.9638 383.856 82.1276 388.781 72.4551C387.527 72.4551 386.901 72.4551 385.736 72.6342C380.81 82.3067 378.303 87.143 373.467 97.1737L373.377 97.0841Z" fill="#3D8361"/>
<path id="Vector_28" d="M378.752 106.04H384.036C390.395 91.7102 393.709 85.1723 400.246 71.7383C398.187 71.7383 397.201 71.9174 395.052 72.0965C388.514 85.3514 385.111 91.9789 378.752 106.129V106.04Z" fill="#3D8361"/>
<path id="Vector_29" d="M378.125 135.863C379.737 135.863 380.543 135.863 382.065 136.042C391.827 110.965 402.664 86.515 414.128 62.2441C412.605 62.2441 411.889 62.4233 410.366 62.5128C398.724 86.6941 387.887 110.965 378.035 135.863H378.125Z" fill="#3D8361"/>
<path id="Vector_30" d="M345.973 209.929C347.047 209.929 347.585 210.019 348.659 210.108C352.331 193.361 354.302 185.748 358.422 171.687C357.347 171.687 356.809 171.597 355.735 171.508C351.615 185.569 349.645 193.181 345.973 209.929Z" fill="#3D8361"/>
<path id="Vector_31" d="M346.42 259.367C349.196 259.546 350.629 259.636 353.406 259.815C359.675 222.2 366.661 184.853 379.02 148.671C376.333 148.581 374.99 148.492 372.303 148.312C359.764 184.316 352.689 221.752 346.42 259.278V259.367Z" fill="#3D8361"/>
<path id="Vector_32" d="M458.818 304.146C459.535 304.146 459.893 304.146 460.52 304.236C461.147 297.877 461.416 294.832 462.132 288.742C461.416 288.742 461.057 288.742 460.43 288.652C459.804 294.742 459.445 297.788 458.818 304.146Z" fill="#3D8361"/>
<path id="Vector_33" d="M354.213 298.145C356.004 298.235 356.9 298.324 358.691 298.414C369.438 214.048 389.41 138.549 424.697 61.4375C423.085 61.4375 422.279 61.6166 420.667 61.7062C385.022 138.638 364.96 213.869 354.213 298.145Z" fill="#3D8361"/>
<path id="Vector_34" d="M368.811 279.428C369.885 279.428 370.512 279.518 371.587 279.608C382.155 205.899 399.978 137.923 430.249 69.8574C429.264 69.8574 428.726 69.8574 427.741 70.0365C397.291 137.834 379.468 205.81 368.811 279.428Z" fill="#3D8361"/>
<path id="Vector_35" d="M375.707 319.91C377.14 319.91 377.767 319.999 379.2 320.089C388.425 232.051 406.337 150.731 440.907 69.3203C439.653 69.3203 439.026 69.3203 437.772 69.4994C402.844 150.731 384.932 231.962 375.707 319.91Z" fill="#3D8361"/>
<path id="Vector_36" d="M384.932 341.942C386.723 341.942 387.618 341.942 389.41 342.031C397.739 246.381 415.382 157.627 451.744 68.7832C450.131 68.7832 449.325 68.7832 447.803 68.9623C411.083 157.627 393.44 246.292 385.021 341.942H384.932Z" fill="#3D8361"/>
<path id="Vector_37" d="M397.381 342.298H399.978C408.218 246.559 425.861 157.536 461.148 68.2441C460.252 68.2441 459.715 68.2441 458.819 68.2441C423.353 157.446 405.62 246.379 397.381 342.119V342.298Z" fill="#3D8361"/>
<path id="Vector_38" d="M415.023 264.381C417.531 264.56 418.785 264.65 421.382 264.829C431.771 196.674 448.698 132.101 473.148 67.707C470.819 67.707 469.655 67.8862 467.416 67.9757C442.518 132.011 425.502 196.405 415.023 264.292V264.381Z" fill="#3D8361"/>
<path id="Vector_39" d="M431.055 248.441C431.771 248.441 432.219 248.53 432.935 248.62C443.414 186.286 459.624 126.728 481.477 67.4395H479.775C457.923 126.639 441.533 186.107 431.055 248.351V248.441Z" fill="#3D8361"/>
<path id="Vector_40" d="M441.623 249.247C442.966 249.337 443.683 249.426 445.026 249.516C455.326 186.823 471.357 126.818 492.404 66.9023C491.15 66.9023 490.523 66.9023 489.359 66.9023C468.043 126.639 452.012 186.465 441.623 249.068V249.247Z" fill="#3D8361"/>
<path id="Vector_41" d="M453.445 250.231C454.43 250.231 454.878 250.321 455.863 250.41C465.984 187.36 481.746 126.907 502.256 66.543H500.106C479.507 126.817 463.655 187.181 453.535 250.141H453.445V250.231Z" fill="#3D8361"/>
<path id="Vector_42" d="M465.445 251.216C465.893 251.216 466.072 251.216 466.52 251.305C477.715 180.463 496.881 113.651 518.555 45.4062H517.569C495.896 113.651 476.64 180.374 465.445 251.216Z" fill="#3D8361"/>
<path id="Vector_43" d="M471.535 286.413C472.699 286.413 473.326 286.502 474.491 286.592C484.79 203.122 505.031 124.936 529.391 44.7793C528.316 44.7793 527.869 44.7793 526.794 44.9584C502.165 125.025 481.924 203.032 471.535 286.413Z" fill="#3D8361"/>
<path id="Vector_44" d="M489.447 237.066C490.522 237.155 491.059 237.245 492.224 237.335C502.523 175.18 518.375 115.174 536.198 54.9004C535.213 54.9004 534.765 54.9004 533.69 54.9004C515.688 115.085 499.836 174.911 489.447 236.976V237.066Z" fill="#3D8361"/>
<path id="Vector_45" d="M531.273 96.1874H535.125C541.036 74.9616 547.036 53.8254 552.857 32.5996C551.424 32.5996 550.618 32.7787 549.185 32.8683C543.275 54.0045 537.274 75.0512 531.273 96.0978V96.1874Z" fill="#3D8361"/>
<path id="Vector_46" d="M502.076 222.647C504.046 222.826 504.942 222.916 506.912 223.095C513.719 184.763 522.048 147.058 531.9 109.354C530.019 109.354 529.123 109.354 527.332 109.354C517.301 146.879 508.883 184.495 502.076 222.737V222.647Z" fill="#3D8361"/>
<path id="Vector_47" d="M516.227 209.034C517.749 209.124 518.466 209.213 519.988 209.392C525.451 179.748 531.81 150.551 538.975 121.265C537.542 121.265 536.825 121.175 535.392 121.086C528.138 150.283 521.779 179.479 516.227 209.034Z" fill="#3D8361"/>
<path id="Vector_48" d="M530.734 195.869C531.451 195.869 531.809 195.958 532.526 196.048C536.556 175.091 540.676 154.223 545.691 133.535C544.974 133.535 544.616 133.535 543.989 133.445C538.974 154.134 534.854 175.001 530.734 195.869Z" fill="#3D8361"/>
<path id="Vector_49" d="M543.633 183.06C544.976 183.15 545.603 183.239 546.857 183.329C550.887 162.82 555.097 142.4 559.933 122.07C558.679 122.07 558.052 122.07 556.798 121.891C551.872 142.131 547.753 162.551 543.633 182.971V183.06Z" fill="#3D8361"/>
<path id="Vector_50" d="M558.32 170.702H559.216C563.067 150.551 567.455 130.49 572.202 110.518H571.396C566.649 130.49 562.261 150.551 558.41 170.702H558.32Z" fill="#3D8361"/>
<path id="Vector_51" d="M566.291 185.031C567.007 185.031 567.276 185.12 567.993 185.21C574.083 152.431 580.889 119.921 588.412 87.4102H586.8C579.277 119.831 572.471 152.341 566.291 185.12V185.031Z" fill="#3D8361"/>
<path id="Vector_52" d="M554.648 52.3034H556.619C558.768 44.243 559.843 40.3023 561.903 32.1523C561.097 32.1523 560.739 32.1523 560.022 32.1523C557.962 40.2128 556.887 44.243 554.648 52.2138V52.3034Z" fill="#3D8361"/>
<path id="Vector_53" d="M546.139 85.1723H547.213C549.452 77.0223 550.527 72.9921 552.766 64.9316H551.781C549.542 72.9921 548.467 76.9327 546.228 85.0827L546.139 85.1723Z" fill="#3D8361"/>
<path id="Vector_54" d="M566.201 40.9286C568.082 40.9286 569.067 40.7495 571.037 40.66C571.933 36.988 572.381 35.1072 573.366 31.3457C571.485 31.3457 570.5 31.5248 568.619 31.6144C567.724 35.2864 567.276 37.1671 566.291 40.8391H566.201V40.9286Z" fill="#3D8361"/>
<path id="Vector_55" d="M555.992 85.1714H558.142C560.291 76.9319 561.366 72.8121 563.515 64.6621H561.366C559.216 72.8121 558.142 76.8423 555.992 85.0818V85.1714Z" fill="#3D8361"/>
<path id="Vector_56" d="M565.932 85.2618H568.887C573.276 67.7975 575.425 59.2893 579.545 42.0938C578.38 42.0938 577.843 42.0938 576.679 42.2729C572.47 59.4684 570.32 67.8871 565.932 85.3513V85.2618Z" fill="#3D8361"/>
<path id="Vector_57" d="M584.023 51.2289C585.546 51.2289 586.262 51.2289 587.785 51.2289C589.755 42.8998 590.651 38.6904 592.532 30.3613C591.099 30.3613 590.293 30.3613 588.86 30.5404C586.979 38.8695 585.994 42.9893 584.023 51.3184V51.2289Z" fill="#3D8361"/>
<path id="Vector_58" d="M576.322 85.2618H579.188C581.159 76.8431 582.233 72.6338 584.204 64.3047H581.427C579.457 72.6338 578.382 76.7536 576.412 85.1722H576.322V85.2618Z" fill="#3D8361"/>
<path id="Vector_59" d="M587.875 73.7977H593.607C597.637 56.0648 599.607 47.2879 603.369 29.6445C601.13 29.6445 600.055 29.8237 597.906 29.9132C594.055 47.5566 592.084 56.1544 587.965 73.7977H587.875Z" fill="#3D8361"/>
<path id="Vector_60" d="M597.1 85.5307H599.786C603.906 66.8126 608.026 48.0049 611.787 29.1973C610.802 29.1973 610.265 29.1973 609.28 29.1973C605.429 48.0049 601.309 66.723 597.189 85.3515H597.1V85.5307Z" fill="#3D8361"/>
<path id="Vector_61" d="M584.293 146.341C585.189 146.341 585.726 146.431 586.622 146.521C590.473 126.996 592.533 117.682 596.473 99.3223H594.234C590.204 117.593 588.234 126.907 584.293 146.341Z" fill="#3D8361"/>
<path id="Vector_62" d="M578.113 172.315C579.994 172.494 580.979 172.583 582.95 172.673C583.756 168.195 584.203 166.046 585.009 161.657C583.129 161.478 582.143 161.478 580.263 161.299C579.457 165.687 579.009 167.837 578.203 172.315H578.113Z" fill="#3D8361"/>
<path id="Vector_63" d="M607.936 85.6201H609.458C614.205 62.6927 618.862 39.8549 623.25 16.8379C622.623 16.8379 622.355 16.8379 621.817 16.9275C617.429 39.8549 612.772 62.6927 607.936 85.5306V85.6201Z" fill="#3D8361"/>
<path id="Vector_64" d="M594.412 147.058C595.935 147.147 596.651 147.237 598.174 147.327C600.95 132.728 602.383 125.743 605.159 111.861C603.726 111.861 602.92 111.861 601.487 111.682C598.621 125.474 597.188 132.549 594.412 147.058Z" fill="#3D8361"/>
<path id="Vector_65" d="M603.369 160.94C604.354 160.94 604.892 161.03 605.966 161.12C612.594 124.669 619.848 88.3966 627.013 52.0352H624.595C617.43 88.3071 610.086 124.579 603.369 160.94Z" fill="#3D8361"/>
<path id="Vector_66" d="M626.654 85.9785C628.804 85.9785 629.968 85.9785 632.117 85.9785C633.819 77.0225 634.625 72.634 636.237 63.7676H630.864C629.162 72.5445 628.356 76.9329 626.654 85.889V85.9785Z" fill="#3D8361"/>
<path id="Vector_67" d="M614.475 161.836C615.281 161.836 615.728 161.925 616.535 162.015C618.057 153.148 618.774 148.849 620.296 140.252C619.49 140.252 619.042 140.252 618.326 140.162C616.803 148.76 615.997 153.059 614.475 161.925V161.836Z" fill="#3D8361"/>
<path id="Vector_68" d="M627.281 38.2414H629.61C631.222 29.554 632.028 25.1656 633.55 16.3887C632.655 16.3887 632.207 16.3887 631.311 16.4782C629.789 25.2551 628.983 29.554 627.371 38.2414H627.281Z" fill="#3D8361"/>
<path id="Vector_69" d="M636.953 37.8834H639.819C641.342 29.1065 642.148 24.718 643.581 15.8516C642.506 15.8516 641.879 15.9411 640.804 16.0307C639.371 24.8076 638.565 29.196 637.043 37.9729H636.953V37.8834Z" fill="#3D8361"/>
<path id="Vector_70" d="M646.984 37.6152H649.761C651.283 28.7488 652 24.2708 653.343 15.4043C652.268 15.4043 651.731 15.4043 650.656 15.4939C649.313 24.3603 648.507 28.8383 647.074 37.7048H646.984V37.6152Z" fill="#3D8361"/>
<path id="Vector_71" d="M657.643 37.3471H659.165C660.598 28.3911 661.315 23.9131 662.568 14.957H661.046C659.702 23.9131 659.076 28.3911 657.643 37.3471Z" fill="#3D8361"/>
<path id="Vector_72" d="M666.509 37.1665H670.271C671.614 28.121 672.241 23.5534 673.495 14.5078C671.973 14.5078 671.256 14.5974 669.734 14.6869C668.48 23.7325 667.853 28.2105 666.42 37.2561H666.509V37.1665Z" fill="#3D8361"/>
<path id="Vector_73" d="M679.227 24.5394H681.018C681.555 20.4196 681.824 18.2702 682.361 14.1504H680.57C680.033 18.2702 679.764 20.33 679.227 24.5394Z" fill="#3D8361"/>
<path id="Vector_74" d="M668.031 99.7704H669.733C672.957 79.5298 676.092 59.1996 678.958 38.959H677.346C674.48 59.1996 671.345 79.4402 668.121 99.6808H668.031V99.7704Z" fill="#3D8361"/>
<path id="Vector_75" d="M678.42 100.217H680.301C683.973 75.5879 687.555 50.9589 690.69 26.2402H688.898C685.764 50.8693 682.092 75.4984 678.42 100.127V100.217Z" fill="#3D8361"/>
<path id="Vector_76" d="M689.347 87.6787C691.228 87.6787 692.124 87.6787 694.005 87.8579C697.497 63.0497 700.722 38.2415 703.408 13.3438C701.617 13.3438 700.722 13.3438 698.93 13.4333C696.154 38.2415 692.751 62.9601 689.258 87.5892L689.347 87.6787Z" fill="#3D8361"/>
<path id="Vector_77" d="M702.691 75.1402H704.93C708.155 50.2425 711.11 25.3447 713.439 0.357422H711.289C708.961 25.3447 705.916 50.1529 702.691 75.0507V75.1402Z" fill="#3D8361"/>
<path id="Vector_78" d="M712.453 75.4097C713.797 75.4097 714.513 75.4097 715.856 75.4097C718.901 50.3328 721.678 25.1664 723.827 0C722.573 0 721.857 0 720.603 0.0895602C718.364 25.256 715.588 50.3328 712.453 75.4097Z" fill="#3D8361"/>
<path id="Vector_79" d="M724.006 75.7672H725.081C727.499 54.8101 729.738 33.7635 731.529 12.7168H730.544C728.753 33.7635 726.514 54.8101 724.095 75.7672H724.006Z" fill="#3D8361"/>
<path id="Vector_80" d="M733.5 62.7823C735.829 62.7823 736.993 62.7824 739.232 62.9615C741.292 42.6313 742.277 32.511 743.799 12.5391C741.56 12.5391 740.486 12.5391 738.247 12.6286C736.635 32.6006 735.649 42.6313 733.5 62.8719V62.7823Z" fill="#3D8361"/>
<path id="Vector_81" d="M744.605 63.0502C746.307 63.0502 747.113 63.0502 748.815 63.0502C750.785 42.5409 751.68 32.4206 753.024 12.2695H748.904C747.471 32.4206 746.576 42.4513 744.516 62.9606L744.605 63.0502Z" fill="#3D8361"/>
<path id="Vector_82" d="M757.322 49.9744H759.113C760.367 34.7491 760.994 27.2261 761.89 12.2695H760.098C759.113 27.2261 758.576 34.7491 757.232 49.9744H757.322Z" fill="#3D8361"/>
<path id="Vector_83" d="M766.547 36.6293H772.458C773.174 26.7777 773.443 21.8519 773.98 12.0898H768.159C767.622 21.8519 767.263 26.6882 766.547 36.5398V36.6293Z" fill="#3D8361"/>
<path id="Vector_84" d="M778.639 23.2849H782.669C782.938 18.8069 783.027 16.5679 783.296 12.0898H779.355C779.087 16.5679 778.997 18.8069 778.728 23.2849H778.639Z" fill="#3D8361"/>
<path id="Vector_85" d="M477.805 344.807C479.148 344.807 479.865 344.807 481.298 344.897C482.283 329.851 482.82 322.686 484.074 308.804C482.731 308.804 482.014 308.715 480.671 308.625C479.417 322.507 478.879 329.672 477.894 344.807H477.805Z" fill="#3D8361"/>
<path id="Vector_86" d="M489.27 345.166C490.702 345.166 491.509 345.166 492.942 345.255C493.389 338.449 493.568 335.135 494.106 328.597C492.673 328.597 491.956 328.508 490.434 328.418C489.986 334.956 489.717 338.27 489.27 345.076V345.166Z" fill="#3D8361"/>
<path id="Vector_87" d="M501.539 345.524H503.599C504.047 338.807 504.226 335.493 504.674 329.045C503.868 329.045 503.42 329.045 502.614 328.955C502.166 335.403 501.897 338.717 501.539 345.434V345.524Z" fill="#3D8361"/>
<path id="Vector_88" d="M512.465 345.882C513.808 345.882 514.525 345.882 515.958 345.971C516.316 339.344 516.585 336.12 517.032 329.671C515.689 329.671 514.973 329.582 513.54 329.492C513.092 335.941 512.823 339.165 512.465 345.882Z" fill="#3D8361"/>
<path id="Vector_89" d="M429.711 384.124H432.756C433.562 358.151 435.443 332.089 437.95 306.206C436.696 306.206 436.069 306.117 434.905 306.027C432.397 332 430.427 358.062 429.621 384.124H429.711Z" fill="#3D8361"/>
<path id="Vector_90" d="M441.891 397.468H443.862C443.593 382.153 444.041 371.496 445.653 347.314H443.682C442.07 371.496 441.623 382.243 441.891 397.468Z" fill="#3D8361"/>
<path id="Vector_91" d="M419.232 365.136H421.561C422.546 348.478 423.084 340.597 424.337 325.551C423.442 325.551 422.904 325.55 422.009 325.461C420.755 340.597 420.218 348.478 419.232 365.136Z" fill="#3D8361"/>
</g>
<g id="line_3">
<path id="Vector_92" d="M108 173L458 173" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="Vector_93" d="M460 178C462.766 178 465 175.766 465 173C465 170.234 462.766 168 460 168C457.234 168 455 170.234 455 173C455 175.766 457.234 178 460 178Z" fill="white"/>
</g>
<g id="Home NAmerica_Dot">
<g id="Europe_3">
<g id="bkg_3">
<rect id="Rectangle 11_3" x="312.461" y="131.5" width="164" height="82" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<text id="Ø£ÙØ±ÙÙØ§ Ø§ÙØ´ÙØ§ÙÙØ©" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="420.689" y="168.568">أمريكا الشمالية</tspan></text>
<text id="4 Ø¯ÙÙ_3" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="420.689" y="188.318">8 دول</tspan></text>
</g>
<g id="Live Pulse Animation_3">
<circle id="Pulse_3" cx="452.461" cy="172.5" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_3" cx="452.961" cy="173" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home NAmerica_Dot_2">
<g id="Europe_4">
<g id="bkg_4">
<rect id="Rectangle 11_4" y="131.5" width="164" height="82" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<text id="Ø£ÙØ±ÙÙØ§ Ø§ÙØ´ÙØ§ÙÙØ©_2" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="18.2281" y="168.443">أمريكا الشمالية</tspan></text>
<text id="4 Ø¯ÙÙ_4" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="75.5534" y="188.193">4 دول</tspan></text>
</g>
<g id="Live Pulse Animation_4">
<circle id="Pulse_4" cx="140" cy="172.5" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_4" cx="140.5" cy="173" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
<g id="Asia">
<g id="Map_3">
<path id="Vector_94" d="M972.894 369.526H979.88C980.507 344.718 980.955 319.91 980.955 295.102C978.178 295.191 976.835 295.281 974.058 295.46C973.879 320.178 973.521 344.897 972.805 369.616H972.894V369.526Z" fill="#3D8361"/>
<path id="Vector_95" d="M986.955 353.853H989.731C990.089 336.21 990.179 327.433 990.269 309.969C989.194 309.969 988.656 309.969 987.492 310.058C987.492 327.433 987.313 336.21 986.865 353.853H986.955Z" fill="#3D8361"/>
<path id="Vector_96" d="M1033.79 305.669H1035.59C1033.88 216.467 1026.45 128.071 1015.35 39.5859H1013.91C1024.93 128.071 1032.18 216.557 1033.79 305.759V305.669Z" fill="#3D8361"/>
<path id="Vector_97" d="M1045.17 305.222H1046.87C1044.72 216.109 1036.39 127.893 1024.12 39.6758H1022.78C1034.87 127.982 1043.02 216.199 1045.17 305.311V305.222Z" fill="#3D8361"/>
<path id="Vector_98" d="M1055.02 320.626C1057.17 320.626 1058.25 320.537 1060.31 320.447C1058.34 221.931 1047.77 124.758 1032.54 27.4958C1030.93 27.4958 1030.12 27.4958 1028.51 27.4062C1043.2 124.848 1053.23 222.11 1055.02 320.626Z" fill="#3D8361"/>
<path id="Vector_99" d="M1067.38 352.509H1071.05C1070.87 242.977 1058.87 135.684 1040.69 27.7637H1037.91C1055.65 135.684 1067.29 243.156 1067.38 352.688V352.509Z" fill="#3D8361"/>
<path id="Vector_100" d="M1079.38 384.215H1080.9C1083.14 267.876 1071.05 154.404 1050.81 40.0352H1049.65C1069.71 154.493 1081.62 267.966 1079.38 384.305V384.215Z" fill="#3D8361"/>
<path id="Vector_101" d="M1090.04 411.53H1091.56C1096.04 285.697 1083.23 163.627 1059.77 40.2129H1058.6C1081.89 163.716 1094.52 285.787 1090.04 411.619V411.53Z" fill="#3D8361"/>
<path id="Vector_102" d="M1101.14 351.972H1106.7C1105.8 250.59 1092.82 151.715 1072.66 52.4824H1068.37C1087.8 151.805 1100.34 250.769 1101.14 352.151V351.972Z" fill="#3D8361"/>
<path id="Vector_103" d="M1101.5 411.35H1103.02C1103.2 406.783 1103.38 404.454 1103.56 399.887H1102.04C1101.86 404.454 1101.77 406.693 1101.5 411.35Z" fill="#3D8361"/>
<path id="Vector_104" d="M1113.06 335.224C1114.94 335.224 1115.83 335.224 1117.71 335.135C1115.3 239.484 1101.95 145.984 1081.35 52.5723H1077.77C1097.83 145.984 1110.82 239.664 1113.15 335.314H1113.06V335.224Z" fill="#3D8361"/>
<path id="Vector_105" d="M1123.09 318.477C1125.77 318.477 1127.12 318.388 1129.8 318.298C1125.77 228.2 1111.8 140.431 1091.11 52.752C1088.96 52.752 1087.89 52.752 1085.83 52.752C1105.44 140.79 1119.24 228.469 1123.09 318.656V318.477Z" fill="#3D8361"/>
<path id="Vector_106" d="M1137.06 318.118H1138.76C1134.46 228.02 1119.86 140.43 1098.19 53.0195H1096.85C1118.34 140.52 1132.76 228.199 1137.06 318.207V318.118Z" fill="#3D8361"/>
<path id="Vector_107" d="M1148.7 334.419H1150.94C1147.63 238.589 1131.69 145.805 1107.41 53.2891H1105.62C1129.63 145.894 1145.39 238.768 1148.61 334.598V334.419H1148.7Z" fill="#3D8361"/>
<path id="Vector_108" d="M1159.18 351.167H1163.93C1161.96 253.636 1146.46 159.329 1120.76 65.291H1116.91C1142.07 159.419 1157.3 253.815 1159.18 351.346V351.167Z" fill="#3D8361"/>
<path id="Vector_109" d="M1169.66 384.034H1175.57C1177.54 274.861 1160.79 170.075 1130.52 65.4688C1128.64 65.4688 1127.65 65.4688 1125.77 65.4688C1155.33 170.254 1171.63 275.129 1169.66 384.214V384.034Z" fill="#3D8361"/>
<path id="Vector_110" d="M1183.09 384.035H1185.33C1187.39 266.174 1166.34 154.94 1131.33 42.9004H1129.54C1164.19 155.03 1185.06 266.264 1183 384.125L1183.09 384.035Z" fill="#3D8361"/>
<path id="Vector_111" d="M1193.75 397.021H1196.26C1201.63 279.07 1180.23 166.314 1144.13 54.543H1142.16C1177.99 166.404 1199.12 279.25 1193.84 397.111L1193.75 397.021Z" fill="#3D8361"/>
<path id="Vector_112" d="M1204.94 316.239C1206.38 316.239 1207.09 316.239 1208.53 316.149C1202.17 226.052 1182.73 140.343 1153.63 54.9916C1152.46 54.9916 1151.83 54.9916 1150.76 54.8125C1179.42 140.253 1198.58 226.141 1204.94 316.239Z" fill="#3D8361"/>
<path id="Vector_113" d="M1205.39 396.933H1207.72C1208.71 382.155 1209.15 373.289 1209.06 353.406H1206.74C1206.74 373.289 1206.47 382.066 1205.39 396.933Z" fill="#3D8361"/>
<path id="Vector_114" d="M1217.22 315.881H1219.28C1212.56 225.783 1192.5 140.432 1162.31 55.4395H1160.61C1190.53 140.522 1210.59 225.962 1217.13 315.97H1217.22V315.881Z" fill="#3D8361"/>
<path id="Vector_115" d="M1228.41 315.612H1231.19C1224.47 229.276 1204.94 148.492 1176.02 67.082C1175.12 67.082 1174.67 67.082 1173.69 67.082C1202.35 148.582 1221.69 229.455 1228.32 315.791L1228.41 315.612Z" fill="#3D8361"/>
<path id="Vector_116" d="M1223.66 205.451C1225.72 205.451 1226.8 205.362 1228.86 205.272C1217.84 158.253 1203.87 112.667 1186.59 67.5287C1184.79 67.5287 1183.9 67.3496 1182.02 67.3496C1199.03 112.667 1212.74 158.343 1223.57 205.541L1223.66 205.451Z" fill="#3D8361"/>
<path id="Vector_117" d="M1238.44 298.594C1239.78 298.594 1240.5 298.594 1241.84 298.504C1240.32 279.696 1239.25 270.561 1236.56 252.918C1235.22 252.918 1234.59 252.918 1233.25 253.008C1235.84 270.651 1236.92 279.786 1238.44 298.594Z" fill="#3D8361"/>
<path id="Vector_118" d="M1209.15 112.131H1211.84C1205.3 93.5023 1201.9 84.7254 1195.27 67.8881C1194.29 67.8881 1193.75 67.8881 1192.76 67.709C1199.39 84.5463 1202.7 93.4128 1209.24 112.041H1209.15V112.131Z" fill="#3D8361"/>
<path id="Vector_119" d="M1239.07 219.692H1241.58C1235.13 188.256 1226.8 157.089 1216.5 126.639H1214.17C1224.38 157.089 1232.62 188.256 1239.07 219.781V219.692Z" fill="#3D8361"/>
<path id="Vector_120" d="M1250.71 315.074C1252.41 315.074 1253.22 315.074 1254.92 314.985C1254.56 309.253 1254.38 306.477 1253.93 300.924C1252.23 300.924 1251.43 300.924 1249.72 301.013C1250.17 306.566 1250.35 309.432 1250.71 315.074Z" fill="#3D8361"/>
<path id="Vector_121" d="M1219.54 112.22H1221.69C1214.98 93.771 1211.48 84.9941 1204.59 68.3359C1203.78 68.3359 1203.33 68.3359 1202.53 68.3359C1209.33 84.9941 1212.83 93.771 1219.54 112.31V112.22Z" fill="#3D8361"/>
<path id="Vector_122" d="M1229.93 112.4H1231.72C1224.83 94.1293 1221.15 85.442 1214.17 68.9629C1213.45 68.9629 1213.09 68.9629 1212.47 68.9629C1219.45 85.442 1223.03 94.1293 1229.93 112.489V112.4Z" fill="#3D8361"/>
<path id="Vector_123" d="M1235.22 100.935H1237.63C1232.26 87.8596 1229.57 81.5903 1224.2 69.5893C1223.3 69.5893 1222.77 69.5893 1221.87 69.4102C1227.16 81.5008 1229.84 87.77 1235.22 100.846V100.935Z" fill="#3D8361"/>
<path id="Vector_124" d="M1245.25 101.204C1246.32 101.204 1246.86 101.204 1248.02 101.204C1240.59 83.7401 1236.83 75.5006 1229.48 59.8276C1228.41 59.8276 1227.87 59.6484 1226.89 59.6484C1234.14 75.3215 1237.99 83.561 1245.34 101.115L1245.25 101.204Z" fill="#3D8361"/>
<path id="Vector_125" d="M1265.76 124.936H1267.46C1260.2 106.666 1252.14 88.6646 1243.64 70.9316C1243.01 70.9316 1242.65 70.9316 1242.02 70.9316C1250.53 88.6646 1258.5 106.756 1265.76 125.026V124.936Z" fill="#3D8361"/>
<path id="Vector_126" d="M1265.94 102.011C1267.01 102.011 1267.46 102.011 1268.53 102.011C1262.8 89.2932 1259.85 83.2927 1254.11 71.6498C1253.13 71.6498 1252.59 71.6498 1251.61 71.4707C1257.34 83.1135 1260.2 89.2036 1265.94 101.921V102.011Z" fill="#3D8361"/>
<path id="Vector_127" d="M1281.16 137.206H1282.95C1279.46 128.25 1277.58 123.862 1273.91 115.354H1272.12C1275.79 123.862 1277.58 128.25 1281.07 137.296L1281.16 137.206Z" fill="#3D8361"/>
<path id="Vector_128" d="M1277.13 102.457H1278.12C1274.35 94.3069 1272.38 90.3662 1268.62 82.6641H1267.64C1271.4 90.3662 1273.37 94.3069 1277.13 102.457Z" fill="#3D8361"/>
<path id="Vector_129" d="M1285.91 102.906C1287.7 102.906 1288.68 103.085 1290.47 103.085C1286.62 95.0251 1284.65 91.174 1280.8 83.5614C1279.01 83.3822 1278.12 83.3822 1276.32 83.2031C1280.18 90.8157 1282.15 94.7564 1286 102.817L1285.91 102.906Z" fill="#3D8361"/>
<path id="Vector_130" d="M1292.44 92.7847C1293.25 92.7847 1293.61 92.7847 1294.42 92.7847C1292.62 89.2919 1291.73 87.5902 1289.94 84.1869C1289.13 84.1869 1288.77 84.1869 1287.97 84.0078C1289.76 87.4111 1290.65 89.1127 1292.44 92.6952V92.7847Z" fill="#3D8361"/>
<path id="Vector_131" d="M1243.45 190.496H1246.23C1240.77 168.912 1237.63 158.702 1231.27 139.178H1228.59C1234.95 158.702 1237.99 169.001 1243.45 190.585V190.496Z" fill="#3D8361"/>
<path id="Vector_132" d="M1250.08 176.435H1253.93C1249.55 160.941 1247.13 153.507 1242.29 139.178H1238.53C1243.37 153.597 1245.78 161.03 1250.08 176.524V176.435Z" fill="#3D8361"/>
<path id="Vector_133" d="M1260.74 176.165H1264.95C1261.99 166.224 1260.47 161.298 1257.34 151.895H1253.22C1256.35 161.388 1257.87 166.224 1260.74 176.255V176.165Z" fill="#3D8361"/>
<path id="Vector_134" d="M1286.8 233.304H1289.67C1286 214.855 1281.34 196.316 1275.88 178.314H1273.1C1278.56 196.316 1283.13 214.855 1286.8 233.304Z" fill="#3D8361"/>
<path id="Vector_135" d="M1286 189.6C1288.24 189.6 1289.4 189.6 1291.64 189.511C1290.3 184.854 1289.67 182.615 1288.24 178.137H1282.68C1284.03 182.704 1284.74 184.943 1286.09 189.6H1286Z" fill="#3D8361"/>
<path id="Vector_136" d="M1296.3 233.036C1298.89 233.036 1300.15 232.947 1302.74 232.857C1301.67 227.842 1301.13 225.334 1299.97 220.408C1297.37 220.408 1296.12 220.498 1293.52 220.587C1294.59 225.513 1295.22 228.021 1296.21 233.036H1296.3Z" fill="#3D8361"/>
<path id="Vector_137" d="M1253.22 234.291H1255.55C1254.56 229.275 1254.11 226.768 1253.13 221.842H1250.8C1251.78 226.768 1252.32 229.275 1253.22 234.38V234.291Z" fill="#3D8361"/>
<path id="Vector_138" d="M1266.47 249.246C1268 249.246 1268.8 249.246 1270.23 249.157C1269.34 243.962 1268.89 241.455 1268 236.35C1266.47 236.35 1265.76 236.35 1264.23 236.439C1265.22 241.544 1265.67 244.052 1266.47 249.246Z" fill="#3D8361"/>
<path id="Vector_139" d="M1278.12 248.889C1279.37 248.889 1280 248.889 1281.34 248.799C1280.44 243.605 1280 241.097 1279.01 235.992C1277.76 235.992 1277.13 235.992 1275.79 236.082C1276.77 241.097 1277.22 243.694 1278.12 248.889Z" fill="#3D8361"/>
<path id="Vector_140" d="M1262.8 349.734H1268.53C1268.53 343.734 1268.35 340.778 1268.17 334.957C1265.84 334.957 1264.68 334.957 1262.44 335.047C1262.62 340.868 1262.71 343.823 1262.8 349.824V349.734Z" fill="#3D8361"/>
<path id="Vector_141" d="M1262.8 396.573H1265.49C1266.2 387.169 1266.65 384.483 1266.92 370.959H1264.23C1263.97 384.393 1263.61 387.169 1262.8 396.573Z" fill="#3D8361"/>
<path id="Vector_142" d="M1273.91 409.291H1275.07C1276.06 399.798 1276.41 395.141 1277.04 385.916H1275.88C1275.25 395.141 1274.89 399.798 1273.91 409.291Z" fill="#3D8361"/>
<path id="Vector_143" d="M1157.48 424.337H1159.63C1159.99 419.769 1160.17 417.53 1160.52 412.963H1158.37C1158.02 417.441 1157.93 419.769 1157.48 424.337Z" fill="#3D8361"/>
<path id="Vector_144" d="M1166.08 437.95C1168.14 437.95 1169.21 437.95 1171.36 437.86C1171.81 433.293 1172.08 430.964 1172.43 426.396C1170.38 426.396 1169.3 426.396 1167.15 426.486C1166.79 431.054 1166.52 433.382 1166.08 437.95Z" fill="#3D8361"/>
<path id="Vector_145" d="M1177.72 451.475H1179.51C1181.39 435.712 1182.11 427.921 1183.36 412.695H1181.57C1180.41 427.921 1179.6 435.712 1177.81 451.475H1177.72Z" fill="#3D8361"/>
<path id="Vector_146" d="M1185.42 478.969H1186.67C1189.9 457.475 1191.24 446.817 1193.21 426.039H1191.87C1189.9 446.817 1188.55 457.475 1185.33 479.059L1185.42 478.969Z" fill="#3D8361"/>
<path id="Vector_147" d="M1198.59 464.549H1200.02C1200.65 459.892 1201 457.653 1201.63 452.996H1200.2C1199.57 457.564 1199.3 459.892 1198.68 464.549H1198.59Z" fill="#3D8361"/>
<path id="Vector_148" d="M1208.88 464.192C1210.32 464.192 1211.03 464.192 1212.47 464.012C1213.99 453.892 1214.62 448.877 1215.87 438.936C1214.44 438.936 1213.72 438.936 1212.29 439.025C1211.12 448.966 1210.41 453.982 1208.97 464.102L1208.88 464.192Z" fill="#3D8361"/>
<path id="Vector_149" d="M1219.99 463.743C1221.51 463.743 1222.32 463.743 1223.84 463.564C1226.26 448.07 1227.24 440.368 1228.86 425.232H1225.01C1223.39 440.368 1222.32 448.07 1219.99 463.654V463.743Z" fill="#3D8361"/>
<path id="Vector_150" d="M1232.53 463.296H1233.96C1237.28 442.429 1238.62 432.04 1240.5 411.889H1239.07C1237.1 432.04 1235.84 442.339 1232.53 463.296Z" fill="#3D8361"/>
<path id="Vector_151" d="M1242.65 462.848C1244.17 462.848 1244.98 462.848 1246.5 462.668C1249.9 441.89 1251.25 431.591 1253.22 411.619H1249.28C1247.31 431.681 1245.96 441.98 1242.56 462.758L1242.65 462.848Z" fill="#3D8361"/>
<path id="Vector_152" d="M1251.16 476.014C1253.04 476.014 1253.93 476.014 1255.82 475.835C1258.68 460.43 1259.94 452.818 1262 437.771C1260.11 437.771 1259.13 437.771 1257.25 437.861C1255.19 452.907 1253.93 460.609 1251.16 476.014Z" fill="#3D8361"/>
<path id="Vector_153" d="M1265.94 448.697C1268.8 448.607 1270.14 448.607 1273.01 448.518C1273.73 444.04 1274 441.89 1274.62 437.502C1271.76 437.502 1270.32 437.592 1267.55 437.681C1266.92 442.07 1266.56 444.309 1265.94 448.787V448.697Z" fill="#3D8361"/>
<path id="Vector_154" d="M1288.06 461.236C1289.67 461.236 1290.56 461.236 1292.18 461.057C1292.98 456.668 1293.34 454.429 1294.06 450.041C1292.45 450.041 1291.55 450.041 1289.94 450.131C1289.22 454.519 1288.86 456.758 1288.06 461.147V461.236Z" fill="#3D8361"/>
<path id="Vector_155" d="M1300.86 460.788H1302.21C1303.01 456.399 1303.37 454.16 1304.18 449.861H1302.83C1302.12 454.25 1301.67 456.399 1300.86 460.788Z" fill="#3D8361"/>
<path id="Vector_156" d="M963.133 369.616H966.447C967.969 304.506 968.148 239.395 966.715 174.285L963.67 174.464C964.924 239.485 964.655 304.506 963.133 369.616Z" fill="#3D8361"/>
<path id="Vector_157" d="M975.671 277.638C977.193 277.638 977.91 277.549 979.432 277.459C979.253 237.694 978.447 198.109 977.014 158.434L973.521 158.881C974.865 198.467 975.492 238.053 975.671 277.638Z" fill="#3D8361"/>
<path id="Vector_158" d="M983.553 153.238C985.523 199.54 986.687 245.843 986.866 292.235C988.568 292.235 989.374 292.146 991.165 292.056C990.897 245.664 989.643 199.272 987.493 153.059L983.642 153.327H983.553V153.238Z" fill="#3D8361"/>
<path id="Vector_159" d="M992.598 139.626C996.628 210.916 998.24 282.206 997.165 353.765C999.315 353.765 1000.48 353.765 1002.63 353.675C1003.61 282.027 1001.73 210.647 997.344 139.357L992.598 139.626Z" fill="#3D8361"/>
<path id="Vector_160" d="M1002.45 115.176C1008.09 189.242 1010.96 263.398 1010.6 337.733H1012.75C1013.11 263.308 1010.06 189.152 1004.24 115.086H1002.45V115.176Z" fill="#3D8361"/>
<path id="Vector_161" d="M1013.2 95.9196L1009.88 96.0988C1016.33 165.956 1020.36 235.813 1021.26 306.117C1022.87 306.117 1023.68 306.028 1025.29 305.938C1024.21 235.634 1020 165.777 1013.29 95.8301L1013.2 95.9196Z" fill="#3D8361"/>
<path id="Vector_162" d="M954.714 360.75C955.52 298.864 956.057 236.978 955.43 175.092H953.46C953.997 237.067 953.46 298.954 952.564 360.84H954.714V360.75Z" fill="#3D8361"/>
<path id="Vector_163" d="M940.742 339.524H943.876C945.041 284.893 945.668 230.35 945.399 175.719L942.444 175.898C942.623 230.44 941.906 284.982 940.652 339.524H940.742Z" fill="#3D8361"/>
<path id="Vector_164" d="M929.277 309.879C930.979 309.879 931.875 309.79 933.576 309.7C934.203 280.772 934.651 251.844 935.009 223.006C933.397 223.095 932.502 223.185 930.889 223.275C930.442 252.113 929.904 281.041 929.277 309.879Z" fill="#3D8361"/>
<path id="Vector_165" d="M917.277 295.55C919.695 295.46 920.86 295.371 923.278 295.281C923.815 271.458 924.353 247.545 924.8 223.633C922.472 223.812 921.308 223.812 918.979 223.991C918.442 247.814 917.904 271.637 917.277 295.55Z" fill="#3D8361"/>
<path id="Vector_166" d="M908.59 236.976C910.112 236.887 910.829 236.797 912.351 236.708C912.62 225.871 912.799 220.497 912.978 209.75C911.456 209.84 910.739 209.929 909.306 210.019C909.038 220.766 908.859 226.14 908.59 236.976Z" fill="#3D8361"/>
</g>
<g id="line_4">
<path id="line_5" d="M89 217.934H1095" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="circle_2" d="M1096.63 223.197C1099.19 223.197 1101.26 221.127 1101.26 218.565C1101.26 216.003 1099.19 213.934 1096.63 213.934C1094.07 213.934 1092 216.003 1092 218.565C1092 221.127 1094.07 223.197 1096.63 223.197Z" fill="white"/>
</g>
<g id="Home Asia_Dot">
<g id="Europe_5">
<g id="bkg_5">
<rect id="Rectangle 11_5" x="955.705" y="187.566" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<text id="ÙÙ Ø¢Ø³ÙØ§" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="1058.15" y="214.885">في آسيا</tspan></text>
<text id="24 Ø¯ÙÙØ©" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="1058.15" y="233.318">24 دولة</tspan></text>
</g>
<g id="Live Pulse Animation_5">
<circle id="Pulse_5" cx="1095.71" cy="218.566" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_5" cx="1096.21" cy="219.066" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home Asia_Dot_2">
<g id="Europe_6">
<g id="bkg_6">
<rect id="Rectangle 11_6" y="187.566" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<g id="ÙÙ Ø¢Ø³ÙØ§â¨24 Ø¯ÙÙØ©">
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="62.1544" y="214.885">في آسيا </tspan></text>
<text fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="65.9825" y="233.885">24 دولة</tspan></text>
</g>
</g>
<g id="Live Pulse Animation_6">
<circle id="Pulse_6" cx="140" cy="218.566" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_6" cx="140.5" cy="219.066" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
<g id="Africa">
<g id="Map_4">
<path id="Vector_167" d="M969.043 564.679H970.834C971.998 546.946 972.536 538.079 973.431 520.525H971.64C970.745 538.169 970.297 547.035 969.133 564.679H969.043Z" fill="#3D8361"/>
<path id="Vector_168" d="M955.967 596.562C956.862 596.562 957.31 596.562 958.295 596.383C959.549 578.65 960.087 569.694 961.072 551.961C960.087 551.961 959.639 551.961 958.654 551.961C957.668 569.694 957.131 578.65 955.967 596.383V596.562Z" fill="#3D8361"/>
<path id="Vector_169" d="M945.129 597.188C946.204 597.188 946.741 597.188 947.816 597.009C948.174 591.815 948.264 589.128 948.622 583.934C947.547 583.934 947.01 583.934 945.935 584.113C945.666 589.397 945.487 591.994 945.129 597.188Z" fill="#3D8361"/>
<path id="Vector_170" d="M974.236 412.516H977.729C977.729 401.948 977.908 396.843 977.908 386.633H974.326C974.326 396.843 974.326 402.037 974.146 412.516H974.236Z" fill="#3D8361"/>
<path id="Vector_171" d="M962.953 441.892H965.102C965.55 419.143 965.64 407.948 965.64 386.723H963.401C963.401 408.038 963.401 419.143 962.863 441.981L962.953 441.892Z" fill="#3D8361"/>
<path id="Vector_172" d="M937.338 472.431C939.935 472.431 941.279 472.431 943.876 472.431C944.592 439.115 944.682 405.709 944.861 372.393H938.233C938.054 405.799 937.965 439.115 937.338 472.521V472.431Z" fill="#3D8361"/>
<path id="Vector_173" d="M925.248 550.706C926.591 550.706 927.308 550.706 928.651 550.706C931.069 481.297 930.711 411.798 932.413 342.389C930.98 342.389 930.263 342.389 928.83 342.478C927.129 411.977 927.487 481.386 925.158 550.885L925.248 550.706Z" fill="#3D8361"/>
<path id="Vector_174" d="M937.338 550.348H938.771C939.219 538.795 939.487 532.973 939.935 521.51H938.502C938.054 532.973 937.875 538.795 937.427 550.348H937.338Z" fill="#3D8361"/>
<path id="Vector_175" d="M913.066 566.918C914.857 566.918 915.753 566.918 917.544 566.739C920.41 482.015 920.052 397.38 922.112 312.656C920.231 312.656 919.246 312.746 917.365 312.835C915.216 397.559 915.663 482.194 912.977 566.918H913.066Z" fill="#3D8361"/>
<path id="Vector_176" d="M913.426 598.622H914.859C915.038 593.338 915.217 590.741 915.396 585.367H913.963C913.784 590.651 913.694 593.338 913.426 598.622Z" fill="#3D8361"/>
<path id="Vector_177" d="M900.08 630.774C901.602 630.774 902.408 630.774 903.931 630.595C908.767 509.957 908.23 389.319 911.544 268.682C909.931 268.771 909.125 268.861 907.424 268.95C903.931 389.588 904.558 510.226 899.99 630.774H900.08Z" fill="#3D8361"/>
<path id="Vector_178" d="M888.348 646.984C890.228 646.984 891.124 646.984 893.005 646.805C897.393 525.899 896.408 404.992 900.17 284.086C898.199 284.175 897.125 284.265 895.154 284.355C891.303 405.171 892.467 526.167 888.437 646.984H888.348Z" fill="#3D8361"/>
<path id="Vector_179" d="M878.318 663.016H880.557C884.677 532.079 883.244 401.052 887.812 270.115C886.827 270.115 886.379 270.115 885.394 270.294C880.647 401.231 882.259 532.258 878.318 663.195V663.016Z" fill="#3D8361"/>
<path id="Vector_180" d="M867.123 663.464C868.377 663.464 869.004 663.464 870.347 663.464C873.661 532.616 871.78 401.59 876.885 270.742C875.542 270.742 874.825 270.832 873.482 270.921C868.287 401.679 870.258 532.616 867.213 663.553L867.123 663.464Z" fill="#3D8361"/>
<path id="Vector_181" d="M855.928 663.732C857.54 663.732 858.346 663.732 859.868 663.732C862.376 532.975 860.227 402.038 865.69 271.369C863.988 271.459 863.182 271.548 861.48 271.638C855.928 402.217 858.167 533.154 855.928 663.822V663.732Z" fill="#3D8361"/>
<path id="Vector_182" d="M844.822 632.297H850.106C851.539 512.196 849.479 391.917 854.853 271.906C852.614 271.996 851.539 272.085 849.39 272.264C843.927 392.186 846.076 512.375 844.912 632.386H844.822V632.297Z" fill="#3D8361"/>
<path id="Vector_183" d="M835.238 584.291H837.836C838.462 480.401 836.85 376.421 841.776 272.621C840.701 272.621 840.164 272.711 839.179 272.8C834.253 376.511 835.865 480.49 835.328 584.291H835.238Z" fill="#3D8361"/>
<path id="Vector_184" d="M824.76 473.058H825.924C826.103 401.5 826.282 330.299 830.133 258.83C829.686 258.83 829.417 258.92 828.969 258.83C825.118 330.299 824.939 401.5 824.76 472.969V473.058Z" fill="#3D8361"/>
<path id="Vector_185" d="M812.939 427.562H814.462C814.731 365.944 816.164 304.596 819.836 243.068C819.298 243.068 818.94 242.978 818.403 242.889C814.641 304.506 813.208 365.855 812.939 427.562Z" fill="#3D8361"/>
<path id="Vector_186" d="M801.117 427.651H802.819C803.267 365.586 804.789 303.79 808.64 241.814C808.013 241.814 807.655 241.724 807.028 241.635C803.087 303.7 801.565 365.497 801.117 427.651Z" fill="#3D8361"/>
<path id="Vector_187" d="M788.758 412.963H791.982C792.609 355.376 794.4 298.057 798.162 240.559C796.908 240.38 796.281 240.38 795.027 240.201C791.176 297.788 789.474 355.196 788.758 412.963Z" fill="#3D8361"/>
<path id="Vector_188" d="M776.219 412.964H781.145C781.861 359.855 783.294 307.014 786.697 253.994C784.817 253.815 783.831 253.636 781.951 253.457C778.547 306.656 777.025 359.675 776.219 412.964Z" fill="#3D8361"/>
<path id="Vector_189" d="M765.293 412.962H768.786C769.681 359.405 771.204 306.117 774.697 252.649C773.353 252.47 772.726 252.47 771.383 252.291C767.801 305.938 766.278 359.315 765.293 412.962Z" fill="#3D8361"/>
<path id="Vector_190" d="M753.828 427.65H756.515C757.321 368.809 758.933 310.057 763.053 251.306C761.978 251.216 761.53 251.127 760.456 251.037C756.336 309.878 754.724 368.63 753.828 427.65Z" fill="#3D8361"/>
<path id="Vector_191" d="M742.723 427.65H744.335C745.141 373.287 746.574 319.103 750.156 264.83C749.529 264.83 749.261 264.74 748.634 264.65C745.051 318.924 743.618 373.197 742.812 427.56L742.723 427.65Z" fill="#3D8361"/>
<path id="Vector_192" d="M730.902 412.873H733.231C733.947 373.197 734.664 333.433 737.082 293.847C736.186 293.847 735.739 293.758 734.843 293.668C732.425 333.343 731.619 373.197 730.902 412.962V412.873Z" fill="#3D8361"/>
<path id="Vector_193" d="M718.273 384.393H723.826C724.274 359.047 724.99 333.702 726.423 308.356C724.184 308.177 723.11 308.087 720.96 307.908C719.527 333.343 718.811 358.868 718.363 384.393H718.273Z" fill="#3D8361"/>
<path id="Vector_194" d="M724.453 274.861C725.528 274.95 725.976 275.04 727.05 275.129C727.409 270.114 727.588 267.606 727.946 262.591C726.961 262.501 726.423 262.412 725.349 262.322C724.99 267.338 724.811 269.845 724.453 274.861Z" fill="#3D8361"/>
<path id="Vector_195" d="M951.488 442.07H953.638C953.906 422.277 954.175 402.394 954.444 382.602H952.294C952.026 402.394 951.757 422.277 951.488 442.07Z" fill="#3D8361"/>
</g>
<g id="line_6">
<path id="Line" d="M74 375.25L885 375.25" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="circle_3" d="M885 381.25C887.766 381.25 890 379.016 890 376.25C890 373.484 887.766 371.25 885 371.25C882.234 371.25 880 373.484 880 376.25C880 379.016 882.234 381.25 885 381.25Z" fill="white"/>
</g>
<g id="Home Africa_Dot">
<g id="Europe_7">
<g id="bkg_7">
<rect id="Rectangle 11_7" x="746.439" y="345.25" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<text id="20 Ø¯ÙÙØ©" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="841.436" y="391.318">20 دولة</tspan></text>
<text id="Ø£ÙØ±ÙÙÙØ§" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="841.436" y="372.318">أفريقيا</tspan></text>
</g>
<g id="Live Pulse Animation_7">
<circle id="Pulse_7" cx="886.439" cy="376.25" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_7" cx="886.939" cy="376.75" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home Africa_Dot_2">
<g id="Europe_8">
<g id="bkg_8">
<rect id="Rectangle 11_8" y="345.25" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<text id="20 Ø¯ÙÙØ©_2" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="65.8731" y="391.568">20 دولة</tspan></text>
<text id="Ø£ÙØ±ÙÙÙØ§_2" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="72.4356" y="372.568">أفريقيا</tspan></text>
</g>
<g id="Live Pulse Animation_8">
<circle id="Pulse_8" cx="140" cy="376.25" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_8" cx="140.5" cy="376.75" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
<g id="Europe_9">
<g id="Map_5">
<path id="Vector_196" d="M950.414 50.512H951.758C951.579 46.1236 951.399 43.8845 951.22 39.4961H949.877C950.056 43.8845 950.235 46.1236 950.414 50.512Z" fill="#3D8361"/>
<path id="Vector_197" d="M962.773 65.8278H960.086C961.608 97.4426 962.683 129.057 963.4 160.672L966.355 160.493C965.549 128.878 964.385 97.353 962.773 65.7383V65.8278Z" fill="#3D8361"/>
<path id="Vector_198" d="M972.535 65.6482H969.4C970.923 92.158 972.177 118.668 973.162 145.088L976.565 144.64C975.49 118.31 974.147 91.8893 972.535 65.5586V65.6482Z" fill="#3D8361"/>
<path id="Vector_199" d="M981.133 52.3044H977.641C979.88 83.1131 981.671 113.832 983.104 144.641L986.955 144.372C985.432 113.653 983.462 82.934 981.133 52.2148V52.3044Z" fill="#3D8361"/>
<path id="Vector_200" d="M990.807 52.2148H986.508C988.568 76.7543 990.269 101.294 991.792 125.833L996.449 125.565C994.837 101.115 992.956 76.6648 990.807 52.2148Z" fill="#3D8361"/>
<path id="Vector_201" d="M998.688 52.125H996.986C998.688 69.6788 1000.21 87.2326 1001.64 104.697H1003.43C1002 87.0535 1000.48 69.5892 998.688 52.125Z" fill="#3D8361"/>
<path id="Vector_202" d="M1008.63 52.125H1005.4C1006.75 64.4843 1007.91 76.7541 1009.17 89.1134L1012.48 88.9343C1011.32 76.6645 1009.97 64.3948 1008.63 52.125Z" fill="#3D8361"/>
<path id="Vector_203" d="M952.742 66.0954H950.951C952.205 97.8893 952.921 129.594 953.28 161.388H955.25C954.802 129.504 953.996 97.7997 952.742 66.0059V66.0954Z" fill="#3D8361"/>
<path id="Vector_204" d="M741.918 89.8295C743.62 89.8295 744.426 89.8295 746.127 90.0086C746.575 85.5306 746.844 83.2021 747.292 78.724C745.59 78.724 744.784 78.724 743.082 78.5449C742.634 83.0229 742.366 85.2619 741.918 89.74V89.8295Z" fill="#3D8361"/>
<path id="Vector_205" d="M752.217 90.3666C754.098 90.3666 754.993 90.5457 756.874 90.6353C757.322 86.0677 757.501 83.8287 757.949 79.2611C756.068 79.2611 755.172 79.2612 753.292 79.082C752.844 83.56 752.665 85.8886 752.217 90.3666Z" fill="#3D8361"/>
<path id="Vector_206" d="M768.517 79.7084C766.636 79.7084 765.651 79.5293 763.77 79.5293C763.322 84.0969 763.143 86.3359 762.695 90.9034C764.576 90.9034 765.561 91.0826 767.532 91.1721C767.979 86.6046 768.158 84.276 768.517 79.7084Z" fill="#3D8361"/>
<path id="Vector_207" d="M826.911 97.1738C826.284 107.742 825.926 113.026 825.299 123.594C826.911 123.684 827.627 123.773 829.239 123.952C829.956 113.295 830.225 108.011 830.852 97.4425C829.239 97.4425 828.523 97.2634 826.911 97.1738Z" fill="#3D8361"/>
<path id="Vector_208" d="M782.757 122.52C781.861 132.909 781.413 138.103 780.518 148.492C781.324 148.492 781.771 148.582 782.577 148.671C783.473 138.193 783.921 132.998 784.816 122.699C784.01 122.699 783.563 122.609 782.757 122.52Z" fill="#3D8361"/>
<path id="Vector_209" d="M783.652 236.349C785.175 236.528 785.891 236.618 787.324 236.797C790.19 199.092 793.325 161.298 796.28 123.593C794.847 123.503 794.131 123.414 792.698 123.324C789.563 161.029 786.428 198.644 783.562 236.349H783.652Z" fill="#3D8361"/>
<path id="Vector_210" d="M772.009 235.006C773.801 235.185 774.696 235.364 776.487 235.543C777.741 218.975 778.458 210.646 779.801 194.256C778.01 194.077 777.114 193.987 775.323 193.719C773.89 210.108 773.263 218.348 771.92 234.916L772.009 235.006Z" fill="#3D8361"/>
<path id="Vector_211" d="M760.994 233.752C762.606 233.932 763.502 234.021 765.114 234.2C766.457 217.542 767.174 209.302 768.607 193.002C766.995 192.823 766.189 192.734 764.577 192.555C763.144 208.855 762.427 217.094 761.084 233.752H760.994Z" fill="#3D8361"/>
<path id="Vector_212" d="M797.535 208.496C798.52 208.585 799.058 208.675 800.043 208.765C801.744 186.374 802.64 175.269 804.342 153.148C803.357 153.058 802.819 152.968 801.834 152.879C800.132 175 799.237 186.106 797.535 208.496Z" fill="#3D8361"/>
<path id="Vector_213" d="M808.283 209.751C809.716 209.93 810.432 210.02 811.776 210.199C813.388 187.809 814.194 176.614 815.806 154.313C814.463 154.134 813.746 154.134 812.313 153.955C810.701 176.166 809.805 187.361 808.193 209.751H808.283Z" fill="#3D8361"/>
<path id="Vector_214" d="M821.537 196.586C822.164 196.586 822.433 196.675 822.97 196.765C824.134 180.196 824.672 171.867 825.836 155.388C825.299 155.388 824.94 155.299 824.403 155.209C823.239 171.688 822.701 180.017 821.537 196.586Z" fill="#3D8361"/>
<path id="Vector_215" d="M834.522 141.506C833 165.15 831.388 188.704 829.865 212.348C831.925 212.617 833 212.527 835.149 212.348C836.672 188.704 838.194 165.15 839.717 141.506C837.657 141.595 836.582 141.685 834.522 141.506Z" fill="#3D8361"/>
<path id="Vector_216" d="M849.48 68.9623C847.241 121.534 843.927 174.106 840.703 226.588C842.584 226.499 843.569 226.409 845.36 226.32C848.495 173.837 851.629 121.355 853.779 68.7832C852.077 68.7832 851.182 68.7832 849.48 68.7832V68.9623Z" fill="#3D8361"/>
<path id="Vector_217" d="M839.181 124.579C840.166 108.1 840.614 99.8605 841.42 83.5605H839.36C838.554 99.8605 838.106 108.1 837.121 124.579H839.181Z" fill="#3D8361"/>
<path id="Vector_218" d="M860.137 94.7551H862.197C862.644 84.2766 862.824 78.9925 863.092 68.6035H861.122C860.764 78.9925 860.585 84.2766 860.137 94.7551Z" fill="#3D8361"/>
<path id="Vector_219" d="M875.721 54.1836C873.302 54.1836 872.138 54.1836 869.631 54.3627C869.451 64.6621 869.272 69.8566 868.914 80.2456C871.422 80.2456 872.586 80.0665 875.094 80.0665C875.362 69.6775 875.452 64.5726 875.631 54.2732L875.721 54.1836Z" fill="#3D8361"/>
<path id="Vector_220" d="M875 239.127C876.702 239.037 877.597 238.948 879.299 238.858C881.896 177.241 884.493 115.713 885.479 54.0059H881.627C880.463 115.713 877.776 177.33 875 239.037V239.127Z" fill="#3D8361"/>
<path id="Vector_221" d="M869.451 108.638C870.795 108.638 871.511 108.638 872.854 108.458C873.034 103.712 873.123 101.294 873.302 96.5469C871.959 96.5469 871.332 96.5469 869.899 96.726C869.72 101.473 869.63 103.891 869.451 108.638Z" fill="#3D8361"/>
<path id="Vector_222" d="M863.361 225.154C865.332 225.065 866.227 224.975 868.198 224.796C869.81 191.569 871.422 158.432 872.765 125.205C870.974 125.295 869.989 125.384 868.198 125.474C866.765 158.701 865.063 191.927 863.361 225.154Z" fill="#3D8361"/>
<path id="Vector_223" d="M853.6 225.783C854.227 225.783 854.585 225.783 855.212 225.693C856.734 197.302 858.346 168.822 859.779 140.432C859.152 140.432 858.884 140.432 858.257 140.521C856.734 169.001 855.212 197.392 853.6 225.783Z" fill="#3D8361"/>
<path id="Vector_224" d="M886.02 209.125C888.438 208.945 889.602 208.856 892.02 208.766C893.632 161.747 895.244 114.728 895.602 67.709C893.453 67.709 892.378 67.709 890.229 67.8881C889.602 114.997 887.9 162.105 886.109 209.214H886.02V209.125Z" fill="#3D8361"/>
<path id="Vector_225" d="M885.842 238.41C887.454 238.32 888.17 238.23 889.782 238.141C889.962 233.215 890.051 230.797 890.23 225.871C888.618 225.961 887.902 226.05 886.29 226.14C886.11 231.066 886.021 233.484 885.842 238.41Z" fill="#3D8361"/>
<path id="Vector_226" d="M897.484 237.603C898.827 237.603 899.454 237.514 900.708 237.424C900.887 232.498 900.977 230.08 901.066 225.154C899.723 225.154 899.096 225.244 897.842 225.333C897.663 230.259 897.574 232.677 897.395 237.603H897.484Z" fill="#3D8361"/>
<path id="Vector_227" d="M909.037 193.004C911.007 192.914 911.993 192.825 914.052 192.645C914.769 160.046 915.217 127.446 915.217 94.8457C913.336 94.8457 912.44 94.8457 910.56 95.0248C910.381 127.714 909.754 160.314 909.037 193.004Z" fill="#3D8361"/>
<path id="Vector_228" d="M899.992 179.031C900.709 179.031 901.067 179.032 901.873 178.942C902.858 141.774 903.485 104.607 903.754 67.4395H902.052C901.783 104.697 901.067 141.864 900.082 179.031H899.992Z" fill="#3D8361"/>
<path id="Vector_229" d="M924.442 177.51C924.8 145.178 924.979 112.937 924.442 80.6055C923.098 80.6055 922.471 80.6055 921.128 80.6055C921.396 112.937 921.128 145.268 920.77 177.599C922.202 177.51 922.919 177.51 924.352 177.331L924.442 177.51Z" fill="#3D8361"/>
<path id="Vector_230" d="M932.502 191.48C933.219 191.48 933.488 191.48 934.204 191.39C934.383 154.312 934.204 117.324 933.577 80.2461H932.055C932.592 117.324 932.682 154.312 932.502 191.39V191.48Z" fill="#3D8361"/>
<path id="Vector_231" d="M943.07 52.8418H940.473C941.637 89.2928 942.264 125.654 942.443 162.105L945.309 161.926C945.04 125.565 944.324 89.2032 942.98 52.8418H943.07Z" fill="#3D8361"/>
<path id="Vector_232" d="M843.659 38.4218C843.838 33.7647 843.838 31.3466 843.927 26.6895H840.972C840.972 31.3466 840.793 33.6752 840.703 38.4218H843.659Z" fill="#3D8361"/>
</g>
<g id="line_7">
<path id="line_8" d="M33 194.18H876" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="circld" d="M879.82 197.82C881.38 197.82 882.64 196.56 882.64 195C882.64 193.44 881.38 192.18 879.82 192.18C878.26 192.18 877 193.44 877 195C877 196.56 878.26 197.82 879.82 197.82Z" fill="white"/>
</g>
<g id="Home Europe_Dot">
<g id="Europe_10">
<g id="bkg_9">
<rect id="Rectangle 11_9" x="739" y="164" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<text id="Ø£ÙØ±ÙØ¨Ø§" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="839.6" y="191.318">أوروبا</tspan></text>
<text id="26 Ø¯ÙÙØ©" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="839.6" y="210.318">26 دولة</tspan></text>
</g>
<g id="Live Pulse Animation_10">
<circle id="Pulse_10" cx="879" cy="195" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_10" cx="879.5" cy="195.5" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home Europe_Dot_2">
<g id="Europe_11">
<g id="bkg_10">
<rect id="Rectangle 11_10" y="164" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<text id="Ø£ÙØ±ÙØ¨Ø§_2" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="80.6" y="191.318">أوروبا</tspan></text>
<text id="26 Ø¯ÙÙØ©_2" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="66.0294" y="210.318">26 دولة</tspan></text>
</g>
<g id="Live Pulse Animation_11">
<circle id="Pulse_11" cx="140" cy="195" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_11" cx="140.5" cy="195.5" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
<g id="Oceania">
<g id="Map_6">
<path id="Vector_233" d="M1257.7 502.612C1258.86 502.612 1259.49 502.612 1260.65 502.433C1261.73 497.865 1262.17 495.626 1263.16 491.148C1261.99 491.148 1261.37 491.148 1260.2 491.328C1259.22 495.806 1258.77 498.134 1257.7 502.702V502.612Z" fill="#3D8361"/>
<path id="Vector_234" d="M1204.23 491.955C1205.75 491.955 1206.47 491.955 1207.99 491.776C1208.8 487.119 1209.24 484.79 1209.96 480.223C1208.44 480.223 1207.63 480.223 1206.11 480.402C1205.39 485.059 1204.94 487.387 1204.14 492.045L1204.23 491.955Z" fill="#3D8361"/>
<path id="Vector_235" d="M1215.78 491.328C1216.95 491.328 1217.57 491.328 1218.74 491.149C1219.63 486.492 1219.99 484.253 1220.8 479.596C1219.63 479.596 1219.01 479.596 1217.84 479.775C1217.04 484.432 1216.68 486.671 1215.78 491.328Z" fill="#3D8361"/>
<path id="Vector_236" d="M1317.97 486.312H1319.94C1323.43 471.356 1324.95 463.922 1327.55 449.234H1325.58C1322.98 463.922 1321.46 471.445 1318.06 486.312H1317.97Z" fill="#3D8361"/>
<path id="Vector_237" d="M1327.82 485.865C1329.88 485.865 1330.87 485.686 1332.93 485.596C1335.25 476.013 1336.24 471.177 1338.12 461.684C1336.06 461.684 1334.98 461.684 1332.93 461.863C1331.04 471.446 1329.97 476.192 1327.73 485.865H1327.82Z" fill="#3D8361"/>
<path id="Vector_238" d="M1341.17 485.237H1342.69C1345.02 475.654 1346.09 470.907 1347.97 461.414H1346.45C1344.57 470.907 1343.49 475.654 1341.17 485.237Z" fill="#3D8361"/>
<path id="Vector_239" d="M1349.14 497.776C1350.03 497.776 1350.39 497.776 1351.29 497.776C1353.79 488.283 1355.05 483.447 1357.2 474.043H1355.05C1352.9 483.536 1351.73 488.283 1349.23 497.866L1349.14 497.776Z" fill="#3D8361"/>
<path id="Vector_240" d="M1359.62 497.239C1361.32 497.239 1362.21 497.239 1364 497.06C1365.17 492.761 1365.71 490.611 1366.78 486.312C1364.99 486.312 1364.18 486.313 1362.39 486.492C1361.32 490.791 1360.78 492.94 1359.62 497.239Z" fill="#3D8361"/>
<path id="Vector_241" d="M1310.89 600.77C1312.33 600.591 1312.95 600.591 1314.39 600.412C1323.43 581.156 1327.55 571.394 1334.81 551.602C1333.37 551.602 1332.66 551.781 1331.22 551.87C1323.97 571.663 1319.85 581.515 1310.8 600.77H1310.89Z" fill="#3D8361"/>
<path id="Vector_242" d="M1277.22 628.265C1278.29 628.086 1278.83 628.086 1279.91 627.907C1299.88 586.619 1315.55 545.063 1328 500.91C1326.84 500.91 1326.3 500.91 1325.13 501.089C1312.68 545.242 1297.1 586.888 1277.22 628.265Z" fill="#3D8361"/>
<path id="Vector_243" d="M1292.71 614.652C1295.04 614.383 1296.21 614.204 1298.53 613.936C1312.33 585.635 1324.24 556.348 1333.55 526.346C1331.13 526.525 1329.88 526.614 1327.46 526.704C1318.24 556.886 1306.42 586.261 1292.71 614.652Z" fill="#3D8361"/>
<path id="Vector_244" d="M1260.65 642.057C1261.37 642.057 1261.64 641.878 1262.35 641.788C1280.98 604.8 1296.03 567.453 1308.65 528.047C1307.94 528.047 1307.58 528.047 1306.86 528.047C1294.33 567.543 1279.28 604.979 1260.65 641.967V642.057Z" fill="#3D8361"/>
<path id="Vector_245" d="M1299.97 513.359C1300.68 513.359 1301.04 513.359 1301.85 513.359C1303.01 508.881 1303.64 506.732 1304.71 502.254C1304 502.254 1303.64 502.254 1302.83 502.254C1301.76 506.732 1301.13 508.881 1299.97 513.359Z" fill="#3D8361"/>
<path id="Vector_246" d="M1248.2 643.848C1250.44 643.49 1251.6 643.4 1253.84 643.042C1272.2 605.875 1287.07 568.259 1299.52 528.674C1297.1 528.853 1295.85 528.943 1293.43 529.122C1281.16 568.797 1266.38 606.591 1248.2 643.938V643.848Z" fill="#3D8361"/>
<path id="Vector_247" d="M1238.8 645.192C1240.32 644.923 1241.13 644.834 1242.65 644.654C1264.68 598.531 1281.43 552.139 1294.59 502.791C1292.89 502.791 1292.09 502.97 1290.39 503.06C1277.31 552.497 1260.74 599.068 1238.8 645.281V645.192Z" fill="#3D8361"/>
<path id="Vector_248" d="M1225.99 669.822C1227.24 669.643 1227.96 669.463 1229.21 669.284C1231.45 665.254 1232.62 663.194 1234.77 659.164C1233.42 659.343 1232.8 659.433 1231.54 659.701C1229.39 663.821 1228.23 665.792 1225.99 669.822Z" fill="#3D8361"/>
<path id="Vector_249" d="M1239.87 621.28C1241.66 621.012 1242.65 620.922 1244.44 620.654C1258.59 586.531 1270.32 552.319 1280.26 516.764C1278.29 516.764 1277.31 516.943 1275.43 517.032C1265.58 552.677 1253.93 586.979 1239.96 621.191L1239.87 621.28Z" fill="#3D8361"/>
<path id="Vector_250" d="M1235.3 609.547C1236.65 609.368 1237.36 609.278 1238.8 609.099C1250.53 579.275 1260.65 548.646 1268.44 517.568C1266.92 517.568 1266.2 517.747 1264.77 517.837C1256.98 549.004 1247.04 579.634 1235.3 609.547Z" fill="#3D8361"/>
<path id="Vector_251" d="M1224.74 610.89C1226.17 610.711 1226.89 610.622 1228.23 610.443C1239.69 580.35 1249.64 549.631 1257.25 518.285C1255.73 518.285 1255.01 518.464 1253.49 518.554C1245.87 549.9 1236.11 580.709 1224.65 610.89H1224.74Z" fill="#3D8361"/>
<path id="Vector_252" d="M1214.97 612.145C1215.87 612.145 1216.32 611.966 1217.21 611.877C1226.89 585.994 1235.13 559.573 1242.11 532.795C1241.13 532.795 1240.68 532.795 1239.78 532.974C1232.89 559.753 1224.65 586.173 1215.06 612.145H1214.97Z" fill="#3D8361"/>
<path id="Vector_253" d="M1198.68 626.921C1200.38 626.653 1201.18 626.563 1202.89 626.295C1212.83 600.412 1221.42 573.991 1228.59 547.213C1226.8 547.392 1225.9 547.392 1224.11 547.571C1216.95 574.439 1208.53 600.859 1198.68 626.832V626.921Z" fill="#3D8361"/>
<path id="Vector_254" d="M1190.08 628.176C1190.53 628.176 1190.71 628.176 1191.06 627.997C1198.77 606.144 1205.75 584.47 1212.29 562.17C1211.84 562.17 1211.66 562.17 1211.21 562.17C1204.77 584.47 1197.78 606.144 1190.08 627.997V628.176Z" fill="#3D8361"/>
<path id="Vector_255" d="M1178.61 629.787C1180.14 629.608 1180.85 629.518 1182.28 629.249C1189.81 607.218 1196.61 585.455 1202.97 563.064C1201.36 563.244 1200.64 563.244 1199.03 563.423C1192.76 585.813 1186.05 607.755 1178.52 629.787H1178.61Z" fill="#3D8361"/>
<path id="Vector_256" d="M1168.85 631.221C1170.11 631.042 1170.73 630.952 1171.99 630.773C1173.6 626.295 1174.31 623.966 1175.84 619.488C1174.58 619.667 1173.87 619.757 1172.61 619.936C1171.09 624.504 1170.37 626.743 1168.85 631.31V631.221Z" fill="#3D8361"/>
</g>
<g id="line_9">
<path id="line_10" d="M137 577.25H1220" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
<path id="circle_4" d="M1225 583.25C1227.77 583.25 1230 581.016 1230 578.25C1230 575.484 1227.77 573.25 1225 573.25C1222.23 573.25 1220 575.484 1220 578.25C1220 581.016 1222.23 583.25 1225 583.25Z" fill="white"/>
</g>
<g id="Home Oceania_Dot">
<g id="Europe_12">
<g id="bkg_11">
<rect id="Rectangle 11_11" x="1082" y="547.25" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<text id="Ø£ÙÙÙØ§ÙÙØ³ÙØ§" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="1188.54" y="574.568">أوقيانوسيا</tspan></text>
<text id="3 Ø¯ÙÙ" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="1188.54" y="593.318">3 دول</tspan></text>
</g>
<g id="Live Pulse Animation_12">
<circle id="Pulse_12" cx="1222" cy="578.25" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_12" cx="1222.5" cy="578.75" r="7.5" fill="#ECE8D3"/>
</g>
</g>
<g id="Home Oceania_Dot_2">
<g id="Europe_13">
<g id="bkg_12">
<rect id="Rectangle 11_12" y="547.25" width="164" height="62" rx="20" fill="white" fill-opacity="0.95"/>
</g>
<text id="Ø£ÙÙÙØ§ÙÙØ³ÙØ§_2" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="bold" ><tspan x="46.5362" y="574.693">أوقيانوسيا</tspan></text>
<text id="3 Ø¯ÙÙ_2" fill="#D0C89D" xml:space="preserve" style="white-space: pre" font-family="AktivGrotesk" font-size="16" font-weight="500" ><tspan x="76.1706" y="593.443">3 دول</tspan></text>
</g>
<g id="Live Pulse Animation_13">
<circle id="Pulse_13" cx="140" cy="578.25" r="10" fill="#ECE8D3" fill-opacity="0.01"/>
<circle id="Main_13" cx="140.5" cy="578.75" r="7.5" fill="#ECE8D3"/>
</g>
</g>
</g>
</g>
</svg>
         <?php }
        ?>

            
            <?php if( have_rows('map_continents', 'options') ): ?>
            <div class="icd__continents">
              <?php while( have_rows('map_continents', 'options') ): the_row(); 
                $continent_name = get_sub_field('continent_name', 'options');
              ?>
                <div class="icd__countries" data-id="Continent_<?php echo esc_attr($continent_name); ?>">
                  <h4><b><?php echo esc_html(count(get_sub_field('map_country', 'options'))); ?></b> Countries</h4>
                  <ul class="icd__countries__list">
                    <?php if( have_rows('map_country', 'options') ): ?>
                      <?php while( have_rows('map_country', 'options') ): the_row(); 
                        $country_name = get_sub_field('country_name', 'options'); 
                      ?>
                        <li><?php echo esc_html($country_name); ?></li>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>
                </div>
              <?php endwhile; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php if( get_field('map_button_url') && get_field('map_button_text') ): ?>
        <div class="icd_btn green mobile">
          <a href="<?php echo get_field('map_button_url') ?>">
            <span><?php echo get_field('map_button_text') ?></span>
            <img src="/wp-content/uploads/2024/11/arrow.svg">
          </a>
        </div>
        <?php endif; ?>
      </div>
    </section>

    <section class="icd__investment icd_section sectionHeight sectionSpacing">
      <div class="container largeContainer">
        <div class="row">
          <div class="col-md-12">
            <div class="icd__investment_wrapper">
              <div class="icd__head">
                <?php if( get_field('investment_strategy_title') ): ?>
                <h2><?php echo get_field('investment_strategy_title'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('investment_strategy_button_text') && get_field('investment_strategy_button_url') ): ?>
                <div class="icd_btn desktop">
                  <a href="<?php echo get_field('investment_strategy_button_url'); ?>">
                    <span><?php echo get_field('investment_strategy_button_text'); ?></span>
                    <img src="/wp-content/uploads/2024/11/arrow.svg">
                  </a>
                </div>
                <?php endif; ?>
              </div>
              <?php if( get_field('investment_strategy_description') ): ?>
              <div class="icd__investment_content">
                <p><?php echo get_field('investment_strategy_description'); ?></p>
              </div>
              <?php endif; ?>
              <?php if( get_field('investment_strategy_button_text') && get_field('investment_strategy_button_url') ): ?>
              <div class="icd_btn mobile">
                <a href="<?php echo get_field('investment_strategy_button_url'); ?>">
                  <span><?php echo get_field('investment_strategy_button_text'); ?></span>
                  <img src="/wp-content/uploads/2024/11/arrow.svg">
                </a>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
 
<?php get_footer(); ?>