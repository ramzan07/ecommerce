/////////////////////// ready
$(document).ready(function() {

  // Countdown.
  $(".deal-countdown-timer").each(function() {
    var g = $(this).children(".deal-time-diff").text(),
        h = $(this).children(".deal-countdown"),
        daysTxt = $(this).find(".deal-countdown-days"),
        hoursTxt = $(this).find(".deal-countdown-hours"),
        minutesTxt = $(this).find(".deal-countdown-minutes"),
        secondsTxt = $(this).find(".deal-countdown-seconds"),
        i = (new Date).getTime() + 1e3 * g;
    setInterval(function() {
        var a = (new Date).getTime(),
            g = (i - a) / 1e3;
        days = parseInt(g / 86400),
        g %= 86400,
        hours = parseInt(g / 3600),
        g %= 3600,
        minutes = parseInt(g / 60),
        seconds = parseInt(g % 60);

        daysTxt.html(days);
        hoursTxt.html(hours);
        minutesTxt.html(minutes);
        secondsTxt.html(seconds);
    }, 1e3);
  });




  // Accordion.
  var o = $( ".accordion" );
  if (o.length > 0) {
    o.accordion({
      heightStyle: "content"
    });
  };

  /*----------------------------------------------------*/
  // Superfish menu.
  /*----------------------------------------------------*/
  $('.sf-menu').superfish();

  /*----------------------------------------------------*/
  // Modal.
  /*----------------------------------------------------*/
  $('#modalQuickView').on('shown.bs.modal', function (event) {

    /////// flexslider
    var o = $('#carousel');
    if (o.length > 0) {
      o.flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 95,
        itemMargin: 20,
        prevText: '<i class="fa fa-angle-left"></i>',
        nextText: '<i class="fa fa-angle-right"></i>',
        asNavFor: '#gslider'
      });
    };
    var o = $('#gslider');
    if (o.length > 0) {
      o.flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        prevText: '<i class="fa fa-angle-left"></i>',
        nextText: '<i class="fa fa-angle-right"></i>',
        sync: "#carousel",
        start: function(slider){
          // $('body').removeClass('loading');
        }
      });
    };

  });

  $('.product .product-view').click(function(e){
    e.preventDefault();
    $('#modalQuickView').modal('show');
    //
  });

  /*----------------------------------------------------*/
  // Quantity.
  /*----------------------------------------------------*/
  $(".quantity-button").on("click", function() {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
     // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }

    $button.parent().find("input").val(newVal);

  });



  /*----------------------------------------------------*/
  // Owl Carousel.
  /*----------------------------------------------------*/
  $('.owl-carousel-normal').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: false,
    autoplay: false,
    autoplayTimeout: 5000,
    navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
    responsive:{
      0:{
          items:1
      },
      480:{
          items:2
      },
      640:{
          items:3
      },
      768:{
          items:2
      },
      992:{
          items:3
      },
      1230:{
          items:4
      }
    }
  });

  $('.owl-carousel-thin').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots: false,
    autoplay: false,
    autoplayTimeout: 5000,
    navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
    responsive:{
      0:{
          items:1
      }
    }
  });

  $('.owl-carousel-wide').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: false,
    autoplay: false,
    autoplayTimeout: 5000,
    navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
    responsive:{
      0:{
          items:1
      },
      480:{
          items:2
      },
      640:{
          items:3
      },
      768:{
          items:3
      },
      992:{
          items:4
      },
      1230:{
          items:5
      }
    }
  });

  // Slider range.
  $( "#slider-range" ).slider({
    range: true,
    min: 100,
    max: 1000,
    values: [ 100, 620 ],
    slide: function( event, ui ) {
      $( "#amount" ).val( "$" + ui.values[ 0 ]);
      $( "#amount2" ).val( "$" + ui.values[ 1 ] );
    }
  });
  $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) );
  $( "#amount2" ).val( "$" + $( "#slider-range" ).slider( "values", 1 ) );

  // Tabs.
  $('.tabs a').click(function(e){
    e.preventDefault();
    var $this = $(this),
        tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
        others = $this.closest('li').siblings(),
        target = $this.attr('href');

    others.removeClass('active');
    $this.closest('li').addClass('active');
    $(tabgroup).children('div').hide();
    $(target).show();
  });
  $('.tabs .active a').click();





  /*----------------------------------------------------*/
  // carouFredSel.
  /*----------------------------------------------------*/
  var o = $('#clients .carousel.main ul');
  if (o.length > 0) {
    o.carouFredSel({
      auto: {
        timeoutDuration: 8000
      },
      responsive: true,
      prev: '.clients_prev',
      next: '.clients_next',
      width: '100%',
      scroll: {
        // fx : "crossfade",
        items: 1,
        duration: 1000,
        easing: "easeOutExpo"
      },
      items: {
            width: '600',
        height: 'variable', //  optionally resize item-height
        visible: {
          min: 1,
          max: 2
        }
      },
      mousewheel: false,
      swipe: {
        onMouse: true,
        onTouch: true
        }
    });
  };




  $(window).bind("resize",updateSizes_vat).bind("load",updateSizes_vat);
  function updateSizes_vat(){
    $('#clients .carousel.main ul').trigger("updateSizes");

  }
  updateSizes_vat();


  /*----------------------------------------------------*/
  // Appear
  /*----------------------------------------------------*/
  $('.animated').appear(function() {
    // console.log("111111111111");
      var elem = $(this);
      var animation = elem.data('animation');
      if ( !elem.hasClass('visible') ) {
        var animationDelay = elem.data('animation-delay');
        if ( animationDelay ) {
          setTimeout(function(){
              elem.addClass( animation + " visible" );
          }, animationDelay);
        } else {
          elem.addClass( animation + " visible" );
        }
      }
  });

  /*----------------------------------------------------*/
  // Superslides
  /*----------------------------------------------------*/
  var o = $('#slides2');
  if (o.length > 0) {
    o.superslides({
      play: 5000,
      animation: 'fade', // slide
      pagination: true,
      inherit_height_from: '#slides2_wrapper'
    });
  };

  var o = $('#slides3');
  if (o.length > 0) {
    o.superslides({
      play: 5000,
      animation: 'fade', // slide
      pagination: true,
      inherit_height_from: '#slides3_wrapper',
      inherit_width_from: '#slides3_wrapper'
    });
  };

});

/////////////////////// load
$(window).load(function() {

  /*----------------------------------------------------*/
  // modalNewsletter
  /*----------------------------------------------------*/
  if($('body').hasClass('show-newsletter-popup')) {
    $('#modalNewsletter').modal();
  }

  /*----------------------------------------------------*/
  // flexslider
  /*----------------------------------------------------*/


  /////// flexslider
  $('#flexslider').flexslider({
    animation: "fade",
    slideshow: true,
    slideshowSpeed: 7000,
    animationDuration: 600,
    pauseOnAction: true,
    prevText: "",
    nextText: "",
    controlNav: true,
    directionNav: false
  });

  /////// flexslider
  var o = $('#carousel2');
  if (o.length > 0) {
    o.flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 95,
      itemMargin: 20,
      prevText: '<i class="fa fa-angle-left"></i>',
      nextText: '<i class="fa fa-angle-right"></i>',
      asNavFor: '#gslider2'
    });
  };
  var o = $('#gslider2');
  if (o.length > 0) {
    o.flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      prevText: '<i class="fa fa-angle-left"></i>',
      nextText: '<i class="fa fa-angle-right"></i>',
      sync: "#carousel2",
      start: function(slider){
        // $('body').removeClass('loading');
      }
    });
  };







});