gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
const tl_ = gsap.timeline();

tl_
.to(".line",{
  width: "0%",
  duration: 1,
  delay: 0.1,
  ease: Power4.easeInOut
})
.to(".loader",{
  height: 0,
  top: "100%",
  duration: 0.8,
  delay: -0.6,
  ease: Circ.easeInOut
});

document.addEventListener("DOMContentLoaded", () => {
  const width = window.screen.width;  // Use screen width for actual device resolution
  const height = window.screen.height; // Use screen height

  const isMobile = width <= 640 && height > width; // Mobile in Portrait mode only
  const isTablet = width >= 768 && width <= 1199 && height > 550; // Tablet range
  const isLandscape = width > height && height < 550; // Landscape when width > height & height < 550
  const isDesktop = width >= 1200; // Desktop if width is 1200px or more

  console.log("Screen Width:", width, "Screen Height:", height);
  console.log("isMobile:", isMobile, "isTablet:", isTablet, "isLandscape:", isLandscape, "isDesktop:", isDesktop);

  if (isMobile) {
    console.log("Device is Mobile");
  } else if (isTablet) {
    console.log("Device is Tablet");
  } else if (isLandscape) {
    console.log("Device is Landscape");
  } else if (isDesktop) {
    console.log("Device is Desktop");
  } else {
    console.log("Unknown Device Type");
  }
  const isAndroid = /Android/i.test(navigator.userAgent);
  const targetHeight = isMobile ? "300px" : "100vh";
  const scrollEnd = isMobile ? "+=40%" : "+=100%";
  const heroElement = document.querySelector("#hero__video");
  console.log("Window Width:", window.innerWidth);
  console.log("Window Height:", window.innerHeight);
  console.log("isMobile:", isMobile, "isTablet:", isTablet, "isLandscape:", isLandscape, "isDesktop:", isDesktop, "isAndroid:", isAndroid);
  if (isMobile) { console.log("Device is Mobile"); } else if (isTablet) { console.log("Device is Tablet"); } else if (isLandscape) { console.log("Device is Landscape"); } else if (isDesktop) { console.log("Device is Desktop"); } else { console.log("Unknown Device Type"); }
  function getInitialStyles() {
    const rect = document.querySelector(".home__hero__image, .home__hero__video").getBoundingClientRect();
    return { top: rect.top + window.scrollY, left: rect.left, width: rect.width, height: rect.height };
  }
  window.addEventListener("load", () => {
    requestAnimationFrame(() => {
      const initialStyles = getInitialStyles();
      gsap.set(heroElement, {
        position: "absolute",
        top: initialStyles.top,
        left: initialStyles.left,
        width: initialStyles.width,
        height: initialStyles.height,
        willChange: "transform, width, height",
        transform: isAndroid ? "translateZ(0)" : "none",
      });
      gsap.to(heroElement, {
        width: "100vw",
        height: targetHeight,
        top: isMobile ? "450px" : isTablet ? "600px" : isLandscape ? "400px" : "900px",
        left: "0",
        ease: "power1.inOut",
        scrollTrigger: {
          trigger: ".home section#icdBanner",
          start: "top top",
          end: scrollEnd,
          scrub: isAndroid ? 0.1 : 0.3,
        },
      });
      ScrollTrigger.create({
        trigger: ".home section#icdBanner",
        start: "top top",
        end: scrollEnd,
        scrub: isAndroid ? 0.1 : 0.3,
        onLeaveBack: () => {
          const resetStyles = getInitialStyles();
          gsap.to(heroElement, {
            top: resetStyles.top,
            left: resetStyles.left,
            width: resetStyles.width,
            height: resetStyles.height,
            ease: "power1.inOut",
          });
        }
      });
      if (isAndroid) {
        document.addEventListener("touchmove", () => { ScrollTrigger.update(); });
        document.addEventListener("scroll", () => { ScrollTrigger.update(); });
        setTimeout(() => { ScrollTrigger.refresh(); }, 500);
      }
    });
  });
});





// VIDEO ON HOVER
$(document).on('mouseover', 'video', function() { 
    $(this).get(0).play(); 
}); 
$(document).on('mouseleave', 'video', function() { 
    $(this).get(0).pause(); 
});

// WEBSITE SMOOTHER
const isMobile = Math.min(window.innerWidth, window.screen.width) <= 768;
if (!isMobile) {
  const smoother = ScrollSmoother.create({
    wrapper: "#smooth-wrapper",
    content: "#smooth-content",
    smooth: 1,
    normalizeScroll: true,
    ignoreMobileResize: true,
    effects: true,
  });
}


//----------------------------------------------------- CUSTOM JS CODE -----------------------------------------------------//

// OTHERS MENU FUNCTIONALITY
// $('.industrial_menu > a').click(function () {
//     redirectToSection('service-1');
// });
// $('.hospitality_menu > a').click(function () {
//     redirectToSection('service-2');
// });
// $('.realestate_menu > a').click(function () {
//     redirectToSection('service-3');
// });
// $('.retail_menu > a').click(function () {
//     redirectToSection('service-4');
// });
// function redirectToSection(serviceId) {
//     var baseUrl = window.location.pathname.includes('/ar/') ? '/ar/other' : '/other';
//     const targetUrl = baseUrl + '#' + serviceId;
//     window.location.href = targetUrl;
// }
$(document).ready(function () {
    var hash = window.location.hash;
    if (hash) {
        setTimeout(function () {
            var targetElement = $(hash);
            if (targetElement.length) {
                $('html, body').animate({
                    scrollTop: targetElement.offset().top - 50
                }, 800, function () {
                    var plusButton = targetElement.find('.plus');
                    if (plusButton.is(':visible')) {
                        plusButton.click();
                    }
                });
            }
        }, 1000);
    }
});


