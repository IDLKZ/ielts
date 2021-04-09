<div class="table-responsive">
    <table class="table" id="headers-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.language_id")}}</th>
        <th>Страница(Page)</th>
        <th>{{__("validation.attributes.title")}}</th>
        <th>{{__("validation.attributes.subtitle")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($headers as $header)
            <tr>
                <td>{{ $header->language->title }}</td>
            <td>{{
            (["main"=>__("frontend.menu_main"),"advantage"=>__("frontend.menu_advantage"),"ielts"=>__("frontend.menu_ielts"),"about"=>__("frontend.menu_about"),"review"=>__("frontend.menu_review"),"price"=>__("frontend.menu_price"),"service"=>__("frontend.menu_service"),"news"=>__("validation.attributes.news_id"),"contact"=>__("frontend.menu_contact"),"faq"=>__("frontend.menu_fag"),"teacher"=>__("frontend.menu_teachers"),"gallery"=>__("frontend.menu_gallery"),"course"=>__("frontend.menu_course"), "schedule"=>__("frontend.menu_schedule")])[$header->page]

             }}</td>
            <td>{{ $header->title }}</td>
            <td>{{ $header->subtitle }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['headers.destroy', $header->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('headers.show', [$header->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('headers.edit', [$header->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(". __("admin.sure") .")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
