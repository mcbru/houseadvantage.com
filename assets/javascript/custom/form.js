/*
 * Form Handler
 */

$(function() {

  var scrollTarget = $('.scroll-target');
  var form = $('#contact-form');
  var formMessages = $('#form-messages');

  function getResult() {
    var url = window.location.toString();
    var result = url.substring(url.indexOf('#'));
    if (result == '#success') {
      $('html, body').animate({
        scrollTop: $(scrollTarget).offset().top
      }, 1000);
      // Make sure the formMessages div has the 'success' class
      $(formMessages).removeClass('alert');
      $(formMessages).addClass('success');
      $(formMessages).css("display", "block");

      // Set the message text
      $(formMessages).text('Thank you! Your message has been received.');
    } else if (result == '#failure') {
      $('html, body').animate({
        scrollTop: $(scrollTarget).offset().top
      }, 1000);
      // Make sure that the formMessages div has the 'error' class.
      $(formMessages).removeClass('success');
      $(formMessages).addClass('alert');
      $(formMessages).css("display", "block");

      $(formMessages).text('An error occured and your message could not be sent. Please try again.');
    }
  }
  getResult();
});
