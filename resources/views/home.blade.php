@extends('protfolio')

@section('main_content')
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>{{ $data['name'] }}</h1>
        <p>I'm <span class="typed" data-typed-items="{{ implode(',', $data['roles']) }}"></span></p>
    </div>
</section>
@endsection
