@extends("frontend.layout.layout")
@push("styles")
    <style>
        p{
            color: #0b0b0b;
        }
        li{
            color: #0b0b0b;
        }
    </style>
@endpush
@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading mb-0">{{__("admin.documents")}}</h1>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->


    <section>
        <div class="container">
            <div class="row">
                @if($documents->isNotEmpty())
                    <table class="table table-dark">
                        <thead>
                        <tr  class="text-center">
                            <th scope="col" class="fs-18">#</th>
                            <th scope="col" class="fs-18">{{__("admin.title")}}</th>
                            <th scope="col" class="fs-18">{{__("admin.documents")}}</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($documents as $document)
                            <tr class="text-center">
                                <th scope="row" class="fs-18">{{$loop->iteration}}</th>
                                <td class="fs-18">{{$document["title_" . LaravelLocalization::getCurrentLocale()]}}</td>
                                <td>
                                    <a href="{{ $document->document }}" download>
                                        <i class="fas fa-upload text-white fs-24"></i>
                                    </a>
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                     </table>
                @endif
            </div>
        </div>


    </section>


@endsection

