/**
 * JS for CiviCRM - Newsletter Subscription Module
 */

(function ($) {
  
  $( document ).ready(function() {
    $('#civi-subscribe-form').on('submit', function(e){
      let email = $(this).find('#civi-subscribe-email');
      if (email.val()) {
        $(this).find('#civi-subscribe-email-encoded').val(btoa(email.val()));
      }
      else {
        e.preventDefault();
      }
    });
  });
  
})(jQuery);