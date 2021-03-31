<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    {!! Form::select('language_id', \App\Models\Language::pluck("title","id") ,null, ['class' => 'form-control']) !!}
</div>

<!-- Question Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question', __("validation.attributes.question")) !!}
    {!! Form::text('question', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Answer Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('answer', __("validation.attributes.answer")) !!}
    {!! Form::textarea('answer', null, ['class' => 'form-control',"id"=>"content"]) !!}
</div>
