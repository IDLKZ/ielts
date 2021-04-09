<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    {!! Form::select('language_id',
        \App\Models\Language::pluck("title","id")->toArray()
    ,null, ['class' => 'form-control']) !!}
</div>

<!-- Page Field -->
<div class="form-group col-sm-6">
    {!! Form::label('page', "Страница (Page)") !!}
    {!! Form::select('page',
        ["main"=>__("frontend.menu_main"),
        "advantage"=>__("frontend.menu_advantage"),
        "ielts"=>__("frontend.menu_ielts"),
        "about"=>__("frontend.menu_about"),
        "review"=>__("frontend.menu_review"),
        "price"=>__("frontend.menu_price"),
        "service"=>__("frontend.menu_service"),
        "news"=>__("validation.attributes.news_id"),
        "contact"=>__("frontend.menu_contact"),
        "faq"=>__("frontend.menu_fag"),
        "teacher"=>__("frontend.menu_teachers"),
        "gallery"=>__("frontend.menu_gallery"),
        "course"=>__("frontend.menu_course"),
        "schedule"=>__("frontend.menu_schedule")
        ],
    null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Subtitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle', __("validation.attributes.subtitle")) !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>
