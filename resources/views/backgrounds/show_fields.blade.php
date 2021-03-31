<!-- Language Id Field -->
<div class="col-sm-12" xmlns="http://www.w3.org/1999/html">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $background->language->title }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    <p>{{ $background->title }}</p>
</div>

<!-- Subtitle Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle', __("validation.attributes.subtitle")) !!}
    <p>{{ $background->subtitle }}</p>
</div>

<!-- Video Url Field -->
<div class="col-sm-12">
    {!! Form::label('video_url', __("validation.attributes.video_url")) !!}
    <br>
    <video width="320" height="240" controls>
        <source src="{{URL::asset($background->video_url)}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

