<div class="table-responsive">
    <table class="table" id="phones-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.phone")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($phones as $phone)
            <tr>
                <td>{{ $phone->phone }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['phones.destroy', $phone->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('phones.show', [$phone->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('phones.edit', [$phone->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(" . __("admin.sure") . ")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
