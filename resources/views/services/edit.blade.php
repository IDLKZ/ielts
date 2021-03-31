@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>{{__("admin.edit")}} {{__("admin.news")}}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($service, ['route' => ['services.update', $service->id], 'method' => 'patch',"files"=>true]) !!}

            <div class="card-body">
                <div class="row">
                    @include('services.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit(__("admin.save"), ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('services.index') }}" class="btn btn-default">{{__("admin.back")}}</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
