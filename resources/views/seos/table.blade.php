<div class="table-responsive">
    <table class="table" id="seos-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.language_id")}}</th>
        <th>Страница (Page)</th>
        <th>{{__("validation.attributes.title")}}</th>
        <th>{{__("validation.attributes.description")}}</th>
        <th>Ключевые слова -Keywords</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($seos as $seo)
            <tr>
                <td>{{ $seo->language->title }}</td>
            <td>{{ (["main"=>__("frontend.menu_main"),"about"=>__("frontend.menu_about"), "teacher"=>__("frontend.menu_teachers"),"gallery"=>__("frontend.menu_gallery"),"faq"=>__("frontend.menu_fag"),"ielts"=>__("frontend.menu_ielts"),"course"=>__("frontend.menu_course"), "schedule"=>__("frontend.menu_schedule"),"price"=>__("frontend.menu_price"), "news"=>__("validation.attributes.news_id"),"contact"=>__("frontend.menu_contact")])[$seo->page] }}</td>
            <td>{{ $seo->title }}</td>
            <td>{{ $seo->description }}</td>
            <td>{{ $seo->keywords }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['seos.destroy', $seo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('seos.show', [$seo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('seos.edit', [$seo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(". __("admin.sure") . ")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
