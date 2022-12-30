// Use the setTimeout function to specify how long the loading animation should be displayed
setTimeout(function() {
    // Use the fadeOut method provided by jQuery to fade out the loading animation over a period of 1 second
    $("#loading-animation").fadeOut(1000, function() {
      // When the fadeOut animation is complete, show the content
      $("#main-content").fadeIn(1000);
    });
  }, 3000);