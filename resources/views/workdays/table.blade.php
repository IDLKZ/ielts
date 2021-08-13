<div class="table-responsive">
    <table class="table" id="workdays-table">
        <thead>
            <tr>
                <th>{{__("admin.weekday_id")}}</th>
        <th>{{__("admin.teachers")}}</th>
        <th>{{__("admin.title")}}</th>
        <th>{{__("admin.date_start")}}</th>
        <th>{{__("admin.date_end")}}</th>
        <th>{{__("admin.time_start")}}</th>
        <th>{{__("admin.time_end")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($workdays as $workday)
            <tr>
                <td>{{ $workday->weekday->title }}</td>
            <td>{{ $workday->teacher->name }}</td>
            <td>{{ $workday->title }}</td>
            <td>{{ $workday->date_start }}</td>
            <td>{{ $workday->date_end }}</td>
            <td>{{ $workday->time_start }}</td>
            <td>{{ $workday->time_end }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['workdays.destroy', $workday->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('workdays.show', [$workday->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('workdays.edit', [$workday->id]) }}" class='btn btn-default btn-xs'>
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
