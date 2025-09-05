<?php
// START ENQUEUE PARENT ACTION
if ( !defined( 'ABSPATH' ) ) exit;
if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'twenty-twenty-one-style','twenty-twenty-one-style','twenty-twenty-one-print-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );
// END ENQUEUE PARENT ACTION

// CUSTOM FUNCTION ENQUEUE
function icd_enqueue_assets() {
    wp_enqueue_style('parent-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style('swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css', array(), '11.0.5');
    
    wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.6.0.min.js', array('jquery'), '5.3.3', true);
    wp_enqueue_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js', array('jquery'), '5.3.3', true);
    wp_enqueue_script('swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js', array(), null, true);


    wp_enqueue_script('gsap', get_stylesheet_directory_uri() . '/assets/js/gsap/gsap.min.js', array(), '3.12.5', true);
    wp_enqueue_script('scroll-trigger', get_stylesheet_directory_uri() . '/assets/js/gsap/ScrollTrigger.min.js', array('gsap'), '3.12.5', true);
    wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/ScrollSmoother.min.js', array(), null, true);
    wp_enqueue_script('tweenMax-script', get_stylesheet_directory_uri() . '/assets/js/gsap/TweenMax.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/SplitText.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/TextPlugin.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/ScrambleTextPlugin.min.js', array(), null, true);
    // wp_enqueue_script('DrawSVG-script', get_stylesheet_directory_uri() . '/assets/js/gsap/DrawSVGPlugin.min.js', array(), null, true);
    
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/CSSRulePlugin.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/CustomBounce.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/CustomEase.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/CustomWiggle.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/Draggable.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/DrawSVGPlugin.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/EaselPlugin.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/EasePack.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/Flip.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/GSDevTools.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/InertiaPlugin.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/MorphSVGPlugin.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/MotionPathHelper.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/MotionPathPlugin.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/Observer.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/Physics2DPlugin.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/PhysicsPropsPlugin.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/PixiPlugin.min.js', array(), null, true);
    // wp_enqueue_script('scroll-script', get_stylesheet_directory_uri() . '/assets/js/gsap/ScrollToPlugin.min.js', array(), null, true);

    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), null, true);
    wp_enqueue_script('customjs-script', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), null, true);
    wp_enqueue_script('anim-script', get_stylesheet_directory_uri() . '/assets/js/anim.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'icd_enqueue_assets');

// OPTIONS PAGE 
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}
// FOOTER MENU
function icd_register_menus() {
    register_nav_menus(
        array(
            'footer_menu' => 'Footer Menu',
            'footer_sec_menu' => 'Footer Second Menu',
            'desktop_r_menu' => 'Desktop Right Menu',
        )
    );
}
add_action( 'after_setup_theme', 'icd_register_menus' );

function enqueue_owl_carousel_assets() {
    // Enqueue Owl Carousel CSS
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4');
    wp_enqueue_style('owl-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css', array('owl-carousel'), '2.3.4');

    // Enqueue jQuery (optional if not already loaded by WordPress)
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true);

    // Enqueue Owl Carousel JS
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js', array('jquery'), '2.3.4', true);
}
add_action('wp_enqueue_scripts', 'enqueue_owl_carousel_assets');



// Add this code to your theme's functions.php or a custom plugin

