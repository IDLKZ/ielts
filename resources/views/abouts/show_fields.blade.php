<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $about->language->title }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    <p>{{ $about->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __("validation.attributes.description")) !!}
    {!! $about->description !!}
</div>

