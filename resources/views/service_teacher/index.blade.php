@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Услуги - Преподаватель</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       data-toggle="modal" data-target="#addTeacher"


                    >
                        {{__("admin.create")}}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table" id="services-table">
                        <thead>
                        <tr>
                            <th>Учитель/Преподаватель</th>
                            <th>Услуга</th>
                            <th colspan="3">{{__("admin.action")}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($service_teacher as $item)
                            <tr>
                                <td>{{ $item->teacherServ->name }}</td>
                                <td>{{ $item->service->title }}</td>
                                <td width="120">
                                    {!! Form::open(['route' => ['service-teacher.destroy', $item->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(" . __("admin.sure") . ")"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="addTeacher" tabindex="-1" role="dialog" aria-labelledby="addTeacher" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить преподавателя</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <form method="post"  action="{{route("service-teacher.store")}}">
                        <div class="modal-body">
                            <input hidden name="service_id" value="{{$service->id}}">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Преподаватель:</label>
                            <select class="custom-select" name="teacher">
                            @foreach($teachers as $teacher)
                                <option value="{{$teacher->id}}">
                                    {{$teacher->name}}
                                </option>
                            @endforeach
                            </select>
                        </div>
                         </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>

                        </div>
                    </form>


            </div>
        </div>
    </div>
@endsection


