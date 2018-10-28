$('.parent-checkbox-delete').click(function() {
	if ($(this).is(':checked')) {
		$('.parent-checkbox-delete').prop('checked', true);
		$('.checkbox-delete').prop('checked', true);
	} else {
		$('.parent-checkbox-delete').prop('checked', false);
		$('.checkbox-delete').prop('checked', false);
	}
});

(function() {
	var lastChecked = null;
	$('#multipeCheckbox').on('click', '.checkbox-delete', function(e) {
		if(!lastChecked) {
			lastChecked = this;
			return;
		}
		if(e.shiftKey) {
			var start = $('.checkbox-delete').index(this);
			var end = $('.checkbox-delete').index(lastChecked);
			$('.checkbox-delete').slice(Math.min(start,end), Math.max(start,end)+ 1).prop('checked', lastChecked.checked);
		}
		lastChecked = this;
	});
})();
$('.btnCancel').click(function() {
	var messageConfirm = $(this).data('messageConfirm');
	if (confirm(messageConfirm) === false) {
		return false;
	}
});