// GROWTH YEAR SLIDER
$(document).ready(function() {
  const swiper = new Swiper("#icd__years", {
    slidesPerView: 5,
    spaceBetween: 5,
    slidesPerGroup: 1,
    loop: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1601: {
        slidesPerView: 14,
        spaceBetween: 10,
      },
      900: {
        slidesPerView: 10,
        spaceBetween: 10,
      },
      700: {
        slidesPerView: 6,
        spaceBetween: 0,
      },
      600: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
      500: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
    },
  });

  $('#icd__years .swiper-slide').on('click', function() {
    const clickedIndex = $(this).index();
    const currentIndex = swiper.realIndex;
    if (clickedIndex !== currentIndex) {
      swiper.slideTo(clickedIndex, 500);
    }
  });


  const swiperESG = new Swiper("#esg_logo", {
    loop: false,
    grabCursor: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      1601: {
        slidesPerView: 8,
        spaceBetween: 50,
      },
      1201: {
        slidesPerView: 6,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
      450: {
        slidesPerView: 4,
        spaceBetween: 15,
      },
      300: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
    },
    
  });

  // $(window).on('resize', function() {
  //   swiper.update();
  // });

  // if ($(window).width() <= 600) {
  //   swiper.update();
  // }

  function showYearContent(yearId) {
    $(".swiper__content .slide_content__wrapper").removeClass('active').fadeOut(300);
    $(".swiper__content .slide_content__wrapper").each(function() {
      const contentYearId = $(this).data("id");
      if (contentYearId === yearId) {
        $(this).addClass('active').fadeIn(500);
      }
    });
  }

  $(".swiper .swiper-slide").on("click", function() {
    if ($(this).hasClass("posts__notfound")) {
      return;
    }
    const yearId = $(this).data("id");
    $(".swiper .swiper-slide").removeClass("active");
    $(this).addClass("active");
    showYearContent(yearId);
  });

  const firstYear = $(".swiper .swiper-slide:not(.posts__notfound):first");
  firstYear.addClass("active");
  const firstYearId = firstYear.data("id");
  showYearContent(firstYearId);

  $(".swiper-button-next").on("click", function() {
    const currentActive = $(".swiper .swiper-slide.active");
    let nextYear = currentActive.nextAll(".swiper-slide.have_post:not(.posts__notfound)").first();
    if (nextYear.length > 0) {
      $(".swiper .swiper-slide").removeClass("active");
      nextYear.addClass("active");
      const yearId = nextYear.data("id");
      showYearContent(yearId);
    }
  });

  $(".swiper-button-prev").on("click", function() {
    const currentActive = $(".swiper .swiper-slide.active");
    let prevYear = currentActive.prevAll(".swiper-slide.have_post:not(.posts__notfound)").first();
    if (prevYear.length > 0) {
      $(".swiper .swiper-slide").removeClass("active");
      prevYear.addClass("active");
      const yearId = prevYear.data("id");
      showYearContent(yearId);
    }
  });
});



//  about us map
// const lineToContinentMap = {
//     "line_6": "Continent_North.America",
//     "line_5": "Continent_Asia",
//     "line_3": "Continent_Africa",
//     "line_2": "Continent_South",
//     "line_4": "Continent_Australia"
// };

// $(document).on('click', '[id^="line_"] [id^="Vector_"]', function (e) {
//     e.stopPropagation();
//     const $clickedElement = $(this).closest('[id^="line_"]');
//     const lineId = $clickedElement.attr('id');
//     const continentClass = lineToContinentMap[lineId];
//     const mapWrapActive = $('.icd__map__col.map');
//     mapWrapActive.toggleClass('map_wrap_active');
//     if (!mapWrapActive.hasClass('map_wrap_active')) {
//         $('[id^="line_"]').parent().removeClass('map_active');
//         $('.icd__countries').removeClass('active_country_tab');
//     }
//     $clickedElement.parent().toggleClass('map_active');
//     $('.icd__map__col.content .border-right').toggleClass('active');
//     if (continentClass) {
//         $(`.icd__countries.${continentClass}`).toggleClass('active_country_tab');
//     }
// });

// $(document).on('click', function () {
//     $('[id^="line_"]').parent().removeClass('map_active');
//     $('.icd__map__col.map').removeClass('map_wrap_active');
//     $('.icd__countries').removeClass('active_country_tab');
// });






const lineToContinentMap = {
    "NorthA_Dot": "Continent_North.America",
    "Asia_Dot": "Continent_Asia",
    "Africa_Dot": "Continent_Africa",
    "SouthA_Dot": "Continent_South",
    "Oceania_Dot": "Continent_Oceania",
    "Europe_Dot": "Continent_Europe"
};

const bottomRegions = ["SouthA_Dot", "Africa_Dot", "Oceania_Dot"];


