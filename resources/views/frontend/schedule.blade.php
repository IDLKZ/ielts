@extends("frontend.layout.layout")

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
                        <table class="table table-bordered table-responsive-md table-responsive-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">{{__('frontend.schedules_weekday')}}</th>
                                <th scope="col">{{__('frontend.schedules_start')}}</th>
                                <th scope="col">{{__('frontend.schedules_end')}}</th>
                                <th scope="col">{{__('frontend.schedules_title')}}</th>
                                <th scope="col">{{__('frontend.schedules_type')}}</th>
                                <th scope="col">{{__('frontend.schedules_coachers')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($schedules as $day => $schedule)
                                <th class="thead-dark">
                                    {{$day}}
                                </th>
                                @foreach($schedule as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->start}}</td>
                                        <td>{{$item->end}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->type}}</td>
                                        <td>
                                            @foreach(json_decode($item->coachers) as $coucher)
                                                <p>{{ $coucher }}</p>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h1>{{__('frontend.not_found')}}</h1>
                    @endif

                </div>

            </div>
        </div>
    </div>

@endsection

