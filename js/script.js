
// This script is for the loader
document.onreadystatechange = function () {
    var state = document.readyState
    if (state == 'interactive') {

    } else if (state == 'complete') {
        setTimeout(function(){
          
           document.getElementById('load').style.display="none";
           document.getElementById('katawan').style.animation="fadein 0.5s ease 1";
           
        },1000);
    }
  }

  setTimeout(function(){
    document.getElementById("video").play();
    console.log("play");
}, 2000);


$(document).ready(function(){
    
    console.log('This is a test');
    $(".hamburger").click(function(){
        console.log('Clicked');
        $(".brand-icon").css("background", "url('img/brand-small-inv.png')");
        $(".brandingtxt").css('color', '#eee');
        $(".brandingtxt").css('animation', 'fade 0.3s ease 1');
    });
    $(".closebtn").click(function(){
        $(".brand-icon").css("background", "url('img/brand-small.png')");
        $(".brandingtxt").css('animation', 'fade-out 0.3s ease 1');
        $(".brandingtxt").css('color', '#181818');
    });
});


function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementsByClassName("main").style.display = "none!important";
    document.getElementById("footer").style.display = "none";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
var document_width = window.innerWidth;
if(document_width >= 768){
    $(document).ready(function(){
        var scrollTop = 0;
        $(window).scroll(function(){
          scrollTop = $(window).scrollTop();
           $('.counter').html(scrollTop);
          var vh = window.innerHeight;
          console.log('here is vh' );
          console.log(vh);
          var half = vh / 2;
    
          
          if (scrollTop >= half) {
            $(".main-header").addClass('scrolled-nav')
            $(".brand-icon").css('transition', 'all 0.3s ease');
            $(".brand-icon").css('background', "url('./img/brand-small.png')")
            $(".brand-icon").css('min-width', '25px');
            $(".brand-icon").css('min-height', '25px');
            $(".brand-icon").css('margin-top', '13px');
            $(".brandingtxt").css('transition', 'all 0.3s ease');
            $(".brandingtxt").css('opacity', '0');
            $(".tagline").css('transition', 'all 0.3s ease');
            $(".tagline").css('opacity', '0');
            $(".nav-ul").addClass('scrolled-ul');
            // $(".banner").css('transition', 'all 1s ease');
            // $(".banner").css('opacity', '0');
            
          } else if (scrollTop < vh) {
         
            // $(".banner").css('transition', 'all 1s ease');
            // $(".banner").css('opacity', '1');
            $(".brandingtxt").css('transition', 'all 0.3s ease');
            $(".brandingtxt").css('opacity', '1');
            $(".tagline").css('transition', 'all 0.3s ease');
            $(".tagline").css('opacity', '1');
            $(".brand-icon").css('transition', 'all 0.3s ease');
            $(".brand-icon").css('background', "url('./img/brand-md.png')")
            $(".brand-icon").css('min-width', '50px');
            $(".brand-icon").css('min-height', '50px');
            $(".brand-icon").css('margin-top', '25px');
            $('.main-header').removeClass('scrolled-nav');
            $(".nav-ul").removeClass('scrolled-ul');
          }
          
        //   console.log(scrollTop);
        }); 
        
      });
}
else{
    console.log('Mobile');
}



// SET TIMEOUT ON VIDEO AUTOPLAY

//DASHBOARD SCRIPTS