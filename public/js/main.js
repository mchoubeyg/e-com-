$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 80) {
            $(".navbar").css("background", "#333");
        } else {
            $(".navbar").css("background", "#243665");
        }
    });
});

mybutton = document.getElementById("myBtn");

//when user scroll down 20px fromyhe top of the document , show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 350 ||
        document.documentElement.scrollTop > 350
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// when the user click on the button, scroll on the top of the document
function topFunction() {
    document.body.scrollTop = 0; //safari
    document.documentElement.scrollTop = 0; //for chrome extension
}
