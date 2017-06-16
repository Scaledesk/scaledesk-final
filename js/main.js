/**
 * Created by neerajsingh on 17/03/17.
 */

//$(window).scroll(function(event) {
//    var yOffset = window.pageYOffset;
//    var breakpoint = 550;
//    if (yOffset > breakpoint) {
//        $(".custom-nav").addClass('active');
//    } else {
//        $(".custom-nav").removeClass('active');
//    }
//});
//
//


//For Section smooth scrolling//

$(document).ready(function() {
    // Add smooth scrolling to all links


    $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 0
            }, 500, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
//        window.location.hash = hash;
            });
        } // End if
    });
});



//Floating labels//

//$("input").click(function(){
//    var $this = $(this);
//    $this.attr("placeholder", "");
//    $this.parent().find(".float-label").addClass("label-top");
//
//});

//Ends here//



// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('nav').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 10);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('nav').removeClass('custom-nav').addClass('nav-up').addClass('activet');

    }else if(st <= 0 ){
        $('nav').removeClass('custom-nav activet');


    }

    else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('nav').removeClass('nav-up').addClass('custom-nav ').removeClass('activet');
        }
    }

    lastScrollTop = st;
}


//Rocket //

$(".modal-body").click(function(){
    $(".modal-body").addClass('.rocket-gone');

});
