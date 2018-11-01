//hide dialog
$('body, .btn-cancel').click(function() {
	$('.dialog-dark').hide(500);
	$('.box-ajax').html('');
});
$(document).keyup(function(e) {
	if(e.keyCode == 27) {
		$('.dialog-dark').hide(500);
		$('.box-ajax').html('');
	}
});
$('.dialog-box').click(function(e) {
	e.stopPropagation();
});
//show notify
setTimeout(function() { $('#notify-box').hide(500); }, 5000);