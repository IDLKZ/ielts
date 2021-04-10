@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

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
            <form method="post" action="{{route("admin-change")}}" id="js-form" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                    <div class="card-body ">
                        <div class="form-group bmd-form-group">
                            <label for="exampleTitle" class="bmd-label-floating">{{__("validation.attributes.name")}}</label>
                            <input type="text" name="name" class="form-control" id="exampleTitle"  value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="form-group bmd-form-group">
                            <label for="exampleTitle" class="bmd-label-floating">{{__("validation.attributes.email")}}</label>
                            <input type="email" name="email" class="form-control" id="exampleTitle" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="form-group bmd-form-group">
                            <label for="exampleTitle" class="bmd-label-floating">{{__("validation.attributes.password")}}</label>
                            <input type="password" name="password" class="form-control"  value="">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info ml-auto">{{__("admin.edit")}}</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
