<div class="table-responsive">
    <table class="table" id="advantages-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.language_id")}}</th>
        <th>{{__("validation.attributes.title")}}</th>
        <th>{{__("validation.attributes.subtitle")}}</th>
        <th>{{__("validation.attributes.img")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($advantages as $advantage)
            <tr>
                <td>{{ $advantage->language->title }}</td>
            <td>{{ $advantage->title }}</td>
            <td>{{ $advantage->subtitle }}</td>
            <td><img src= "{{ $advantage->img }}" height="80"> </td>
                <td width="120">
                    {!! Form::open(['route' => ['advantages.destroy', $advantage->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('advantages.show', [$advantage->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('advantages.edit', [$advantage->id]) }}" class='btn btn-default btn-xs'>
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
