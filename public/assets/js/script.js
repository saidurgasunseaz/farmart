(function ($) {
  "use strict";

  // Hide Preloader with delay and fade like original
  function handlePreloader() {
    const preloader = document.querySelector(".preloader");
    if (preloader) {
      // Add slight delay (200ms) like original
      setTimeout(() => {
        // Add fade-out class which triggers the transition
        preloader.style.transition = "opacity 500ms ease";
        preloader.style.opacity = "0";

        // Remove preloader after animation completes
        preloader.addEventListener("transitionend", () => {
          preloader.style.display = "none";
        });
      }, 150);
    }
  }

  // Call the function when page is loaded
  window.addEventListener("load", handlePreloader);

  //Update Header Style and Scroll to Top
  function headerStyle() {
    if ($(".main-header").length) {
      var windowpos = $(window).scrollTop();
      var siteHeader = $(".main-header");
      var scrollLink = $(".scroll-to-top");

      var HeaderHight = $(".main-header").height();
      if (windowpos >= HeaderHight) {
        siteHeader.addClass("fixed-header");
        scrollLink.fadeIn(300);
      } else {
        siteHeader.removeClass("fixed-header");
        scrollLink.fadeOut(300);
      }
    }
  }

  headerStyle();

  //Submenu Dropdown Toggle
  if ($(".main-header li").length) {
    $(".main-header li.dropdown").append(
      '<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>'
    );

    //Dropdown Button
    $(".main-header li.dropdown .dropdown-btn").on("click", function () {
      $(this).prev("ul").slideToggle(500);
    });

    //Disable dropdown parent link
    $(".navigation li.dropdown > a").on("click", function (e) {
      e.preventDefault();
    });

    //Disable dropdown parent link
    $(
      ".main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a"
    ).on("click", function (e) {
      e.preventDefault();
    });

    $(".main-menu .navigation > li .mega-menu-bar > .column > ul").addClass(
      "first-ul"
    );
    $(".main-header .main-menu .navigation > li > ul").addClass("last-ul");

    $(".xs-sidebar-group .close-button").on("click", function (e) {
      $(".xs-sidebar-group.info-group").removeClass("isActive");
    });

    $(".about-widget").on("click", function (e) {
      $(".about-sidebar").addClass("active");
    });

    $(".about-sidebar .close-button").on("click", function (e) {
      $(".about-sidebar").removeClass("active");
    });

    $(".about-sidebar .gradient-layer").on("click", function (e) {
      $(".about-sidebar").removeClass("active");
    });
  }

  //Mobile Nav Hide Show
  if ($(".mobile-menu").length) {
    //$('.mobile-menu .menu-box').mCustomScrollbar();
    var mobileMenuContent = $(".main-header .nav-outer .main-menu").html();
    $(".mobile-menu .menu-box .menu-outer").append(mobileMenuContent);
    $(".sticky-header .main-menu").append(mobileMenuContent);

    //Hide / Show Submenu
    $(".mobile-menu .navigation > li.dropdown > .dropdown-btn").on(
      "click",
      function (e) {
        console.log("btn clicked");
        e.preventDefault();
        var target = $(this).parent("li").children("ul");
        var target1 = $(this).parent("li").children("div.mega-menu");
        // console.log('target', $(target).is(':visible'));
        console.log("target1", $(target1).is(":visible"));

        if ($(target).is(":visible")) {
          $(this).parent("li").removeClass("open");
          $(target).slideUp(500);
          $(this)
            .parents(".navigation")
            .children("li.dropdown")
            .removeClass("open");
          $(this)
            .parents(".navigation")
            .children("li.dropdown > ul.last-ul")
            .slideUp(500);
          return false;
        } else {
          $(this)
            .parents(".navigation")
            .children("li.dropdown")
            .removeClass("open");
          $(this)
            .parents(".navigation")
            .children("li.dropdown")
            .children("ul.last-ul")
            .slideUp(500);
          $(this).parent("li").toggleClass("open");
          $(this).parent("li").children("ul.last-ul").slideToggle(500);
        }
        if ($(target1).is(":visible")) {
          console.log("Visible");
          $(this).parent("li").removeClass("open");
          $(target1).slideUp(500);
          $(this)
            .parents(".navigation")
            .children("li.dropdown")
            .removeClass("open");
          $(this)
            .parents(".navigation")
            .children("li.dropdown > .mega-menu")
            .slideUp(500);
          // return false;
        } else {
          console.log("Not Visible");
          $(this)
            .parents(".navigation")
            .children("li.dropdown")
            .removeClass("open");
          $(this)
            .parents(".navigation")
            .children("li.dropdown")
            .children(".mega-menu")
            .slideUp(500);
          $(".first-ul").css("display", "block");
          $(this).parent("li").toggleClass("open");
          $(this).parent("li").children(".mega-menu").slideToggle(500);
        }
      }
    );

    //3rd Level Nav
    $(
      ".mobile-menu .navigation > li.dropdown > ul  > li.dropdown > .dropdown-btn"
    ).on("click", function (e) {
      e.preventDefault();
      var targetInner = $(this).parent("li").children("ul");

      if ($(targetInner).is(":visible")) {
        $(this).parent("li").removeClass("open");
        $(targetInner).slideUp(500);
        $(this)
          .parents(".navigation > ul")
          .find("li.dropdown")
          .removeClass("open");
        $(this)
          .parents(".navigation > ul")
          .find("li.dropdown > ul")
          .slideUp(500);
        return false;
      } else {
        $(this)
          .parents(".navigation > ul")
          .find("li.dropdown")
          .removeClass("open");
        $(this)
          .parents(".navigation > ul")
          .find("li.dropdown > ul")
          .slideUp(500);
        $(this).parent("li").toggleClass("open");
        $(this).parent("li").children("ul").slideToggle(500);
      }
    });

    //Menu Toggle Btn
    $(".mobile-nav-toggler").on("click", function () {
      $("body").addClass("mobile-menu-visible");
    });

    //Menu Toggle Btn
    $(".mobile-menu .menu-backdrop,.mobile-menu .close-btn").on(
      "click",
      function () {
        $("body").removeClass("mobile-menu-visible");
        $(".mobile-menu .navigation > li").removeClass("open");
        $(".mobile-menu .navigation li ul").slideUp(0);
      }
    );

    $(document).keydown(function (e) {
      if (e.keyCode == 27) {
        $("body").removeClass("mobile-menu-visible");
        $(".mobile-menu .navigation > li").removeClass("open");
        $(".mobile-menu .navigation li ul").slideUp(0);
      }
    });
  }

  //Header Search
  if ($(".search-box-outer").length) {
    $(".search-box-outer").on("click", function () {
      $("body").addClass("search-active");
    });
    $(".close-search").on("click", function () {
      $("body").removeClass("search-active");
    });
  }

  //Parallax Scene for Icons
  if ($(".parallax-scene-1").length) {
    var scene = $(".parallax-scene-1").get(0);
    var parallaxInstance = new Parallax(scene);
  }

  if ($(".paroller").length) {
    $(".paroller").paroller({
      factor: 0.2, // multiplier for scrolling speed and offset, +- values for direction control
      factorLg: 0.4, // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control
      type: "foreground", // background, foreground
      direction: "horizontal", // vertical, horizontal
    });
  }

  //  Animation Fade Left End
  /////////////////////////////////////////////////////
  // CURSOR
  var cursor = $(".cursor"),
    follower = $(".cursor-follower");

  var posX = 0,
    posY = 0;

  var mouseX = 0,
    mouseY = 0;

  TweenMax.to({}, 0.016, {
    repeat: -1,
    onRepeat: function () {
      posX += (mouseX - posX) / 9;
      posY += (mouseY - posY) / 9;

      TweenMax.set(follower, {
        css: {
          left: posX - 12,
          top: posY - 12,
        },
      });

      TweenMax.set(cursor, {
        css: {
          left: mouseX,
          top: mouseY,
        },
      });
    },
  });

  $(document).on("mousemove", function (e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });
  //circle
  $(".theme-btn, a").on("mouseenter", function () {
    cursor.addClass("active");
    follower.addClass("active");
  });
  $(".theme-btn, a").on("mouseleave", function () {
    cursor.removeClass("active");
    follower.removeClass("active");
  });
  // CURSOR End

  gsap.to(".expand-section", {
    width: "100%", // Expands to full width
    borderRadius: 0,
    ease: "power2.out",
    scrollTrigger: {
      trigger: ".expand-section",
      start: "top 70%",
      end: "top 5%",
      scrub: true,
    },
  });

  /* ==================================================
		Splite Text
	================================================== */

  let ofsetHeight = document.querySelector(".project-style-one-items");
  if (ofsetHeight) {
    ScrollTrigger.matchMedia({
      "(min-width: 992px)": function () {
        let pbmitpanels = gsap.utils.toArray(".project-block_four");
        const spacer = 0;

        let pbmitheight = pbmitpanels[0].offsetHeight + 130;
        pbmitpanels.forEach((pbmitpanel, i) => {
          //This is for padding between item
          TweenMax.set(pbmitpanel, {
            top: i * 0,
          });
          const tween = gsap.to(pbmitpanel, {
            scrollTrigger: {
              trigger: pbmitpanel,
              start: () => `top bottom-=100`,
              end: () => `top top+=40`,
              scrub: true,
              invalidateOnRefresh: true,
            },
            ease: "none",
            //This is for scaling outsite
            scale: () => 1 - (pbmitpanels.length - i) * 0,
          });
          ScrollTrigger.create({
            trigger: pbmitpanel,
            start: () => "top 140px",
            endTrigger: ".project-style-one-items",
            end: `bottom top+=${pbmitheight + pbmitpanels.length * spacer}`,
            pin: true,
            pinSpacing: false,
          });
        });
      },
      "(max-width:1025px)": function () {
        ScrollTrigger.getAll().forEach((pbmitpanels) => pbmitpanels.kill(true));
      },
    });
  }

  // Main Slider
  var slider = new Swiper(".main-slider", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    autoplay: {
      enabled: true,
      delay: 60000,
    },
    // Navigation arrows
    navigation: {
      nextEl: ".main-slider-next",
      prevEl: ".main-slider-prev",
      clickable: true,
    },
    //Pagination
    pagination: {
      el: ".slider-one_pagination",
      clickable: true,
      renderBullet: function (index, className) {
        let formattedIndex = (index + 1).toString().padStart(2, "0"); // Ensures two-digit format
        return '<span class="' + className + '">' + formattedIndex + "</span>";
      },
    },
    speed: 500,
    breakpoints: {
      1600: {
        slidesPerView: 1,
      },
      1200: {
        slidesPerView: 1,
      },
      992: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 1,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });

  // Four Item Carousel
  var slider = new Swiper(".four-item-carousel", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      enabled: true,
      delay: 60000,
    },
    // Navigation arrows
    navigation: {
      nextEl: ".four-item-carousel-next",
      prevEl: ".four-item-carousel-prev",
      clickable: true,
    },
    //Pagination
    pagination: {
      el: ".four-item-carousel_pagination",
      clickable: true,
      renderBullet: function (index, className) {
        let formattedIndex = (index + 1).toString().padStart(2, "0"); // Ensures two-digit format
        return '<span class="' + className + '">' + formattedIndex + "</span>";
      },
    },
    speed: 500,
    breakpoints: {
      1600: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 2,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });

  // Two Item Carousel
  var slider = new Swiper(".two-item-carousel", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      enabled: true,
      delay: 60000,
    },
    // Navigation arrows
    navigation: {
      nextEl: ".two-item-carousel-next",
      prevEl: ".two-item-carousel-prev",
      clickable: true,
    },
    //Pagination
    pagination: {
      el: ".two-item-carousel_pagination",
      clickable: true,
      renderBullet: function (index, className) {
        let formattedIndex = (index + 1).toString().padStart(2, "0"); // Ensures two-digit format
        return '<span class="' + className + '">' + formattedIndex + "</span>";
      },
    },
    speed: 500,
    breakpoints: {
      1600: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 1,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });

  // Three Item Carousel
  var slider = new Swiper(".three-item-carousel", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      enabled: true,
      delay: 60000,
    },
    // Navigation arrows
    navigation: {
      nextEl: ".three-item-carousel-next",
      prevEl: ".three-item-carousel-prev",
      clickable: true,
    },
    //Pagination
    pagination: {
      el: ".three-item-carousel_pagination",
      clickable: true,
      renderBullet: function (index, className) {
        let formattedIndex = (index + 1).toString().padStart(2, "0"); // Ensures two-digit format
        return '<span class="' + className + '">' + formattedIndex + "</span>";
      },
    },
    speed: 500,
    breakpoints: {
      1600: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 2,
      },
      600: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 2,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });

  // Clients Slider
  var slider = new Swiper(".clients_slider", {
    slidesPerView: 5,
    spaceBetween: 0,
    loop: true,
    autoplay: {
      enabled: true,
      delay: 600,
    },
    // Navigation arrows
    navigation: {
      nextEl: ".clients_slider-button-next",
      prevEl: ".clients_slider-button-prev",
      clickable: true,
    },
    //Pagination
    pagination: {
      el: ".clients_slider-pagination",
      clickable: true,
    },
    speed: 1500,
    breakpoints: {
      1600: {
        slidesPerView: 5,
      },
      1200: {
        slidesPerView: 5,
      },
      992: {
        slidesPerView: 4,
      },
      768: {
        slidesPerView: 3,
      },
      576: {
        slidesPerView: 2,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });

  // Slider One Nav
  var SliderOne_nav = new Swiper(".slider-three__nav", {
    loop: true,
    spaceBetween: 28,
    speed: 500,
    slidesPerView: 3,
    centeredSlides: true,
    direction: "horizontal",
    autoplay: {
      enabled: true,
      delay: 6000,
    },
    navigation: {
      nextEl: ".main-slider-next",
      prevEl: ".main-slider-prev",
      clickable: true,
    },
    //Pagination
    pagination: {
      el: ".main-slider_pagination",
      clickable: true,
    },
    breakpoints: {
      2000: {
        slidesPerView: 3,
        direction: "vertical",
      },
      1500: {
        slidesPerView: 3,
        direction: "vertical",
      },
      1200: {
        slidesPerView: 3,
        direction: "horizontal",
      },
      992: {
        slidesPerView: 3,
        direction: "horizontal",
      },
      991: {
        slidesPerView: 3,
        direction: "horizontal",
      },
      768: {
        slidesPerView: 3,
        direction: "horizontal",
      },
      577: {
        slidesPerView: 3,
        spaceBetween: 10,
        direction: "horizontal",
      },
      0: {
        slidesPerView: 3,
        spaceBetween: 0,
        direction: "horizontal",
      },
    },
  });
  var swiper3 = new Swiper(".slider-three__active", {
    loop: true,
    spaceBetween: 0,

    //Pagination
    //effect: 'fade',
    autoplay: {
      enabled: true,
      delay: 6000,
    },
    slidesPerView: 1,
    thumbs: {
      swiper: SliderOne_nav,
    },
  });

  // Masonary
  function enableMasonry() {
    if ($(".masonry-items-container").length) {
      var winDow = $(window);
      // Needed variables
      var $container = $(".masonry-items-container");

      $container.isotope({
        itemSelector: ".masonry-item",
        masonry: {
          columnWidth: ".masonry-item.col-lg-4",
        },
        animationOptions: {
          duration: 500,
          easing: "linear",
        },
      });

      winDow.bind("resize", function () {
        $container.isotope({
          itemSelector: ".masonry-item",
          animationOptions: {
            duration: 500,
            easing: "linear",
            queue: false,
          },
        });
      });
    }
  }

  enableMasonry();

  // Testimonial Section Four Carousel
  if ($(".shop-detail").length) {
    var thumbsCarousel = new Swiper(".shop-detail .thumbs-carousel", {
      spaceBetween: 15,
      slidesPerView: 4,
      //direction: 'vertical',
      breakpoints: {
        320: {
          //direction: 'horizontal',
          slidesPerView: 3,
        },
        640: {
          //direction: 'horizontal',
          slidesPerView: 4,
        },
        1023: {
          slidesPerView: 4,
        },
      },
    });

    var contentCarousel = new Swiper(".shop-detail .content-carousel", {
      spaceBetween: 0,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: thumbsCarousel,
      },
    });
  }

  //Tabs Box
  if ($(".tabs-box").length) {
    $(".tabs-box .tab-buttons .tab-btn").on("click", function (e) {
      e.preventDefault();
      var target = $($(this).attr("data-tab"));

      if ($(target).is(":visible")) {
        return false;
      } else {
        target
          .parents(".tabs-box")
          .find(".tab-buttons")
          .find(".tab-btn")
          .removeClass("active-btn");
        $(this).addClass("active-btn");
        target
          .parents(".tabs-box")
          .find(".tabs-content")
          .find(".tab")
          .fadeOut(0);
        target
          .parents(".tabs-box")
          .find(".tabs-content")
          .find(".tab")
          .removeClass("active-tab");
        $(target).fadeIn(300);
        $(target).addClass("active-tab");
      }
    });
  }

  //Event Countdown Timer
  if ($(".time-countdown").length) {
    $(".time-countdown").each(function () {
      var $this = $(this),
        finalDate = $(this).data("countdown");
      $this.countdown(finalDate, function (event) {
        var $this = $(this).html(
          event.strftime(
            "" +
              '<div class="counter-column"><span class="count">%D</span>Days</div> ' +
              '<div class="counter-column"><span class="count">%H</span>Hours</div>  ' +
              '<div class="counter-column"><span class="count">%M</span>Minutes</div>  ' +
              '<div class="counter-column"><span class="count">%S</span>Seconds</div>'
          )
        );
      });
    });
  }

  if ($(".clock-wrapper").length) {
    (function () {
      //generate clock animations
      var now = new Date(),
        hourDeg = (now.getHours() / 12) * 360 + (now.getMinutes() / 60) * 30,
        minuteDeg = (now.getMinutes() / 60) * 360 + (now.getSeconds() / 60) * 6,
        secondDeg = (now.getSeconds() / 60) * 360,
        stylesDeg = [
          "@-webkit-keyframes rotate-hour{from{transform:rotate(" +
            hourDeg +
            "deg);}to{transform:rotate(" +
            (hourDeg + 360) +
            "deg);}}",
          "@-webkit-keyframes rotate-minute{from{transform:rotate(" +
            minuteDeg +
            "deg);}to{transform:rotate(" +
            (minuteDeg + 360) +
            "deg);}}",
          "@-webkit-keyframes rotate-second{from{transform:rotate(" +
            secondDeg +
            "deg);}to{transform:rotate(" +
            (secondDeg + 360) +
            "deg);}}",
          "@-moz-keyframes rotate-hour{from{transform:rotate(" +
            hourDeg +
            "deg);}to{transform:rotate(" +
            (hourDeg + 360) +
            "deg);}}",
          "@-moz-keyframes rotate-minute{from{transform:rotate(" +
            minuteDeg +
            "deg);}to{transform:rotate(" +
            (minuteDeg + 360) +
            "deg);}}",
          "@-moz-keyframes rotate-second{from{transform:rotate(" +
            secondDeg +
            "deg);}to{transform:rotate(" +
            (secondDeg + 360) +
            "deg);}}",
        ].join("");
      document.getElementById("clock-animations").innerHTML = stylesDeg;
    })();
  }

  // Odometer
  if ($(".odometer").length) {
    $(".odometer").appear();
    $(".odometer").appear(function () {
      var odo = $(".odometer");
      odo.each(function () {
        var countNumber = $(this).attr("data-count");
        $(this).html(countNumber);
      });
      window.odometerOptions = {
        format: "d",
      };
    });
  }

  //Progress Bar
  if ($(".progress-line").length) {
    $(".progress-line").appear(
      function () {
        var el = $(this);
        var percent = el.data("width");
        $(el).css("width", percent + "%");
      },
      { accY: 0 }
    );
  }

  //Fact Counter + Text Count
  if ($(".count-box").length) {
    $(".count-box").appear(
      function () {
        var $t = $(this),
          n = $t.find(".count-text").attr("data-stop"),
          r = parseInt($t.find(".count-text").attr("data-speed"), 10);

        if (!$t.hasClass("counted")) {
          $t.addClass("counted");
          $({
            countNum: $t.find(".count-text").text(),
          }).animate(
            {
              countNum: n,
            },
            {
              duration: r,
              easing: "linear",
              step: function () {
                $t.find(".count-text").text(Math.floor(this.countNum));
              },
              complete: function () {
                $t.find(".count-text").text(this.countNum);
              },
            }
          );
        }
      },
      { accY: 0 }
    );
  }

  //Add One Page nav
  if ($(".scroll-nav").length) {
    $(".scroll-nav ul").onePageNav();
  }

  //Custom Scroll Linsk / Sidebar
  if ($(".scroll-nav li a").length) {
    $(".scroll-nav li a").on("click", function (e) {
      e.preventDefault();
      $("body").removeClass("mobile-menu-visible");
    });
  }

  // Jquery Spinner / Quantity Spinner
  // if($('.qty-spinner').length){
  // 	$("input.qty-spinner").TouchSpin({
  // 	  verticalbuttons: true,
  // 	});
  // }

  // $('.button2').hide();
  $('.button1').on('click', function () {
    $('.button2').show();
    $('.button1').hide();
  })
  $('.button2').on('click', function () {
    $('.button1').show();
     $('.button2').hide();
  })
  
  $(document).ready(function () {
    $("input.qty-spinner").TouchSpin({
      min: 1,
      max: 100,
      step: 1,
      verticalbuttons: true,
    });
  });

  //Custom Seclect Box
  if ($(".custom-select-box").length) {
    $(".custom-select-box")
      .selectmenu()
      .selectmenu("menuWidget")
      .addClass("overflow");
  }

  /////////////////////////////////////////////////////
  // Title Animation
  let splitTitleLines = gsap.utils.toArray(".title-anim");

  splitTitleLines.forEach((splitTextLine) => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: splitTextLine,
        start: "top 90%",
        end: "bottom 60%",
        scrub: false,
        markers: false,
        toggleActions: "play none none none",
      },
    });

    const itemSplitted = new SplitText(splitTextLine, { type: "words, lines" });
    gsap.set(splitTextLine, { perspective: 400 });
    itemSplitted.split({ type: "lines" });
    tl.from(itemSplitted.lines, {
      duration: 1,
      delay: 0.3,
      opacity: 0,
      rotationX: -80,
      force3D: true,
      transformOrigin: "top center -50",
      stagger: 0.1,
    });
  });
  /////////////////////////////////////////////////////

  if ($(".animation_mode").length) {
    $(".animation_mode").marquee({
      speed: 50,
      gap: 20,
      delayBeforeStart: 0,
      direction: "left",
      duplicated: true,
      pauseOnHover: true,
      startVisible: true,
    });
  }

  if ($(".animation_mode-two").length) {
    $(".animation_mode-two").marquee({
      speed: 50,
      gap: 20,
      delayBeforeStart: 0,
      direction: "right",
      duplicated: true,
      duplicateCount: 8,
      delayBeforeStart: 0,
      pauseOnHover: true,
      startVisible: true,
    });
  }

  // Accordion Box
  if ($(".accordion-box").length) {
    $(".accordion-box").on("click", ".acc-btn", function () {
      var outerBox = $(this).parents(".accordion-box");
      var target = $(this).parents(".accordion");

      if ($(this).next(".acc-content").is(":visible")) {
        //return false;
        $(this).removeClass("active");
        $(this).next(".acc-content").slideUp(300);
        $(outerBox).children(".accordion").removeClass("active-block");
      } else {
        $(outerBox).find(".accordion .acc-btn").removeClass("active");
        $(this).addClass("active");
        $(outerBox).children(".accordion").removeClass("active-block");
        $(outerBox).find(".accordion").children(".acc-content").slideUp(300);
        target.addClass("active-block");
        $(this).next(".acc-content").slideDown(300);
      }
    });
  }

  $(document).ready(function () {
    var st = $(".tx-split-text");
    if (st.length == 0) return;
    gsap.registerPlugin(SplitText);
    st.each(function (index, el) {
      el.split = new SplitText(el, {
        type: "lines,words,chars",
        linesClass: "split-line",
      });
      gsap.set(el, { perspective: 400 });

      if ($(el).hasClass("split-in-fade")) {
        gsap.set(el.split.chars, {
          opacity: 0,
          ease: "Back.easeOut",
        });
      }
      if ($(el).hasClass("split-in-right")) {
        gsap.set(el.split.chars, {
          opacity: 0,
          x: "50",
          ease: "Back.easeOut",
        });
      }
      if ($(el).hasClass("split-in-left")) {
        gsap.set(el.split.chars, {
          opacity: 0,
          x: "-50",
          ease: "circ.out",
        });
      }
      if ($(el).hasClass("split-in-up")) {
        gsap.set(el.split.chars, {
          opacity: 0,
          y: "80",
          ease: "circ.out",
        });
      }
      if ($(el).hasClass("split-in-down")) {
        gsap.set(el.split.chars, {
          opacity: 0,
          y: "-80",
          ease: "circ.out",
        });
      }
      if ($(el).hasClass("split-in-rotate")) {
        gsap.set(el.split.chars, {
          opacity: 0,
          rotateX: "50deg",
          ease: "circ.out",
        });
      }
      if ($(el).hasClass("split-in-scale")) {
        gsap.set(el.split.chars, {
          opacity: 0,
          scale: "0.5",
          ease: "circ.out",
        });
      }
      el.anim = gsap.to(el.split.chars, {
        scrollTrigger: {
          trigger: el,
          // toggleActions: "restart pause resume reverse",
          start: "top 90%",
        },
        x: "0",
        y: "0",
        rotateX: "0",
        scale: 1,
        opacity: 1,
        duration: 0.8,
        stagger: 0.02,
      });
    });
  });

  // LightBox Image
  if ($(".lightbox-image").length) {
    $(".lightbox-image").magnificPopup({
      type: "image",
      gallery: {
        enabled: true,
      },
    });
  }

  // LightBox Video
  if ($(".lightbox-video").length) {
    $(".lightbox-video").magnificPopup({
      // disableOn: 700,
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      iframe: {
        patterns: {
          youtube: {
            index: "youtube.com",
            id: "v=",
            src: "https://www.youtube.com/embed/%id%",
          },
        },
        srcAction: "iframe_src",
      },
      fixedContentPos: false,
    });
  }

  //Contact Form Validation
  // if($('#contact-form').length){
  // 	$('#contact-form').validate({
  // 		rules: {
  // 			username: {
  // 				required: true
  // 			},
  // 			email: {
  // 				required: true,
  // 				email: true
  // 			},
  // 			message: {
  // 				required: true
  // 			}
  // 		}
  // 	});
  // }

  // Scroll to a Specific Div
  if ($(".scroll-to-target").length) {
    $(".scroll-to-target").on("click", function () {
      var target = $(this).attr("data-target");
      // animate
      $("html, body").animate(
        {
          scrollTop: $(target).offset().top,
        },
        1500
      );
    });
  }

  // Elements Animation
  if ($(".wow").length) {
    var wow = new WOW({
      boxClass: "wow", // animated element css class (default is wow)
      animateClass: "animated", // animation css class (default is animated)
      offset: 0, // distance to the element when triggering the animation (default is 0)
      mobile: true, // trigger animations on mobile devices (default is true)
      live: true, // act on asynchronously loaded content (default is true)
    });
    wow.init();
  }

  /* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */

  $(window).on("scroll", function () {
    headerStyle();
  });

  /* ==========================================================================
   When document is loading, do
   ========================================================================== */

  $(window).on("load", function () {
    handlePreloader();
    enableMasonry();
  });
})(window.jQuery);

