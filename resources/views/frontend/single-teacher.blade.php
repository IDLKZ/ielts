@extends("frontend.layout.layout")
@push('styles')
    <style>
        @media only screen and (min-width: 768px) {
            .teacher-img {
                position: absolute;width: 100%; z-index: 1000; top: -200px;
            }
        }
        .bg-light-gray {
            background-color: #f7f7f7;
        }
        .table-bordered thead td, .table-bordered thead th {
            border-bottom-width: 2px;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }


        .bg-sky.box-shadow {
            box-shadow: 0px 5px 0px 0px #00a2a7
        }

        .bg-orange.box-shadow {
            box-shadow: 0px 5px 0px 0px #af4305
        }

        .bg-green.box-shadow {
            box-shadow: 0px 5px 0px 0px #4ca520
        }

        .bg-yellow.box-shadow {
            box-shadow: 0px 5px 0px 0px #dcbf02
        }

        .bg-pink.box-shadow {
            box-shadow: 0px 5px 0px 0px #e82d8b
        }

        .bg-purple.box-shadow {
            box-shadow: 0px 5px 0px 0px #8343e8
        }

        .bg-lightred.box-shadow {
            box-shadow: 0px 5px 0px 0px #d84213
        }


        .bg-sky {
            background-color: #02c2c7
        }

        .bg-orange {
            background-color: #e95601
        }

        .bg-green {
            background-color: #5bbd2a
        }

        .bg-yellow {
            background-color: #f0d001
        }

        .bg-pink {
            background-color: #ff48a4
        }

        .bg-purple {
            background-color: #9d60ff
        }

        .bg-lightred {
            background-color: #ff5722
        }

        .padding-15px-lr {
            padding-left: 15px;
            padding-right: 15px;
        }
        .padding-5px-tb {
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .margin-10px-bottom {
            margin-bottom: 10px;
        }
        .border-radius-5 {
            border-radius: 5px;
        }

        .margin-10px-top {
            margin-top: 10px;
        }
        .font-size14 {
            font-size: 14px;
        }

        .text-light-gray {
            color: #d6d5d5;
        }
        .font-size13 {
            font-size: 13px;
        }

        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .table td, .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
    </style>
@endpush
@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/3.jpg" alt="background"></div>

    </section><!-- /.page-title -->

        <div class="container">
            <div class="row py-4 my-4">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img class="teacher-img" src="{{$teacher->img}}">
                    @if($teacher->socialLink->isNotEmpty())
                        @foreach($teacher->socialLink as $link)
                            <a href="{{$link->link}}" class="fs-24 mr-2"><i class="{{$link->icon}}"></i></a>
                        @endforeach
                    @endif
                </div>
                <div class="col-md-8">
                    <h1 class="heading-1">
                        {{$teacher->name}}
                    </h1>
                    <p class="subheading-1">
                        {{$teacher->position}}
                    </p>
                    <div class="text-dark">
                        {!! $teacher->description !!}
                    </div>

                </div>
            </div>


            @if($workdays->isNotEmpty())
                <div class="service-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="single-feature__content">
                                <h3 style="text-transform: none">{{__('frontend.schedule_title')}}</h3>
                            </div>
                            <div class="col-lg-12 d-flex mt-2">
                                    <div class="container">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                <tr class="bg-light-gray">
                                                    @foreach($weekdays as $day)
                                                        <th class="text-uppercase">
                                                            {{$day["title_" . LaravelLocalization::getCurrentLocale()]}}
                                                        </th>
                                                    @endforeach
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @while(true)
                                                        @for($i=0;;$i++)
                                                            <tr>
                                                            @if(!isset($workdays[3][$i]) && !isset($workdays[4][$i]) && !isset($workdays[5][$i])  && !isset($workdays[6][$i]) && !isset($workdays[7][$i]) && !isset($workdays[8][$i])  && !isset($workdays[9][$i]))
                                                                @break
                                                            @else
                                                                @for($j=3;$j<=9;$j++)
                                                                    @if(isset($workdays[$j][$i]))
                                                                        <td>
                                                                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$workdays[$j][$i]["title"]}}</span>
                                                                            <div class="margin-10px-top font-size14">{{$workdays[$j][$i]["time_start"]}}-{{$workdays[$j][$i]["time_end"]}}</div>
                                                                            <div class="font-size13 text-light-gray">
                                                                                <p>{{ $teacher->name }}</p>
                                                                            </div>
                                                                            <button class="show-pupil btn btn-success btn-sm my-2" data-pupils="{{$workdays[$j][$i]["pupils"]}}" style="line-height: 0!important; height: 25px; width: 50px">
                                                                                <i class="fas fa-users"></i>
                                                                                {{count($workdays[$j][$i]["pupils"])}}
                                                                            </button>

                                                                        @if(auth()->check())
                                                                            <button  class="add-pupil btn btn-info btn-sm" style="line-height: 0!important; height: 25px" data-id="{{$workdays[$j][$i]["id"]}}">Добавить <i class="fas fa-user-plus"></i> </button>
                                                                            @endif
                                                                        </td>
                                                                    @else
                                                                        <td>

                                                                        </td>
                                                                    @endif
                                                                    @endfor

                                                            @endif
                                                            </tr>
                                                        @endfor
                                                        @break
                                                    @endwhile
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                            </div>

                        </div>
                    </div>
                </div>
            @endif




            @if($prices->isNotEmpty())
            <div class="row py-4 my-4">
                <div class="col-md-12">
                    <h3 class="text-dark" style="text-transform: none">Услуги</h3>
                </div>

                @foreach($prices as $price)
                        <!-- Pricing Table-->
                            <div class="col-md-4 mb-5 mb-lg-0" data-aos="zoom-in">
                                <div class="bg-white p-5 rounded-lg shadow">
                                    <h1 class="h2 text-uppercase font-weight-bold mb-4">{{$price->title}}</h1>
                                    <h2 class="h1 font-weight-bold">{{$price->price}} {{$price->currency}}<span class="text-small font-weight-normal ml-2">/ {{$price->subtitle}}</span></h2>

                                    <div class="custom-separator my-4 mx-auto bg-primary"></div>

                                    <ul class="list-unstyled my-5 text-small text-left">
                                        @foreach($price->benefits as $benefit)
                                            <li class="mb-3">
                                                <i class="fa fa-check mr-2 text-primary"></i>
                                                {{$benefit}}
                                            </li>
                                        @endforeach


                                    </ul>
                                    <a href="#ex{{$price->id}}" rel="modal:open" class="btn btn-primary btn-block p-2 shadow rounded-pill">{{__("frontend.info")}}</a>

                                </div>
                            </div>
                            <!-- END -->
                        @endforeach

            </div>
            @endif
        </div>

        <div class="modal fade" id="addPupil" tabindex="-1" role="dialog" aria-labelledby="addPupil" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Добавить студента</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form method="post"  action="{{route("pupils.store")}}">
                        <div class="modal-body">
                            <input hidden name="workday_id" id="workdays">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Студент:</label>
                                <input type="text" class="form-control" name="student" id="student">
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

        <div class="modal fade" id="showPupil" tabindex="-1" role="dialog" aria-labelledby="showPupil" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Записанные студенты</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table" id="socials-table">
                            <thead>
                            <tr>
                                <th>Студент</th>
                                @auth()
                                <th colspan="3">{{__("admin.action")}}</th>
                                @endauth
                            </tr>
                            </thead>
                            <tbody class="sp-tbody">



                            </tbody>
                        </table>


                    </div>




                </div>
            </div>
        </div>



@endsection

@push("scripts")
    <script type="text/javascript">
        $(".add-pupil").on("click",function () {
        let id = $(this).attr("data-id");
        $("#workdays").attr("value",id);
        $("#addPupil").modal("show");

        })

        $(".show-pupil").on("click",function (){
            let pupils = JSON.parse($(this).attr("data-pupils"));
            let string = null;
            let route = @json(route("pupils.index"));
            if(pupils.length){
                for (let i = 0; i<pupils.length; i++){
                    let routeLink = route + '/' + pupils[i].id;
                    @if(auth()->check())
                    string +=
                        "<tr>" +
                        "<td>" + pupils[i].student  +"</td>"+
                        "<td>" +
                        "<a class='btn btn-danger' href=" + routeLink + ">Удалить</a>"
                        +"</td>"
                        "</tr>";
                    @endauth
                    @guest
                        string+= "<tr>" + "<td>" + pupils[i].student  +"</td>"+ "</tr>"
                    @endguest
                }
            }

            $(".sp-tbody").append(string);
            $("#showPupil").modal("show");


        });







    </script>
@endpush
