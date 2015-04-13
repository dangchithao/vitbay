$(document).ready(function(){
    $("#topnav li").hover(function(){
       $(this).find('ul:first').css({visibility: "visible", display: "none"}).show(500); 
    }, 
    /*onmuoseout hidden*/
    function(){
        $(this).find('ul:first').css({visibility: "hidden"});    
    });
    
    $(".sh").click(function(){
        $("#work").slideToggle(1000);
    });
});