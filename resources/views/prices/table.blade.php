<div class="table-responsive">
    <table class="table" id="prices-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.language_id")}}</th>
        <th>{{__("validation.attributes.title")}}</th>
        <th>{{__("admin.price")}}</th>
        <th>{{__("validation.attributes.currency")}}</th>
        <th>{{__("admin.advantages")}}</th>
        <th>{{__("validation.attributes.subtitle")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prices as $price)
            <tr>
                <td>{{ $price->language->title }}</td>
            <td>{{ $price->title }}</td>
            <td>{{ $price->price }}</td>
            <td>{{ $price->currency }}</td>
            <td>
                @foreach(json_decode($price->benefits) as $item)
                    <p>{{$item}}</p>
                @endforeach
            </td>
            <td>{{ $price->subtitle }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['prices.destroy', $price->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prices.show', [$price->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('prices.edit', [$price->id]) }}" class='btn btn-default btn-xs'>
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
