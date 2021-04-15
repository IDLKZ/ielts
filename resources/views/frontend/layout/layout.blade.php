<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
       @if(isset($seo))
           @if($seo)
            <title>{{$seo->title}}</title>
            <meta name="description" content="{{$seo->description}}">
            <meta name="keywords" content="{{$seo->keywords}}">
            @else
                <title>Подготовка к IELTS</title>
                <meta name="description" content="Подготовка к IELTS в Нур-Султане">
                <meta name="keywords" content="IELTS,Нур-Султан,Подготовка к IELTS">
               @endif
             @else
            <title>Подготовка к IELTS</title>
            <meta name="description" content="Подготовка к IELTS в Нур-Султане">
            <meta name="keywords" content="IELTS,Нур-Султан,Подготовка к IELTS">
            @endif
    <link href="assets/images/favicon/favicon.png" rel="icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{asset("css/mystyle.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend.css")}}">
    @stack("styles")
</head>

<body>
<div class="wrapper">
    <div class="preloader">
        <div class="sk-cube-grid">
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
            <span class="sk-cube"></span>
        </div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
   @include("frontend.layout.navbar")

<!-- =========================
        Content
    =========================== -->
    @yield("content")

    <!-- ========================
      Footer
    ========================== -->
    @include("frontend.layout.footer")


</div><!-- /.wrapper -->

<script src="{{asset("/js/frontend.js")}}"></script>
{{--<script src="{{asset("/js/jquery.youtube-background.min.js")}}"></script>--}}
@stack("scripts")
</body>

</html>
