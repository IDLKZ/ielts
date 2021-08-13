<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', __("admin.title_ru")) !!}
    <p>{{ $document->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', __("admin.title_kz")) !!}
    <p>{{ $document->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', __("admin.title_en")) !!}
    <p>{{ $document->title_en }}</p>
</div>

<!-- Document Field -->
<div class="col-sm-12">
    {!! Form::label('document', __("admin.document")) !!}
    <a href="{{ $document->document }}" download>Download</a>
</div>

