<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $teacher->language->title }}</p>
</div>

<!-- Alias Field -->
<div class="col-sm-12">
    {!! Form::label('alias', __("validation.attributes.alias")) !!}
    <a href="{{ $teacher->alias }}" target="_blank">{{ $teacher->alias }}</a>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __("validation.attributes.name")) !!}
    <p>{{ $teacher->name }}</p>
</div>

<!-- Position Field -->
<div class="col-sm-12">
    {!! Form::label('position', __("validation.attributes.position")) !!}
    <p>{{ $teacher->position }}</p>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', __("validation.attributes.img")) !!}
    <br>
    <img src="{{ $teacher->img }}" height="80">
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __("validation.attributes.description")) !!}
    {!! $teacher->description !!}
</div>

