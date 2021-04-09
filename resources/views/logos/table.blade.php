<div class="table-responsive">
    <table class="table" id="logos-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.img")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($logos as $logo)
            <tr>
                <td><img src="{{ $logo->img }}" height="40px"></td>
                <td width="120">
                    {!! Form::open(['route' => ['logos.destroy', $logo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('logos.show', [$logo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('logos.edit', [$logo->id]) }}" class='btn btn-default btn-xs'>
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
