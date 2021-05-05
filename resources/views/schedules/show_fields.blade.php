<!-- Start Field -->
<div class="col-sm-12">
    {!! Form::label('start', 'Start:') !!}
    <p>{{ $schedule->start }}</p>
</div>

<!-- End Field -->
<div class="col-sm-12">
    {!! Form::label('end', 'End:') !!}
    <p>{{ $schedule->end }}</p>
</div>

<!-- Weekday Field -->
<div class="col-sm-12">
    {!! Form::label('weekday', 'Weekday:') !!}
    <p>{{ $schedule->weekday }}</p>
</div>

<!-- Coachers Field -->
<div class="col-sm-12">
    {!! Form::label('coachers', 'Coachers:') !!}
    <p>{{ $schedule->coachers }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $schedule->title }}</p>
</div>

<!-- Type Field -->
<div class="col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $schedule->type }}</p>
</div>

