@extends('protfolio')

@section('main_content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Project Details</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Project</li>
            </ol>
        </div>
    </div>
</section>

<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        @foreach($projects as $project)
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @foreach($project['images'] as $image)
                        <div class="swiper-slide">
                            <img src="{{ $image }}" alt="">
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Project Information</h3>
                    <ul>
                        <li><strong>Category</strong>: {{ $project['category'] }}</li>
                        <li><strong>Client</strong>: {{ $project['client'] }}</li>
                        <li><strong>Project Date</strong>: {{ $project['date'] }}</li>
                        <li><strong>Project URL</strong>: <a href="{{ $project['url'] }}" target="_blank">{{ $project['url'] }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
