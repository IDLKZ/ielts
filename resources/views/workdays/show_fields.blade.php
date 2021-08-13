<!-- Weekday Id Field -->
<div class="col-sm-12">
    {!! Form::label('weekday_id', __("admin.weekday_id")) !!}
    <p>{{ $workday->weekday["title_" . LaravelLocalization::getCurrentLocale()] }}</p>
</div>

<!-- Teacher Id Field -->
<div class="col-sm-12">
    {!! Form::label('teacher_id', __("admin.teacher_id")) !!}
    <p>{{ $workday->teacher->name }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("admin.title")) !!}
    <p>{{ $workday->title }}</p>
</div>

<!-- Date Start Field -->
<div class="col-sm-12">
    {!! Form::label('date_start', __("admin.date_start")) !!}
    <p>{{ $workday->date_start }}</p>
</div>

<!-- Date End Field -->
<div class="col-sm-12">
    {!! Form::label('date_end', __("admin.date_end")) !!}
    <p>{{ $workday->date_end }}</p>
</div>

<!-- Time Start Field -->
<div class="col-sm-12">
    {!! Form::label('time_start', __("admin.time_start")) !!}
    <p>{{ $workday->time_start }}</p>
</div>

<!-- Time End Field -->
<div class="col-sm-12">
    {!! Form::label('time_end', __("admin.time_end")) !!}
    <p>{{ $workday->time_end }}</p>
</div>

