<!-- Language Id Field -->
<div class="col-sm-12">
    {!! Form::label('language_id', __("validation.attributes.language_id")) !!}
    <p>{{ $header->language->title }}</p>
</div>

<!-- Page Field -->
<div class="col-sm-12">
    {!! Form::label('page', 'Страница(Page)') !!}
    <p>{{ $header->page }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("validation.attributes.title")) !!}
    <p>{{(["main"=>__("frontend.menu_main"),"advantage"=>__("frontend.menu_advantage"),"ielts"=>__("frontend.menu_ielts"),"about"=>__("frontend.menu_about"),"review"=>__("frontend.menu_review"),"price"=>__("frontend.menu_price"),"service"=>__("frontend.menu_service"),"news"=>__("validation.attributes.news_id"),"contact"=>__("frontend.menu_contact"),"faq"=>__("frontend.menu_fag"),"teacher"=>__("frontend.menu_teachers"),"gallery"=>__("frontend.menu_gallery"),"course"=>__("frontend.menu_course"), "schedule"=>__("frontend.menu_schedule")])[$header->page] }}</p>
</div>

<!-- Subtitle Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle', __("validation.attributes.subtitle")) !!}
    <p>{{ $header->subtitle }}</p>
</div>