// MEDIA POPUP 
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('postModal');
  const modalTitle = modal.querySelector('.modal-title');
  const modalDate = modal.querySelector('#modalDate');
  const modalContent = modal.querySelector('#modalContent');
  document.querySelectorAll('.media__readmore').forEach(button => {
    button.addEventListener('click', () => {
      modalTitle.textContent = button.dataset.title;
      modalDate.textContent = button.dataset.date;
      modalContent.innerHTML = button.dataset.content;
      const backdrop = document.querySelector('.modal-backdrop');
      if (backdrop) {
        backdrop.remove();
      }      
      const modalInstance = new bootstrap.Modal(modal);
      modalInstance.show();
      modal.addEventListener('show.bs.modal', () => {
        document.body.style.overflow = 'hidden';
      });
      modal.addEventListener('hidden.bs.modal', () => {
        document.body.style.overflow = ''; 
      });
      modalContent.addEventListener('wheel', (event) => {
        if (modalContent.scrollHeight > modalContent.clientHeight) {
          event.stopPropagation();
        }
      });
    });
  });
});



// LINE ANIMATION
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('.icd__page__heading').classList.add('show-animation');
});

// VIDEO POPUP
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('videoModal');
  const modalTitle = modal.querySelector('.modal-title');
  const modalVideo = modal.querySelector('#modalVideo');
  const modalVideoSource = modal.querySelector('#modalVideoSource');
  document.querySelectorAll('.video__btn').forEach(button => {
    button.addEventListener('click', (event) => {
      event.preventDefault();
      modalTitle.textContent = button.dataset.title;
      modalVideoSource.src = button.dataset.videoUrl;
      modalVideo.load();
      const backdrop = document.querySelector('.modal-backdrop');
      if (backdrop) {
        backdrop.remove();
      }
      const modalInstance = new bootstrap.Modal(modal);
      modalInstance.show();
      modal.addEventListener('hidden.bs.modal', () => {
        const backdrop = document.querySelector('.modal-backdrop');
        if (backdrop) {
          backdrop.remove();
        }
        document.body.style.overflow = '';
        modalVideoSource.src = '';
        modalVideo.load();
      });
      modal.addEventListener('show.bs.modal', () => {
        document.body.style.overflow = 'hidden';
      });
    });
  });
});


// PRELOADER
// window.addEventListener('load', function () {
//   document.querySelector('.loader__body').classList.add('loader-hidden');
// });


const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to(".lightCyan-slider", {
  x: "-10%",
  duration: 1,
});

tl.to(
  ".persianGreen-slider",
  {
    x: "-20%",
    duration: 1.5,
  },
  "-=1"
);

tl.to(
  ".white-slider",
  {
    x: "-30%",
    duration: 1.5,
  },
  "-=1"
);

tl.to(".hide", {
  x: "0%",
  duration: 2,
  opacity: 1,
});

tl.to(".preloader", {
  opacity: 0, // Fades out
  duration: 1, // Keeps the same duration
});

tl.to(".preloader", {
  x: "-200%", // Fades out
  duration: 1, // Keeps the same duration
});

tl.fromTo(
  "nav",
  {
    opacity: 0,
  },
  {
    opacity: 1,
    duration: 1,
  },
  "-=2"
);

tl.fromTo(
  ".hero-content",
  {
    opacity: 0,
    y: -20,
  },
  {
    opacity: 1,
    duration: 1,
    y: 0,
  },
  "-=1.5"
);




