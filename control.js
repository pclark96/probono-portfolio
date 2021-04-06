$scroll(function() {
    if($(document).scrollTop() >= 500) {
        $('header').css('color', 'white');
    } else {
        $('header').css('color', 'transparent');
    }
})