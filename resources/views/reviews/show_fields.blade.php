<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $review->language->title }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    <p>{{ $review->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __("validation.attributes.description")) !!}
    {!! $review->description !!}
</div>

<!-- Author Field -->
<div class="col-sm-12">
    {!! Form::label('author', __("validation.attributes.author_id")) !!}
    <p>{{ $review->author }}</p>
</div>

<!-- Position Field -->
<div class="col-sm-12">
    {!! Form::label('position', __("validation.attributes.position")) !!}
    <p>{{ $review->position }}</p>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', __("validation.attributes.img")) !!}
    <img src="{{ $review->img }}" height="80">
</div>