// MAP
$(document).ready(function() {

    // CALCULATE HEIGHT AND SET 
    function updateImageHeight() {
        var windowWidth = $(window).width();
        if (windowWidth >= 992 && windowWidth <= 1800) {
            var wrapperHeight = $('.icd__vision__wrapper').outerHeight();
            $('.icd__vision__img img').css('height', wrapperHeight); 
        } else {
            $('.icd__vision__img img').css('height', '');
        }
    }
    updateImageHeight();
    $(window).resize(function() {
        updateImageHeight();
    });

  // MAP TABS
$(document).ready(function() {
  var continentsEnglish = [
    { dataId: "Continent_Europe", dotId: "Europe_Dot" },
    { dataId: "Continent_Africa", dotId: "Africa_Dot" },
    { dataId: "Continent_Asia", dotId: "Asia_Dot" },
    { dataId: "Continent_North America", dotId: "NorthA_Dot" },
    { dataId: "Continent_South America", dotId: "SouthA_Dot" },
    { dataId: "Continent_Oceania", dotId: "Oceania_Dot" }
  ];
  
  var continentsArabic = [
    { dataId: "Continent_أوروبا", dotId: "Europe_Dot" },
    { dataId: "Continent_أفريقيا", dotId: "Africa_Dot" },
    { dataId: "Continent_آسيا", dotId: "Asia_Dot" },
    { dataId: "Continent_أمريكا الشمالية", dotId: "NorthA_Dot" },
    { dataId: "Continent_أمريكا الجنوبية", dotId: "SouthA_Dot" },
    { dataId: "Continent_أوقيانوسيا", dotId: "Oceania_Dot" }
  ];
  
  var isArabic = $('html').attr('lang') === 'ar';
  var continents = isArabic ? continentsArabic : continentsEnglish;
  function updateDotsAndPaths() {
  if (window.innerWidth > 767) {
    return; // Stop the function if width is greater than 767px
  }

  $.each(continents, function(index, item) {
    var $tab = $('[data-id="' + item.dataId + '"]');
    var $dotGroup = $('#' + item.dotId);
    if ($tab.hasClass('active')) {
      $dotGroup.find('g:first-child').css({ 'display': 'block', 'opacity': '1' });
      $dotGroup.parent().find('g:first-child path').css({ 'fill': '#fff' });
    } else {
      $dotGroup.find('g:first-child').css({ 'display': 'none', 'opacity': '0' });
      $dotGroup.parent().find('g:first-child path').css({ 'fill': '#3D8361' });
    }
  });
}

  updateDotsAndPaths();
  $('.continents__tab').on('click touchstart', function() {
  var $this = $(this);
  var continentId = $this.data('id');

  if ($this.hasClass('active')) {
    return; // Already active, do nothing
  }

  $('.continents__tab').removeClass('active');
  $this.addClass('active');

  $('.icd__countries__mobile').hide();
  $('.icd__countries__mobile[data-id="' + continentId + '"]').fadeIn();

  setTimeout(function() {
    updateDotsAndPaths();
  }, 500);
});
$(document).ready(function() {
  // Ensure the correct mobile content shows on page load
  var $activeTab = $('.continents__tab.active');
  if ($activeTab.length) {
    var continentId = $activeTab.data('id');
    $('.icd__countries__mobile[data-id="' + continentId + '"]').show();
  }
});


  $('.continents__tab').first().trigger('click');
  $('.icd__continents__tabs').first().trigger('click');
});
$('.continents__tab').first().addClass('active').click();
$('.style__four .inner__child__title h5').each(function(){
  var $p = $(this);
  $p.html($p.html().replace(/^(\w+)/, '<strong>$1</strong>'));
});

  $(document).ready(function() {
    // ACCORDION PARENT (FAQ BLOCK)
    $('.icd__org__faq__child').hide();

    $('.icd__orgfaqs .icd__org__faq__parent .accordion__icon .plusminus').click(function() {
      var blockFAQ = $(this).closest('.icd__org__faqs__block');
      var bodyFAQ = blockFAQ.find('.icd__org__faq__child');
      $(this).toggleClass('active');
    
      if ($(this).hasClass('active')) {
        bodyFAQ.stop(true, true).slideDown(1000).delay(800).fadeIn(900);
        blockFAQ.find('.icd__org__faq__block__title')
          .stop(true, true).delay(1000).fadeOut(900).addClass('disabled');
        blockFAQ.find('.icd__org__faq__block__desc')
          .stop(true, true).delay(1000).fadeOut(900).addClass('disabled');
      } else {
        bodyFAQ.stop(true, true).slideUp(1000).delay(700).fadeOut(9000);
        blockFAQ.find('.icd__org__faq__block__title')
          .stop(true, true).delay(1000).fadeIn(900).removeClass('disabled');
        blockFAQ.find('.icd__org__faq__block__desc')
          .stop(true, true).delay(1000).fadeIn(900).removeClass('disabled');
      }
    });
    $('.single-portfolio-accordion .icd__org__faq__parent, .single-portfolio-accordion .icd__org__faq__parent .accordion__icon .plusminus').click(function (e) {
  // Prevent double triggers when clicking the icon inside the parent
  if ($(e.target).closest('.accordion__icon .plusminus').length && !$(this).hasClass('icd__org__faq__parent')) return;

  var blockFAQ = $(this).closest('.icd__org__faqs__block');
  var bodyFAQ = blockFAQ.find('.icd__org__faq__child');
  var plusminus = blockFAQ.find('.accordion__icon .plusminus');

  // Toggle active class on the icon
  plusminus.toggleClass('active');

  if (plusminus.hasClass('active')) {
    bodyFAQ.stop(true, true).slideDown(1000).delay(800).fadeIn(900);
    blockFAQ.find('.icd__org__faq__block__title')
      .stop(true, true).delay(1000).fadeOut(900).addClass('disabled');
    blockFAQ.find('.icd__org__faq__block__desc')
      .stop(true, true).delay(1000).fadeOut(900).addClass('disabled');
  } else {
    bodyFAQ.stop(true, true).slideUp(1000).delay(700).fadeOut(900);
    blockFAQ.find('.icd__org__faq__block__title')
      .stop(true, true).delay(1000).fadeIn(900).removeClass('disabled');
    blockFAQ.find('.icd__org__faq__block__desc')
      .stop(true, true).delay(1000).fadeIn(900).removeClass('disabled');
  }
});





    // ACCORDION ESG PARENT (SOCIAL FAQ BLOCK)

    $('.social__faq__head .social__faq__body__content').css({
      opacity: 0,
      visibility: 'hidden',
      display: 'none'
    });

    $('.social__faq__head .social__faq__head__intro').css({
      opacity: 1,
      visibility: 'visible'
    });

    $('.social__faq__head .social__faq__head__img > h5').css({
      // opacity: 0,
      // visibility: 'hidden'
    });

    $('.social__faq__head .social__faq__head__img img').css({
      // maxHeight: '100px', 
      // width: '80%',
      transition: 'max-height 0.2s ease, width 0.2s ease, height 0.2s ease'
    });

    $('.social__faq__head .plusminus').click(function() {
      var block = $(this).closest('.social__faq__head');
      var intro = block.find('.social__faq__head__intro');
      var bodyContent = block.find('.social__faq__body__content');
      var headerImage = block.find('.social__faq__head__img img');
      var headerText = block.find('.social__faq__head__img > h5');

      $(this).toggleClass('active');
      bodyContent.toggleClass('active');

      if ($(this).hasClass('active')) {
        // Fade out the intro
        gsap.to(intro, { 
          opacity: 0, 
          duration: 0, 
          ease: "power3.inOut", 
          onComplete: function() {
            intro.css('display', 'none'); // Hide the intro after fade
          }
        });

        // Show and fade in the body content
        bodyContent.css('display', 'block'); // Set display to block before fading in
        gsap.to(bodyContent, { 
          opacity: 1, 
          visibility: 'visible', 
          duration: 0, 
          ease: "power3.out" 
        });

        // Fade in the header text
        gsap.fromTo(headerText, 
          { opacity: 0, y: 60, visibility: 'hidden' }, 
          { opacity: 1, y: 60, visibility: 'visible', duration: 0, ease: "power3.out" }
        );

  } else {
    // Fade out the body content and hide it after animation
    gsap.to(bodyContent, { 
      opacity: 0, 
      visibility: 'hidden', 
      duration: 0, 
      ease: "power3.in",
      onComplete: function() {
        bodyContent.css('display', 'none'); // Hide body content after fade
      }
    });

    // Show and fade in the intro
    intro.css('display', 'block'); // Set to block before fading in
    gsap.to(intro, { 
      opacity: 1, 
      visibility: 'visible', 
      duration: 0, 
      ease: "power3.out" 
    });

    // Fade out the header text
    gsap.to(headerText, { opacity: 0, y: 60, duration: 0, ease: "power3.in" });
  }
});




  });



  // ACCORDION NESTED
  // $('.close').hide();
  // $('.inner__child__faqs__desc').hide();
  // $('.open').click(function() {
  //   var block = $(this).closest('.inner__child__faqs__block');
  //   block.find('.inner__child__faqs__desc').slideDown();
  //   $(this).hide();
  //   block.find('.close').show();
  // });
  // $('.close').click(function() {
  //   var block = $(this).closest('.inner__child__faqs__block');
  //   block.find('.inner__child__faqs__desc').slideUp();
  //   $(this).hide();
  //   block.find('.open').show();
  // });
$('.inner__child__faqs__desc').hide();
$('.inner__accordion__icon button').click(function() {
  var block = $(this).closest('.inner__child__faqs__block');
  var img = $(this).find('img');
  if ($(this).hasClass('open')) {
    block.find('.inner__child__faqs__desc').slideDown();
    $(this).removeClass('open').addClass('close');
    img.attr('src', '/wp-content/uploads/2025/03/static-arrow.svg').css('transform', 'rotate(180deg)');
  } else {
    block.find('.inner__child__faqs__desc').slideUp();
    $(this).removeClass('close').addClass('open');
    img.attr('src', '/wp-content/uploads/2025/03/static-arrow.svg').css('transform', 'rotate(0deg)');
  }
});
$('.inner__accordion__icon button').hover(function() {
  var img = $(this).find('img');
  if ($(this).hasClass('close')) {
    img.attr('src', '/wp-content/uploads/2025/03/hover-arrow.svg').css('transform', 'rotate(180deg)');
  } else {
    img.attr('src', '/wp-content/uploads/2025/03/hover-arrow.svg').css('transform', 'rotate(0deg)');
  }
}, function() {
  var img = $(this).find('img');
  if ($(this).hasClass('close')) {
    img.attr('src', '/wp-content/uploads/2025/03/static-arrow.svg').css('transform', 'rotate(180deg)');
  } else {
    img.attr('src', '/wp-content/uploads/2025/03/static-arrow.svg').css('transform', 'rotate(0deg)');
  }
});







  // ACCORDION CONTACT
  $('.wraning_minus').hide();
  $('.warning__block__body').hide();
  $('.wraning_plus').click(function() {
    var block = $(this).closest('.contact__warning__block');
    block.find('.warning__block__body').slideDown();
    $(this).hide();
    block.find('.wraning_minus').show();
  });
  $('.wraning_minus').click(function() {
    var block = $(this).closest('.contact__warning__block');
    block.find('.warning__block__body').slideUp();
    $(this).hide();
    block.find('.wraning_plus').show();
  });


  // COUNTER CODE
  // Counter with support for commas and trailing '+' (e.g., "1,300+"),
// plus robust handling when data-target is a number or missing.

function startCounter() {
  $('.counter__number').each(function () {
    var $this = $(this);

    // Prevent double-running on the same element
    if ($this.data('counted')) return;

    // Always read as a STRING to avoid "replace is not a function"
    var rawAttr = $this.attr('data-target');        // string or undefined
    var targetStr = (rawAttr != null ? String(rawAttr) : String($this.text() || '')).trim();

    // Detect a trailing plus sign
    var hasPlus = /\+$/.test(targetStr);

    // Strip all non-digits to get the numeric target
    var numericTarget = parseInt(targetStr.replace(/[^\d]/g, ''), 10);

    // Guard: if we still can't parse, skip this element
    if (isNaN(numericTarget)) {
      // Fallback to 0 so the UI doesn't break
      numericTarget = 0;
    }

    var duration = 2000;

    $this.data('counted', true); // mark as started to avoid re-animating

    $({ countNum: 0 }).animate({ countNum: numericTarget }, {
      duration: duration,
      easing: 'swing',
      step: function () {
        $this.text(formatNumber(Math.floor(this.countNum)) + (hasPlus ? '+' : ''));
      },
      complete: function () {
        $this.text(formatNumber(numericTarget) + (hasPlus ? '+' : ''));
      }
    });
  });
}

// Helper: format numbers with thousands separators
function formatNumber(num) {
  // Use toLocaleString for robustness; falls back to regex if unavailable
  try {
    return Number(num).toLocaleString();
  } catch (e) {
    return String(num).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  }
}

// Intersection Observer to trigger animation when container is in view
var observer = new IntersectionObserver(function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      startCounter();
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 });

// Only observe if the container exists
var counterContainer = document.querySelector('.icd__map__counter');
if (counterContainer) {
  observer.observe(counterContainer);
}

// Also start immediately if already in view (e.g., on refresh)
// with safety checks when the container isn't present
if (isCounterInView()) {
  startCounter();
}

function isCounterInView() {
  var $container = $('.icd__map__counter');
  if ($container.length === 0) return false;

  var windowHeight = $(window).height();
  var scrollTop = $(window).scrollTop();
  var offsetTop = $container.offset().top;

  return (
    offsetTop < (scrollTop + windowHeight) &&
    offsetTop + $container.outerHeight() > scrollTop
  );
}



  // OUR VALUES 
$(".icd__minus").hide();
$(".values__menu__content p").css({
  "max-height": "0",
  "opacity": "0",
  "margin-top": "0",
  "transition": "max-height 0.5s ease, opacity 0.5s ease, margin-top 0.5s ease" 
});
$(".border__line").css({
  "width": "35px",
  "height": "0.35px",
  "background-color": "#D0C89D"
});

$(".icd__plus, .icd__minus").click(function() {
  var isExpanded = $(".values__heading").hasClass("expanded");
  
  if ($(this).hasClass("icd__plus")) {
    $(this).toggleClass("active");
    
    if (isExpanded) {
      $(".border__line").animate({
        width: "35px"
      }, 500);
      $(".values__menu__content p").each(function() {
        $(this).css({
          "max-height": "0",
          "opacity": "0",
          "margin-top": "0" 
        });
      });
      $(".values__heading").removeClass("expanded");
      $(".icd__plus").show();
      $(".icd__minus").hide();
    } else {
      $(".border__line").animate({
        width: "100%"
      }, 500);
      $(".values__menu__content p").each(function() {
        $(this).css({
          "max-height": "200px",
          "opacity": "1",
          "margin-top": "30px"
        });
      });
      $(".values__heading").addClass("expanded");
      $(".icd__plus").hide();
      $(".icd__minus").show();
    }
  } else if ($(this).hasClass("icd__minus")) {
    $(".border__line").animate({
      width: "35px"
    }, 500);
    $(".values__menu__content p").each(function() {
      $(this).css({
        "max-height": "0",
        "opacity": "0",
        "margin-top": "0"
      });
    });
    $(".values__heading").removeClass("expanded");
    $(".icd__plus").show();
    $(".icd__minus").hide();
  }
});



});