$(document).ready(function () {
    // Initially hide all line paths and tags
    $('g[id^="line_"] path, g[id^="Tag_"]').hide();
});

$(document).ready(function() {
    const $hoverGroups = $('#Map-new g > g:nth-child(3)');

    // Store original X positions of <rect> elements only once
    $hoverGroups.each(function() {
        const $rect = $(this).find('g:first-child rect');
        if (!$rect.data('original-x')) {
            $rect.data('original-x', parseFloat($rect.attr('x'))); // Save original x position
        }
    });

    // Initially hide the first child
    $hoverGroups.children('g:first-child').hide().css({ opacity: 0 });

    let hideTimeout; // Timeout to prevent flickering

    // Use mouseenter and mouseleave for better hover detection
    $hoverGroups.on("mouseenter", function() {
        clearTimeout(hideTimeout); // Cancel any pending hide action
        const $child = $(this).children('g:first-child');
        const $rect = $child.find('rect');
        const originalX = $rect.data('original-x');

        if (!$(this).hasClass('hover_disabled')) {
            $child.stop(true, true).css('opacity', 1).show();
            $rect.stop(true, true)
                .attr('x', originalX + 158) // Start from the right
                .css({ width: '50px' })
                .animate({ width: 158 }, { 
                    duration: 500, 
                    step: function(now) {
                        $(this).attr('x', originalX + (158 - now)); // Move left while expanding
                    }
                });
        }
    });

    $hoverGroups.on("mouseleave", function() {
        const $child = $(this).children('g:first-child');
        const $rect = $child.find('rect');
        const originalX = $rect.data('original-x');

        if (!$(this).hasClass('hover_disabled')) {
            setTimeout(function() {
             $child.hide();
            }, 100);
            hideTimeout = setTimeout(() => { // Add delay before hiding
                $rect.stop(true, true).animate({ width: 50 }, { 
                    duration: 500, 
                    step: function(now) {
                        $(this).attr('x', originalX + (158 - now)); // Move right while shrinking
                    },
                    complete: function() {
                        // $(this).attr('x', originalX); // Reset to original position
                        $child.animate({ opacity: 0 }, 200, function() {
                            $child.hide();
                        });
                    }
                });
            }, 100); // 100ms delay to prevent flicker
        }
    });

    // Click event on dots
    $(document).on('click', 'g[id$="_Dot"]', function() {

        const $parentGroup = $(this).closest('g:nth-child(3)');
        const $child = $parentGroup.children('g:first-child');
        const $rect = $child.find('rect');
        const originalX = $rect.data('original-x');

        clearTimeout(hideTimeout); // Ensure no pending hide action

        // Hide smoothly with right-to-left shrink
        $rect.stop(true, true).animate({ width: 0 }, { 
            duration: 500, 
            step: function(now) {
                $(this).attr('x', originalX + (158 - now)); // Move right while shrinking
            },
            complete: function() {
                $(this).attr('x', originalX); // Reset to original position
                $child.animate({ opacity: 0 }, 200, function() {
                    $child.hide();
                });
            }
        });

        // Disable hover effect for this dot
        $parentGroup.addClass('hover_disabled');

        // Smooth fade-in for line and tag
        const $parent = $(this).parent();
        $parent.find('g[id^="line_"] path').stop(true, true).fadeIn(500);
        $parent.find('g[id^="Tag_"]').stop(true, true).fadeIn(500);
    });

    jQuery('.home #Map-new circle, .home svg path').on('click', function(e) {
        e.preventDefault();  
        e.stopImmediatePropagation();
    });

    // Click outside to reset hover effect for all dots
    $(document).on('click', function(e) {
        if (!$(e.target).closest('[id$="_Dot"]').length) {
            $hoverGroups.removeClass('hover_disabled'); // Re-enable hover
        }
    });
});



// Handle click on dots
$(document).on('click', 'g[id$="_Dot"]', function (e) {
    e.stopPropagation(); // Prevent bubbling up
    const $clickedElement = $(this);
    const dotId = $clickedElement.attr('id');
    const continentClass = lineToContinentMap[dotId];

    // Check if the clicked dot is already active
    const isActive = $clickedElement.hasClass('active_dot');

    // Remove all active classes
    $('[id$="_Dot"]').removeClass('active_dot');
    $('[id$="_Dot"]').parent().removeClass('active_map');
    $('.icd__countries').removeClass('active_country_tab');
    $('.icd__map__col.map').removeClass('map_wrap_active bottom_regions');
    $('.icd__map__col.content .border-right').removeClass('active');
    $('g[id^="line_"] path, g[id^="Tag_"]').hide();

    // If the dot was active, stop here (it gets deactivated)
    if (isActive) return;

    // Otherwise, activate the clicked dot
    $clickedElement.addClass('active_dot');
    $clickedElement.parent().addClass('active_map');
    
    let $parentGroup = $clickedElement.parent(); // Get parent group

    // Show line path and tag related to the clicked dot
    $parentGroup.find('g[id^="line_"] path').show();
    $parentGroup.find('g[id^="Tag_"]').show();
    
    $('.icd__map__col.map').addClass('map_wrap_active');
    $('.icd__map__col.content .border-right').addClass('active');

    // Check if clicked element is in bottomRegions and add "bottom_regions" class
    if (bottomRegions.includes(dotId)) {
        $('.icd__map__col.map').addClass('bottom_regions');
    }

    // Add the active class for the specific continent
    if (continentClass) {
        $(`.icd__countries.${continentClass}`).addClass('active_country_tab');
    }
});


