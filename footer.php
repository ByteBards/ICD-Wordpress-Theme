           

    <!-- Footer Widgets -->
    <?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>

    <!-- Footer Theme Options -->
    <?php
        $footer_logo = get_field('footer_logo', 'option');
        $copyright = get_field('copyright', 'option');
        $footer_intro = get_field('footer_intro', 'option');
        $footer_phone = get_field('footer_phone', 'option');
        $footer_address = get_field('footer_address', 'option');

        $current_lang = pll_current_language(); 
        if (strpos($current_lang, 'en-US') !== false) {
            $href = '/';
        } elseif (strpos($current_lang, 'ar') !== false) {
            $href = '/ar';
        } else {
            $href = '/';
        }
    ?>



    <!--========================= FOOTER (START) =========================-->

    <footer class="icd__footer">
        <div class="icd_container">
            <div class="row">
                <div class="icd__footer__wrapper">
                    <div class="icd__footer__line one"></div>
                    <div class="icd__footer__line two"></div>
                    <div class="icd__footer__line three"></div>
                    <div class="icd__footer__line fourth"></div>
                    <div class="icd__footer__row">
                        <div class="icd__footer__col one">
                            <div class="icd__footer__img">
                                <a href="<?php echo $href; ?>"><img src="<?= $footer_logo; ?>" alt="ICD"></a>
                            </div>
                        </div>
                        <div class="icd__footer__col two">
                            <div class="icd__footer__intro">
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location'  => 'footer_sec_menu',
                                            'menu_class'      => 'icd__footer__menu__wrapper',
                                            'container_class' => 'footer-menu-container',
                                            'items_wrap'      => '<ul id="icd__footer__list" class="%2$s">%3$s</ul>',
                                            'fallback_cb'     => false,
                                        )
                                    );
                                ?>
                            </div>
                        </div>
                        <div class="icd__footer__col three">
                            <div class="icd__footer__contact">
                                <div class="footer_phone">
                                    <a href="tel:<?php echo $footer_phone; ?>"><?php echo $footer_phone; ?></a>
                                </div>
                                <div class="footer_address">
                                    <a target="_blank" href="https://www.google.com/maps/place/Investment+Corporation+of+Dubai+(ICD)/@25.1733337,55.2165615,12z/data=!4m10!1m2!2m1!1sICD!3m6!1s0x3e5f428e78f5d48f:0xf749ce05d9b49ae5!8m2!3d25.2273406!4d55.2913257!15sCgNJQ0RaBSIDaWNkkgESaW52ZXN0bWVudF9jb21wYW55mgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVVJPZG5KMVdFSm5FQUXgAQD6AQQIABAT!16s%2Fg%2F1trrbnw_?entry=ttu&g_ep=EgoyMDI1MDEyMi4wIKXMDSoASAFQAw%3D%3D"><?php echo $footer_address; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="icd__footer__col four">
                            <div class="icd__footer__menu">
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location'  => 'footer_menu',
                                            'menu_class'      => 'icd__footer__menu__wrapper',
                                            'container_class' => 'footer-menu-container',
                                            'items_wrap'      => '<ul id="icd__footer__list" class="%2$s">%3$s</ul>',
                                            'fallback_cb'     => false,
                                        )
                                    );
                                ?>
                            </div>
                            <div class="icd__footer__copyright">
                               <p><?php echo $copyright; ?></p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 </div>
</div>

<!-- <div class="loader__body">
    <div class="loader">
      <div class="orb"></div>
      <div class="wave"></div>
      <div class="wave"></div>
      <div class="wave"></div>
    </div>
</div> -->

<!--  <div class="preloader">
    <div class="prl-logo">
        <h1 class="hide"> <img src="/wp-content/uploads/2024/11/icd-footer-logo.svg" alt="logo" /></h1>
    </div>
    <div class="lightCyan-slider"></div>
    <div class="persianGreen-slider"></div>
    <div class="white-slider"></div>
</div>  -->


<!-- PRESS RELEASE POPUP -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="popup__close" data-bs-dismiss="modal" aria-label="Close">
        <img src="/wp-content/uploads/2024/11/cross-btn.svg">
      </button>
      <h5 class="modal-title" id="modalTitle"></h5>
      <div class="modal-body popup__post__content">
        <p id="modalDate"></p>
        <div id="modalContent"></div>
      </div>
    </div>
  </div>
</div>

