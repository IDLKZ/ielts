@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>{{__("admin.edit")}}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($workday, ['route' => ['workdays.update', $workday->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('workdays.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit(__("admin.edit"), ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('workdays.index') }}" class="btn btn-default">{{__("admin.cancel")}}</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
