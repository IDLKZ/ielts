<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $faq->language->title }}</p>
</div>

<!-- Question Field -->
<div class="col-sm-12">
    {!! Form::label('question', __("validation.attributes.question")) !!}
    <p>{{ $faq->question }}</p>
</div>

<!-- Answer Field -->
<div class="col-sm-12">
    {!! Form::label('answer', __("validation.attributes.answer")) !!}
    {!! $faq->answer !!}
</div>