const counters = document.querySelectorAll(".counter");

const options = {
  threshold: 0.5, // trigger when 50% of the element is visible
};

const countUp = (counter) => {
  const updateCount = () => {
    const target = +counter.getAttribute("data-target");
    const count = +counter.innerText;
    const increment = target / 200; // adjust speed

    if (count < target) {
      counter.innerText = Math.ceil(count + increment);
      setTimeout(updateCount, 20);
    } else {
      counter.innerText = target;
    }
  };
  updateCount();
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      countUp(entry.target);
      observer.unobserve(entry.target); // run once
    }
  });
}, options);

counters.forEach((counter) => {
  observer.observe(counter);
});

//video
document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".expand-section");
  const video = document.getElementById("scrollVideo");
  const muteBtn = document.getElementById("muteToggle");

  if (!section || !video) return;

  // ✅ Play/Pause video when visible
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          section.classList.add("active");
          video.play().catch((err) => console.log("Autoplay blocked:", err));
        } else {
          section.classList.remove("active");
          video.pause();
        }
      });
    },
    { threshold: 0.4 } // 40% visibility triggers
  );

  observer.observe(section);

  // ✅ Mute/Unmute toggle
  muteBtn.addEventListener("click", () => {
    video.muted = !video.muted;
    muteBtn.textContent = video.muted ? "🔇 Mute" : "🔊 Unmute";
  });
});

