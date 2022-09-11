$(function() {
    $('.js-click').on('click', function() {
        $('.dropdown').slideToggle();
    });

    $('.js-slick-slide').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });

      $('.single-item').slick();
      
      $('.list-item').slick();
      $('.list-image').slick();
      $('.article').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
      });
});