<!-- VIDEO POPUP -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="popup__close" data-bs-dismiss="modal" aria-label="Close">
        <img src="/wp-content/uploads/2024/11/cross-btn.svg">
      </button>
      <h5 class="modal-title" id="modalTitle"></h5>
      <div class="modal-body popup__video__content">
        <video id="modalVideo" controls autoplay="" muted="" playsinline="" data-origwidth="0" data-origheight="0">
          <source id="modalVideoSource" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
</div>

    <?php wp_footer(); ?>
    <script>
        // const megnaticcanvas = document.getElementById('magneticCanvas');
        // const megnaticctx = megnaticcanvas.getContext('2d');

        // // Fix for High-DPI Displays
        // const dpr = window.devicePixelRatio || 1;
        // const megnaticcanvasWidth = 1768;
        // const megnaticcanvasHeight = 748;

        // // Create an offscreen canvas for high-quality rendering
        // const offscreenCanvas = document.createElement('canvas');
        // const offscreenCtx = offscreenCanvas.getContext('2d');

        // offscreenCanvas.width = megnaticcanvasWidth * dpr;
        // offscreenCanvas.height = megnaticcanvasHeight * dpr;
        // offscreenCtx.scale(dpr, dpr);

        // // Set the visible canvas size
        // megnaticcanvas.width = megnaticcanvasWidth * dpr;
        // megnaticcanvas.height = megnaticcanvasHeight * dpr;
        // megnaticcanvas.style.width = `${megnaticcanvasWidth}px`;
        // megnaticcanvas.style.height = `${megnaticcanvasHeight}px`;

        // // Section configuration
        // const sectionWidth = 424;
        // const sectionHeight = 355;
        // const sectionRows = 2;
        // const sectionCols = 4;
        // const lineLength = 60;
        // const cellPadding = 60;
        // const cellRows = 6;
        // const cellCols = 7;

        // const sectionSpacingX = (megnaticcanvasWidth - (sectionCols * sectionWidth)) / (sectionCols + 1);
        // const sectionSpacingY = (megnaticcanvasHeight - (sectionRows * sectionHeight)) / (sectionRows + 1);

        // const linesani = [];

        // for (let sRow = 0; sRow < sectionRows; sRow++) {
        //     for (let sCol = 0; sCol < sectionCols; sCol++) {
        //         const sectionX = sectionSpacingX + sCol * (sectionWidth + sectionSpacingX);
        //         const sectionY = sectionSpacingY + sRow * (sectionHeight + sectionSpacingY);
        //         let defaultAngle = (sRow === 0) ? ((sCol % 2 === 0) ? Math.PI / 4 : (3 * Math.PI) / 4) : ((sCol % 2 === 0) ? (3 * Math.PI) / 4 : Math.PI / 4);

        //         const sectionLines = [];

        //         for (let row = 0; row < cellRows; row++) {
        //             for (let col = 0; col < cellCols; col++) {
        //                 const x = sectionX + col * cellPadding;
        //                 const y = sectionY + row * cellPadding;

        //                 sectionLines.push({
        //                     x, y, startX: x, startY: sRow === 0 ? y - 200 : y + 200,
        //                     targetX: x, targetY: y, angle: defaultAngle, defaultAngle,
        //                     lineWidth: 1, animatedIn: false // Thinner lines
        //                 });
        //             }
        //         }

        //         linesani.push(...sectionLines);
        //     }
        // }

        // function drawLines() {
        //     offscreenCtx.clearRect(0, 0, offscreenCanvas.width, offscreenCanvas.height);
        //     offscreenCtx.strokeStyle = '#D0C89D';

        //     linesani.forEach(line => {
        //         offscreenCtx.lineWidth = line.lineWidth * dpr;
        //         offscreenCtx.save();
        //         offscreenCtx.translate(line.x, line.y);
        //         offscreenCtx.rotate(line.angle);
        //         offscreenCtx.beginPath();
        //         offscreenCtx.moveTo(-lineLength / 2, 0);
        //         offscreenCtx.lineTo(lineLength / 2, 0);
        //         offscreenCtx.stroke();
        //         offscreenCtx.restore();
        //     });

        //     megnaticctx.clearRect(0, 0, megnaticcanvas.width, megnaticcanvas.height);
        //     megnaticctx.drawImage(offscreenCanvas, 0, 0, megnaticcanvas.width, megnaticcanvas.height);
        // }

        // function handleMouseMove(e) {
        //     const rect = megnaticcanvas.getBoundingClientRect();
        //     updateLines(e.clientX - rect.left, e.clientY - rect.top);
        //     drawLines();
        // }

        // megnaticcanvas.addEventListener('mousemove', handleMouseMove);
        // megnaticcanvas.addEventListener('mouseleave', resetLinesToDefault);

        // document.addEventListener('click', (e) => {
        //     const rect = megnaticcanvas.getBoundingClientRect();
        //     const isClickInsideCanvas =
        //         e.clientX >= rect.left &&
        //         e.clientX <= rect.right &&
        //         e.clientY >= rect.top &&
        //         e.clientY <= rect.bottom;

        //     if (!isClickInsideCanvas) {
        //         resetLinesToDefault();
        //     }
        // });

        // function updateLines(mouseX, mouseY) {
        //     linesani.forEach(line => {
        //         const dx = mouseX - line.x;
        //         const dy = mouseY - line.y;
        //         line.angle = Math.sqrt(dx * dx + dy * dy) < 2000 ? Math.atan2(dy, dx) : line.defaultAngle;
        //     });
        // }

        // function resetLinesToDefault() {
        //     linesani.forEach(line => line.angle = line.defaultAngle);
        //     drawLines();
        // }

        // drawLines();


        // old script

        const megnaticcanvas = document.getElementById('magneticCanvas');
        const megnaticctx = megnaticcanvas.getContext('2d');

        const megnaticcanvasWidth = 1768;
        const megnaticcanvasHeight = 748;
        megnaticcanvas.width = megnaticcanvasWidth;
        megnaticcanvas.height = megnaticcanvasHeight;

        


        // Section configuration
        const sectionWidth = 424;
        const sectionHeight = 355;
        const sectionRows = 2;
        const sectionCols = 4;
        const lineLength = 60;
        const cellPadding = 60;
        const cellRows = 6;
        const cellCols = 7;

        // Calculate spacing between sections
        const sectionSpacingX = (megnaticcanvasWidth - (sectionCols * sectionWidth)) / (sectionCols + 1);
        const sectionSpacingY = (megnaticcanvasHeight - (sectionRows * sectionHeight)) / (sectionRows + 1);

        const linesani = [];

        // Create linesani with initial positions and angles
        for (let sRow = 0; sRow < sectionRows; sRow++) {
            for (let sCol = 0; sCol < sectionCols; sCol++) {
                const sectionX = sectionSpacingX + sCol * (sectionWidth + sectionSpacingX);
                const sectionY = sectionSpacingY + sRow * (sectionHeight + sectionSpacingY);

                let defaultAngle;
                if (sRow === 0) {
                    defaultAngle = (sCol % 2 === 0) ? Math.PI / 4 : (3 * Math.PI) / 4;
                } else {
                    defaultAngle = (sCol % 2 === 0) ? (3 * Math.PI) / 4 : Math.PI / 4;
                }

                const sectionLines = [];

                for (let row = 0; row < cellRows; row++) {
                    for (let col = 0; col < cellCols; col++) {
                        const x = sectionX + col * cellPadding;
                        const y = sectionY + row * cellPadding;

                        sectionLines.push({
                            x: x,
                            y: y,
                            startX: x,
                            startY: sRow === 0 ? y - 200 : y + 200, // Adjust starting position based on row
                            targetX: x,
                            targetY: y,
                            angle: defaultAngle,
                            defaultAngle: defaultAngle,
                            lineWidth: 2,
                            animatedIn: false
                        });
                    }
                }

                const randomIndices = [];
                while (randomIndices.length < 5) {
                    const randomIndex = Math.floor(Math.random() * sectionLines.length);
                    if (!randomIndices.includes(randomIndex)) {
                        randomIndices.push(randomIndex);
                    }
                }

                randomIndices.forEach(index => {
                    sectionLines[index].lineWidth = 5;
                });

                linesani.push(...sectionLines);
            }
        }

        // Function to draw linesani
        function drawLines() {
            megnaticctx.clearRect(0, 0, megnaticcanvas.width, megnaticcanvas.height);
            megnaticctx.strokeStyle = '#D0C89D';

            linesani.forEach(line => {
                megnaticctx.lineWidth = line.lineWidth;
                megnaticctx.save();
                megnaticctx.translate(Math.round(line.x), Math.round(line.y)); // Snap to whole pixels
                megnaticctx.rotate(line.angle);
                megnaticctx.beginPath();
                megnaticctx.moveTo(-Math.round(lineLength / 2), 0);
                megnaticctx.lineTo(Math.round(lineLength / 2), 0);
                megnaticctx.stroke();
                megnaticctx.restore();
            });
        }

        // Magnetic effect
        function updateLines(mouseX, mouseY) {
            linesani.forEach(line => {
                const dx = mouseX - line.x;
                const dy = mouseY - line.y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < 2000) {
                    line.angle = Math.atan2(dy, dx);
                } else {
                    line.angle = line.defaultAngle;
                }
            });
        }

        // Scroll Animation
        let animationProgress = 0;
        let animationActive = false;

        function easeInOutQuad(t) {
            return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
        }

        function animateRows(timestamp) {
            const duration = 2000; // Animation duration in ms
            if (!startTime) startTime = timestamp;
            const elapsed = timestamp - startTime;

            animationProgress = Math.min(elapsed / duration, 1); // Normalize progress
            const easedProgress = easeInOutQuad(animationProgress); // Apply easing

            linesani.forEach(line => {
                if (!line.animatedIn) {
                    line.x = line.startX;
                    line.y = line.startY + (line.targetY - line.startY) * easedProgress;
                    if (animationProgress >= 1) {
                        line.animatedIn = true;
                    }
                }
            });

            drawLines();

            if (animationProgress < 1) {
                requestAnimationFrame(animateRows);
            } else {
                startTime = null; // Reset start time for next use
            }
        }

        // Add Scroll Observer
        const megnaticobserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !animationActive) {
                    animationActive = true;
                    startTime = null; // Reset for a smooth animation start
                    requestAnimationFrame(animateRows);
                }
            });
        });

        // Enable magnetic effect after scroll animation
        megnaticcanvas.addEventListener('mousemove', (e) => {
            if (animationProgress >= 1) {
                const rect = megnaticcanvas.getBoundingClientRect();
                const mouseX = e.clientX - rect.left;
                const mouseY = e.clientY - rect.top;
                updateLines(mouseX, mouseY);
                drawLines();
            }
        });

        // Observe the section
        megnaticobserver.observe(document.querySelector('.ct_inner'));

        // Initial drawing
        drawLines();

        // Function to reset all linesani to their default angle
        function resetLinesToDefault() {
            linesani.forEach(line => {
                line.angle = line.defaultAngle;
            });
            drawLines();
        }

        // Add a click event listener to the document
        document.addEventListener('click', (e) => {
            const rect = megnaticcanvas.getBoundingClientRect();
            const isClickInsideCanvas =
                e.clientX >= rect.left &&
                e.clientX <= rect.right &&
                e.clientY >= rect.top &&
                e.clientY <= rect.bottom;

            // If clicked outside the canvas, reset linesani to default
            if (!isClickInsideCanvas) {
                resetLinesToDefault();
            }
        });

    </script>

    <script>
        // Function to animate the counter
