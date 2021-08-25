<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', __("admin.language")) !!}
    {!! Form::select('language_id', \App\Models\Language::pluck("title","id")->toArray() ,null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __("admin.title")) !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __("admin.description")) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
