/*
 * Run Numbers Function
 */

$(function(){
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
        number: 100000,
        'font-size': '70px',
        easing: 'easeOutExpo',
        numberStep: comma_separator_number_step
      },
      6000
    );
    setTimeout(function() {
      $('#number-hotels').animateNumber(
      {
        number: 50000,
        'font-size': '70px',
        easing: 'easeOutExpo',
        numberStep: comma_separator_number_step
      },
      6000
    );
    }, 500);
    setTimeout(function() {
      $('#number-food').animateNumber(
      {
        number: 300,
        'font-size': '70px',
        easing: 'easeOutExpo',
        numberStep: comma_separator_number_step
      },
      6000
    );
    }, 1000);
      return false;
  }
});
