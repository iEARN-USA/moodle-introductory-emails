(function(window, document, $) {
	
	var template_options = $('#template option');
	template_options.sort(function(a,b){
		if (a.value > b.value) {
			return 1;
		}
		else if (a.value < b.value) {
			return -1;
		}
		else {
			return 0;
		}
	});
	$('#template').html(template_options);
	$('#template').val(template_options.first().val());
	
})(window, document, jQuery);