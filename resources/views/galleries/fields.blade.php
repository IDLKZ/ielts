<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', __("validation.attributes.img")) !!}
    <br>
    {!! Form::file('img', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
