$(document).ready(function(){
    if($(document).width() > 768){
        // When the user clicks on the button, scroll to the top of the document

        navBar()
        $(window).on("scroll", function() {
            navBar();
        })
        function navBar(scrollTop){
            if($(window).scrollTop()) {
                $(".nav-bar-container").addClass("onscroll-nav");
                $(".my-navbar").removeClass("navbar-dark").addClass("navbar-light");
            }

            else {
                $(".nav-bar-container").removeClass("onscroll-nav");
                $(".my-navbar").removeClass("navbar-light").addClass("navbar-dark");
            }
        }
    }
    else{
        $(".nav-bar-container").addClass("onscroll-nav");
        $(".my-navbar").removeClass("navbar-dark").addClass("navbar-light");
    }



});
