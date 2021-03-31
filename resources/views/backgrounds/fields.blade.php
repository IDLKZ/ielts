<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    {!! Form::select('language_id',\App\Models\Language::pluck("title","id"),null, ['class' => 'form-control']) !!}
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

<!-- Video Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_url', __('validation.attributes.video_url')) !!}
    <br>
    {!! Form::file('video_url', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
