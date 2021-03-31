@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>{{__("admin.create")}} {{__("admin.teacher_links")}}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'teacherLinks.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('teacher_links.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit(__("admin.save"), ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('teacherLinks.index') }}" class="btn btn-default">{{__("admin.back")}}</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
