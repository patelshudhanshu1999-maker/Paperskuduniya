
(function ($) {

  "use strict";

  // COUNTER NUMBERS
  jQuery('.counter-thumb').appear(function () {
    jQuery('.counter-number').countTo();
  });

  // CUSTOM LINK
  $('.smoothscroll').click(function () {
    var el = $(this).attr('href');
    var elWrapped = $(el);
    var header_height = $('.navbar').height();

    scrollToDiv(elWrapped, header_height);
    return false;

    function scrollToDiv(element, navheight) {
      var offset = element.offset();
      var offsetTop = offset.top;
      var totalScroll = offsetTop - navheight;

      $('body,html').animate({
        scrollTop: totalScroll
      }, 300);
    }
  });

  // FILE INPUT
  $(document).on('change', 'input[type="file"]', function (e) {
    var fileName = e.target.files[0].name;
    // Find the label corresponding to this input
    $("label[for='" + $(this).attr('id') + "']").text(fileName);
  });

  // AJAX Form Submission
  $(document).on('submit', '#volunteer-form', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    var $form = $(this);
    var $messageContainer = $('#form-message');

    $messageContainer.html('<p class="text-info">Sending...</p>');

    $.ajax({
      url: $form.attr('action'),
      type: 'POST',
      data: formData,
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,
      success: function (response) {
        if (response.status === 'success') {
          $messageContainer.html('<p class="text-success">' + response.message + '</p>');
          $form[0].reset();
          // Reset file input label
          $form.find('.input-group-text').text('Upload your CV');
        } else {
          $messageContainer.html('<p class="text-danger">' + response.message + '</p>');
        }
      },
      error: function () {
        $messageContainer.html('<p class="text-danger">An error occurred. Please try again.</p>');
      }
    });
  });

})(window.jQuery);
