jQuery(document).ready(function ($) {

  $(window).on({

    scroll: function () {

      if ($(window).scrollTop() > 3) {

        $('body').addClass('scrolled');

      } else {

        $('body').removeClass('scrolled');

      }

    }

  });

});