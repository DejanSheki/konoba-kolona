$('a[href^="#"]').on('click', function(event) {

    var target = $(this.getAttribute('href'));

    if (target.length) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top - 90
        }, 800);
    }

});

/* hamburger */

$(document).ready(function() {
    $('.fa-bars').click(function() {
        $('.responsive-menu').slideToggle();

    });
});
$('.responsive-menu').on('click', 'a', function() {
    $('.responsive-menu').slideToggle();
});


/* active hover */

var header = document.getElementById("active");
var btns = header.getElementsByClassName("activea");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
    });
}