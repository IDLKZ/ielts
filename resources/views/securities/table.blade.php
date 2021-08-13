<div class="table-responsive">
    <table class="table" id="securities-table">
        <thead>
            <tr>
                <th>{{__("admin.title_ru")}}</th>
        <th>{{__("admin.title_kz")}}</th>
        <th>{{__("admin.title_en")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($securities as $security)
            <tr>
                <td>{{ $security->title_ru }}</td>
            <td>{{ $security->title_kz }}</td>
            <td>{{ $security->title_en }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['securities.destroy', $security->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('securities.show', [$security->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('securities.edit', [$security->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
