$(function(){
	console.log($(window).width());
	if ($(window).width() < 800) {
		console.log(true);
		var sticky = new Waypoint.Sticky({ 
	  element: $('.portfolioArea__heading')[0]
		});
			var sticky = new Waypoint.Sticky({ 
		  element: $('.blogArea__heading')[0]
			});
		portfolioScroll();	
		blogScroll();
	}
});

var portfolioAreaOffset = $('.portfolioArea__heading').offset();

function blogScroll() {
	$(window).on('scroll', function() {
		blogHeadingOffset = $('.blogArea__heading').offset();
		blogAreaOffset = $('.blogArea').offset();
		if(blogHeadingOffset.top > (blogAreaOffset.top + $('.blogArea').height()) ) {	
			  $('.blogArea__heading').removeClass('stuck');
		}
	});
}

function portfolioScroll() {
	$(window).on('scroll', function() {
		portfolioHeadingOffset = $('.portfolioArea__heading').offset();
		portfolioAreaOffset = $('.portfolioArea').offset();
		if(portfolioHeadingOffset.top > (portfolioAreaOffset.top + $('.portfolioArea').height() - 110) ) {	
			  $('.portfolioArea__heading').removeClass('stuck');
		}
	});
}