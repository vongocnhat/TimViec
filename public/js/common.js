(function () {
    $.each($('.active_menu'), function() {
        var href = $(this).prop('href');
        var url = window.location.href;
        if (href === url) {
            $(this).addClass('active');
            return false;
        }
    });
    var url = window.location.href;
    switch(true)
    {
        case url.includes('%20manager-background/%20manager-color'):
            $('.list_manager.active_menu').addClass('active');
        break;
        case url.includes('%20specialize-background/%20specialize-color'):
            $('.list_specialize.active_menu').addClass('active');
        break;
        case url.includes('%20labor-background/%20labor-color'):
            $('.list_labor.active_menu').addClass('active');
        break;
        case url.includes('%20student-background/%20student-color'):
            $('.list_student.active_menu').addClass('active');
        break;
    }
})();