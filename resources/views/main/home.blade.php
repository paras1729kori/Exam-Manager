@extends('layout.app')

@section('content')
  <style>
    p{
      margin:0;
      paddig:0;
    }
  </style>
  <div class="container mt-4">
    <div class="d-flex flex-column justify-content-center">
      <h3><strong>About Somaiya Ayurvihar</strong></h3>
      <p>Padmabhushan Shri Karamshi Jethabhai Somaiya founded Somaiya Vidyavihar an education trust in 1959, to provide quality holistic education. It was founded on the belief that, education is an important pillar of nation building with the power to change lives, and that it is the duty of the privileged to help provide it to whoever aspires to be educated. Somaiya Vidyavihar (SVV) encompasses 34 institutions, with more than 39,000 students and 1,500 faculty. Its educational institutes are spread across two main campuses - a 50 acre complex in Vidyavihar and a 28 acre complex in Sion both located in the heart of Mumbai besides a number of smaller campuses across rural Maharashtra, Karnataka and Gujarat. SVV offers Degree, Diploma & Certificate courses at Undergraduate, Post Graduate and Doctoral levels. Somaiya Vidyavihar also runs a few autonomous Post-Graduate Courses, Vocational Training Courses and High Schools. Somaiya Vidyavihar fosters an ecosystem that excels in education, research and service, a place where knowledge is preserved, disseminated and new knowledge is created. It is known as much for its Science, Technology, Medicine, Engineering, Management, Social Sciences and Commerce programs, as for its programs for academic studies in various Faiths and Cultures of India. Shri. Samir Somaiya, a Cornel University and Harvard Business School alumnus is the President of Somaiya Vidyavihar. For more details, visit <a style="color:maroon;" target="_blank" href="https://kjsieit.somaiya.edu">kjsieit.somaiya.edu/en</a></p>
      <br>
      
      <h3><strong>About K. J. Somaiya Institute of Engineering and Information Technology, Sion</strong></h3>
      <p>The K. J. Somaiya Institute of Engineering and Information Technology (KJSIEIT), was established by the Somaiya Trust in the year 2001 at Ayurvihar campus, Sion. The institute was set up primarily in response to the need for imparting quality education in the modern field of Information Technology and the allied branches of Engineering and Technology. The College is housed in a G+8 storeyed building and in International Standard of Riturang building with airy classrooms, hi-tech laboratories, auditorium, canteen, common rooms etc.</p>
      <br>
      
      <h3><strong>Vision of the Institute</strong></h3>
      <p>To emerge as a synonym of quality, excellence and commitment in the field of engineering education by unlocking potential, nurturing talent and transforming young minds to create future ready engineers.</p>
      <br>
      
      <h3><strong>Mission of the Institute</strong></h3>
      <ul>
        <li>To provide students with a thorough knowledge of engineering to refine their professional skills.</li>
        <li>To nurture creativity and innovation while encouraging multidisciplinary interaction.</li>
        <li>To train students to be industry ready and capable of working effectively as an individual and in team.</li>
        <li>To inculcate ethical behaviour, responsibility and commitment among students.</li>
      </ul>
      <br>

      <h3><strong>Quality Policy</strong></h3>
      <ul>
        <li>To conform to the requirements of regulatory authorities viz. AICTE, DTE and University of Mumbai.</li>
        <li>To maintain transparency and fair practices in admission and recruitment processes.</li>
        <li>To ensure continuous evaluation and examination process.</li>
        <li>To ensure best academic ambience by providing high-end equipment in the laboratories, computers, learning resources and smart classrooms.</li>
        <li>To ensure a safe and secure environment for all stakeholders.</li>
        <li>To promote industry institute interaction, research & development, placements, technical, co-curricular and extracurricular activities.</li>
      </ul>
      <br>

      <h3><strong>Objectives</strong></h3>
      <ul>
        <li>To focus on persistent improvement in processes related to teaching, learning and evaluation and to promote a culture of research and development among staff and students.</li>
        <li>To develop technical and interpersonal skills so that the students translate knowledge into action contributing to the benefit of the society.</li>
        <li>To enhance the learning experience of students by honing versatility through diverse activities.</li>
      </ul>
    </div>
  </div>

  {{-- Footer --}}
  <div class="row no-gutter mt-3 justify-content-center text-light py-5" style="margin:auto;background-color: rgb(0, 46, 98);">
    <div class="col-4 text-center font-weight-bolder">
      <img src="{{ asset('images/logo.jpg') }}" style="width:111px;height:111px;box-shadow:0 0 8px #000;" alt="">
      <p class="mt-3">K.J. Somaiya Institute of Engineering and Infomation <br> Technology, Sion(East), Mumbai-400 022</p>
      <p>91-22-24061408</p>
      <p>91-22-24061403</p>
      <p>info.tech@somaiya.edu</p>
    </div>
    <div class="col-4 text-center mt-5">
      <!-- Facebook -->
      <a target="_blank" href="https://www.facebook.com/kjsieitofficial" class="p-1">
        <i class="fa fa-facebook-square fa-2x"> </i>
      </a>
       <!--Instagram-->
       <a target="_blank" href="https://www.instagram.com/kjsieit_22/" class="p-1">
        <i class="fa fa-instagram fa-2x"> </i>
      </a>
      <!-- Twitter -->
      <a target="_blank" href="https://twitter.com/kjsieit1" class="p-1">
        <i class="fa fa-twitter fa-2x"> </i>
      </a>
      <!--YouTube -->
      <a target="_blank" href="https://www.youtube.com/kjsieitofficial" class="p-1">
        <i class="fa fa-youtube fa-2x"> </i>
      </a>
      <!--Linkedin-->
      <a target="_blank" href="https://www.linkedin.com/in/kjsieit" class="p-1">
        <i class="fa fa-linkedin fa-2x"> </i>
      </a>
      <p class="mt-4"><strong>Prepared By <br> Department of Computer Engineering <br> 2022-23</strong></p>
      <br><br>
      <p class="font-weight-bold">Guided By: <a href="https://www.linkedin.com/in/shubhada-labde-b5433b126/" target="_blank">Prof. Shubhada Labde </a></p>
      <p class="font-weight-bold">Developed By: <a href="https://www.linkedin.com/in/paras1729kori/" target="_blank">Paras Kori</a></p>
    </div>
    <div class="col-4 text-center">
      <img src="{{ asset('images/trust.jpg') }}" style="width:112px;height:83px;box-shadow:0 0 8px #000;" alt="">
      <p class="mt-3"><strong>Somaiya Ayurvihar Complex <br> Eastern Express Highway, <br> Near Everard Nagar, Sion(East),<br>Mumbai-400 022</strong></p>
    </div>
  </div>

  


@endsection