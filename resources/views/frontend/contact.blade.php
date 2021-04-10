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
                                <li class="breadcrumb-item fs-24 text-white active" aria-current="page">{{__("frontend.menu_contact")}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mh-400">
            <div class="row py-4">
                <div class="col-md-12 text-center">
                    @if($header)
                        <h1 class="heading-1 blue-text">
                            {{$header->title}}
                        </h1>
                        <p class="subheading-1">
                            {{$header->subtitle}}
                        </p>
                    @else
                    <h1 class="heading-1 blue-text">
                        {{__("frontend.menu_contact")}}
                    </h1>
                    <p class="subheading-1">
                        {{__("frontend.contact_frontend")}}
                    </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 px-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span>
                            @endforeach
                        </div>
                    @endif
                    <form method="post" action="{{route("send-message")}}"  id="js-form" >
                        @csrf
                        <div class="form-group px-2">
                            <label for="exampleTitle" class="bmd-label-floating">{{__("validation.attributes.name")}}</label>
                            <input type="text" name="name" class="form-control" id="exampleTitle">
                        </div>


                        <div class="form-group px-2">
                            <label for="exampleTitle" class="bmd-label-floating">{{__("validation.attributes.email")}}</label>
                            <input type="email" name="email" class="form-control" id="exampleTitle">
                        </div>
                        <div class="form-group px-2">
                            <label for="exampleTitle" class="bmd-label-floating">{{__("validation.attributes.phone")}}</label>
                            <input type="text" name="phone" class="form-control" id="phone">
                        </div>
                        <div class="form-group px-2">
                                        <textarea name="message" rows="5" style="width: 100%">
                                        </textarea>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary ml-auto">{{__("frontend.send")}}</button>

                        </div>

                    </form>



                </div>
                <div class="col-md-6">
                    <lottie-player
                        src="{{asset("/lottie/contact-us.json")}}" autoplay loop>
                    </lottie-player>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="heading-1 blue-text">
                        {{__("frontend.social")}}
                    </h1>

                </div>
            </div>
            <div class="row py-2">
                @if($socials->isNotEmpty())
                    @foreach($socials as $social)
                        <div class="col-md-4 my-2">
                            <div class="card text-center py-2 border-0">
                                <div class="bg-mini-circle light-blue-bg2 d-flex align-self-center align-items-center justify-content-center my-2">
                                    <a href="{{$social->link}}" target="_blank" class="text-white heading-1"> <i class="{{$social->icon}}"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row py-2">
                <div class="col-md-6 text-center">
                    @if($emails->isNotEmpty())
                        @foreach($emails as $email)
                        <a href="{{$email->email}}" class="text-dark fs-22" target="_blank">
                            <i class="fas fa-envelope"></i>
                            {{$email->email}}
                        </a>
                        @endforeach
                    @endif
                </div>
                <div class="col-md-6 text-center">
                    @if($phones->isNotEmpty())
                        @foreach($phones as $phone)
                            <a href="tel:{{$phone->phone}}" class="text-dark fs-22">
                                <i class="fas fa-phone"></i>
                                {{$phone->phone}}
                            </a>
                            <br>
                        @endforeach
                    @endif
                </div>
            </div>



        </div>

        <div class="container-fluid">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80077.50269841286!2d71.38563584981559!3d51.15600977553601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424580c47db54609%3A0x97f9148dddb19228!2z0J3Rg9GALdCh0YPQu9GC0LDQvSAwMjAwMDA!5e0!3m2!1sru!2skz!4v1617882870339!5m2!1sru!2skz" width="100%" style="border:0; min-height: 100vh" allowfullscreen="" loading="lazy"></iframe>
        </div>





    </section>

@endsection
