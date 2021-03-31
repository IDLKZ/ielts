<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $news->language->title }}</p>
</div>

<!-- Alias Field -->
<div class="col-sm-12">
    {!! Form::label('alias', __("validation.attributes.alias")) !!}
    <a href="{{ $news->alias }}"></a>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', __("validation.attributes.img")) !!}
    <br>
    <img src="{{ $news->img }}" height="80">
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    <p>{{ $news->title }}</p>
</div>

<!-- Subtitle Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle', __("validation.attributes.subtitle")) !!}
    <p>{{ $news->subtitle }}</p>
</div>

<!-- Content Field -->
<div class="col-sm-12">
    {!! Form::label('content', __("validation.attributes.content")) !!}
    {!! $news->content !!}
</div>

