document.onreadystatechange = function () {
    var state = document.readyState
    if (state == 'interactive') {

    } else if (state == 'complete') {
        setTimeout(function(){
          
           document.getElementById('load').style.display="none";
        
           
        },1000);
    }
  }


  console.log("test");

  $(document).ready(function(){
    $(".profilee").click(function(){
        $(".statbar").toggleClass("slide-down");
        $(".pul").toggleClass("show");
        console.log("clicked");
    });
    $(".mbody").click(function(){
        $(".statbar").removeClass("slide-down");
        $(".pul").removeClass("show");
        console.log("body click");
    })
  });
