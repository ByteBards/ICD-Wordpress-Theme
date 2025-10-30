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


<form role="search" method="get" id="searchform" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="search-field" placeholder="<?php if ($current_lang == 'en') { ?> How can we help you? <?php } elseif($current_lang == 'ar'){ ?>كيف يمكننا مساعدتك؟<?php } ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label'); ?>" required />
    <button type="submit" class="search-submit"><?php 
                        if ($current_lang == 'en') {
                            ?>
                            SEARCH
                            <?php
                        } elseif($current_lang == 'ar'){
                            ?>
                            البحث
                            <?php
                        } 
                        ?></button>
</form>
