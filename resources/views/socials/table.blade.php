<div class="table-responsive">
    <table class="table" id="socials-table">
        <thead>
            <tr>
                <th>Лого</th>
        <th>{{__("validation.attributes.links")}}</th>
                <th colspan="3">{{__("admin.action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($socials as $social)
            <tr>
                <td> <i class="{{ $social->icon }}"></i></td>
            <td> <a href="{{$social->link}}" target="_blank">{{ $social->link }}</a></td>
                <td width="120">
                    {!! Form::open(['route' => ['socials.destroy', $social->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('socials.show', [$social->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('socials.edit', [$social->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(". __("admin.sure") . ")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
