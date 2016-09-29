/*
 * Run Numbers Function
 */

$(function(){

  function onScrollInit(items, trigger) {
    items.each(function() {
      var osElement = $(this),
        osAnimationClass = osElement.attr('data-os-animation'),
        osAnimationDelay = osElement.attr('data-os-animation-delay');
        osElement.css({
          '-webkit-animation-delay':  osAnimationDelay,
          '-moz-animation-delay':     osAnimationDelay,
          'animation-delay':          osAnimationDelay
        });

      var osTrigger = (trigger) ? trigger : osElement;
      osTrigger.waypoint(function(){
        $(osElement).addClass('animated').addClass(osAnimationClass);
        console.log(osElement);
      }, {
        // triggerOnce: true,
        // context:"document.body",
        offset: '80%;'
      });
    });
  }

  onScrollInit($('.teammate img'));

  $('.animation-wrapper').waypoint(function(direction) {
    if(direction === 'down') {
      $('.animation-wrapper').addClass('is-animating');
      console.log(this);
    }
  },
  {
    context:"document.body",
    offset: '80%'
  });

// var waypoints = $('#test').waypoint({
//   handler: function(direction) {
//     alert('scrolled!');
//     console.log('Scrolled to waypoint!');
//     numberRun();
//     // notify(this.element.id + ' hit')
//   }
  // var waypoints = $('#test').waypoint(function(direction) {
  //   alert('scrolled!');
  //   // notify(this.element.id + ' hit')
  // });
  $('#stat-animate').waypoint(function() {
    // console.log(this);
    numberRun();
  },
  {
    context:"document.body",
    offset: '50%'
  });
  function numberRun() {
      var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');
      $('#number-games').animateNumber(
      {
        number: 150000,
        // 'font-size': '40px',
        // easing: 'easeOutExpo',
        color: 'white',
        easing: 'easeInQuad',
        numberStep: comma_separator_number_step
      },
      6000
    );
    setTimeout(function() {
      $('#number-hotels').animateNumber(
      {
        number: 70000,
        // 'font-size': '40px',
        color: 'white',
        easing: 'easeOutExpo',
        numberStep: comma_separator_number_step
      },
      6000
    );
    }, 500);
    setTimeout(function() {
      $('#number-food').animateNumber(
      {
        number: 600,
        // 'font-size': '40px',
        color: 'white',
        easing: 'easeOutExpo',
        numberStep: comma_separator_number_step
      },
      6000
    );
    }, 1000);
    setTimeout(function() {
      $('#number-profiles').animateNumber(
      {
        number: 100000000,
        // 'font-size': '40px',
        // easing: 'easeOutExpo',
        color: 'white',
        easing: 'easeInExpo',
        numberStep: comma_separator_number_step
      },
      6000
    );
    }, 500);
      return false;
  }

});
