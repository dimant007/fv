$(document).ready(function(){
$(document).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $("#top").css({bottom:"210px"});
    } else {
        $("#top").css({bottom:"-100px"});
    }
});
$("#top").click(function(){

    $("html,body").animate({"scrollTop": 0},"slow")
});
});