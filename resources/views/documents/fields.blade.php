<!-- Title Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ru', __("admin.title_ru")) !!}
    {!! Form::text('title_ru', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_kz', __("admin.title_kz")) !!}
    {!! Form::text('title_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_en', __("admin.title_en")) !!}
    {!! Form::text('title_en', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Document Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document', __("admin.file")) !!}
    {!! Form::file('document', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