function pie_chart_shortcode() {
    ob_start(); ?>
    
    <!-- HTML Canvas for Pie Chart -->
    <canvas id="pieChart"></canvas>

    <script>
        // Initialize the pieData array dynamically from WordPress ACF fields
    const pieData = [];
    <?php if( have_rows('port_peichart', 'option') ): ?>
        <?php while( have_rows('port_peichart', 'option') ): the_row(); ?>
            pieData.push({
                percentage: <?php the_sub_field('ppc_peipercentage'); ?>,
                heading: "<?php the_sub_field('ppc_heading'); ?>",
                color: "<?php the_sub_field('ppc_color'); ?>"
            });
        <?php endwhile; ?>
    <?php endif; ?>


       const canvas = document.getElementById('pieChart');
const ctx = canvas.getContext('2d');

// Adjust canvas size and scaling factor based on screen width
function adjustCanvasSize() {
    const screenWidth = window.innerWidth;
    const baseWidth = 1631;
    const baseHeight = 900;
    const scalingFactor = screenWidth >= 1600 ? 1 : screenWidth / 1600;

    canvas.width = baseWidth * scalingFactor;
    canvas.height = baseHeight * scalingFactor;

    return {
        radius: (baseHeight * 0.8 * scalingFactor) / 2,
        scalingFactor: scalingFactor
    };
}

let { radius, scalingFactor } = adjustCanvasSize();
    const data = pieData.map(item => item.percentage); // Use percentages for the chart
    const colors = pieData.map(item => item.color); // Use dynamic colors
    const labels = pieData.map(item => item.heading); // Use dynamic labels

let progress = 0;
let expansionFactor = 0;
let expanding = true;
let animationStarted = false;
let animationTimeout;

// Intersection Observer to trigger animation when canvas is visible
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !animationStarted) {
            animationTimeout = setTimeout(() => {
                animationStarted = true;
                animateChart(); // Start the animation
            }, 500);
        }
    });
}, { threshold: 0.5 });

// Observe the canvas
observer.observe(canvas);

// Draw concentric circles with a breathing effect
function drawConcentricCircles() {
    const baseRadius = radius + 10;
    const lineWidths = [4, 3, 2, 1];

    lineWidths.forEach((lineWidth, index) => {
        ctx.beginPath();
        ctx.arc(canvas.width / 2, canvas.height / 2, baseRadius + (index * 10) + expansionFactor, 0, 2 * Math.PI);
        ctx.lineWidth = lineWidth * scalingFactor;
        ctx.strokeStyle = "#e0e0e0";
        ctx.stroke();
    });

    if (expanding) {
        expansionFactor += 0.1 * scalingFactor;
        if (expansionFactor > 3 * scalingFactor) expanding = false;
    } else {
        expansionFactor -= 0.1 * scalingFactor;
        if (expansionFactor < -1 * scalingFactor) expanding = true;
    }
}

const rotateBy = -30;
const startAngleOffset = (rotateBy * Math.PI) / 180;

// Draw the pie chart
let currentSliceIndex = 0; // Track current slice being animated
let sliceProgress = 0; // Progress for the current slice (0 to 1)

function drawPieChart() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    let startAngle = -Math.PI / 2 + startAngleOffset;

    data.forEach((value, index) => {
        const sliceAngle = (2 * Math.PI * value) / 100;

        if (index < currentSliceIndex || (index === currentSliceIndex && sliceProgress > 0)) {
            const drawAngle = index === currentSliceIndex ? sliceAngle * sliceProgress : sliceAngle;

            ctx.beginPath();
            ctx.moveTo(canvas.width / 2, canvas.height / 2);
            ctx.arc(canvas.width / 2, canvas.height / 2, radius, startAngle, startAngle + drawAngle);
            ctx.closePath();
            ctx.fillStyle = colors[index];
            ctx.fill();

            startAngle += drawAngle;
        } else {
            startAngle += sliceAngle;
        }
    });

    if (sliceProgress < 1) {
        sliceProgress += 0.008;
    } else {
        sliceProgress = 0;
        currentSliceIndex++;
    }

    if (currentSliceIndex < data.length) {
        requestAnimationFrame(drawPieChart);
    } else {
        drawConcentricCircles();
    }
}

// Animation progress for label lines
let labelLineProgress = 0;

function animateLabels() {
    labelLineProgress += 0.02;

    if (labelLineProgress > 1) {
        labelLineProgress = 1;
    }

    drawLabels(labelLineProgress);

    if (labelLineProgress < 1) {
        requestAnimationFrame(animateLabels);
    } else {
        drawLabels(1); // Ensure labels are drawn in their final position
    }
}

