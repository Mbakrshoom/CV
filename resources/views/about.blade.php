@extends('portfolio')
@section('main_content')
<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/1716062895938.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Personal Data</h3>
          <p class="fst-italic">
            In this section, we will learn about my personal data, which is name, age, and phone number, etc...
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>{{ $personalData['name'] }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $personalData['birthday'] }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $personalData['website'] }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $personalData['phone'] }}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $personalData['city'] }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $personalData['age'] }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $personalData['degree'] }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $personalData['email'] }}</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Skills</h2>
        <p>The skills I acquired from my university life also from online learning from YouTube channels and practical application.</p>
      </div>

      <div class="row skills-content">
        @foreach($skills as $skill)
        <div class="col-lg-6" data-aos="fade-up">
          <div class="progress">
            <span class="skill">{{ $skill['name'] }} <i class="val">{{ $skill['level'] }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill['level'] }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
</section>
@endsection
