$(document).ready(function () {
  $(document).on('click', function () {
    $('.collapse').collapse('hide');
  });
  jQuery("#product-slider").owlCarousel({
    loop: true,
    items: 3,
    itemsDesktop: [1000, 3],
    itemsDesktopSmall: [979, 2],
    itemsTablet: [768, 2],
    itemsMobile: [650, 1],
    margin: 10,
    nav: true,
    autoPlay: false,
    dots: false,
    autoHeight: false,
  });

  function initMap() {
    var options = {
      zoom: 8,
      center: {
        lat: 52.1276577,
        lng: 4.6688508
      }
    }
    var map = new google.maps.Map(document.getElementById('map'), options);

  }

});