function create_cookie(name, value, days) {
	 var expires = "";
	 if (days) {
			 var date = new Date();
			 date.setTime( date.getTime() + (days*24*60*60*1000) );
			 expires = "; expires=" + date.toGMTString();
	 }
	 document.cookie = name + "=" + value + expires + "; path=/";
}

/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

	if( $('.home-main').length && !$('body').hasClass('landing-seen') ) {
		$('.landing-word').each(function(index, el) {
			setTimeout(function() {
				$(el)
					.fadeIn(100)
					.delay(200)
					.fadeOut(200, function() {
						if( $(el).hasClass('last-word') ) {
							create_cookie('landing_seen', 'true', 1);
							//location = '/';
							$('body').addClass('landing-seen');
						}
					});
			}, index*450);
		});
	}
}); /* end of as page load scripts */
