$(window).on('load', function() {

  $(".inactive").on("click", function() {
    $(".pop-up").removeClass("left");
  });

  $(".close-msg").on("click", function() {
    $(".pop-up").addClass("left");
  });

});


$(document).ready(function() {
  $('#slideAwayBtn').click(function() {
    $("#landingPage").slideUp('slow')
  })
  document.onkeydown = checkKey;

  function checkKey(e) {
    e = e || window.event;
    if (e.keyCode == '40') {
      $("#landingPage").slideUp('slow')
    } else if (e.keyCode == '38') {
      $("#landingPage").slideDown('slow')
    }
  };
  $('#closeOptions').click(function() {
    $("#landingPage").slideDown('slow')

  })
  // $(window).scroll(function(event) {
  //     $("#landingPage").slideToggle('slow')
  // });
  //Firefox
  $(window).bind('DOMMouseScroll', function(e) {
    if (e.originalEvent.detail > 0) {
      //scroll down
      alert('Down');
    } else {
      //scroll up
      alert('Up');
    }

    //prevent page fom scrolling
    return false;
  });

  //IE, Opera, Safari
  $(window).bind('mousewheel', function(e) {
    if (e.originalEvent.wheelDelta < 0) {
      //scroll down
      $("#landingPage").slideUp('slow')
    } else {
      //scroll up
      $("#landingPage").slideDown('slow')
    }

    //prevent page fom scrolling
    return false;
  });
});
