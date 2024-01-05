$(document).ready(function(){

    $("#boxNav").hide();
    
    $("#cat1").hover(function(){

        $("#boxNav").slideDown(300);
        $("#boxNav").hover(function(){

        }, function(){
            $("#boxNav").slideUp(300);

        });
    });
    $(".hideHover").hover(function(){
        $("#boxNav").slideUp(300);
    });

    $("#menuLink, #menuLink1, #menuLink2").hover(function(){
        $(this).addClass("resize");
    }   , function(){
        $(this).removeClass("resize");
    });

/*     $(".cBody").css("background-color", "#ddeedd")
 */    $("#switch").click(function(){
        $(".cBody").toggleClass("darkTheme")
        
    });

    
$(function() {
    $(window).scroll(function () {
     if ($(this).scrollTop() > 100) {
       $('#pressTop').fadeIn();
     } else {
       $('#pressTop').fadeOut();
     }
    });
    $('#pressTop').click(function () {
     $('html, body').animate({ scrollTop: 0 }, 500);
    });
   });
   
});