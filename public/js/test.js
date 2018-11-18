$.each($('input[type=text], textarea'), function() {
    $(this).val($(this).prop('name') + ' | ' + Math.random().toString(36).substring(0) + Date.parse(Date()));
});
$.each($('input[type=radio'), function() {
    $(this).prop('checked', true);
});
$.each($('input[type=number]'), function(index) {
    $(this).val(index + 1);
});
$.each($('select'), function(index) {
    $(this).val($(this).find('option')[1].value).trigger('change');
});