//Imports 
// @codekit-prepend "jquery.js"
// @codekit-prepend "bootstrap.js"
// @codekit-prepend "modernizr.js"

/* Enviroment tester */
function grBootstrapEnviroment() {

	var $el = null; 

    var envs = ['xs', 'sm', 'md', 'lg'];

    $el = $('<div>');
    $el.appendTo($('body'));

    for (var i = envs.length - 1; i >= 0; i--) {
        var env = envs[i];

        $el.addClass('hidden-'+env);
        if ($el.is(':hidden')) {
            $el.remove();
            return env; 
        }
    }
}

jQuery(function() {
	
	//Declare 
	var animationTime 	= 400; 
	
	//Hoveranimation 
	jQuery(".percentanimation").mouseenter(function() {
	
		if ( grBootstrapEnviroment() !== "xs" && grBootstrapEnviroment() !== "sm" ) {
		
			//Declare
			var percentObject 	= null;
			var iconObject 		= null;  
			var goalValue 		= 0; 
			
			//Get objects 
			percentObject 	= jQuery(".percent", jQuery(this) ); 
			iconObject 		= jQuery(".glyphicon", jQuery(this) ); 
			
			//Get values 
			goalValue 		= percentObject.attr("data-value"); 
			
			//Animate 
			jQuery(iconObject).fadeOut((animationTime/2)); 	
			jQuery(percentObject).attr('data-content',goalValue);
			percentObject.delay(animationTime/2).animate({margin: ((100-goalValue)/2)+"%", width: goalValue + "%",fontSize: "0." + goalValue + "em", opacity: 1}, animationTime );
			 
		}	
		
	}); 
	
	jQuery(".percentanimation").mouseleave(function() {
		if ( grBootstrapEnviroment() !== "xs" ) {
			jQuery(".percent", jQuery(this) ).delay(100).animate({margin: "50%", width: 0,fontSize: "0em", opacity: 0 }, animationTime, function() {
				jQuery(this).siblings(".glyphicon").fadeIn((animationTime/2)); 
			});  
		}
	}); 

}); 

function adjustBigIcons() {
	jQuery(".bigicon").each(function( index,object) {
		jQuery(".wrapper",object).height(jQuery(object).height()); 
	}); 
}

jQuery(window).resize(function() {
	adjustBigIcons(); 
}); 

jQuery(function() {
	var menuItem = null; 
	jQuery("nav li a").click(function(event) {
		event.preventDefault();
		if ( !jQuery(this).hasClass("active") ) {
			jQuery("nav").removeClass("open"); 
			jQuery("nav li a").removeClass("active");
			jQuery(this).addClass("active"); 
			menuItem = jQuery(this); 
			if ( grBootstrapEnviroment() === "xs" || grBootstrapEnviroment() === "sm" ) {
				var thisAnimationTimeOut = 1;
				var thisAnimationTimeIn  = 1; 
			} else {
				var thisAnimationTimeOut = 100;
				var thisAnimationTimeIn  = 300; 
			}
			jQuery(".blockmenu.active").fadeOut(thisAnimationTimeOut, function() {
				jQuery("body").removeClass("menu"); 
				jQuery(this).removeClass("active"); 
				jQuery(menuItem.attr("href")).parent(".blockmenu").fadeIn(thisAnimationTimeIn,function(){
					jQuery(this).addClass("active"); 
				}); 
				adjustBigIcons();
			}); 
		} 
	}); 
}); 

jQuery(function() {
	jQuery("#menutrigger").click(function(event) {
		event.preventDefault(); 
		jQuery("nav").toggleClass("open");
		jQuery("body").toggleClass("menu");
	}); 	
}); 