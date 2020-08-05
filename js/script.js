$(document).ready(function (){
               $(function(){
		$('#menu').slicknav();
	});
    var scroll=$("#scroll");
    $(window).scroll(function (){
        if ($(this).scrollTop()>=500) {
            scroll.show();
        }
        else{
            scroll.hide();
        }
    });
    scroll.click(function (){
      $("html,body").animate({scrollTop : 0},600);  
    });
});


