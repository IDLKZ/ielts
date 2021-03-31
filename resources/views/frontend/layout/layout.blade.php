<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset("/css/mystyle.css")}}" />
    <title>Hello, world!</title>
</head>
<body>
@yield("content")

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="/path/to/cdn/jquery.slim.min.js"></script>
<script src="/path/to/jquery.youtube-background.js"></script>

<script>
    resizeSwiper();
    $(window).ready(function(){
        resizeSwiper()
    });
    var swiper = new Swiper('.swiper-container', {
        effect: 'cube',
        grabCursor: true,
        direction:"vertical",
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        loop:false,
        mousewheel:true,
        speed: screen.width < 768 ? 1000 : 1500,
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },
        cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
    });
    document.addEventListener('DOMContentLoaded', function(event) {
        if(document.URL.split('#')[1] == "map"){
            swiper.slideTo(2)
        }
        if(document.URL.split('#')[1] == "contact"){
            swiper.slideTo(4)
        }
    })

    function swipeslider(arg){
        swiper.slideToLoop(arg,1500)
    }
    function resizeSwiper() {
        $('.swiper-container').height($('.swiper-slide section').height())
    }




</script>


</body>
</html>
