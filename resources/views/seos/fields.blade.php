<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    {!! Form::select('language_id',
        \App\Models\Language::pluck("title","id")->toArray()
    ,null, ['class' => 'form-control']) !!}
</div>

<!-- Page Field -->
<div class="form-group col-sm-6">
    {!! Form::label('page', 'Страница(Page):') !!}
    {!! Form::select('page',
            [
                "main"=>__("frontend.menu_main"),
            "about"=>__("frontend.menu_about"),
            "teacher"=>__("frontend.menu_teachers"),
           "gallery"=>__("frontend.menu_gallery"),
          "faq"=>__("frontend.menu_fag"),
         "ielts"=>__("frontend.menu_ielts"),
         "course"=>__("frontend.menu_course"),
        "price"=>__("frontend.menu_price"),
        "news"=>__("validation.attributes.news_id"),
        "contact"=>__("frontend.menu_contact"),
        ],



        null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __("validation.attributes.description")) !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Keywords Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keywords', "Ключевые слова -Keywords") !!}
    {!! Form::text('keywords', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