function startCounter(counterElement) {
    const targetValue = parseInt(counterElement.getAttribute('data-target'), 10);
    const duration = 2000; // Animation duration in ms
    const startValue = 0;
    let startTime;

    function animateCounter(timestamp) {
        if (!startTime) startTime = timestamp;
        const progress = timestamp - startTime;
        const currentValue = Math.min(startValue + (targetValue * (progress / duration)), targetValue);
        counterElement.innerText = Math.floor(currentValue);

        if (progress < duration) {
            requestAnimationFrame(animateCounter);
        } else {
            counterElement.innerText = targetValue; // Ensure the final value is reached
        }
    }

    // Start the animation
    requestAnimationFrame(animateCounter);
}

// Intersection Observer to trigger counter animation when element comes into view
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counterElement = entry.target;
            startCounter(counterElement); // Start the counter animation
            observer.unobserve(counterElement); // Stop observing after it has animated
        }
    });
}, { threshold: 0.5 }); // Trigger when 50% of the element is in view

// Observe all elements with the class 'counter'
document.querySelectorAll('.counter').forEach(counter => {
    observer.observe(counter);
});

    </script>
<script>
    // Get all graphs
    const graphs = document.querySelectorAll('.graph');

graphs.forEach(graph => {
    // Get the data-values attribute and split into an array
    const graphData = graph.getAttribute('data-values').split(',').map(Number);
    const maxValue = Math.max(...graphData); // Find the max value for scaling

    // Generate bars for the current graph
    graphData.forEach(value => {
        const bar = document.createElement('div');
        bar.classList.add('bar');
        bar.style.height = `${(value / maxValue) * 100}%`; // Scale height
        bar.innerHTML = `<span>${value}</span>`;
        graph.appendChild(bar);
    });
});
  </script>
  <script>
 jQuery(document).ready(function ($) {

  // ✅ Initialize RTL carousel
  var $owlRTL = $('.rtl .owl-carouselfinancial');
  $owlRTL.owlCarousel({
    margin: 15,
    dots: false,
    nav: true,
    loop: false,
    rtl: true,
    center: false,
    responsive: {
      0: { items: 3, margin: 0 },
      400: { items: 4, margin: 0 },
      600: { items: 6 },
      1000: { items: 6 },
      1800: { items: 10 },
      1900: { items: 10 }
    },
    onInitialized: function (event) {
      moveToLast($(event.target));
    },
    onRefreshed: function (event) {
      moveToLast($(event.target));
    }
  });

  // ✅ Initialize LTR carousel
  var $owl = $('.owl-carouselfinancial').not('.rtl .owl-carouselfinancial');
  $owl.owlCarousel({
    margin: 15,
    dots: false,
    nav: true,
    loop: false,
    center: false,
    responsive: {
      0: { items: 3, margin: 0 },
      400: { items: 4, margin: 0 },
      600: { items: 6 },
      1000: { items: 6 },
      1800: { items: 10 },
      1900: { items: 10 }
    },
    onInitialized: function (event) {
      moveToLast($(event.target));
    },
    onRefreshed: function (event) {
      moveToLast($(event.target));
    }
  });

  // ✅ Helper to move carousel to last slide and make it active
  function moveToLast($carousel) {
    setTimeout(function () {
      var $nonCloned = $carousel.find('.owl-item').not('.cloned');
      var total = $nonCloned.length;
      var visibleCount = $carousel.find('.owl-item.active').length || 1;
      var goToIndex = Math.max(0, total - visibleCount);

      // Scroll carousel to last visible group
      $carousel.trigger('to.owl.carousel', [goToIndex, 0, true]);

      // After scroll, make last real slide active
      setTimeout(function () {
        $carousel.find('.owl-item').removeClass('active custom-active');
        var $lastReal = $nonCloned.last();
        $lastReal.addClass('active custom-active');
      }, 300);

    }, 100);
  }

  // ✅ Tabs handling (keep existing logic)
  $('.nav-link').removeClass('active');
  $('.tab-pane').removeClass('show active');
  $('.nav-link').last().addClass('active');
  $('.tab-pane').last().addClass('show active');

  $('#myTab .nav-item').click(function () {
    $('#myTab .nav-link').removeClass('active');
    $('.tab-pane').removeClass('show active');
    $(this).find('.nav-link').addClass('active');
    var target = $(this).find('.nav-link').attr('data-bs-target');
    $(target).addClass('show active');
  });

});

  </script>
  <script>
    // Wait for the DOM to load
