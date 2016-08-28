var $     = require('jquery');
var slick = require('slick-carousel');

module.exports = (function() {

  $('.reviews-slider').slick({
    arrows: false,
    draggable: false,
    dots: true,
    customPaging : function(slider, i) {
      return '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve"><g><g><path d="M0,246c0,68,24,126,72,174s106,72,174,72s126-24,174-72s72-106,72-174s-24-126-72-174S314,0,246,0S120,24,72,72S0,178,0,246z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>';
    }
  });

})();