// Handle click outside the dots
$(document).on('click', function (e) {
    if (!$(e.target).closest('[id$="_Dot"]').length) {
        // Remove active classes when clicking outside
        $('[id$="_Dot"]').removeClass('active_dot');
        $('.icd__map__col.map').removeClass('map_wrap_active');
        $('[id$="_Dot"]').parent().removeClass('active_map');
        $('.icd__countries').removeClass('active_country_tab');
        $('.icd__map__col.content .border-right').removeClass('active');

        // Hide all paths and tags again
        $('g[id^="line_"] path, g[id^="Tag_"]').hide();
    }
});



jQuery(document).ready(function($){
    var loader='<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>';
    jQuery(".icd__press__body").append('<a data-glm-button-selector=".icd__press__body" href="#" class="btn loadMoreBtn" id="loadMore"><span class="loadMoreBtn-label">Show All</span></a>');
    jQuery(".icd__press__card").hide();
    jQuery(".icd__press__card").slice(0,3).show();
    jQuery(document).find(".icd__press__body .ald-count").text(jQuery(".icd__press__card:hidden").length);
    jQuery(".icd__press__body").find(".loadMoreBtn").on('click',function(e){
        e.preventDefault();
        jQuery(".icd__press__card:hidden").slice(0,3).fadeIn(500);
        if(jQuery(".icd__press__card:hidden").length == 0) { jQuery(this).fadeOut('slow'); }
        jQuery(document).find(".icd__press__body .ald-count").text(jQuery(".icd__press__card:hidden").length);
    });
    if(jQuery(".icd__press__card:hidden").length == 0) { jQuery(".icd__press__body").find(".loadMoreBtn").fadeOut('slow'); }
    var flag=false;
    var main_xhr;
    var LoadMorePushAjax=function(url,args){
        jQuery('.ald_loader_progress').css({"-webkit-transform":"translate3d(-100%, 0px, 0px)","-ms-transform":"translate3d(-100%, 0px, 0px)","transform":"translate3d(-100%, 0px, 0px)"});
        if(args.data_implement_selectors){var dis=JSON.parse(args.data_implement_selectors)}
        if(main_xhr&&main_xhr.readyState!=4){main_xhr.abort()}
        args.target_url=url;
        main_xhr=jQuery.ajax({
            url:url,
            asynch:true,
            beforeSend:function(){
                jQuery('.ald_laser_loader').addClass('show');
                jQuery('.ald_loader_progress').css({"transition-duration":"2000ms","-webkit-transform":"translate3d(-20%, 0px, 0px)","-ms-transform":"translate3d(-20%, 0px, 0px)","transform":"translate3d(-20%, 0px, 0px)"});
                flag=true;
            },
            success:function(data){
                jQuery(document).trigger('ald_ajax_content_ready',[data,args]);
                if(dis){for(var key in dis){var selector=dis[key].data_selector;var type=dis[key].implement_type;if(selector){var newData=jQuery(selector,data).html();if(type=="insert_before"){jQuery(selector).prepend(newData)}else if(type=="insert_after"){jQuery(selector).append(newData)}else{jQuery(selector).html(newData)}}}}
                jQuery(document).find('.tf_posts_navigation').removeClass('loading');
                jQuery('.ald-ajax-btn[data-alm-click-selector]').each(function(){
                    if(jQuery(this).data('alm-click-selector')==args.click_selector){jQuery(this).removeClass('loading')}
                });
                jQuery('.ald_loader_progress').css({"transition-duration":"500ms","-webkit-transform":"translate3d(0%, 0px, 0px)","-ms-transform":"translate3d(0%, 0px, 0px)","transform":"translate3d(0%, 0px, 0px)"});
                setTimeout(function(){
                    jQuery('.ald_laser_loader').removeClass('show');
                    jQuery('.ald_loader_progress').css({"transition-duration":"0ms","-webkit-transform":"translate3d(-100%, 0px, 0px)","-ms-transform":"translate3d(-100%, 0px, 0px)","transform":"translate3d(-100%, 0px, 0px)"});
                },300);
                jQuery(document).trigger('ald_ajax_content_loaded',data);
                jQuery(document).trigger('ald_ajax_content_success',[args]);
                flag=false;
            }
        });
    };
});
