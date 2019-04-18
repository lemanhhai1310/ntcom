$(document).ready(function() {
    var url= window.location.href;
    if(url.split("/").pop() === ""){
        $('body').addClass('home');
    }else {
        $('body').removeClass('home');
    }
});