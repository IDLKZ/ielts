<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    {!! Form::select('language_id', \App\Models\Language::pluck("title","id") ,null, ['class' => 'form-control']) !!}
</div>



<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', __("validation.attributes.img")) !!}
    <br>
    {!! Form::file('img', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
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

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', __("validation.attributes.content")) !!}
    {!! Form::textarea('content', null, ['class' => 'form-control',"id"=>"content"]) !!}
</div>
