@extends("frontend.layout.layout")

@section('content')
    <section class="my-section bg-parallax d-flex justify-content-center align-items-center"
    style="background-image: url({{asset("images/parallax1_1617959839.png")}})"
    >
        <div class="card">
            <form class="form" action="{{route("auth")}}"  method="post">
                @csrf
                <div class="card card-login card-hidden">
                    <div class="card-header card-header-rose text-center">
                        <h4 class="card-title">Личный Кабинет</h4>
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

                        @if (session('fail'))
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>{{ session('fail') }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="card-body ">
                                <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-envelope"></i>
                        </span>
                      </div>
                      <input type="email" name="email" class="form-control" placeholder="{{__("validation.attributes.email")}}">
                    </div>
                  </span>
                  <span class="bmd-form-group my-2">
                    <div class="input-group my-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </span>
                      </div>
                      <input type="password" name="password" class="form-control" placeholder="{{__("validation.attributes.password")}}">
                    </div>
                  </span>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <button class="btn btn-primary" type="submit">Вход</button>
                    </div>
                </div>
            </form>



        </div>
    </section>

@endsection

