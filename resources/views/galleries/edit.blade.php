@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>{{__("admin.edit")}} {{__("admin.gallery")}}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($gallery, ['route' => ['galleries.update', $gallery->id], 'method' => 'patch',"files"=>true]) !!}

            <div class="card-body">
                <div class="row">
                    @include('galleries.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit(__("admin.save"), ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('galleries.index') }}" class="btn btn-default">{{__("admin.back")}}</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
