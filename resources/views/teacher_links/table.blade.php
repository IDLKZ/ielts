<div class="table-responsive">
    <table class="table" id="teacherLinks-table">
        <thead>
            <tr>
                <th>{{__("admin.teacher_links")}}</th>
        <th>Icon</th>
        <th>{{__("admin.teacher_links")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teacherLinks as $teacherLink)
            <tr>
                <td>{{ $teacherLink->teacher->name }}</td>
            <td><i class="{{ $teacherLink->icon }}"></i></td>
            <td><a href="{{ $teacherLink->link }}">{{$teacherLink->link}}</a></td>
                <td width="120">
                    {!! Form::open(['route' => ['teacherLinks.destroy', $teacherLink->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teacherLinks.show', [$teacherLink->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('teacherLinks.edit', [$teacherLink->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(" . __('admin.sure') . ")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
