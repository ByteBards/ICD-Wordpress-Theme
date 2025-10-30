<?php get_header(); 
    $current_lang = pll_current_language(); 
    if (strpos($current_lang, 'en-US') !== false) {
        $href = '/';
    } elseif (strpos($current_lang, 'ar') !== false) {
        $href = '/ar';
    } else {
        $href = '/';
    }
    ?>

<main id="primary" class="site-main search-results-page">
  <div class="container">
    <div class="row searchrow">
        <div class="col-12">
            <div class="searchfrom">
                <?php get_search_form(); ?>
                <div class="searchform-result">
                    <?php
    global $wp_query;

    $total_results = $wp_query->found_posts;
    $posts_per_page = get_query_var('posts_per_page');
    $paged = max(1, get_query_var('paged'));
    $start = ($paged - 1) * $posts_per_page + 1;
    $end = min($paged * $posts_per_page, $total_results);

    if ($total_results > 0) :
    ?>
      <h1 class="search-title">
        
        <?php 
            if ($current_lang == 'en') {
                ?>
                Showing <b><?php echo $start; ?> – <?php echo $end; ?></b> of <?php echo $total_results; ?> results for <b>“<?php echo esc_html(get_search_query()); ?>”</b>
                <?php
            } elseif($current_lang == 'ar'){
                ?>
                يعرض <b><?php echo $start; ?> – <?php echo $end; ?></b> من أصل <?php echo $total_results; ?> نتيجة ل<b>“<?php echo esc_html(get_search_query()); ?>”</b>
                <?php
            } 
            ?>
      </h1>
    <?php else : ?>
      
      <?php 
            if ($current_lang == 'en') {
                ?>
                <h1 class="search-title no-search-result">
                  No results found for “<?php echo esc_html(get_search_query()); ?>”
                </h1>
                <?php
            } elseif($current_lang == 'ar'){
                ?>
                <h1 class="search-title no-search-result">
                لم يتم العثور على نتائج لـ “<?php echo esc_html(get_search_query()); ?>”
              </h1>

                <?php
            } 
            ?>
    <?php endif; ?>

    <?php if ( have_posts() ) : ?>
      <div class="search-results-list">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php 
// Define redirect URLs for English and Arabic
$media_page_en = 'https://icd.scdwsites.com/media-centre/';
$media_page_ar = 'https://icd.scdwsites.com/ar/media-centre/';

// Detect correct redirect URL based on language
$media_redirect_url = ($current_lang == 'ar') ? $media_page_ar : $media_page_en;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-result-item'); ?>>
    <div class="art-top">
        <div class="icd__logo">
            <?php 
            if ($current_lang == 'en') {
                ?>
                <img class="custom-logo ar" src="/wp-content/uploads/2024/11/ICD.svg" alt="ICD Logo">
                <?php
            } elseif($current_lang == 'ar'){
                ?>
                <img class="custom-logo ar" src="/wp-content/uploads/2025/02/logo-dark-ar.png" alt="ICD Logo">
                <?php
            } else {
                echo '<span class="icd__logo__text">' . get_bloginfo('name') . '</span>';
            }
            ?>
        </div>

        <?php 
        // Redirect link logic: if post type is 'post', go to Media Centre
        $post_link = (get_post_type() === 'post') ? $media_redirect_url : get_permalink();
        ?>

        <a href="<?php echo esc_url($post_link); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M17.753 17.1347V2.36377H2.98938" stroke="#003142" stroke-width="3.5" stroke-miterlimit="10"/>
                <path d="M2.18188 17.9347L17.7528 2.36377" stroke="#003142" stroke-width="3.5" stroke-miterlimit="10"/>
            </svg>
        </a>
    </div>

    <div class="art-main">
        <h2 class="entry-title">
            <a href="<?php echo esc_url($post_link); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
    </div>
</article>

        <?php endwhile; ?>
      </div>

      <div class="pagination">
        <?php the_posts_pagination(); ?>
      </div>
    <?php else : ?>
      <!-- <p class="no-results"><?php esc_html_e( 'No results found. Try another search.', 'your-theme' ); ?></p> -->
    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
