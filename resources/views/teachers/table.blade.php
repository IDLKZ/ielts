<div class="table-responsive">
    <table class="table" id="teachers-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.language_id")}}</th>
        <th>{{__("validation.attributes.alias")}}</th>
        <th>{{__("validation.attributes.name")}}</th>
        <th>{{__("validation.attributes.position")}}</th>
        <th>{{__("validation.attributes.img")}}</th>
        <th>{{__("validation.attributes.description")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->language->title }}</td>
            <td><a href="{{ $teacher->alias }}">{{ $teacher->alias }}</a></td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->position }}</td>
            <td><img src="{{ $teacher->img }}" height="80"> </td>
            <td>{!! $teacher->description !!}</td>
                <td width="120">
                    {!! Form::open(['route' => ['teachers.destroy', $teacher->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teachers.show', [$teacher->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('teachers.edit', [$teacher->id]) }}" class='btn btn-default btn-xs'>
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
