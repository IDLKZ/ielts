<!-- Weekday Field -->
<div class="form-group col-sm-12">
    {!! Form::label('weekday', 'День недели:') !!}
    {!! Form::select('weekday', [\App\Models\Language::getDays()],null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start', 'Начало:') !!}
    {!! Form::text('start', null, ['class' => 'form-control timepicker','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end', 'Конец:') !!}
    {!! Form::text('end', null, ['class' => 'form-control timepicker','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Coachers Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('coachers', 'Тренера:') !!}
    {!! Form::select('coachers',\App\Models\Teacher::pluck("name","name"), null, ['class' => 'form-control select2',"multiple"=>"multiple","name"=>"coachers[]"]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<input type="hidden" name="language_id" value="{{\App\Models\Language::getLanguage()}}">
