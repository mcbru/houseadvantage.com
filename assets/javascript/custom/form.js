/*
 * AJAX Form Handler
 */

$(function() {

  var form = $('#contact-form');
  var formMessages = $('#form-messages');

  $(document).bind("submit", function(e) {
    e.preventDefault();
    console.log("submit intercepted");
  }).bind("formvalid.zf.abide", function(e,frm) {
    console.log("Form id "+frm.attr('id')+" is valid");
  // $(form).submit(function(event) {
    // Stop the browser from submitting the form
    // console.log('form submitted');
    // event.preventDefault();

    var formData = $(form).serialize();

    // Submit the form using AJAX
    $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData
    }).done(function(response) {
      // Make sure the formMessages div has the 'success' class
      $(formMessages).removeClass('alert');
      $(formMessages).addClass('success');
      $(formMessages).css("display", "block");

      // Set the message text
      $(formMessages).text(response);

      // Clear the form
      $('#contact_name').val('');
      $('#contact_email').val('');
      $('#contact_subject').val('');
      $('#contact_message').val('');
    }).fail(function(data) {
      // Make sure that the formMessages div has the 'error' class.
      $(formMessages).removeClass('success');
      $(formMessages).addClass('alert');
      $(formMessages).css("display", "block");

      // Set the message text.
      if (data.responseText !== '') {
          $(formMessages).text(data.responseText);
      } else {
        $(formMessages).text('An error occured and your message could not be sent. Please try again.');
      }
    });
  });
});
