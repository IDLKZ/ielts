<!-- Weekday Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('weekday_id', __("admin.weekday_id")) !!}
    {!! Form::select('weekday_id', \App\Models\Weekday::pluck("title_".LaravelLocalization::getCurrentLocale(),"id",),null, ['class' => 'form-control']) !!}
</div>

<!-- Teacher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teacher_id', __("admin.teachers")) !!}
    {!! Form::select('teacher_id', \App\Models\Teacher::pluck("name","id"),null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', __("admin.title")) !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 1000,'maxlength' => 1000]) !!}
</div>


<!-- Date Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_start', __("admin.date_start"). "*Необязательно") !!}
    {!! Form::text('date_start', null, ['id'=>"date_start",'class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_end', __("admin.date_end") . "*Необязательно") !!}
    {!! Form::text('date_end', null, ['id'=>"date_end",'class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Time Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_start', __("admin.time_start") . "*Необязательно") !!}
    {!! Form::text('time_start', null, ['id'=>"time_start",'class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Time End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_end', __("admin.time_end") . "*Необязательно") !!}
    {!! Form::text('time_end', null, ['id'=>"time_end",'class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
