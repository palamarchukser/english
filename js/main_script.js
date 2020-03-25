//add parameter to url
  function addParameterToURL(param){
    _url = location.protocol + '//' + location.host + location.pathname;
    _url += (_url.split('?')[1] ? '&':'?') + param;
    return _url;
  };
  
$( document ).ready(function() {

   
  $(".next-lesson .btn").click(function(){
    date = $(this).closest('.next-lesson').find('.datepicker').val();
    window.history.pushState("", "", addParameterToURL('date='+date+''));
    //window.location.reload();
  });


  if(navigator.userAgent.indexOf('MSIE')!==-1 || navigator.appVersion.indexOf('Trident/') > -1){
    $('.image-container').each(function () {
      var $container = $(this),
          imgUrl = $container.find('img').attr('data-src');
      if (imgUrl) {
        $container
          .css('backgroundImage', 'url(' + imgUrl + ')')
          .addClass('compat-object-fit');
      }  
    });
  }

 
  //navigation
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
    $('.mob-nav').toggleClass("is-active");
  });

  //esc close modal
  $(document).keydown(function(event) { 
    if (event.keyCode == 27) { 
      $('.modal').modal('hide');
    }
  });

  //cost elem
  $(".lesson-choose__elem").click(function(){
    $(this).closest('.lesson-choose').find('.lesson-choose__elem').removeClass('active')
    $(this).addClass("active");
  });

  //reviews
  $('.review-content .height-check').each( function () {
    if ( $(this).height() > 190 ) {
      $(this).closest('.review-description').find('.review-content').addClass('w-more');
    } else {
      $(this).closest('.review-description').find('.review-content').removeClass('w-more');
    }
  });
  $('.review-description .link').click( function () {
    $(this).closest('.review-description').find('.review-content').css('max-height','100%');
    $(this).hide();
  });

  //teacher block
  $('.teacher-elem').hover( function () {
    $(this).css('margin-bottom', '-' + $(this).closest('.teacher-elem').find('.hidden-block').outerHeight() + 'px');
    $(this).closest('[class*=col-]').addClass('hovered');
  });
  $('.teacher-elem').mouseleave( function () {
    $(this).css('margin-bottom', '25px');
    $(this).closest('[class*=col-]').removeClass('hovered');
  });

  /*$('.t-play').click( function () {
    $(this).closest('.teacher-img').find('.videoframe').addClass('played')[0].src += "?autoplay=1";
    $(this).hide();
    ev.preventDefault();
  })*/
  $('.t-play').click( function () {
    $('.t-audio').trigger('pause');
    $(this).closest('.teacher-elem').find('.t-audio').trigger('play');
    if ( $(this).hasClass('played') ) {
      $(this).closest('.teacher-elem').find('.t-audio').trigger('pause');
      $(this).removeClass('played');
    } else {
      $(this).closest('.teacher-elem').find('.t-audio').trigger('play');
      $(this).addClass('played');
    }
  });
  $('.modal').on('hidden.bs.modal', function () {
    $('.t-audio').trigger('pause');
  })

  //step modal
  $('.freeLesson .btn.btn-orange').click( function() {
    $(this).closest('.modal').modal('hide');
    $('.graphModal').modal('show');
  });
  $('.modal').on('shown.bs.modal', function() {
    $('body').addClass('modal-open');
  }) 

  //append arrow
  if ( $(window).width() < 991 ) {
    $('.call-wrapper__select').append('<span class="phone-arrow"><img src="img/select-arr-down.png" alt=""></span>');
  }

  $( window ).resize(function() {
    if ($('.phone-arrow').length == 0 && $(window).width() < 991)  {
      $('.call-wrapper__select').append('<span class="phone-arrow"><img src="img/select-arr-down.png" alt=""></span>');
    }
    if ($(window).width() > 991) {
      $('.phone-arrow').remove();
    };
  });
  $('.phone-arrow').click( function() {
    $(this).closest('.call-wrapper__select').find('ul').slideToggle();
    $(this).toggleClass('is-active');
  })

  //dropdowns
  $('.w-dropdown').click( function() {
    $(this).find('.dropdown-menu').toggleClass('is-active');
    $(this).toggleClass('opened');
  })

  //student account
  $('.lessons .link').click( function () {
    $(this).closest('.history').find('.lessons-inner').css('height','auto');
    $(this).text('Показать меньше');
    if ( $('.lessons-inner').hasClass('opened') ) {
      $(this).closest('.history').find('.lessons-inner').css('height','');
      $(this).closest('.lessons').find('.lessons-inner').removeClass('opened');
      $(this).text('Показать ещё');
    } else {
      $(this).closest('.lessons').find('.lessons-inner').addClass('opened');
    }
  });
  $('.edit').click( function () {
    $('.edit-content').show();
  });
  $('.edit-content .cancel').click( function () {
    $('.edit-content').hide();
  });

  $('.level select').change( function () {
    $(this).closest('.level').find('.btn').css('opacity','1').css('visibility','visible');
  });

  //save btn 
  $('.notification .check-label').click( function () {
    $(this).closest('form').find('.btn').css('display','flex');
  });
  $('.select-label select').change( function () {
    $(this).closest('form').find('.btn').css('display','flex');
  });

  $('.comm-link').click( function () {
    $(this).closest('div').find('.group-comment').slideToggle();
  });

  $('.mobile-tel-ico').click( function () {
    $('.phones').slideToggle();
    return false;
  });

  //sticky nav
  if( $(window).width() <= 992 ) {
    var offset = 73;
  } else {
    var offset = 123;
  }
  $(window).bind('scroll', function () {
    if ($(window).scrollTop() > offset) {
      $('header').addClass('sticky');
      $('body').addClass('is-sticky');
    } else {
      $('header').removeClass('sticky');
      $('body').removeClass('is-sticky');
    }
  });

  //clear time
  $('.clear-time').click( function () {
    $(this).closest('tr').find('input').val('');
  });

  //mask
  function verifyInput(txt, mask) {
    var res = '';
    for (var i = 0; i < txt.length; i++) {
        var char = /*parseInt(*/ txt[i] /*)*/;
        if (mask.indexOf(char) > -1 /*&& res.indexOf(char) === -1*/)
            res += char;
    }
    return res;
  }
  $("input[type='tel'").keyup(function() {
    this.value=verifyInput(this.value, ["+","0","1","2","3","4","5","6","7","8","9"])
  });

  $(".birth").keyup(function() {
    var id = $(this).val();
    console.log(id.substr(2,4));
    if ( +id.substr(id.length - 4) < 1950 || +id.substr(id.length - 4) > 2020 ) {
      $(this).val(' ');
    } 
    if ( +id.substr(0,2) > 32 ) {
      $(this).val(' ');
    } 
    if ( +id.substr(2,4) > 13 ) {
      $(this).val(' ');
    } 
  });

 
  //$('.birth').inputmask({"mask": "99 99 9999"});
  $(".birth").inputmask("99 99 9999",{ "placeholder": "__ __ ____" });
  $('.maskphone').inputmask({"mask": "+7 (999) 999 99 99"});
  $('.datemask').inputmask({"mask": "99.99.9999"});
  $('.timemask').inputmask({"mask": "99:99"});
  if ( $("input[type=tel]").length > 0 ) {
    $("input[type=tel]").intlTelInput();
  }

  //copy link
  $('.copy-link').click( function () {
    $(this).addClass('copied');
    setTimeout(function(){ 
      $('.copy-link').removeClass('copied');
    }, 3000);
  });

  //styler
  $('.styler').styler();
  $('.modal').on('shown.bs.modal', function () {
    $('.rateit').rateit('value', null); 
  })

  //share
  if ( $(".anu").length > 0 ) {
    $(".anu").ayoshare({
      counter: true,
      button: {
        google: false,
        stumbleupon: false,
        facebook: true,
        linkedin: false,
        pinterest: false,
        bufferapp: false,
        reddit: false,
        vk: true,
        pocket: false,
        twitter: true,
        digg: false,
        email: false,
        whatsapp: false,
        telegram: false,
        viber: false,
        line: false,
        bbm: false,
        sms: false
      }
    });
  }

  //sliders
  function initSlickSlider (slider) {
    slider.each( function() {
      $(this).slick({
        nextArrow: '',
        prevArrow: '',
        prevArrow: '<button class="slick-prev slick-arrow"><img src="img/sl-arrow.png" alt=""></button>',
        nextArrow: '<button class="slick-next slick-arrow"><img src="img/sl-arrow.png" alt=""></button>',
        slidesToShow: +$(this).attr('data-items-xl'),
        slidesToScroll: +$(this).attr('data-items-xl'),
        responsive: [
          {
            breakpoint: 1141,
            settings: {
              slidesToShow: +$(this).attr('data-items-xl'),
              slidesToScroll: +$(this).attr('data-items-xl'),
            }
          },
          {
            breakpoint: 1140,
            settings: {
              slidesToShow: +$(this).attr('data-items-lg'),
              slidesToScroll: +$(this).attr('data-items-lg'),
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: +$(this).attr('data-items-md'),             
              slidesToScroll: +$(this).attr('data-items-md'),
              arrows: false,
              dots: true
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: +$(this).attr('data-items-sm'),
              slidesToScroll: +$(this).attr('data-items-sm'),
              arrows: false,
              dots: true
            }
          }
        ]
      });
    })
  }
  initSlickSlider($('.carousel'));
 if ($(window).width() < 992) {
    $('.w-slider .row').slick({
      infinite: false,
      nextArrow: '',
      prevArrow: '',
      dots: true,
      slidesToShow: 1,
      adaptiveHeight: true,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,             
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
  } else {
    $('.w-slider .row').filter('.slick-initialized').slick('unslick');
  }
  //upload file
  if ( $("#fileuploader").length > 0 ) {
    $("#fileuploader").uploadFile({
      fileName:"myfile"
    });
  }

  

});

window.onresize = function() {
  var screen = $(this);
  if (screen.width() < 992) {
    $('.w-slider .row').slick({
      infinite: false,
      nextArrow: '',
      prevArrow: '',
      dots: true,
      adaptiveHeight: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,             
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
  } else {
    $('.w-slider .row').filter('.slick-initialized').slick('unslick');
  }
}

//copy link on click
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).val()).select();
  document.execCommand("copy");
  $temp.remove();
}


var loadFlagLazy1 = 0;
$(window).scroll(function() {
    if ($(this).scrollTop() >= 500) { // this refers to window
        if (loadFlagLazy1 == 0){
          $('.js-lazy-scroll').each(function(){
            $(this).attr('src', $(this).attr('data-src'));
          })
          loadFlagLazy1++;
        } 
    }
});