//registration
document.addEventListener("DOMContentLoaded", function () {
  const registerForm = document.querySelector(".register-form form");

  registerForm.addEventListener("submit", function (e) {
    e.preventDefault();

    // Get form values
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const agreeTerms = document.getElementById("agreeTerms").checked;

    // Validation
    if (password !== confirmPassword) {
      alert("Passwords do not match");
      return;
    }

    if (!agreeTerms) {
      alert("Please agree to the terms and conditions");
      return;
    }

    // Simulate registration process
    const submitBtn = this.querySelector(".theme-btn");
    const originalText = submitBtn.innerHTML;

    submitBtn.innerHTML = "Creating Account...";
    submitBtn.disabled = true;

    setTimeout(function () {
      alert("Account created successfully!");
      submitBtn.innerHTML = originalText;
      submitBtn.disabled = false;
    }, 1500);
  });
});

//forgot password with OTP
document.addEventListener("DOMContentLoaded", function () {
  const forgotPasswordForm = document.getElementById("forgotPasswordForm");
  const otpVerificationForm = document.getElementById("otpVerificationForm");
  const resetButton = document.getElementById("resetButton");
  const verifyOtpButton = document.getElementById("verifyOtpButton");
  const successMessage = document.getElementById("successMessage");
  const resendOtpLink = document.getElementById("resendOtpLink");
  const otpTimer = document.getElementById("otpTimer");
  const timerElement = document.getElementById("timer");

  let countdown;
  let timeLeft = 120; // 2 minutes in seconds

  // Function to start OTP timer
  function startOTPTimer() {
    clearInterval(countdown);
    timeLeft = 120;
    updateTimerDisplay();

    countdown = setInterval(function () {
      timeLeft--;
      updateTimerDisplay();

      if (timeLeft <= 0) {
        clearInterval(countdown);
        otpTimer.innerHTML = "OTP expired!";
        resendOtpLink.classList.remove("disabled");
      }
    }, 1000);
  }

  // Function to update timer display
  function updateTimerDisplay() {
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;
    timerElement.textContent = `${minutes.toString().padStart(2, "0")}:${seconds
      .toString()
      .padStart(2, "0")}`;
  }

  // Phone number form submission
  if (forgotPasswordForm) {
    forgotPasswordForm.addEventListener("submit", function (e) {
      e.preventDefault();

      const phoneNumber = document.getElementById("phoneNumber").value;

      if (!phoneNumber) {
        alert("Please enter your phone number");
        return;
      }

      // Basic phone number validation
      const phoneRegex = /^[0-9]{10}$/;
      if (!phoneRegex.test(phoneNumber.replace(/\D/g, ""))) {
        alert("Please enter a valid 10-digit phone number");
        return;
      }

      // Show loading state
      const originalText = resetButton.innerHTML;
      resetButton.innerHTML = "Sending OTP...";
      resetButton.disabled = true;

      // Simulate API call to send OTP
      setTimeout(function () {
        // Show success message
        successMessage.style.display = "block";

        // Hide phone form and show OTP form
        forgotPasswordForm.style.display = "none";
        otpVerificationForm.style.display = "block";

        // Start OTP timer
        startOTPTimer();
        resendOtpLink.classList.add("disabled");

        // Reset button
        resetButton.innerHTML = originalText;
        resetButton.disabled = false;
      }, 2000);
    });
  }

  // OTP form submission
  if (otpVerificationForm) {
    otpVerificationForm.addEventListener("submit", function (e) {
      e.preventDefault();

      const otp = document.getElementById("otp").value;

      if (!otp || otp.length !== 6) {
        alert("Please enter a valid 6-digit OTP");
        return;
      }

      // Show loading state
      const originalText = verifyOtpButton.innerHTML;
      verifyOtpButton.innerHTML = "Verifying...";
      verifyOtpButton.disabled = true;

      // Simulate OTP verification
      setTimeout(function () {
        // Stop timer
        clearInterval(countdown);

        // Redirect to password reset page (in real application)
        alert("OTP verified successfully! Redirecting to password reset...");
        window.location.href = "password-reset.html";

        // Reset button
        // verifyOtpButton.innerHTML = originalText;
        // verifyOtpButton.disabled = false;
      }, 1500);
    });
  }

  // Resend OTP functionality
  if (resendOtpLink) {
    resendOtpLink.addEventListener("click", function (e) {
      e.preventDefault();

      if (this.classList.contains("disabled")) {
        return;
      }

      // Show loading state
      this.innerHTML = "Sending...";

      // Simulate resend OTP
      setTimeout(function () {
        // Restart timer
        startOTPTimer();
        resendOtpLink.classList.add("disabled");
        resendOtpLink.innerHTML = "Resend OTP";

        alert("New OTP sent to your phone number!");
      }, 1000);
    });
  }

  // Auto-tab between OTP digits
  const otpInput = document.getElementById("otp");
  if (otpInput) {
    otpInput.addEventListener("input", function (e) {
      if (this.value.length === 6) {
        this.blur();
      }
    });
  }
});

