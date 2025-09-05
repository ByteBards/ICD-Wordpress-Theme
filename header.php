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
              display: flex;
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--========================= HEADER (END) =========================-->
    <div id="smooth-wrapper">
    <div id="smooth-content">