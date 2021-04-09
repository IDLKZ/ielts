@extends("frontend.layout.layout")

@section('content')
    <section>
        <section class="breadcrumb-bg">
            <div class="container ">
                <div class="row mh-350 d-flex justify-content-center align-items-center">
                    <div class="col-md-12 px-4">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent">
                                <li class="breadcrumb-item fs-24 text-white"><a href="/">{{__("frontend.menu_main")}}</a></li>
                                <li class="breadcrumb-item fs-24 text-white active" aria-current="page">{{__("frontend.menu_fag")}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mh-400">
            <div class="row py-4">
                <div class="col-md-12 text-center">
                    <h1 class="heading-1 blue-text">
                        F.A.Q
                    </h1>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 my-2">
                    <div class="accordion" id="accordionExample">
                        @foreach($faqs as $faq)
                            <div class="card my-2">
                                <div class="card-header footer-bg" id="headingOne">
                                    <h2 class="mb-0">

                                        <button class="btn btn-link fs-22 text-decoration-none text-white" type="button" data-toggle="collapse" data-target="{{"#id".$faq->id}}" aria-expanded="true" aria-controls="collapseOne">
                                            {{$faq->question}}
                                        </button>
                                    </h2>
                                </div>

                                <div id="id{{$faq->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        {!!$faq->answer!!}
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>






                </div>
                <div class="col-md-6 my-2">
                    <lottie-player src="{{asset("/lottie/question.json")}}" background="transparent"  speed="1"  style="width: 100%;" loop autoplay></lottie-player>
                </div>


            </div>
        </div>





    </section>

@endsection

