// Barre de nav

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
  });