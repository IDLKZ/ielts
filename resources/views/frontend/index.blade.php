@extends("frontend.layout.layout")

@section('content')

    <div class="swiper-container" style="overflow: hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide" >
                <section class="my-section">
                    <div id="ytbg" data-youtube="https://www.youtube.com/watch?v=IFSp2-CmQvk"></div>
                </section>
            </div>




            <div class="swiper-slide" ><section style="height: 100vh; background: red"></section></div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        {{--        <div class="swiper-button-prev"></div>--}}
        {{--        <div class="swiper-button-next"></div>--}}
    </div>
@endsection
