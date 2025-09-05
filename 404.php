<?php
	get_header();
    $current_lang = pll_current_language();
?>

<div class="page-404">
    <section class="error-404 not-found">
<!--         <header class="page-header">
            <h1 class="page-title"><?php //esc_html_e( 'Oops! That page can&rsquo;t be found.', 'your-theme' ); ?></h1>
        </header> -->

        <div class="page-content">
            <!-- <p><?php //esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'your-theme' ); ?></p> -->

<!--             <div class="search-form">
                <?php //get_search_form(); ?>
            </div> -->

<!--             <div class="suggestions">
                <p><?php //esc_html_e( 'You may also want to check out these popular pages:', 'your-theme' ); ?></p>
                <ul>
                    <li><a href="<?php //echo home_url(); ?>"><?php //esc_html_e( 'Home Page', 'your-theme' ); ?></a></li>
                    <li><a href="<?php //echo home_url('/contact/'); ?>"><?php //esc_html_e( 'Contact Us', 'your-theme' ); ?></a></li>
                    <li><a href="<?php //echo home_url('/blog/'); ?>"><?php //esc_html_e( 'Blog', 'your-theme' ); ?></a></li>
                </ul>
            </div> -->
            <div class="custom__page__404">
            	<div class="page__404__content">
            		<h1>404</h1>
            		<h4>
                    <span>
                    <?php 
                        if ($current_lang == 'en') {
                            echo pll__('Whoops...'); 
                        } elseif ($current_lang == 'ar') {
                            echo pll__('عفوًا'); 
                        }
                    ?>
                    
                    </span> 
                    <?php 
                        if ($current_lang == 'en') {
                            echo pll__('Not Found!!!'); 
                        } elseif ($current_lang == 'ar') {
                            echo pll__('لم يتم العثور عليه!!!'); 
                        }
                    ?>
                    </h4>
            	</div>
            	<div class="back__to__home">
                	<a href="<?php echo home_url(); ?>" class="btn-back-home">
                    <?php 
                        if ($current_lang == 'en') {
                            echo pll__('Back to Home'); 
                        } elseif ($current_lang == 'ar') {
                            echo pll__('العودة إلى المنزل'); 
                        }
                    ?>
                        
                    </a>
            	</div>
            </div>
        </div>
    </section>
</div>

<?php
	get_footer();
?>