<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $advantage->language_id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    <p>{{ $advantage->title }}</p>
</div>

<!-- Subtitle Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle', __("validation.attributes.subtitle")) !!}
    <p>{{ $advantage->subtitle }}</p>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', __("validation.attributes.img")) !!}
    <img src="{{ $advantage->img }}" height="80px">
</div>

