$(window).scroll(function () { 
    var height= $(window).scrollTop();
    if(height > 500){
        $(".page_top").fadeIn();      
    }else{
        $(".page_top").fadeOut();
    }
});
$(document).ready(function () {
    $(".page_top").click(function (e) { 
        e.preventDefault();  
        $("html,body").animate({ scrollTop: 0 });
      return false;  
    });
});
    $('.section_cnt .cnt_title_man a').click(function(){
        activeTab(this);
        return false;
    });
    // Hàm active tab nào đó
function activeTab(obj)
{
    // Xóa class active tất cả các tab
    $('.section_cnt .cnt_title_man a').removeClass('active');
 
    // Thêm class active vòa tab đang click
    $(obj).addClass('active');
 
    // Lấy href của tab để show content tương ứng
    var id = $(obj).find('a').attr('href');
}