// GROWTH YEAR SLIDER
// $(document).ready(function() {
//   const swiper = new Swiper("#icd__years", {
//     slidesPerView: 14,
//     spaceBetween: 10,
//     loop: false,
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
//     breakpoints: {
//       1601: {
//         slidesPerView: 14,
//         spaceBetween: 10,
//       },
//       900: {
//         slidesPerView: 10,
//         spaceBetween: 10,
//       },
//       600: {
//         slidesPerView: 5,
//         spaceBetween: 5,
//       },
//     },
//   });

//   function showYearContent(yearId) {
//     $(".swiper__content .slide_content__wrapper").removeClass('active').fadeOut(300);
//     $(".swiper__content .slide_content__wrapper").each(function() {
//       const contentYearId = $(this).data("id");
//       if (contentYearId === yearId) {
//         $(this).addClass('active').fadeIn(500);
//       }
//     });
//   }

//   $(".swiper .swiper-slide").on("click", function() {
//     if ($(this).hasClass("posts__notfound")) {
//       return;
//     }
//     const yearId = $(this).data("id");
//     $(".swiper .swiper-slide").removeClass("active");
//     $(this).addClass("active");
//     showYearContent(yearId);
//   });

//   const firstYear = $(".swiper .swiper-slide:not(.posts__notfound):first");
//   firstYear.addClass("active");
//   const firstYearId = firstYear.data("id");
//   showYearContent(firstYearId);