// Password Reset with Eye Icons
document.addEventListener("DOMContentLoaded", function () {
  const passwordResetForm = document.getElementById("passwordResetForm");
  const resetPasswordButton = document.getElementById("resetPasswordButton");
  const successMessage = document.getElementById("successMessage");

  // Password toggle functionality
  const toggleNewPassword = document.getElementById("toggleNewPassword");
  const toggleConfirmPassword = document.getElementById(
    "toggleConfirmPassword"
  );
  const newPasswordInput = document.getElementById("newPassword");
  const confirmPasswordInput = document.getElementById("confirmPassword");

  // Toggle new password visibility
  if (toggleNewPassword) {
    toggleNewPassword.addEventListener("click", function () {
      const type =
        newPasswordInput.getAttribute("type") === "password"
          ? "text"
          : "password";
      newPasswordInput.setAttribute("type", type);

      // Toggle eye icon
      const eyeIcon = this.querySelector("i");
      if (type === "text") {
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
      } else {
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
      }
    });
  }

  // Toggle confirm password visibility
  if (toggleConfirmPassword) {
    toggleConfirmPassword.addEventListener("click", function () {
      const type =
        confirmPasswordInput.getAttribute("type") === "password"
          ? "text"
          : "password";
      confirmPasswordInput.setAttribute("type", type);

      // Toggle eye icon
      const eyeIcon = this.querySelector("i");
      if (type === "text") {
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
      } else {
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
      }
    });
  }

  // Password strength indicator
  if (newPasswordInput) {
    newPasswordInput.addEventListener("input", function () {
      const password = this.value;
      const strengthBar = document.querySelector(
        "#newPasswordStrength .strength-bar"
      );
      const passwordMatchMessage = document.getElementById(
        "passwordMatchMessage"
      );
      const confirmPassword = confirmPasswordInput.value;

      // Reset classes
      strengthBar.className = "strength-bar";

      if (password.length === 0) {
        strengthBar.style.width = "0%";
        return;
      }

      let strength = 0;
      if (password.length >= 8) strength++;
      if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
      if (password.match(/\d/)) strength++;
      if (password.match(/[^a-zA-Z\d]/)) strength++;

      strengthBar.classList.add(
        strength === 1
          ? "strength-weak"
          : strength === 2
          ? "strength-medium"
          : strength === 3
          ? "strength-good"
          : "strength-strong"
      );

      // Check password match
      if (confirmPassword) {
        checkPasswordMatch();
      }
    });
  }

  // Check password match
  function checkPasswordMatch() {
    const password = newPasswordInput.value;
    const confirmPassword = confirmPasswordInput.value;
    const passwordMatchMessage = document.getElementById(
      "passwordMatchMessage"
    );

    if (!passwordMatchMessage) return;

    if (confirmPassword === "") {
      passwordMatchMessage.textContent = "";
      passwordMatchMessage.className = "password-match";
      return;
    }

    if (password === confirmPassword) {
      passwordMatchMessage.textContent = "✓ Passwords match";
      passwordMatchMessage.className = "password-match match";
    } else {
      passwordMatchMessage.textContent = "✗ Passwords do not match";
      passwordMatchMessage.className = "password-match mismatch";
    }
  }

  // Confirm password input event
  if (confirmPasswordInput) {
    confirmPasswordInput.addEventListener("input", checkPasswordMatch);
  }

  // Form submission
  if (passwordResetForm) {
    passwordResetForm.addEventListener("submit", function (e) {
      e.preventDefault();

      const newPassword = newPasswordInput.value;
      const confirmPassword = confirmPasswordInput.value;

      // Validation
      if (!newPassword || !confirmPassword) {
        alert("Please fill in all password fields");
        return;
      }

      if (newPassword !== confirmPassword) {
        alert("Passwords do not match");
        return;
      }

      if (newPassword.length < 8) {
        alert("Password must be at least 8 characters long");
        return;
      }

      // Show loading state
      const originalText = resetPasswordButton.innerHTML;
      resetPasswordButton.innerHTML = "Resetting...";
      resetPasswordButton.disabled = true;

      // Simulate password reset process
      setTimeout(function () {
        // Show success message
        successMessage.style.display = "block";
        passwordResetForm.style.display = "none";

        // Reset button
        resetPasswordButton.innerHTML = originalText;
        resetPasswordButton.disabled = false;

        // Redirect to login page after success
        setTimeout(function () {
          window.location.href = "login.html";
        }, 2000);
      }, 2000);
    });
  }
});

