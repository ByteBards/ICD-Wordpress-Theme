$(document).ready(function() {

  // gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

  // // HOME BANNER IMAGE
  // function setInitialLeft() {
  //   const homeHeroImage = document.querySelector(".home__hero__image");
  //   if (!homeHeroImage) return;
  //   const rect = homeHeroImage.getBoundingClientRect();
  //   const leftValue = rect.left;
  //   const topValue = rect.top;
  //   const widthValue = rect.width;
  //   const heightValue = rect.height;
  //   gsap.set(".home section#icdBanner #hero__img", {
  //     top: `${topValue}px`,
  //     left: `${leftValue}px`,
  //     width: `${widthValue}px`,
  //     height: `${heightValue}px`,
  //     position: "fixed",
  //   });
  // }
  // function runScrollAnimation() {
  //   gsap.to(".home section#icdBanner #hero__img", {
  //     width: "100vw",
  //     height: "100vh",
  //     top: "600px",
  //     left: "0",
  //     duration: 3,
  //     ease: "sine.inOut",
  //     scrollTrigger: {
  //       trigger: ".home section#icdBanner",
  //       start: "top top", 
  //       end: "+=100%",
  //       scrub: true,
  //     }
  //   });
  // }

  // // WEBSITE SMOOTHER
  // const smoother = ScrollSmoother.create({
  //   wrapper: "#smooth-wrapper",
  //   content: "#smooth-content",
  //   smooth: 3,
  //   normalizeScroll: true,
  //   ignoreMobileResize: true,
  //   effects: true,
  // });

  // // Initialize the dynamic properties and scroll animation
  // document.addEventListener("DOMContentLoaded", () => {
  //   setInitialLeft();
  //   runScrollAnimation();
  //   window.addEventListener("resize", () => {
  //     setInitialLeft();
  //   });
  // });

  $('.icd__about__line').wrap('<div class="icd__about__line-wrapper" style="overflow: hidden;"></div>');
  gsap.registerPlugin(ScrollTrigger);
  gsap.utils.toArray('.icd__about__line').forEach((line, i) => {
    gsap.from(line, {
      y: 50, 
      opacity: 0,
      duration: 1,
      delay: i * 0.3,
      scrollTrigger: {
        trigger: line,
        start: 'top 80%',
        toggleActions: 'play none none none',
      }
    });
  });

  const elements = ['.icd__groups__tag', '.total__assets__box', '.total__revenue__box'];
  elements.forEach((selector, index) => {
    gsap.from(selector, {
      scrollTrigger: {
        trigger: selector,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 150,
      duration: 1,
      delay: index * 0.4,
      ease: 'power2.out'
    });
  });

  const elements_org = ['.icd__organisation__content'];
  elements_org.forEach((selector, index) => {
    gsap.from(selector, {
      scrollTrigger: {
        trigger: '.icd__organisation',
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 150,
      duration: 1,
      delay: index * 0.4,
      ease: 'power2.out'
    });
  });

  // '.corp__social__intro', '.corp__social__faqs',

  // CONTACT PAGE ANIMATION (Corporate)
  const contactElements = ['.icd__contact__title', '.icd__contact__wrapper', '.corp__social__intro', '.corp__social__faqs', '.video__wrapper', '.gs-topcol', '.ft-desc', '.contectsec'];
  contactElements.forEach((selector, index) => {
    gsap.from(selector, {
      scrollTrigger: {
        trigger: selector,
        start: 'top 90%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 150,
      duration: 1,
      delay: index * 0.1,
      ease: 'power2.out',
    });
  });

  const contactElements1 = ['.secondsec .p-descrmain', '.singleholder', '.sp-accor'];
  contactElements1.forEach((selector, index) => {
    gsap.from(selector, {
      scrollTrigger: {
        trigger: selector,
        start: 'top 100%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 150,
      duration: 1,
      delay: index * 0.1,
      ease: 'power2.out'
    });
  });

  const contactElements2 = ['.portfoliohero .topheading', '.portfoliohero .middleimg', '.portfoliohero .bottomdesc', '.megnaticsec .ct_inner span:nth-child(1)', '.megnaticsec .ct_inner span:nth-child(2)', '.megnaticsec .ct_inner span:nth-child(3)'];
  contactElements2.forEach((selector, index) => {
    gsap.from(selector, {
      scrollTrigger: {
        trigger: selector,
        start: 'top 100%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 150,
      duration: 1,
      delay: index * 0.1,
      ease: 'power2.out'
    });
  });

const contactElements3 = ['.financialreprtsec', '.tr-tabssec', '.tabscontentrow', '.piegraph-row', '.col-md-10.pgr-scnd .piechartmainfr', '.pcm_mbile'];
contactElements3.forEach((selector, index) => {
  gsap.from(selector, {
    scrollTrigger: {
      trigger: selector,
      start: 'top bottom',
      end: 'bottom top',
      toggleActions: 'play none none none',
      markers: false,
      once: true
    },
    opacity: 0,
    y: 150,
    duration: 0.5,
    delay: index * 0.05,
    ease: 'power2.out'
  });
});



// const visionElements = ['.icd__vm__box.vision', '.icd__vm__box.mission', '.icd__vm__box.values'];
// visionElements.forEach((selector, index) => {
//   gsap.from(selector, {
//     scrollTrigger: {trigger: selector, start: 'top 80%', toggleActions: 'play none none reverse'},
//     opacity: 0, y: 150, duration: 0.5, delay: index * 0.4, ease: 'power2.out'
//   });
// });
const visionElements = ['.icd__vm__box'];
visionElements.forEach((selector, index) => {
  gsap.from(selector, {
    scrollTrigger: {trigger: selector, start: 'top 95%', toggleActions: 'play none none none'},
    opacity: 0, y: 150, duration: 0.5, delay: index * 0.4, ease: 'power2.out'
  });
});


  // HOLDING CARDS ANIMATION
  if (window.innerWidth > 767) {
    const holdingElements = ['.holderheading h2', '.holderheading h5', '.holderimg', '.singleholder .nav-tabs', '.holdercontent'];
    gsap.from(holdingElements, {
      scrollTrigger: {
        trigger: '.esg__walking',
        start: 'top 130%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 100,
      // duration: 1,
      stagger: 0.2,
      ease: 'power2.out'
    });
  }

  // GRAPH (Financial Highlights & Analysis)
const graphContainers = document.querySelectorAll('.graph-container');

graphContainers.forEach((container, index) => {
  // ✅ Get values + years (expects JSON with {values:[], years:[]})
  let raw = container.querySelector('.graph').dataset.values;
  let parsed = JSON.parse(raw);

  let values = parsed.values.map(v => parseFloat(v.replace(/,/g, '')));
  let years  = parsed.years || [];

  // ✅ Build bars dynamically (wrap bar + year inside bar-wrapper)
  const graph = container.querySelector('.graph');
  const max = Math.max(...values);
  graph.innerHTML = values.map((val, i) => `
    <div class="bar" style="height: ${(val / max) * 100}%;">
      <span>${val.toLocaleString()}</span>
      <div class="bar-year">${years[i] || ''}</div>
    </div>
  `).join('');

  // Animate container
  gsap.from(container, {
    scrollTrigger: {
      trigger: container,
      start: 'top 80%',
      toggleActions: 'play none none none',
    },
    opacity: 0,
    y: 100,
    duration: 1.5,
    delay: index * 0.2,
    ease: 'power2.out',
  });

  // Animate bars
  const bars = container.querySelectorAll('.bar');
  gsap.from(bars, {
    scrollTrigger: {
      trigger: container,
      start: 'top 80%',
      toggleActions: 'play none none none',
    },
    opacity: 0,
    y: 100,
    stagger: 0.1,
    duration: 1,
    ease: 'power2.out',
  });

  // Animate graph value if exists
  const graphValue = container.querySelector('.graph-value');
  if (graphValue) {
    gsap.from(graphValue, {
      scrollTrigger: {
        trigger: container,
        start: 'top 80%',
        toggleActions: 'play none none none',
      },
      opacity: 0,
      y: 50,
      duration: 1,
      delay: 0.5,
      ease: 'power2.out',
    });
  }
});


  // CORPORATE SOCIAL FAQS
  const faqs = document.querySelectorAll('.corp__social__faqs__wrapper');
  faqs.forEach(faq => {
    faq.style.opacity = "0";
    faq.style.transform = "translateY(30px)";
  });
  gsap.fromTo(faqs, 
    {
      opacity: 0,
      y: 100,
    }, 
    {
      opacity: 1,
      y: 0,
      duration: 0.4,
      ease: "power4.out",
      scrollTrigger: {
        trigger: ".corp__social__faqs",
        start: "top 100%",
        end: "bottom 20%",
        once: true,
      },
    }
  );



  // CORPORATE SOCIAL FAQS
  const faqsOrg = document.querySelectorAll('.icd__orgfaqs .icd__org__faqs__block');
  faqsOrg.forEach((faq, index) => {
    gsap.fromTo(faq, {
      opacity: 1,
      y: 50,
    }, {
      opacity: 1,
      y: 0,
      duration: 0.1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".icd__org__faq__wrapper",
        start: "top 60%",
        end: "bottom 40%",
        scrub: 0.1,
        toggleActions: "play none none none",
      },
      delay: 0.01,
    });
  });


  // ORGANIZATION SHAPE IMAGE 
  if (window.innerWidth > 767) {
  gsap.fromTo(".icd__org__shape", {
    scale: 0.8,
    opacity: 1,
  }, {
    scale: 1.2,
    opacity: 1,
    duration: 1,
    ease: "power1.out",
    scrollTrigger: {
      trigger: ".icd__org__shape",
      start: "top 80%",
      end: "top 20%",
      scrub: 0.5,
      toggleActions: "play none none none",
    },
  });

  gsap.fromTo(".icd__ceo__img", {
    y: 50,
    opacity: 0,
  }, {
    y: 0,
    opacity: 1,
    duration: 0.5,
    ease: "power2.out",
    scrollTrigger: {
      trigger: ".icd__ceo",
      start: "top 90%",
      end: "top 50%",
      scrub: 0.5,
    },
  });

  gsap.fromTo(".icd__ceo__msg", {
    y: 50,
    opacity: 0,
  }, {
    y: 0,
    opacity: 1,
    duration: 0.5,
    ease: "power2.out",
    scrollTrigger: {
      trigger: ".icd__ceo__img",
      start: "top 90%",
      end: "top 50%",
      scrub: 0.5,
    },
  });

  gsap.fromTo(".icd__ceo__title", {
    y: 50,
    opacity: 0,
  }, {
    y: 0,
    opacity: 1,
    duration: 0.5,
    ease: "power2.out",
    scrollTrigger: {
      trigger: ".icd__ceo__msg",
      start: "top 90%",
      end: "top 50%",
      scrub: 0.5,
    },
  });

  gsap.fromTo(".icd__ceo__name", {
    y: 50,
    opacity: 0,
  }, {
    y: 0,
    opacity: 1,
    duration: 0.5,
    ease: "power2.out",
    scrollTrigger: {
      trigger: ".icd__ceo__msg",
      start: "top 90%",
      end: "top 50%",
      scrub: 0.5,
      delay: 0.2,
    },
  });

  gsap.to(".about__icd__main__img", {
    scrollTrigger: {
      trigger: ".about__icd__main__img",
      start: "top bottom",
      end: "top top",
      scrub: 1,
    },
    y: "-100vh",
    opacity: 1,
    ease: "power1.out", 
    from: { opacity: 0, y: "100vh" },
  });
}

  // ESG Walk
  if (window.innerWidth > 767) {
  gsap.to(".walking__talk__footer", {
    scrollTrigger: {
      trigger: ".walking__talk__footer",
      start: "top bottom",
      end: "bottom top",
      scrub: true,
    },
    "--after-height": "100%",
    ease: "none"
  });
  }
  // ABOUT US HEADING
  gsap.from(".about__main__line", {
      opacity: 0,
      y: 50, 
      stagger: 0.3, 
      duration: 1,
      ease: "power3.out"
  });

  // ESTABLISHED
  const aboutElements = ['.about__main__content h2', '.about__main__content h6', '.about__main__content p'];
  aboutElements.forEach((selector, index) => {
    gsap.from(selector, {
      scrollTrigger: {
        trigger: ".about__main__head",
        start: 'top 80%',
        toggleActions: 'play none none none',
      },
      opacity: 0,
      y: 150,
      duration: 1,
      delay: index * 0.4,
      ease: 'power2.out'
    });
  });

  gsap.from('.board__heading', {
    scrollTrigger: {
      trigger: '.board__heading',
      start: 'top 95%',
      toggleActions: 'play none none none',
    },
    opacity: 0,
    y: 50,
    duration: 1,
    ease: 'power2.out'
  });

  // ICD MEMBERS
  // const memberElements = document.querySelectorAll('.icd__member');
  // memberElements.forEach((member, index) => {
  //   gsap.from(member, {
  //     scrollTrigger: {
  //       trigger: member,
  //       start: 'top 80%',
  //       toggleActions: 'play none none reverse',
  //     },
  //     opacity: 0,
  //     y: 100,
  //     duration: 1,
  //     delay: index * 0.2,
  //     ease: 'power2.out'
  //   });
  // });

  const memberElements = document.querySelectorAll('.icd__member');
  gsap.from(memberElements, {
    opacity: 0,
    y: 100,
    duration: 1,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: '.icd__member',
      start: 'top 90%',
      toggleActions: 'play none none none'
    }
  });

if (window.innerWidth > 767) {
  const porfolioElements = document.querySelectorAll('.port-card');
  porfolioElements.forEach((member, index) => {
    gsap.from(member, {
      scrollTrigger: {
        trigger: member,
        start: 'top 80%',
        toggleActions: 'play none none none',
      },
      opacity: 0,
      y: 100,
      duration: 1,
      delay: index * 0.2,
      ease: 'power2.out'
    });
  });
}

  // ESG WALKING
const walkingElements = [
  '.walking__talk',
  '.walking__talk__head',
  '.walking__talk__body',
  '.wt__footer__intro h4',
  '.wt__footer__intro p',
  '.wt__footer__desc h4',
  '.wt__footer__desc p'
];
const isMobile = window.innerWidth <= 768;
walkingElements.forEach((selector, index) => {
  const elements = document.querySelectorAll(selector);
  elements.forEach((element) => {
    gsap.from(element, {
      scrollTrigger: {
        trigger: '.walking__talk',
        start: isMobile ? 'top 80%' : 'top 100%',
        end: 'top 10%',
        toggleActions: 'play none none none',
        scrub: 0.3,
      },
      opacity: 0,
      y: 50,
      duration: 0.6,
      ease: 'power2.out',
      delay: index * 0.1
    });
  });
});
gsap.from('.wt__body__desc li', {
  scrollTrigger: {
    trigger: '.wt__body__desc',
    start: 'top 80%',
    toggleActions: 'play none none none'
  },
  opacity: 0,
  y: 30,
  duration: 0.4,
  ease: 'power2.out',
  stagger: 0.1
});

  // PRESS RELEASE SECTION ANIMATION
const pressWrapper = '.icd__press__wrapper';
const pressTitle = '.icd__press__title';
const pressCards = '.icd__press__card';
const cardHead = '.press__card__head > h4';
const cardContent = '.press__content';
const cardFooter = '.press__card__footer';

gsap.from(pressWrapper, {
  scrollTrigger: {
    trigger: pressWrapper,
    start: 'top 80%',
    once: true,
    toggleActions: 'play none none none', // Disable reverse when scrolling back
  },
  opacity: 0,
  y: 150,
  duration: 1.2,
  ease: 'power2.out',
});

gsap.from(pressTitle, {
  scrollTrigger: {
    trigger: pressWrapper,
    start: 'top 90%',
    once: true,
    toggleActions: 'play none none none', // Disable reverse when scrolling back
  },
  opacity: 0,
  y: 100,
  duration: 1,
  delay: 0.4,
  ease: 'power2.out',
});

gsap.from([pressCards, cardHead, cardContent, cardFooter], {
  scrollTrigger: {
    trigger: pressWrapper,
    start: 'top 90%',
    once: true,
    toggleActions: 'play none none none', // Disable reverse when scrolling back
  },
  opacity: 0,
  y: 150,
  duration: 1.2,
  stagger: 0,
  ease: 'power2.out',
});


  // Elements for fade-up effect in the hero and vision sections
  // const fadeUpElements = [
  //   '.icd__vision__content.blue',
  //   '.icd__vision__content.yellow',
  //   '.icd__vision__col.img', 
  //   '.icd__vision__content.green',  
  //   '.icd__vision__content__col.first',
  //   '.icd__vision__content__col.second'
  // ];

  // fadeUpElements.forEach((selector, index) => {
  //   let delay = index * 0.2;
  //   if (selector === '.icd__vision__col.img') {
  //     delay += 0.4;
  //   }
  //   gsap.from(selector, {
  //     scrollTrigger: {
  //       trigger: selector,
  //       start: 'top 85%',
  //       toggleActions: 'play none none reverse',
  //     },
  //     opacity: 0,
  //     y: 25,
  //     duration: 0.4,
  //     delay: delay,
  //     ease: 'power2.out', 
  //   });
  // });


const fadeUpElementsSecondGroup = [
  '.icd__vision__content.green',  
  '.icd__vision__content__col.first',
  '.icd__vision__content__col.second'
];

fadeUpElementsSecondGroup.forEach((selector, index) => {
  let delay = index * 0.2 + 0.6;
  gsap.from(selector, {
    scrollTrigger: {
      trigger: '.icd__vision__wrapper',
      start: 'top 85%',
      toggleActions: 'play none none none',
    },
    opacity: 0,
    y: 25,
    duration: 0.4,
    delay: delay,
    ease: 'power2.out',
  });
});





  // Elements for fade-up effect for the new set of targets
  const newFadeUpElements = [
    '.icd__head h2',
    '.icd__map__heading',
    '.icd__map__counter',
    '.icd_btn',
    '.icd__investment_content'
  ];

  newFadeUpElements.forEach((selector, index) => {
    gsap.from(selector, {
      scrollTrigger: {
        trigger: selector,
        start: 'top 100%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 30,
      duration: 1,
      delay: index * 0.1,
      ease: 'power2.out'
    });
  });


  gsap.registerPlugin(ScrollTrigger);
  gsap.from('.home__hero_heading .home__hero__line:nth-child(1)', {
    scrollTrigger: {
      trigger: '.home__hero_heading',
      start: 'top 80%',
      toggleActions: 'play none none none'
    },
    opacity: 0,
    y: 50,
    duration: 1,
    ease: 'power2.out'
  });

  gsap.from('.home__hero_heading .home__hero__bold', {
    scrollTrigger: {
      trigger: '.home__hero_heading',
      start: 'top 75%',
      toggleActions: 'play none none none'
    },
    opacity: 0,
    x: -50,
    duration: 1,
    ease: 'power2.out',
    delay: 0.3
  });

  gsap.from('.home__hero_heading .home__hero_subheading', {
    scrollTrigger: {
      trigger: '.home__hero_heading',
      start: 'top 65%',
      toggleActions: 'play none none none'
    },
    opacity: 0,
    y: 50,
    duration: 1,
    ease: 'power2.out',
    delay: 0.6
  });

  gsap.from('.home__hero_heading .home__hero__line:nth-child(3)', {
    scrollTrigger: {
      trigger: '.home__hero_heading',
      start: 'top 60%',
      toggleActions: 'play none none none'
    },
    opacity: 0,
    y: 50,
    duration: 1,
    ease: 'power2.out',
    delay: 0.9
  });

  const lines_portfolio = document.querySelectorAll('.sp-accor .tpbtm-line, .icd__org__faq__wrapper .icd__org__faqs__block');
  lines_portfolio.forEach((line, index) => {
    gsap.from(line, {
      opacity: 0,
      y: 150,
      duration: 1,
      delay: index * 0.2,
      ease: 'power2.out',
      scrollTrigger: {
        trigger: '.sp-accor',
        start: 'top bottom',
        toggleActions: 'play none none none',
      }
    });
  });

  // FOOTER LINES 
  // const lines = document.querySelectorAll('.icd__footer__line');
  // lines.forEach((line, index) => {
  //   gsap.from(line, {
  //     opacity: 0,
  //     y: 150,
  //     duration: 2,
  //     delay: index * 0.2,
  //     ease: 'power2.out',
  //     scrollTrigger: {
  //       trigger: '.icd__footer__wrapper',
  //       start: 'top bottom',
  //       toggleActions: 'play none none reverse',
  //     }
  //   });
  // });
  // gsap.from('.icd__footer__row', {
  //   opacity: 0,
  //   y: 150,
  //   duration: 2,
  //   delay: lines.length * 0.2,
  //   ease: 'power2.out',
  //   scrollTrigger: {
  //     trigger: '.icd__footer__wrapper',
  //     start: 'top bottom',
  //     toggleActions: 'play none none reverse',
  //   }
  // });

  // MAP SVG's
  $('circle[id^="Pulse"]').addClass('pulse');
  $('circle[id^="Continent"]').addClass('glow');

  $('.home .icd__countries').hide();
  $('.icd__map__col.content').removeClass('show-border');
  $('.icd__map__col.map svg').removeClass('map_open');

  let activeCircle = null;

  // $('svg circle').on('click', function (event) {
  //     event.stopPropagation();
  //     const $this = $(this);
  //     const circleId = $this.attr('id');
  //     const cx = parseInt($this.attr('cx'));
  //     const cy = parseInt($this.attr('cy'));
  //     const lineLength = 150;
  //     const lineText = `Details for ${circleId}`;

  //     if (activeCircle && activeCircle.is($this)) {
  //         resetMap();
  //     } else {
  //         activeCircle = $this;
  //         resetMap();
  //         $('#line')
  //             .attr({
  //                 x1: cx,
  //                 y1: cy,
  //                 x2: cx - lineLength,
  //                 y2: cy,
  //             })
  //             .attr('visibility', 'visible');
  //         $('#line-text')
  //             .attr({
  //                 x: cx - lineLength - 10,
  //                 y: cy + 5,
  //             })
  //             .text(lineText)
  //             .attr('visibility', 'visible');
  //         // $('.icd__map__col.map svg').addClass('map_open');
  //         $('.home .icd__countries').slideUp(500);
  //         const matchedCountry = $(`.home .icd__countries[data-id="${circleId}"]`);
  //         if (matchedCountry.length > 0) {
  //             matchedCountry.slideDown(500);
  //             $('.icd__map__col.content').addClass('show-border');
  //         }
  //     }
  // });

  // $(document).on('click', function () {
  //     resetMap();
  // });

  function resetMap() {
      $('.home .icd__countries').slideUp(500);
      $('.icd__map__col.content').removeClass('show-border');
      $('.icd__map__col.map svg').removeClass('map_open');
      $('#line').attr('visibility', 'hidden');
      $('#line-text').attr('visibility', 'hidden');
      activeCircle = null;
  }

  // ESG FRAMEWORK IMAGE
  const img = document.querySelector(".esg__framework__img img");
  img.addEventListener("load", () => {
    gsap.fromTo(
      img,
      { minHeight: "1000px" },
      { 
        minHeight: "600px",
        duration: 1,
        ease: "power4.out",
        scrollTrigger: {
          trigger: ".esg__framework__img",
          start: "top bottom",
          end: "top center",
          scrub: 0.5,
          markers: false
        }
      }
    );
  });

  // Fallback for cached images
  if (img.complete) {
    img.dispatchEvent(new Event("load"));
  }

  // ESG BANNER
  const frameworkTitle = '.esg__framework__title';
  const frameworkContent = '.esg__framework__content';

  gsap.from(frameworkTitle, {
    scrollTrigger: {
      trigger: '.esg__framework__img',
      start: 'top 75%',
      toggleActions: 'play none none none',
    },
    opacity: 0,
    y: 100,
    duration: 1,
    delay: 0.5,
    ease: 'power2.out',
  });

  gsap.from(frameworkContent, {
    scrollTrigger: {
      trigger: '.esg__framework__title',
      start: 'top 60%',
      toggleActions: 'play none none none',
    },
    opacity: 0,
    y: 150,
    duration: 1.2,
    delay: 1,
    ease: 'power2.out',
  });


  gsap.to(".about__icd__main__img", {
    scrollTrigger: {
      trigger: ".about__icd__main__img",
      start: "top bottom",
      end: "top top",
      scrub: 1,
    },
    y: "-100vh",
    opacity: 1,
    ease: "power1.out",
    initial: { opacity: 0, y: "100vh" },
  });


});



// const mobileQuery = window.matchMedia("(max-width: 768px)");
// const tabletQuery = window.matchMedia("(max-width: 1024px)");
// function mobileAnimation() {
// }
// function tabletAnimation() {

// }
// function desktopAnimation() {
  
// }
// function handleAnimations() {
//   if (mobileQuery.matches) {
//     mobileAnimation();
//   } else if (tabletQuery.matches) {
//     tabletAnimation();
//   } else {
//     desktopAnimation();
//   }
// }
// handleAnimations();
// mobileQuery.addListener(handleAnimations);
// tabletQuery.addListener(handleAnimations);


// ICD GROUP SHAPES PARRALEX
gsap.to(".total__assets__box__bg img", {
  xPercent: 30,
  opacity: 0.6,
  ease: "power1.out",
  scrollTrigger: {
    trigger: ".total__assets__box__bg",
    start: "top bottom",
    end: "bottom top",
    scrub: true,
    markers: false,
  }
});
gsap.to(".total__revenue__box__bg img", {
  xPercent: -30,
  opacity: 0.6,
  ease: "power1.out",
  scrollTrigger: {
    trigger: ".total__revenue__box__bg",
    start: "top bottom",
    end: "bottom top",
    scrub: true,
    markers: false,
  }
});

 gsap.to(".mainrow", {
    backgroundPosition: "-150px", // End position in pixels
    ease: "none",
    scrollTrigger: {
      trigger: ".mainrow",
      start: "top bottom", // Start animation when element top reaches viewport bottom
      end: "bottom top",   // End animation when element bottom reaches viewport top
      scrub: true,         // Smooth scrolling effect
    },
  });



$(window).on('load', function() {
  setTimeout(function() {
    $('.mh-nmbrs.counter').each(function() {
      var counter = $(this);
      var targetValue = counter.data('target');
      var duration = 2;
      counter.text(0);
      gsap.fromTo(counter[0], {
        textContent: 0
      }, {
        textContent: targetValue,
        duration: duration,
        delay: 1, 
        ease: "power1.out",
        onUpdate: function() {
          counter.text(Math.ceil(this.targets()[0].textContent));
        }
      });
    });
  }, 500);
});



document.addEventListener('DOMContentLoaded', () => {
    if (window.innerWidth >= 1200 && document.body.classList.contains('page-template-our-organisation')) {
      const ceoImage = document.querySelector('.icd__ceo__img');
      const ceoMessage = document.querySelector('.icd__ceo__msg');
      
      gsap.to(ceoImage, {
        scrollTrigger: {
          trigger: ceoImage,
          start: 'top 120px',
          end: () => `+=${ceoMessage.offsetHeight}`,
          pin: true,
          scrub: true,
          markers: false
        }
      });

      gsap.fromTo(ceoMessage, { y: 50 }, {
        y: 0, 
        duration: 1, 
        scrollTrigger: {
          trigger: ceoMessage,
          start: 'top 60%', 
          end: 'bottom top',
          scrub: true,
          markers: false
        }
      });
    }
  });


document.addEventListener('DOMContentLoaded', () => {
  if (window.innerWidth >= 1200 && document.body.classList.contains('single-portfolios')) {
    const portfolioContent = document.querySelector('section.secondsec > .container > .row > .col-md-6:first-child');
    const portfolioCharts = document.querySelector('section.secondsec > .container > .row > .col-md-6:nth-child(2)');
    gsap.to(portfolioContent, {
      scrollTrigger: {
        trigger: portfolioContent,
        start: 'top 10%',
        end: 'top+=200',  // Pin will stop after 200px scroll
        pin: true,
        scrub: true,
        markers: false,
        onLeave: () => {
          console.log("Stopped pinning after scrolling 200px");
        }
      }
    });
    gsap.fromTo(portfolioCharts, { y: 50 }, {
      y: 0, 
      duration: 1, 
      scrollTrigger: {
        trigger: portfolioCharts,
        start: 'top 60%', 
        end: 'bottom top',
        scrub: true,
        markers: false
      }
    });
  }
});
