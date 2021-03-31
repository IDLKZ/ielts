<div class="table-responsive">
    <table class="table" id="abouts-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.language_id")}}</th>
        <th>{{__("validation.attributes.title")}}</th>
        <th>{{__("validation.attributes.description")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($abouts as $about)
            <tr>
                <td>{{ $about->language->title }}</td>
            <td>{{ $about->title }}</td>
            <td>{!! $about->description !!}</td>
                <td width="120">
                    {!! Form::open(['route' => ['abouts.destroy', $about->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('abouts.show', [$about->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('abouts.edit', [$about->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(". __("admin.sure") .")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