//   $(".swiper-button-next").on("click", function() {
//     const currentActive = $(".swiper .swiper-slide.active");
//     let nextYear = currentActive.nextAll(".swiper-slide.have_post:not(.posts__notfound)").first();
//     if (nextYear.length > 0) {
//       $(".swiper .swiper-slide").removeClass("active");
//       nextYear.addClass("active");
//       const yearId = nextYear.data("id");
//       showYearContent(yearId);
//     }
//   });

//   $(".swiper-button-prev").on("click", function() {
//     const currentActive = $(".swiper .swiper-slide.active");
//     let prevYear = currentActive.prevAll(".swiper-slide.have_post:not(.posts__notfound)").first();
//     if (prevYear.length > 0) {
//       $(".swiper .swiper-slide").removeClass("active");
//       prevYear.addClass("active");
//       const yearId = prevYear.data("id");
//       showYearContent(yearId);
//     }
//   });
// });

$(document).ready(function () {
  function initMenuBehavior() {
    const windowWidth = $(window).width(); // ✅ define first

    // ----- DESKTOP MODE (HOVER) -----
    if (windowWidth >= 1199) {
      const $headerWrapper = $('.icd__header__wrapper');
      const $menuItems = $('#icd__primary__list > li.menu-item-has-children');

      // Reset styles when switching modes
      $menuItems.children('.sub-menu').removeAttr('style');
      $menuItems.removeClass('open parent_submenu_open parent_submenu_close');
      $headerWrapper.removeClass('add_height').css({ height: '' });

      $menuItems.off().hover(
        function () {
          const $submenu = $(this).children('.sub-menu');

          // Close all other submenus
          $('#icd__primary__list > li.menu-item-has-children').not(this).each(function () {
            $(this)
              .children('.sub-menu')
              .stop(true, true)
              .slideUp(200)
              .css({ opacity: 0, display: 'none' });
            $(this)
              .removeClass('open parent_submenu_open')
              .addClass('parent_submenu_close');
          });

          // Open this submenu
          $submenu.stop(true, true).slideDown(200).css({ opacity: 1, display: 'flex' });
          $(this).addClass('open parent_submenu_open').removeClass('parent_submenu_close');

          // Expand header height for 1st level
          $headerWrapper
            .addClass('add_height')
            .stop()
            .animate({ height: '200px' }, 300);
        },
        function () {
          // Leave handling to wrapper
        }
      );

      // Nested submenu hover
      $('#icd__primary__list > li.menu-item-has-children > .sub-menu > li.menu-item-has-children')
        .off()
        .hover(
          function (e) {
            e.stopPropagation();
            const $nested = $(this).children('.sub-menu');
            $nested.stop(true, true).slideDown(200).css({ opacity: 1, display: 'flex' });
            $(this).addClass('open child_submenu_open').removeClass('child_submenu_close');

            // Expand header for 2nd level
            $headerWrapper
              .addClass('add_height')
              .stop()
              .animate({ height: '275px' }, 300);
          },
          function () {
            const $nested = $(this).children('.sub-menu');
            $nested.stop(true, true).slideUp(200).css({ opacity: 0, display: 'none' });
            $(this).removeClass('open child_submenu_open').addClass('child_submenu_close');

            // Go back to 1st level height
            $headerWrapper.stop().animate({ height: '200px' }, 300);
          }
        );

      // 🔥 Close menu only when leaving entire header
      $headerWrapper.off('mouseleave').on('mouseleave', function () {
        $menuItems.each(function () {
          $(this)
            .children('.sub-menu')
            .stop(true, true)
            .slideUp(200)
            .css({ opacity: 0, display: 'none' });
          $(this)
            .removeClass('open parent_submenu_open')
            .addClass('parent_submenu_close');
        });

        $headerWrapper.removeClass('add_height').stop().animate({ height: '90px' }, 300);
      });
    }

    // ----- MOBILE MODE (CLICK) -----
    else {
      $(document).ready(function () {

        // ============================
        // 💻 DESKTOP MENU BEHAVIOR
        // ============================
        if (!('ontouchstart' in window || navigator.maxTouchPoints > 0)) {
      
          $('#icd__primary__list > li.menu-item-has-children').each(function () {
            var clickCount = 0;
            $(this).click(function (event) {
              var submenu = $(this).children('.sub-menu');
              if ($(this).hasClass('open') && clickCount === 1) {
                submenu.stop(true, true).slideUp(200).css({ opacity: 0, display: 'none' });
                $(this)
                  .removeClass('open parent_submenu_open')
                  .addClass('parent_submenu_close');
                clickCount = 0;
              } else {
                event.preventDefault();
                submenu.stop(true, true).slideDown(200).css({ opacity: 1, display: 'flex' });
                $(this).addClass('open parent_submenu_open').removeClass('parent_submenu_close');
                clickCount = 1;
              }
      
              // Close all other open menus
              $('#icd__primary__list > li.menu-item-has-children')
                .not(this)
                .each(function () {
                  $(this)
                    .children('.sub-menu')
                    .stop(true, true)
                    .slideUp(200)
                    .css({ opacity: 0, display: 'none' });
                  $(this)
                    .removeClass('open parent_submenu_open')
                    .addClass('parent_submenu_close');
                });
            });
          });
      
          // Nested submenu
          $('#icd__primary__list > li.menu-item-has-children > .sub-menu > li.menu-item-has-children').each(function () {
            var clickCount = 0;
            $(this).click(function (event) {
              var nestedSubmenu = $(this).children('.sub-menu');
              event.stopPropagation();
              if (nestedSubmenu.is(':visible') && clickCount === 1) {
                window.location = $(this).children('a').attr('href');
              } else {
                nestedSubmenu.stop(true, true).slideDown(200).css({ opacity: 1, display: 'flex' });
                $(this).addClass('open').removeClass('child_submenu_close').addClass('child_submenu_open');
                clickCount = 1;
              }
            });
          });
      
          // Prevent navigation on first click
          $('#icd__primary__list > li.menu-item-has-children > .sub-menu > li.menu-item-has-children > a').click(function (event) {
            if ($(this).closest('li').hasClass('open')) return true;
            event.preventDefault();
          });
      
          $('#icd__primary__list > li.menu-item-has-children > a').click(function (event) {
            if ($(this).closest('li').hasClass('open')) return true;
            event.preventDefault();
          });
        }
      
        // ============================
        // 📱 MOBILE MENU BEHAVIOR
        // ============================
        else {
      
          $('#icd__primary__list li.menu-item-has-children > a').on('click touchend', function (e) {
            var $link = $(this);
            var $parent = $link.parent('li');
            var $submenu = $parent.children('.sub-menu');
      
            // If already open → allow navigation
            if ($parent.hasClass('open')) {
              return true;
            }
      
            // Otherwise, first tap: open submenu
            e.preventDefault();
            $parent.addClass('open parent_submenu_open').removeClass('parent_submenu_close');
            $submenu.stop(true, true).slideDown(200).css({ opacity: 1, display: 'flex' });
      
            // Close siblings
            $parent.siblings('.menu-item-has-children').removeClass('open parent_submenu_open').addClass('parent_submenu_close')
              .children('.sub-menu').stop(true, true).slideUp(200).css({ opacity: 0, display: 'none' });
          });
      
          // Handle nested submenu on mobile
          $('#icd__primary__list li.menu-item-has-children .sub-menu li.menu-item-has-children > a').on('click touchend', function (e) {
            var $link = $(this);
            var $parent = $link.parent('li');
            var $submenu = $parent.children('.sub-menu');
      
            if ($parent.hasClass('open')) {
              return true; // navigate
            }
      
            e.preventDefault();
            e.stopPropagation();
            $parent.addClass('open child_submenu_open').removeClass('child_submenu_close');
            $submenu.stop(true, true).slideDown(200).css({ opacity: 1, display: 'flex' });
          });
          // Close menu when submenu link contains a hash (#)
          $(document).on('click', '#icd__primary__list li.menu-item-has-children .sub-menu li a', function (e) {
            var href = $(this).attr('href');

            // Check if href contains a #
            if (href && href.includes('#')) {
              // Close menu same as main toggle
              var menu = $('.icd__nav__menus');
              menu.removeClass('visible');

              var header = $("header");
              var windowWidth = $(window).width();
              var newHeight;

              // Reset menu button text based on language
              var current_lang = $('html').attr('lang');
              if (current_lang == 'en-US') {
                $('#icd__nav').text('Menu');
              } else if (current_lang == 'ar') {
                $('#icd__nav').text('القائمة الرئيسة');
              }

              // Remove dropdown open classes
              $('.icd__nav__menus .dropdown').removeClass('open');

              // Adjust header height like toggle close behavior
              if (windowWidth <= 767) {
                newHeight = header.hasClass('sticky') ? '60px' : '70px';
              } else {
                newHeight = header.hasClass('sticky') ? '60px' : '90px';
              }

              $('.icd__header__wrapper').stop().animate({ height: newHeight }, 300);
            }
          });
        }
      
      });
      
    }
  }

  // Initialize
  initMenuBehavior();

  // Reinitialize on resize (debounced)
  let resizeTimer;
  $(window).on('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(initMenuBehavior, 300);
  });
});