//eye icon
document.addEventListener("DOMContentLoaded", function () {
  const togglePassword = document.getElementById("togglePassword");
  const passwordInput = document.getElementById("password");

  if (togglePassword && passwordInput) {
    togglePassword.addEventListener("click", function () {
      const type =
        passwordInput.getAttribute("type") === "password" ? "text" : "password";
      passwordInput.setAttribute("type", type);

      const eyeIcon = this.querySelector("i");
      if (type === "text") {
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
      } else {
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
      }
    });
  } else {
    console.log("Elements not found:", {
      togglePassword: !!togglePassword,
      passwordInput: !!passwordInput,
    });
  }
});

//faq page
document.addEventListener("DOMContentLoaded", function () {
  // Tab functionality
  const tabBtns = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content");

  tabBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      const tabId = this.getAttribute("data-tab");

      // Remove active class from all tabs and contents
      tabBtns.forEach((b) => b.classList.remove("active"));
      tabContents.forEach((c) => c.classList.remove("active"));

      // Add active class to current tab and content
      this.classList.add("active");
      document.getElementById(`${tabId}-tab`).classList.add("active");
    });
  });

  // FAQ accordion functionality
  const faqQuestions = document.querySelectorAll(".faq-question");

  faqQuestions.forEach((question) => {
    question.addEventListener("click", function () {
      const answer = this.nextElementSibling;
      const icon = this.querySelector(".faq-icon i");

      // Toggle active class
      answer.classList.toggle("active");

      // Rotate icon
      if (answer.classList.contains("active")) {
        icon.style.transform = "rotate(180deg)";
      } else {
        icon.style.transform = "rotate(0deg)";
      }

      // Close other open FAQs in the same tab
      const currentTab = this.closest(".tab-content");
      const otherAnswers = currentTab.querySelectorAll(".faq-answer");
      const otherIcons = currentTab.querySelectorAll(".faq-icon i");

      otherAnswers.forEach((otherAnswer) => {
        if (
          otherAnswer !== answer &&
          otherAnswer.classList.contains("active")
        ) {
          otherAnswer.classList.remove("active");
        }
      });

      otherIcons.forEach((otherIcon) => {
        if (
          otherIcon !== icon &&
          otherIcon.style.transform === "rotate(180deg)"
        ) {
          otherIcon.style.transform = "rotate(0deg)";
        }
      });
    });
  });
});

//user dropdown
document.querySelector('.user-icon').addEventListener('click', function(e) {
  e.preventDefault();
  document.querySelector('.user-dropdown').classList.toggle('active');
});

// Optional: close dropdown when clicking outside
document.addEventListener('click', function(e) {
  const dropdown = document.querySelector('.user-dropdown');
  if (!dropdown.contains(e.target)) {
    dropdown.classList.remove('active');
  }
});














document.addEventListener("click", function(e) {
    const userDrop = document.querySelector(".mobile-user-dropdown");

    // USER DROPDOWN TOGGLE
    if (userDrop && userDrop.contains(e.target)) {
        const menu = userDrop.querySelector(".mobile-user-menu");
        menu.style.display = (menu.style.display === "block") ? "none" : "block";
        e.stopPropagation(); // <-- IMPORTANT (prevents close immediately)
    } else {
        // close when clicking outside
        const menu = document.querySelector(".mobile-user-menu");
        if (menu) menu.style.display = "none";
    }

    // MOBILE SEARCH TRIGGER
    if (e.target.closest(".mobile-icon-item.search-btn")) {
        document.querySelector(".search-box-btn").click();
    }
});





