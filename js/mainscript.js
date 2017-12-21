/* This is for the abouts */
$(document).ready(function(){
    $(".about-clk").click(function(){
        $("#abt-me, .image").slideToggle("fast");
    });
});
$(document).ready(function(){
    $(".about-clk2").click(function(){
        $("#abt-site").slideToggle("fast");
    });
});
$(document).ready(function(){
    $(".about-clk3").click(function(){
        $("#abt-pc").slideToggle("fast");
    });
});

// validator. we use custom message layout with a CSS arrow
$(document).ready(function(){
$("#myform").validator({
    message: '<div><em/></div>',
    position: 'top left',
    offset: [3, 40]
    });
 
    // dateinput and it's configuration
    $(":date").dateinput({ trigger: true, format: 'dddd mmm yyyy', offset: [2, 0] });
 
    // rangeinput with default configuration
    $(":range").rangeinput();
 
    // overlay with masking. when overlay is loaded or closed we hide error messages if needed
    $("#see").overlay({mask: '#999', fixed: false}).bind("onBeforeClose", function(e) {
    $(".error").hide();
    });
 
    // tabs. possible error messages are visible only on the first tab pane
    $("#navi").tabs(".pane").bind("onClick", function(e, index) {
    $(".error").toggle(!index);
    });
  
});
    
/* Youtube API */
  // Load the IFrame Player API code asynchronously.
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: 'M7lc1UVf-VE',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }

// This is for  the resonsive hamburger menu
$(document).ready(function(){
  $(".hamburger-icon").click(function(){
    $("nav").slideToggle("fast");
  });
});

// Default Javascript
function alertFunction(){
  alert("This section is under construction. Wag makulet bes");
}

