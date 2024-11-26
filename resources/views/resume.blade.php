@extends('protfolio')

@section('main_content')
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Dedicated and dynamic Information Technology professional with [X years] of hands-on experience in designing, implementing, and maintaining cutting-edge IT solutions.</p>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-up">
          <h3 class="resume-title">Summary</h3>
          <div class="resume-item pb-0">
            <h4>{{ $summary['name'] }}</h4>
            <p><em>{{ $summary['description'] }}</em></p>
            <ul>
              <li>{{ $summary['contact']['phone'] }}</li>
              <li>{{ $summary['contact']['email'] }}</li>
            </ul>
          </div>

          <h3 class="resume-title">Education</h3>
          @foreach($education as $edu)
          <div class="resume-item">
            <h4>{{ $edu['degree'] }}</h4>
            <h5>{{ $edu['years'] }}</h5>
            <p><em>{{ $edu['institution'] }}</em></p>
          </div>
          @endforeach
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Professional Experience</h3>
          @foreach($experience as $exp)
          <div class="resume-item">
            <h4>{{ $exp['title'] }}</h4>
            <h5>{{ $exp['years'] }}</h5>
            <p><em>{{ $exp['company'] }}</em></p>
            <ul>
              @foreach($exp['responsibilities'] as $responsibility)
              <li>{{ $responsibility }}</li>
              @endforeach
            </ul>
          </div>
          @endforeach
        </div>
      </div>

    </div>
  </section>
@endsection
