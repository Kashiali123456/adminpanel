$(document).ready(function(){
$('.client-slide').owlCarousel({
  autoplay: 5000,
  center: true,
  loop: true,
  items : 3,
  smartSpeed: 1000,
  autoplayHoverPause:true,
      responsive : {
            0 : { items : 1  }, // from zero to 800px
            850 : { items : 2  }, // from 600 screen widthto 991 6 items
            1400 : { items : 3 } // from 991 screen width to 1024 8 items
        },
});
//for packages slide
$('.package-slide').each(function(i) {
  var ifMultiple = false;
  var left = true;
  var play = false;
  var playsmall = 5000;
  var loopsmall= true;
  var itemc = 2;
  var centerc = false;
  $thisGallery = $(this);
  if($thisGallery.children('.slide-item').length > 2) {
    ifMultiple = true;
    left = false;
    play=5000;
    itemc = 3;
    centerc = true;
  }
  if($thisGallery.children('.slide-item').length == 1)
  {
    playsmall = false;
    loopsmall = false;
  }
$thisGallery.owlCarousel({
  autoplay: play,
  center: true,
  loop: ifMultiple,
  items : 3,
  smartSpeed: 1000,
  autoplayHoverPause:true,
      responsive : {
            0 : { 
              autoplay: playsmall,
              center: true,
              loop: loopsmall,
            items : 1  
            }, // from zero to 800px
            850 : { 
              autoplay: playsmall,
              center: true,
              loop: loopsmall,
            items : 2  }, // from 600 screen widthto 991 6 items
            1300 : { 
              center: centerc,
            items : itemc } // from 991 screen width to 1024 8 items
            
        },
});
});
});