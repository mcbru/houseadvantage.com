/*
 * Form Handler
 */

$(function() {

  var scrollTarget = $('.scroll-target');
  var form = $('#contact-form');
  var formMessages = $('#form-messages');

  // function getURLParameter() {
  //   var vars = {};
  //   var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,
  //   function(m,key,value) {
  //     vars[key] = value;
  //   });
  //   return vars;
  // }
  // function getURLParameter(name) {
  //   return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
  // }
  function getResult() {
    var url = window.location.toString();
    var result = url.substring(url.indexOf('#'));
    // var result = getURLParameter()["success_location"];
    console.log(result);
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
    // } else {
    //   // Make sure that the formMessages div has the 'error' class.
    //   $(formMessages).removeClass('success');
    //   $(formMessages).addClass('alert');
    //   $(formMessages).css("display", "block");
    //
    //   $(formMessages).text('An error occured and your message could not be sent. Please try again.');
    // }
    // $('html, body').animate({
    //   scrollTop: $(hash).offset().top
    // }, 2000);
    // $(hash).fadeIn();
    // $(hash).siblings("div").fadeOut();

  // function getURLParameter(name) {
  //   return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
  // }
  //
  // $(document).bind("submit", function(e) {
  //   var result = getURLParameter('success_location');
  //   console.log(result);
  //   if (result == 'success') {
  //     // Make sure the formMessages div has the 'success' class
  //     $(formMessages).removeClass('alert');
  //     $(formMessages).addClass('success');
  //     $(formMessages).css("display", "block");
  //
  //     // Set the message text
  //     $(formMessages).text('Success');
  //
  //     // Clear the form
  //     $('#contact_name').val('');
  //     $('#contact_email').val('');
  //     $('#contact_subject').val('');
  //     $('#contact_message').val('');
  //   } else if (result == 'failure') {
  //     // Make sure that the formMessages div has the 'error' class.
  //     $(formMessages).removeClass('success');
  //     $(formMessages).addClass('alert');
  //     $(formMessages).css("display", "block");
  //
  //     $(formMessages).text('An error occured and your message could not be sent. Please try again.');
  //   }
  // });


  // $(document).bind("submit", function(e) {
  //   e.preventDefault();
  //   console.log("submit intercepted");
  // }).bind("formvalid.zf.abide", function(e,frm) {
  //   console.log("Form id "+frm.attr('id')+" is valid");
  // // $(form).submit(function(event) {
  //   // Stop the browser from submitting the form
  //   // console.log('form submitted');
  //   // event.preventDefault();
  //
  //   var formData = $(form).serialize();
  //
  //   // Submit the form using AJAX
  //   $.ajax({
  //     type: 'POST',
  //     url: $(form).attr('action'),
  //     data: formData
  //   }).done(function(response) {
  //     // Make sure the formMessages div has the 'success' class
  //     $(formMessages).removeClass('alert');
  //     $(formMessages).addClass('success');
  //     $(formMessages).css("display", "block");
  //
  //     // Set the message text
  //     $(formMessages).text(response);
  //
  //     // Clear the form
  //     $('#contact_name').val('');
  //     $('#contact_email').val('');
  //     $('#contact_subject').val('');
  //     $('#contact_message').val('');
  //   }).fail(function(data) {
  //     // Make sure that the formMessages div has the 'error' class.
  //     $(formMessages).removeClass('success');
  //     $(formMessages).addClass('alert');
  //     $(formMessages).css("display", "block");
  //
  //     // Set the message text.
  //     if (data.responseText !== '') {
  //         $(formMessages).text(data.responseText);
  //     } else {
  //       $(formMessages).text('An error occured and your message could not be sent. Please try again.');
  //     }
  //   });
  // });
});
