window.onscroll = function() {fixedNav()};

var navBar = document.getElementsByClassName(".sticky");

var sticky = navBar = navBar.offsetTop;

function fixedNav() {
    if (window.pageXOffset >= sticky) {
        navBar.classList.add("sticky")
    }
}