document.addEventListener('DOMContentLoaded', () => {
  // Step 1: Animate the `.mainrow`
  const mainRow = document.querySelector('.mainrow');
  const ciHeading = document.querySelector('.ci-heading');
  const majorHolder = document.querySelector('.majorholder');
  mainRow.classList.add('visible');
  setTimeout(() => {
    ciHeading.classList.add('visible');
  }, 500);
  setTimeout(() => {
    majorHolder.classList.add('visible');
  }, 1000);
});

  </script>
  <script>
document.addEventListener("DOMContentLoaded", function () {
  // Select elements with both `.piechartmainfr` and `.pcm_mbile` classes
  const elements = document.querySelectorAll(".piechartmainfr, .pcm_mbile");

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const element = entry.target;

        // Add the "line_animation" class after 1 second
        setTimeout(() => {
          element.classList.add("line_animation");
        }, 1000);

        // Stop observing once the animation has been triggered
        observer.unobserve(element);
      }
    });
  });

  // Observe each element
  elements.forEach((element) => observer.observe(element));
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

  // 🔹 Reusable function: instantly scroll & click
  function scrollToSection(hash, autoClick = true) {
    if (!hash) return;
    const id = hash.startsWith("#") ? hash.substring(1) : hash;
    const section = document.getElementById(id);
    if (!section) return;

    // Instantly scroll to section
    const offset = 0; // adjust if you have a fixed header
    const topPos = section.getBoundingClientRect().top + window.scrollY - offset;
    window.scrollTo(0, topPos);

    // Auto click element (like .plusminus)
    if (autoClick) {
      const plusminus = section.querySelector(".plusminus");
      if (plusminus) plusminus.click();
    }
  }

  // 🔹 1. On page load (if URL already has a hash)
  if (window.location.hash) {
    setTimeout(() => {
      scrollToSection(window.location.hash);
    }, 300);
  }

  // 🔹 2. On click (for all in-page links)
  document.addEventListener("click", function (e) {
    const link = e.target.closest("a[href*='#']");
    if (!link) return;

    const href = link.getAttribute("href");
    if (!href || href === "#" || href.startsWith("javascript:")) return;

    const [path, hash] = href.split("#");
    if (!hash) return;

    const currentPath = window.location.pathname.replace(/\/$/, "");
    const targetPath = (path || currentPath).replace(/\/$/, "");

    // ✅ Same-page link
    if (targetPath === currentPath) {
      e.preventDefault();
      const targetId = "#" + hash;
      scrollToSection(targetId);

      // Update the browser hash without reloading
      if (history.pushState) {
        history.pushState(null, "", targetId);
      } else {
        window.location.hash = targetId;
      }
    }
  });

  // 🔹 3. When user navigates with back/forward buttons
  window.addEventListener("hashchange", function () {
    if (window.location.hash) {
      scrollToSection(window.location.hash);
    }
  });

});
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
  customElements.whenDefined("wistia-player").then(() => {
    const playerEl = document.getElementById("hero__video");
    const btn = document.getElementById("muteToggleBtn");

    if (playerEl && btn) {
      // Start video muted
      playerEl.muted = true;
      btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="" height="" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 3.75a.75.75 0 00-1.255-.555L5.46 8H2.75A1.75 1.75 0 001 9.75v4.5c0 .966.784 1.75 1.75 1.75h2.71l5.285 4.805A.75.75 0 0012 20.25V3.75zM6.255 9.305l4.245-3.86v13.11l-4.245-3.86a.75.75 0 00-.505-.195h-3a.25.25 0 01-.25-.25v-4.5a.25.25 0 01.25-.25h3a.75.75 0 00.505-.195z"/><path d="M16.28 8.22a.75.75 0 10-1.06 1.06L17.94 12l-2.72 2.72a.75.75 0 101.06 1.06L19 13.06l2.72 2.72a.75.75 0 101.06-1.06L20.06 12l2.72-2.72a.75.75 0 00-1.06-1.06L19 10.94l-2.72-2.72z"/></svg>`;

      btn.addEventListener("click", function() {
        // Toggle mute/unmute
        playerEl.muted = !playerEl.muted;

        if (playerEl.muted) {
          btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="" height="" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 3.75a.75.75 0 00-1.255-.555L5.46 8H2.75A1.75 1.75 0 001 9.75v4.5c0 .966.784 1.75 1.75 1.75h2.71l5.285 4.805A.75.75 0 0012 20.25V3.75zM6.255 9.305l4.245-3.86v13.11l-4.245-3.86a.75.75 0 00-.505-.195h-3a.25.25 0 01-.25-.25v-4.5a.25.25 0 01.25-.25h3a.75.75 0 00.505-.195z"/><path d="M16.28 8.22a.75.75 0 10-1.06 1.06L17.94 12l-2.72 2.72a.75.75 0 101.06 1.06L19 13.06l2.72 2.72a.75.75 0 101.06-1.06L20.06 12l2.72-2.72a.75.75 0 00-1.06-1.06L19 10.94l-2.72-2.72z"/></svg>`;
        } else {
          btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="" height="" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M11.553 3.064A.75.75 0 0112 3.75v16.5a.75.75 0 01-1.255.555L5.46 16H2.75A1.75 1.75 0 011 14.25v-4.5C1 8.784 1.784 8 2.75 8h2.71l5.285-4.805a.75.75 0 01.808-.13zM10.5 5.445l-4.245 3.86a.75.75 0 01-.505.195h-3a.25.25 0 00-.25.25v4.5c0 .138.112.25.25.25h3a.75.75 0 01.505.195l4.245 3.86V5.445z"/><path d="M18.718 4.222a.75.75 0 011.06 0c4.296 4.296 4.296 11.26 0 15.556a.75.75 0 01-1.06-1.06 9.5 9.5 0 000-13.436.75.75 0 010-1.06z"/><path d="M16.243 7.757a.75.75 0 10-1.061 1.061 4.5 4.5 0 010 6.364.75.75 0 001.06 1.06 6 6 0 000-8.485z"/></svg>`;
        }
      });
    }
  });
});
</script>


    </body>
</html>