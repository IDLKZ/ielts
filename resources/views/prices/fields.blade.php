<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    {!! Form::select('language_id', \App\Models\Language::pluck("title","id") ,null, ['class' => 'form-control']) !!}
</div>

<!-- Teacher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teacher_id', __("admin.teachers")) !!}
    {!! Form::select('teacher_id', \App\Models\Teacher::pluck("name","id"),null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Subtitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle', __("validation.attributes.subtitle")) !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', __("admin.price")) !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency', __("validation.attributes.currency")) !!}
    {!! Form::text('currency', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Benefits Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('benefits', __("admin.advantages")) !!}
    {!! Form::select('benefits[]', [] ,null, ['class' => 'form-control multiple', "multiple"=>true]) !!}
</div>

