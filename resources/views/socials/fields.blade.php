<!-- Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icon', "Лого") !!}
    {!! Form::select('icon',
        [
                "fab fa-facebook-square"=>"Facebook",
                "fab fa-instagram-square"=>"Instagram",
                "fab fa-vk"=>"VK",
                "fas fa-envelope-square"=>"Email",
                "fab fa-linkedin"=>"LinkedIn",
                "fab fa-whatsapp-square"=>"WhatsApp",
                "fab fa-twitter-square"=>"Twitter",
                "fab fa-youtube-square"=>"Youtube"
            ]
    ,null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', __("validation.attributes.links")) !!}
    {!! Form::text('link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
