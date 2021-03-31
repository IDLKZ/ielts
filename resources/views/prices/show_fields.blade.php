<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $price->language->title }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    <p>{{ $price->title }}</p>
</div>

<!-- Subtitle Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle', __("validation.attributes.subtitle")) !!}
    <p>{{ $price->subtitle }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', __("admin.price")) !!}
    <p>{{ $price->price }}</p>
</div>

<!-- Currency Field -->
<div class="col-sm-12">
    {!! Form::label('currency', __("validation.attributes.currency")) !!}
    <p>{{ $price->currency }}</p>
</div>

<!-- Benefits Field -->
<div class="col-sm-12">
    {!! Form::label('benefits', __("admin.advantages")) !!}
    @foreach(json_decode($price->benefits) as $item)
        <p>{{$item}}</p>
    @endforeach
</div>



