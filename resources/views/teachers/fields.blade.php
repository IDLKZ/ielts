<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    {!! Form::select('language_id', \App\Models\Language::pluck("title","id") ,null, ['class' => 'form-control']) !!}
</div>



<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __("validation.attributes.name")) !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position', __("validation.attributes.position")) !!}
    {!! Form::text('position', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', __("validation.attributes.img")) !!}
    <br>
    {!! Form::file('img', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __("validation.attributes.description")) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control',"id"=>"content"]) !!}
</div>