// MENU CODE
$(document).ready(function() {
  var initialHeaderHeight = 90;
  var scrolledHeaderHeight = 60;

  // SCROLL
 $(window).on('scroll', function() {
  var scrollTop = $(window).scrollTop();
  var $header = $('.icd__header');
  var $headerWrapper = $('.icd__header__wrapper');
  var $navMenus = $('.icd__nav__menus');
  var $submenuOpen = $('#icd__primary__list li.child_submenu_open');

  // ✅ If menu/submenu is open
  if ($headerWrapper.hasClass('add_height') || $submenuOpen.length > 0) {
    // Always keep sticky class when scrolling
    if (!$header.hasClass('sticky')) {
      $header.addClass('sticky');
    }
    return; // Don't animate height when menu is open
  }

  // ✅ Normal scroll behavior (when menu not open)
  if (scrollTop > 0 && !$navMenus.hasClass('visible')) {
    $header.addClass('sticky');
    $headerWrapper.stop().animate({ height: scrolledHeaderHeight }, 200);
  } else if (scrollTop === 0 && !$navMenus.hasClass('visible')) {
    $header.removeClass('sticky');
    $headerWrapper.stop().animate({ height: initialHeaderHeight }, 200);
  }
});


  // MENU TOGGLE
  $('#icd__nav').on('click', function(e) {
    e.stopPropagation();
    var menu = $('.icd__nav__menus');
    var isVisible = menu.hasClass('visible');
    menu.toggleClass('visible');
    var current_lang = $('html').attr('lang');

    if (menu.hasClass('visible')) {
      if (current_lang == 'en-US') {
        $('#icd__nav').text('Close');
      } else if (current_lang == 'ar') {
        $('#icd__nav').text('إغلاق');
      }
    } else {
      if (current_lang == 'en-US') {
        $('#icd__nav').text('Menu');
      } else if (current_lang == 'ar') {
        $('#icd__nav').text('القائمة الرئيسة');
      }
      $('.icd__nav__menus .dropdown').removeClass('open');
    }

    var windowWidth = $(window).width();
    var header = $("header");
    var newHeight;

    if (menu.hasClass('visible')) {
      if (windowWidth <= 1030) {
        newHeight = '110%';
      } else {
        newHeight = '400px';
      }
    } else {
      if (windowWidth <= 767) {
        newHeight = header.hasClass('sticky') ? '60px' : '70px';
      } else {
        newHeight = header.hasClass('sticky') ? '60px' : '90px';
      }
    }

    $('.icd__header__wrapper').stop().animate({ height: newHeight }, 300);
  });

  // OUTSIDE CLICK
  $(document).on('click', function(e) {
    if (!$(e.target).closest('.icd__header__wrapper').length) {
      $('.icd__nav__menus').removeClass('visible');
      var current_lang = $('html').attr('lang');
      if (current_lang == 'en-US') {
        $('#icd__nav').text('Menu');
      } else if (current_lang == 'ar') {
        $('#icd__nav').text('القائمة الرئيسة');
      }
      $('.icd__nav__menus .dropdown').removeClass('open');

      if ($('.icd__header__wrapper').hasClass('add_height')) {
        return; // 🔒 submenu open, keep height
      }

      var scrollTop = $(window).scrollTop();
      if ($('.icd__header').hasClass('sticky') || scrollTop > 0) {
        $('.icd__header__wrapper').stop().animate({ height: scrolledHeaderHeight }, 100);
      } else {
        $('.icd__header__wrapper').stop().animate({ height: initialHeaderHeight }, 100);
      }
    }
  });



  // MOBILE DROPDOWN CLICK
  $('.icd__nav__menus .dropdown').on('click', function(e) {
    if ($(window).width() <= 991) {
      e.stopPropagation();
      $(this).toggleClass('open');
    }
  });


});




