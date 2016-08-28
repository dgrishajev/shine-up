var $ = require('jquery');

module.exports = (function() {

  var top = null;

  $('a[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('body').hasClass('logged-in') ? top = 32 : top = 0;
        $('html, body').animate({
          scrollTop: target.offset().top - top
        }, 1000);
        return false;
      }
    }
  });

  console.log('dsfdsf');

})();