<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("admin.language_id")) !!}
    <p>{{ $privicy->language_id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("admin.title")) !!}
    <p>{{ $privicy->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __("admin.description")) !!}
    <p>{!! $privicy->description !!}  </p>
</div>

