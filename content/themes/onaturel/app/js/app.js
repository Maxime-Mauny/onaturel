import 'bootstrap';

var app = {
  init: function () {
    console.log('init');

    bulmaCarousel.attach('#carousel-demo', {
      slidesToScroll: 1,
      slidesToShow: 6,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2500,
      pauseOnHover: true,
      breakpoints: [
        { changePoint: 480, slidesToShow: 1, slidesToScroll: 1 },
        { changePoint: 591, slidesToShow: 2, slidesToScroll: 1 },
        { changePoint: 604, slidesToShow: 3, slidesToScroll: 1 },
        { changePoint: 770, slidesToShow: 3, slidesToScroll: 1 },
        { changePoint: 950, slidesToShow: 4, slidesToScroll: 1 }, 
        { changePoint: 1024, slidesToShow: 4, slidesToScroll: 1 },       
      ]
    });

  }



};

 

$(app.init);