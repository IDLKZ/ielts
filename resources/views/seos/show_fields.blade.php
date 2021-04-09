<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $seo->language->title }}</p>
</div>

<!-- Page Field -->
<div class="col-sm-12">
    {!! Form::label('page', 'Страница - Page:') !!}
    <p>{{ (["main"=>__("frontend.menu_main"),"about"=>__("frontend.menu_about"), "teacher"=>__("frontend.menu_teachers"),"gallery"=>__("frontend.menu_gallery"),"faq"=>__("frontend.menu_fag"),"ielts"=>__("frontend.menu_ielts"),"course"=>__("frontend.menu_course"), "schedule"=>__("frontend.menu_schedule"),"price"=>__("frontend.menu_price"), "news"=>__("validation.attributes.news_id"),"contact"=>__("frontend.menu_contact")])[$seo->page] }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    <p>{{ $seo->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __("validation.attributes.description")) !!}
    <p>{{ $seo->description }}</p>
</div>

<!-- Keywords Field -->
<div class="col-sm-12">
    {!! Form::label('keywords', 'Ключевые слова - Keywords:') !!}
    <p>{{ $seo->keywords }}</p>
</div>

