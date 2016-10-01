$(document).ready(function() {

	$('#tour-table tr:even').addClass('alteven');
	$('#tour-table tr:odd').addClass('altodd');

	
	$('input.erase').each(function() {
		$(this)
			.data('default', $(this).val())
			.addClass('inactive')
			.focus(function() {
				$(this).removeClass('inactive');
				if ($(this).val() == $(this).data('default') || '') {
					$(this).val('');
				}
			})
			.blur(function() {
				var default_val = $(this).data('default');
				if ($(this).val() == '') {
					$(this).addClass('inactive');
					$(this).val($(this).data('default'));
				}
		});
	});
	
	// ajax submit the form
	$('#signup').bind('submit', function(e) {
		e.preventDefault();
		$(this).ajaxSubmit();
		$('#email').val('Thanks, Check Your Inbox!');
	});
	
});