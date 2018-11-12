(function () {
    $.each($('.active_menu'), function() {
        var href = $(this).prop('href');
        var url = window.location.href;
        if (url.includes(href)) {
            $(this).addClass('active');
            return false;
        }
    });
})();