<div class="table-responsive">
    <table class="table" id="ielts-table">
        <thead>
            <tr>
        <th>{{__("validation.attributes.title")}}</th>
        <th>{{__("validation.attributes.language_id")}}</th>
        <th>{{__("validation.attributes.img")}}</th>
        <th>{{__("validation.attributes.description")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ielts as $ielts)
            <tr>

            <td>{{ $ielts->title }}</td>
            <td>{{ $ielts->language->title }}</td>
            <td>   <img src="{{ $ielts->img }}" height="80px"></td>
            <td>{!! $ielts->description !!}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ielts.destroy', $ielts->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ielts.show', [$ielts->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ielts.edit', [$ielts->id]) }}" class='btn btn-default btn-xs'>
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
