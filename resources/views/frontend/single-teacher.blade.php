@extends("frontend.layout.layout")
@push('styles')
    <style>
        @media only screen and (min-width: 768px) {
            .teacher-img {
                position: absolute;width: 100%; z-index: 1000; top: -200px;
            }
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
                </div>
                <div class="col-md-8">
                    <h1 class="heading-1">
                        {{$teacher->name}}
                    </h1>
                    <p class="subheading-1">
                        {{$teacher->position}}
                    </p>
                    @if($teacher->socialLink->isNotEmpty())
                        @foreach($teacher->socialLink as $link)
                        <a href="{{$link->link}}" class="fs-24"><i class="{{$link->icon}}"></i></a>
                        @endforeach
                    @endif
                    <div class="text-dark">
                        {!! $teacher->description !!}
                    </div>

                </div>
            </div>

            <div class="row py-4 my-4">
                <div class="col-md-12">
                    <h3 class="text-dark" style="text-transform: none">{{__('frontend.schedule_title')}}</h3>
                    @if($workdays->isNotEmpty())
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">{{__("admin.weekday_id")}}</th>
                                <th scope="col">{{__("admin.title")}}</th>
                                <th scope="col">{{__("admin.date_start")}}</th>
                                <th scope="col">{{__("admin.date_end")}}</th>
                                <th scope="col">{{__("admin.time_start")}}</th>
                                <th scope="col">{{__("admin.time_end")}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($workdays as $workday)
                                <tr>
                                    <th scope="row">{{$workday->weekday["title_" . LaravelLocalization::getCurrentLocale()]}}</th>
                                    <td>{{$workday->title}}</td>
                                    <td>{{$workday->date_start}}</td>
                                    <td>{{$workday->date_end}}</td>
                                    <td>{{$workday->time_start}}</td>
                                    <td>{{$workday->time_end}}</td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    @endif
                </div>
            </div>


            <div class="row py-4 my-4">
                <div class="col-md-12">
                    <h3 class="text-dark" style="text-transform: none">Услуги</h3>
                </div>
            @if($prices->isNotEmpty())
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
                    @endif
            </div>

        </div>

@endsection