// Draw labels and their lines
function drawLabels(progress) {
    let startAngle = -Math.PI / 2 + startAngleOffset;
    const lineLength = 300 * scalingFactor;
    const verticalLineHeight = 10 * scalingFactor;
    const innerRadiusFactor = 0.8;

    data.forEach((value, index) => {
        const sliceAngle = (2 * Math.PI * value) / 100;
        const midAngle = startAngle + sliceAngle / 2;
        const isLeftSide = midAngle > Math.PI / 2 && midAngle < (3 * Math.PI) / 2;

        const lineStartX = canvas.width / 2 + (radius * innerRadiusFactor) * Math.cos(midAngle);
        const lineStartY = canvas.height / 2 + (radius * innerRadiusFactor) * Math.sin(midAngle);

        const lineEndX = isLeftSide ? lineStartX - lineLength : lineStartX + lineLength;
        const lineEndY = lineStartY;

        const currentLineEndX = lineStartX + progress * (lineEndX - lineStartX);
        const currentLineEndY = lineStartY + progress * (lineEndY - lineStartY);

        ctx.beginPath();
        ctx.moveTo(lineStartX, lineStartY);
        ctx.lineTo(currentLineEndX, currentLineEndY);
        ctx.strokeStyle = "#003142";
        ctx.lineWidth = 1 * scalingFactor;
        ctx.stroke();

        if (progress === 1) {
            ctx.beginPath();
            if (isLeftSide) {
                ctx.moveTo(lineEndX, lineEndY - verticalLineHeight / 1);
                ctx.lineTo(lineEndX, lineEndY + verticalLineHeight / 1);
            } else {
                ctx.moveTo(lineEndX, lineEndY - verticalLineHeight / 1);
                ctx.lineTo(lineEndX, lineEndY + verticalLineHeight / 1);
            }
            ctx.strokeStyle = "#003142";
            ctx.lineWidth = 1 * scalingFactor;
            ctx.stroke();

            drawLabel(`${value}%`, labels[index], lineEndX, lineEndY, isLeftSide);
        }

        startAngle += sliceAngle;
    });
}

// Draw percentage and text label
function drawLabel(percentage, label, x, y, isLeftSide) {
    ctx.font = `800 ${48 * scalingFactor}px Inter`;
    ctx.fillStyle = "#003142";
    ctx.textAlign = isLeftSide ? "right" : "left";
    ctx.textBaseline = "bottom";

    let percentageX = x;
    if (isLeftSide) {
        percentageX -= 20 * scalingFactor;
    } else {
        percentageX += 20 * scalingFactor;
    }

    ctx.fillText(percentage, percentageX, y - 5 * scalingFactor);

    ctx.font = `600 ${21 * scalingFactor}px Inter`;
    ctx.textBaseline = "top";

    let labelX = x;
    if (isLeftSide) {
        labelX -= 20 * scalingFactor;
    } else {
        labelX += 20 * scalingFactor;
    }

    const maxLineLength = 200 * scalingFactor;
    let lines = [];
    let currentLine = '';

    const words = label.split(' ');
    words.forEach(word => {
        const testLine = currentLine ? currentLine + ' ' + word : word;
        const testWidth = ctx.measureText(testLine).width;

        if (testWidth > maxLineLength) {
            if (currentLine) {
                lines.push(currentLine);
            }
            currentLine = word;
        } else {
            currentLine = testLine;
        }
    });

    if (currentLine) {
        lines.push(currentLine);
    }

    lines.forEach((line, index) => {
        const lineY = y + index * (24 * scalingFactor);
        ctx.fillText(line, labelX, lineY);
    });
}

// Animation loop
function animateChart() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    if (progress < 1) {
        progress += 0.02;
    } else {
        progress = 1;
    }

    drawPieChart();

    if (progress >= 1) {
        drawConcentricCircles();
        animateLabels();
    } else {
        requestAnimationFrame(animateChart);
    }
}

// Adjust canvas size on window resize
window.addEventListener('resize', () => {
    const newSize = adjustCanvasSize();
    radius = newSize.radius;
    scalingFactor = newSize.scalingFactor;
    progress = 0;
    if (animationStarted) {
        animateChart();
    }
});

    </script>
    
    <?php
    return ob_get_clean();
}

add_shortcode('pie_chart', 'pie_chart_shortcode');



// if (function_exists('pll_register_string')) {
//     pll_register_string('menu', 'Menu', 'your-theme-or-plugin');
// }