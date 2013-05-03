(function($) {
	
	$(function() { // when the document is ready
		
		// How many p tags are there in a particular section
		
		var elems = $('.results').children();
		for (var i = 0; i < elems.length; i++) {
			var val = $(elems[i]).text();

			if ((val =='') || (val == '   ') || (val == '    ')) {
				$(elems[i]).css('display', 'none');
				//$(elems[i]).addClass('hidden');
			}
		};


		
	});

})(jQuery);
