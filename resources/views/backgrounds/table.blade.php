<div class="table-responsive">
    <table class="table" id="backgrounds-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.language_id")}}</th>
        <th>{{__("validation.attributes.title")}}</th>
        <th>{{__("validation.attributes.subtitle")}}</th>
        <th>{{__("validation.attributes.video_url")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($backgrounds as $background)
            <tr>
                <td>{{ $background->language->title }}</td>
            <td>{{ $background->title }}</td>
            <td>{{ $background->subtitle }}</td>
            <td>
                <video width="240" height="180" controls>
                    <source src="{{URL::asset($background->video_url)}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </td>
                <td width="120">
                    {!! Form::open(['route' => ['backgrounds.destroy', $background->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('backgrounds.show', [$background->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('backgrounds.edit', [$background->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(". __("admin.sure").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
