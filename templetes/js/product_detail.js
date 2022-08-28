$(function() {
    $('.tab-content .box:eq(0)').show();
    $('.list-tab li:eq(0)').css({'border-bottom':'none', 'border-top':'2px solid #40bea7'});
    $('.list-tab li').click(function() {
        /* Xác định phần tử thứ n được click */
        var n = $('.list-tab li').index(this);
        /* Ẩn tất cả .box */
        $('.tab-content .box').hide();
        /* Hiển thị .box theo phần tử thứ n */
        $('.tab-content .box:eq('+ n +')').fadeIn(500);
        $('.tab-content .box:eq('+ n +')').css({'display':'flex'});
        $('.list-tab li').css({'border-top':'none', 'border-bottom':'1px solid #e6e6e6'});
        $('.list-tab li:eq('+ n +')').css({'border-bottom':'none', 'border-top':'2px solid #40bea7'});
      });
});