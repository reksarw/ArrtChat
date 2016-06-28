var slider;
var images = [
"common/show_404/day/images/balloon.png",
"common/show_404/day/images/clouds.png",
"common/show_404/day/images/grass.png",
"common/show_404/day/images/owl.png",
"common/show_404/day/images/sun.png"
];

var index = 0;
var transitionSpeed = 500;
var imageIntervals = 5000;

var startIntervals;
var intervalSetTime;
var contentOpen = false;

$(document).ready(function() {
    
  
    function balloon(){
        var el=$('.balloon');
        if(el.hasClass('show')){
            el.removeClass('show').addClass('hide').removeClass('fadeInUp');
            el.addClass('animated fadeOutUp');
        }else{
            el.removeClass('hide').addClass('show').removeClass('fadeOutUp');
            el.addClass('animated fadeInUp');
        }
   
        setTimeout(balloon,4000);
    };            
    balloon();
           
                                         
	
    $(function() {
		
        $.preload(images, {
            init: function(loaded, total) {
                $("#indicator").html("<img src='common/show_404/day/images/load.gif' />");			
            },
			
            loaded_all: function(loaded, total) { 
                $('body').height($(window).height());
                            
                $('#indicator').fadeOut('slow', function() {
                    $('body').addClass('gradient');
                                  
                    $('.clouds').pan({
                        fps: 30, 
                        speed: 1, 
                        dir: 'left', 
                        depth: 70
                    });
                                
                    $('.init').fadeIn(function(){
                        $(this).removeClass('init');
                        $('.sun').addClass('animated bounceInDown');
                                      
                                  setTimeout(function(){
                                       $('.owl').plaxify({"xRange":10,"yRange":0}) 
                                $('.grass').plaxify({"xRange":100})   
                            $.plax.enable(); 
                                  },1000)    
                                      
                                      
                                       
                    })
                                         
                                        
                                        
					
                });
            }
        });
    });
 

})

$(window).resize(function() {
    $('body').height($(window).height());
    
    console.log( $('body').height());
});
