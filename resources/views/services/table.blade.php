<div class="table-responsive">
    <table class="table" id="services-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.language_id")}}</th>
        <th>{{__("validation.attributes.img")}}</th>
        <th>{{__("validation.attributes.title")}}</th>
        <th>{{__("validation.attributes.subtitle")}}</th>
        <th>{{__("validation.attributes.description")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->language->title }}</td>
            <td><img src="{{ $service->img }}" height="80"></td>
            <td>{{ $service->title }}</td>
            <td>{{ $service->subtitle }}</td>
            <td>{!! $service->description !!}</td>
                <td width="120">
                    {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('services.show', [$service->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('service-teacher.index', ['service_id'=>$service->id]) }}" class='btn btn-default btn-xs'>
                            <i class="fas fa-user-plus"></i>
                        </a>
                        <a href="{{ route('services.edit', [$service->id]) }}" class='btn btn-default btn-xs'>
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
