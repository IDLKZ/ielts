@extends("frontend.layout.layout")
@push('styles')
    <style>
        body{
            margin-top:20px;
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
        <div class="bg-img"><img src="/assets/images/page-titles/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if ($header)
                        <h1 class="pagetitle__heading mb-0">{{$header->title}}</h1>
                    @else
                        <h1 class="pagetitle__heading mb-0">{{__('frontend.schedule_title')}}</h1>
                    @endif

                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <div class="service-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="single-feature__content">
                    <h3 style="text-transform: none">{{__('frontend.schedule_title')}}</h3>
                </div>
                <div class="col-lg-12 d-flex mt-2">
                    @if(count($schedules)>0)
{{--                        <table class="table table-bordered table-responsive-md table-responsive-sm">--}}
{{--                            <thead class="thead-dark">--}}
{{--                            <tr>--}}
{{--                                <th scope="col">{{__('frontend.schedules_weekday')}}</th>--}}
{{--                                <th scope="col">{{__('frontend.schedules_start')}}</th>--}}
{{--                                <th scope="col">{{__('frontend.schedules_end')}}</th>--}}
{{--                                <th scope="col">{{__('frontend.schedules_title')}}</th>--}}
{{--                                <th scope="col">{{__('frontend.schedules_type')}}</th>--}}
{{--                                <th scope="col">{{__('frontend.schedules_coachers')}}</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($schedules as $day => $schedule)--}}
{{--                                <th class="thead-dark">--}}
{{--                                    {{$day}}--}}
{{--                                </th>--}}
{{--                                @foreach($schedule as $item)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$loop->iteration}}</td>--}}
{{--                                        <td>{{$item->start}}</td>--}}
{{--                                        <td>{{$item->end}}</td>--}}
{{--                                        <td>{{$item->title}}</td>--}}
{{--                                        <td>{{$item->type}}</td>--}}
{{--                                        <td>--}}
{{--                                            @foreach(json_decode($item->coachers) as $coucher)--}}
{{--                                                <p>{{ $coucher }}</p>--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}

                        <div class="container">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr class="bg-light-gray">
                                        @foreach(\App\Models\Language::getDays() as $item)
                                            <th class="text-uppercase">{{$item}}</th>
                                        @endforeach
                                    </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($schedules as $item)

                                                    <tr>

                                                            @if (array_key_exists('Monday', $item))
                                                                <td>
                                                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$item['Monday']['title']}}</span>
                                                                    <div class="margin-10px-top font-size14">{{$item['Monday']['start']}}-{{$item['Monday']['end']}}</div>
                                                                    <div class="font-size13 text-light-gray">
                                                                        @foreach(json_decode($item['Monday']['coachers']) as $coucher)
                                                                            <p>{{ $coucher }}</p>
                                                                        @endforeach
                                                                    </div>
                                                                </td>
                                                        @else
                                                                <td></td>
                                                        @endif
                                                            @if (array_key_exists('Tuesday', $item))
                                                                    <td>
                                                                        <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$item['Tuesday']['title']}}</span>
                                                                        <div class="margin-10px-top font-size14">{{$item['Tuesday']['start']}}-{{$item['Tuesday']['end']}}</div>
                                                                        <div class="font-size13 text-light-gray">
                                                                            @foreach(json_decode($item['Tuesday']['coachers']) as $coucher)
                                                                                <p>{{ $coucher }}</p>
                                                                            @endforeach
                                                                        </div>
                                                                    </td>
                                                                @else
                                                                    <td></td>
                                                                @endif
                                                            @if (array_key_exists('Wednesday', $item))
                                                                    <td>
                                                                        <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$item['Wednesday']['title']}}</span>
                                                                        <div class="margin-10px-top font-size14">{{$item['Wednesday']['start']}}-{{$item['Wednesday']['end']}}</div>
                                                                        <div class="font-size13 text-light-gray">
                                                                            @foreach(json_decode($item['Wednesday']['coachers']) as $coucher)
                                                                                <p>{{ $coucher }}</p>
                                                                            @endforeach
                                                                        </div>
                                                                    </td>
                                                                @else
                                                                    <td></td>
                                                                @endif
                                                            @if (array_key_exists('Thursday', $item))
                                                                    <td>
                                                                        <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$item['Thursday']['title']}}</span>
                                                                        <div class="margin-10px-top font-size14">{{$item['Thursday']['start']}}-{{$item['Thursday']['end']}}</div>
                                                                        <div class="font-size13 text-light-gray">
                                                                            @foreach(json_decode($item['Thursday']['coachers']) as $coucher)
                                                                                <p>{{ $coucher }}</p>
                                                                            @endforeach
                                                                        </div>
                                                                    </td>
                                                                @else
                                                                    <td></td>
                                                                @endif
                                                            @if (array_key_exists('Friday', $item))
                                                                    <td>
                                                                        <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$item['Friday']['title']}}</span>
                                                                        <div class="margin-10px-top font-size14">{{$item['Friday']['start']}}-{{$item['Friday']['end']}}</div>
                                                                        <div class="font-size13 text-light-gray">
                                                                            @foreach(json_decode($item['Friday']['coachers']) as $coucher)
                                                                                <p>{{ $coucher }}</p>
                                                                            @endforeach
                                                                        </div>
                                                                    </td>
                                                                @else
                                                                    <td></td>
                                                                @endif
                                                            @if (array_key_exists('Saturday', $item))
                                                                    <td>
                                                                        <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$item['Saturday']['title']}}</span>
                                                                        <div class="margin-10px-top font-size14">{{$item['Saturday']['start']}}-{{$item['Saturday']['end']}}</div>
                                                                        <div class="font-size13 text-light-gray">
                                                                            @foreach(json_decode($item['Saturday']['coachers']) as $coucher)
                                                                                <p>{{ $coucher }}</p>
                                                                            @endforeach
                                                                        </div>
                                                                    </td>
                                                                @else
                                                                    <td></td>
                                                                @endif
                                                            @if (array_key_exists('Sunday', $item))
                                                                    <td>
                                                                        <span class="bg-orange padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$item['Sunday']['title']}}</span>
                                                                        <div class="margin-10px-top font-size14">{{$item['Sunday']['start']}}-{{$item['Sunday']['end']}}</div>
                                                                        <div class="font-size13 text-light-gray">
                                                                            @foreach(json_decode($item['Sunday']['coachers']) as $coucher)
                                                                                <p>{{ $coucher }}</p>
                                                                            @endforeach
                                                                        </div>
                                                                    </td>
                                                                @else
                                                                    <td></td>
                                                                @endif

                                                    </tr>

                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <h1>{{__('frontend.not_found')}}</h1>
                    @endif

                </div>

            </div>
        </div>
    </div>

@endsection

