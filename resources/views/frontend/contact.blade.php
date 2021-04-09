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
                    <h1 class="heading-1 blue-text">
                        {{__("frontend.menu_contact")}}
                    </h1>
                    <p class="subheading-1">
                        {{__("frontend.contact_frontend")}}
                    </p>
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
                    <form method="post" action=""  id="js-form" >
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





    </section>

@endsection
