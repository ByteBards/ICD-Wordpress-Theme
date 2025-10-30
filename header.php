<!-- Welcome to ICD ❤ -->

<?php 
    $current_lang = pll_current_language(); 
    if (strpos($current_lang, 'en-US') !== false) {
        $href = '/';
    } elseif (strpos($current_lang, 'ar') !== false) {
        $href = '/ar';
    } else {
        $href = '/';
    }
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <style type="text/css">
        .loader{
              position: fixed;
              top: 0px;
              bottom: 0px;
              display: none;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              background: #003142;
              width: 100vw;
              height: 100vh;
                  z-index: 999999;
            }

            .loader h1{
              position: relative;
              color: #fff;
              font-size: 50px;
              font-weight: 500;
            }

            .loader .text{
              overflow: hidden;
            }

            .line-container{
              position: relative;
              width: 450px;
              height: 6px;
              overflow: hidden;
              border-radius: 10px;
            }

            .line{
              position: absolute;
              width: 450px;
              height: 6px;
              background: #003142;
              right: 0;
              overflow: hidden;
            }
    </style>
    <div class="loader">
        <span class="text">
          <img src="/wp-content/uploads/2024/11/icd-footer-logo.svg">
        </span>
      </div>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>   
    </div>
    <!--========================= HEADER (START) =========================-->
    <header class="icd__header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="icd__header__wrapper">
                        <div class="icd_header_left">
                            <div class="icd__logo">
                                <a href="<?php echo $href; ?>" class="icd__logo__link" rel="home" aria-current="page">
                                    <?php 
                                    if ($current_lang == 'en') {
                                        the_custom_logo();
                                    } elseif($current_lang == 'ar'){
                                        ?>
                                        <img class="custom-logo ar" src="/wp-content/uploads/2025/02/logo-dark-ar.png" alt="ICD Logo">
                                        <?php
                                    } 

                                    else {
                                        echo '<span class="icd__logo__text">' . get_bloginfo('name') . '</span>';
                                    }
                                    ?>
                                    <a href="<?php echo $href; ?>" class="icd__logo__link" rel="home" aria-current="page">
                                        <img class="mobile_logo" src="/wp-content/uploads/2025/02/Mobile-ICD.svg" alt="ICD Logo">
                                </a>
                            </div>
                            <div class="icd_desktop_nav">
                                <div class="icd__nav_d_menus">
                                    <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location'  => 'primary',
                                                'menu_class'      => 'icd__menu__wrapper',
                                                'container_class' => 'primary-menu-container',
                                                'items_wrap'      => '<ul id="icd__primary__list" class="%2$s">%3$s</ul>',
                                                'fallback_cb'     => false,
                                            )
                                        );
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="icd_header_right">
                            <div class="icd_desktop_l_nav">
                                <div class="icd__nav_d_menus">
                                    <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location'  => 'desktop_r_menu',
                                                'menu_class'      => 'icd__menu__wrapper',
                                                'container_class' => 'primary-menu-container',
                                                'items_wrap'      => '<ul id="icd__primary__list" class="%2$s">%3$s</ul>',
                                                'fallback_cb'     => false,
                                            )
                                        );
                                    ?>
                                </div>
                            </div>
                            <div class="icd__nav_wrapper mbl_only">
                                <span class="popup_trigger_main"><a class="popup_trigger"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"/></svg></a></span>
                                <span id="icd__nav" class="icd__nav">
                                    <?php 
                                        if ($current_lang == 'en') {
                                            echo pll__('Menu'); 
                                        } elseif ($current_lang == 'ar') {
                                            echo pll__('القائمة الرئيسة'); 
                                        }
                                    ?>
                                </span>
                                <div class="icd__nav__menus">
                                    <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location'  => 'primary',
                                                'menu_class'      => 'icd__menu__wrapper',
                                                'container_class' => 'primary-menu-container',
                                                'items_wrap'      => '<ul id="icd__primary__list" class="%2$s">%3$s</ul>',
                                                'fallback_cb'     => false,
                                            )
                                        );
                                    ?>
                                </div>
                            </div>
                            <!-- <a class="popup_trigger fordesktop"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px"><path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"/></svg></a> -->
                            <div class="popup_modal">
                                <div class="popup_modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="icd__logo">
                                                    <a href="<?php echo $href; ?>" class="icd__logo__link" rel="home" aria-current="page">
                                                        <?php 
                                                        if ($current_lang == 'en') {
                                                            the_custom_logo();
                                                        } elseif($current_lang == 'ar'){
                                                            ?>
                                                            <img class="custom-logo ar" src="/wp-content/uploads/2025/02/logo-dark-ar.png" alt="ICD Logo">
                                                            <?php
                                                        } 

                                                        else {
                                                            echo '<span class="icd__logo__text">' . get_bloginfo('name') . '</span>';
                                                        }
                                                        ?>
                                                        <a href="<?php echo $href; ?>" class="icd__logo__link" rel="home" aria-current="page">
                                                            <img class="mobile_logo" src="/wp-content/uploads/2025/02/Mobile-ICD.svg" alt="ICD Logo">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6"><span class="popup_close-button"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M1.03345 17.3843L17.5195 0.898244" stroke="#003142" stroke-miterlimit="10"/>
<path d="M1.04077 0.898682L17.5268 17.3847" stroke="#003142" stroke-miterlimit="10"/>
</svg></span></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="searchfrom">
                                                    <?php get_search_form(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <?php if ( is_front_page() || is_home() ) : ?>
 
<?php endif; ?>

    <!--========================= HEADER (END) =========================-->
    <div id="smooth-wrapper">
    <div id="smooth-content">