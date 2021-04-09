<div class="table-responsive">
    <table class="table" id="footers-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.language_id")}}</th>
        <th>{{__("validation.attributes.img")}}</th>
        <th>{{__("validation.attributes.title")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($footers as $footer)
            <tr>
                <td>{{ $footer->language->title }}</td>
            <td><img src="{{ $footer->img }}" height="40px"></td>
            <td>{{ $footer->title }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['footers.destroy', $footer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('footers.show', [$footer->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('footers.edit', [$footer->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(".__("admin.sure").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
