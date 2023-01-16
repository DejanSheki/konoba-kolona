/*hamburger*/

$(document).ready(function() {
    $('.fa-bars').click(function() {
        $('.responsive-menu').slideToggle();
    });
});

/* active page */

$(function() {
    // this will get the full URL at the address bar
    var url = window.location.href;

    // passes on every "a" tag
    $(".nav a").each(function() {
        // checks if its the same on the address bar
        if (url == (this.href)) {
            $(this).closest("li").addClass("active");
            //for making parent of submenu active
            $(this).closest("li").parent().parent().addClass("active");
        }
    });
});

//change language

const slika = document.getElementById('slika');

function changeLanguage() {
    if (slika.getAttribute('src') == "../images/GB1.png") {
        window.location.href = "../index.php";
    }
    if (slika.getAttribute('src') == "images/HR1.png") {
        window.location.href = "hr/welcome.php";
    }
}

slika.addEventListener('click', changeLanguage);