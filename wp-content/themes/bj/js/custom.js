var wHeight,wWidth,blank;

blank = {
	sizes: function(){
		wHeight = $(window).height();
		wWidth = $(window).width();
		$('.wheight').css({'height': wHeight});
		$('.wwidth').css({'width': wWidth});
	}
}
$(document).ready(function(){
	blank.sizes();	
});
$(window).load(function(){
	blank.sizes();	
});
$(window).resize(function(){
	blank.sizes();	
});