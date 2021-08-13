<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', __("admin.title_ru")) !!}
    <p>{{ $security->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', __("admin.title_kz")) !!}
    <p>{{ $security->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', __("admin.title_en")) !!}
    <p>{{ $security->title_en }}</p>
</div>

<!-- Description Ru Field -->
<div class="col-sm-12">
    {!! Form::label('description_ru', __("admin.description_ru")) !!}
    <div>{!! $security->description_ru !!} </div>
</div>

<!-- Description Kz Field -->
<div class="col-sm-12">
    {!! Form::label('description_kz', __("admin.description_kz")) !!}
    <div>{!! $security->description_kz !!} </div>
</div>

<!-- Description En Field -->
<div class="col-sm-12">
    {!! Form::label('description_en', __("admin.description_en")) !!}
    <div>{!! $security->description_en !!} </div>
</div>

