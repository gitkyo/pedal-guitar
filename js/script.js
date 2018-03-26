  $(document).ready(function () {
    $("body").queryLoader2({
        barColor: "#fff",
        backgroundColor: "#252525",
        percentage: true,
        barHeight: 1,
        completeAnimation: "grow",
        minimumTime: 100
    });
	
	
	
	
    $(function(){

          $('#slider-id').codaSlider({
            autoSlide:false,
            autoHeight:true,
			firstPanelToLoad:1,
			dynamicTabsAlign:"left"
			
          });
    });

    var tailleEcran = screen.width;
    window.scroll(tailleEcran/4,0);
	/*
	$(function(){
    // Vertical
       /* $("#disto img").hover(function(){
            $("img", this).stop().animate({top:"-130px"},{queue:false,duration:200});
        }, function() {
            $("img", this).stop().animate({top:"0px"},{queue:false,duration:200});
        });
        // Horizontal
        $("#disto").hover(function(){

            $("img", this).stop().animate({left:"-402px"},{queue:false,duration:300});
        }, function() {
            $("img", this).stop().animate({left:"0px"},{queue:false,duration:300});
        });
    });
	*/
	
	// Galleria.loadTheme('galleria.classic.min.js');
    // Galleria.run('#galleria');
	

// $("img.a").hover(
// function() {
// $(this).stop().animate({"opacity": "0"}, "slow");
// },
// function() {
// $(this).stop().animate({"opacity": "1"}, "slow");
// });

});







  

	
	
	

/*
function goto(id, t){
    //animate to the div id.
    $(".contentbox-wrapper").animate({"left": -($(id).position().left)}, 1280);
 
    // remove "active" class from all links inside #nav
    $('#nav a').removeClass('active');
 
    // add active class to the current link
    $(t).addClass('active');
}*/