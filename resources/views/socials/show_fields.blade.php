<!-- Icon Field -->
<div class="col-sm-12">
    {!! Form::label('icon', 'Лого:') !!}
    <i class="{{ $social->icon }}"></i>
</div>

<!-- Link Field -->
<div class="col-sm-12">
    {!! Form::label('link', __("validation.attributes.links")) !!}
    <a href="{{$social->link}}" target="_blank">{{ $social->link }}</a>
</div>

