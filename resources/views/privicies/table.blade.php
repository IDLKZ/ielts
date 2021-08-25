<div class="table-responsive">
    <table class="table" id="privicies-table">
        <thead>
            <tr>
                <th>{{__("admin.language")}}</th>
        <th>{{__("admin.title")}}</th>
        <th>{{__("admin.description")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($privicies as $privicy)
            <tr>
                <td>{{ $privicy->language_id }}</td>
            <td>{{ $privicy->title }}</td>
            <td>{!! $privicy->description !!}</td>
                <td width="120">
                    {!! Form::open(['route' => ['privicies.destroy', $privicy->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('privicies.show', [$privicy->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('privicies.edit', [$privicy->id]) }}" class='btn btn-default btn-xs'>
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