$(document).ready(function() {
  $('ul#icd__primary__list li.lang-item a').each(function() {
    var text = $(this).text().trim();
    if (text.toUpperCase() === "ARABIC") {
      $(this).text("العربية");
      $(this).css("font-family", '"AktivGrotesk", sans-serif');
      $(this).css("font-size", '14px');
    }
  });
});









// SCROLL DRAG MOBILE
$(document).ready(function() {
  var isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
  var startX = 0, startY = 0;
  var isDragging = false;
  function startDrag(event) {
    event.preventDefault();
    if (isTouchDevice) {
      startX = event.touches[0].pageX;
      startY = event.touches[0].pageY;
    } else {
      startX = event.pageX;
      startY = event.pageY;
    }
    isDragging = true;
  }
  function drag(event) {
    if (!isDragging) return;
    var offsetX, offsetY;
    if (isTouchDevice) {
      offsetX = event.touches[0].pageX - startX;
      offsetY = event.touches[0].pageY - startY;
    } else {
      offsetX = event.pageX - startX;
      offsetY = event.pageY - startY;
    }
    var scrollableElement = $(this);
    scrollableElement.scrollLeft(scrollableElement.scrollLeft() - offsetX);
    scrollableElement.scrollTop(scrollableElement.scrollTop() - offsetY);
    startX = isTouchDevice ? event.touches[0].pageX : event.pageX;
    startY = isTouchDevice ? event.touches[0].pageY : event.pageY;
  }
  function stopDrag() {
    isDragging = false;
  }
  $('.overflow-drag').on(isTouchDevice ? 'touchstart' : 'mousedown', startDrag);
  $(document).on(isTouchDevice ? 'touchmove' : 'mousemove', '.overflow-drag', drag);
  $(document).on(isTouchDevice ? 'touchend' : 'mouseup', stopDrag);
});



// $(document).ready(function() {
//     $('#Map-new g > g:nth-child(3) g:first-child').hide();
//     $('#Map-new g > g:nth-child(3)').hover(function() {
//         $(this).children('g:first-child').stop(true, true).fadeIn();
//     }, function() {
//         $(this).children('g:first-child').stop(true, true).fadeOut();
//     });
// });

$(document).ready(function() {
    $('.nav-link').first().addClass('active');
    
});