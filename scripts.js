(function(window, document, $) {
	
	var template_options = $('#template option');
	template_options.sort(function(a,b){
		a = a.value;
		b = b.value;
		return a-b;
	});
	$('#template').html(template_options);
	
})(window, document, jQuery);