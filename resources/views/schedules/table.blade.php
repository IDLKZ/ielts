<div class="table-responsive">
    <table class="table" id="schedules-table">
        <thead>
            <tr>
                <th>Language</th>
                <th>Start</th>
        <th>End</th>
        <th>Weekday</th>
        <th>Coachers</th>
        <th>Title</th>
        <th>Type</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($schedules as $schedule)
            <tr>
                <td>{{ $schedule->language->title }}</td>
                <td>{{ $schedule->start }}</td>
            <td>{{ $schedule->end }}</td>
            <td>{{ $schedule->weekday }}</td>
            <td>
                @foreach(json_decode($schedule->coachers) as $coucher)
                    <p>{{ $coucher  }}</p>
                @endforeach
            </td>
            <td>{{ $schedule->title }}</td>
            <td>{{ $schedule->type }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['schedules.destroy', $schedule->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('schedules.show', [$schedule->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('schedules.edit', [$schedule->id]) }}" class='btn btn-default btn-xs'>
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
