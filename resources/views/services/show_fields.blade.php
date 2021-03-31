<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $service->language->title }}</p>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', __("validation.attributes.img")) !!}
    <br>
    <img src="{{ $service->img }}" height="80">
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    <p>{{ $service->title }}</p>
</div>

<!-- Subtitle Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle', __("validation.attributes.subtitle")) !!}
    <p>{{ $service->subtitle }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __("validation.attributes.description")) !!}
    {!! $service->description !!}
</div>

