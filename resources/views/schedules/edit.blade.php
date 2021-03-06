@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Schedule</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')
{{--        <div class="dropdown mb-4">--}}
{{--            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                {{\App\Models\Language::getLang()}}--}}
{{--            </button>--}}
{{--            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                        {{ $properties['native'] }}--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="card">

            {!! Form::model($schedule, ['route' => ['schedules.update', $schedule->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('schedules.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('schedules.index') }}" class="btn btn-default">Cancel</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
@push('page_scripts')
    <script type="text/javascript">
        $(function () {
            $('.timepicker').datetimepicker({
                format : 'HH:mm'
            });
            $('.select2').select2();
        });

    </script>
@endpush
