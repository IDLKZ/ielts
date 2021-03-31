<!-- Alias Field -->
<div class="col-sm-12">
    {!! Form::label('alias', __("validation.attributes.alias")) !!}
    <a href="{{ $ielts->alias }}" target="_blank">{{ $ielts->alias }}</a>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    <p>{{ $ielts->title }}</p>
</div>

<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $ielts->language_id }}</p>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', __("validation.attributes.img")) !!}
    <img src="{{ $ielts->img }}" height="80px">
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __("validation.attributes.description")) !!}
    <p>{{ $ielts->description }}</p>
</div>

