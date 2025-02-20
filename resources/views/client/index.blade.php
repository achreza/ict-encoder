@extends('client.layouts.app')

@section('content')
<!--==========================
    Header
  ============================-->
<header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <a href="{{route('home')}}" class="scrollto"><img src="{{URL::to('client/img/logo22.png')}}" alt="" title="Gebyar ICT 2022"></a>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#events">EVENTS</a></li>
        <li><a href="#timeline">TIMELINE</a></li>
        <li><a href="#gallery">GALLERY</a></li>
        <li><a href="#footer">CONTACT</a></li>
        <li class="login"><a href="{{ route('auth.login') }}">LOGIN</a></li>
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
</header><!-- #header -->

<!--==========================
    Intro Section
  ============================-->
<section id="intro">
  <div class="intro-container wow fadeIn">
    <h1 class="mb-4 pb-0"><span>Gebyar</span> ICT 2022<br><span>Better Future</span> Let's Fly Higher</h1>

    <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a> -->

    <div class="logo-sponsor">
      <p class="mb-2 pb-0 mt-4">With :</p>
      <div class="row no-gutters supporters-wrap clearfix">

        <!-- OPEN SPONSORSHIP -->

        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="supporter-logo">
            <img src="{{URL::to('client/img/sponsor/1. DINTA.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="supporter-logo">
            <img src="{{URL::to('client/img/sponsor/2. KATEKO.png')}}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="supporter-logo">
            <img src="{{URL::to('client/img/sponsor/3. DIPA.png')}}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="{{URL::to('client/img/sponsor/4. peternakan.jpeg')}}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="{{URL::to('client/img/sponsor/5. dapuryuk.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="{{URL::to('client/img/sponsor/6. dicoding.png')}}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="{{URL::to('client/img/sponsor/7. ismaya.png')}}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </div>
    <a href="#events" class="intro-btn scrollto">Enroll Your Team</a>
  </div>
</section>

<main id="main">

  <!--==========================
      About Section
    ============================-->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>Gebyar ICT 2022</h2>
          <p>Gebyar <span> Information and Communication Technology</span> (ICT) merupakan kompetisi tahunan yang
            diselenggarakan oleh Himpunan Mahasiswa Program Studi Teknik Informatika Universitas Islam Negeri Maulana Malik
            Ibrahim Malang sebagai sarana untuk menyalurkan inovasi, kreativitas dan keterampilan mahasiswa khususnya
            dan masyarakat Indonesia pada umumnya di bidang teknologi.</p>
        </div>
        <div class="col-lg-3">
          <h3>Where</h3>
          <p>Teknik Informatika, <br>UIN Maulana Malik Ibrahim Malang</p>
        </div>
        <div class="col-lg-3">
          <h3>When</h3>
          <p>Coming Soon<br>on October</p>
        </div>
      </div>
    </div>
  </section>


  <!--==========================
      Events Section
    ============================-->
  <section id="events" class="wow fadeInUp">
    <div class="container mb-4">

      <div class="section-header">
        <h2>Competition</h2>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Cinematography</h5>
              <div class="icon-events text-center">
                <img src="{{URL::to('client/img/events/ico-cinema.svg')}}" alt="Cinema">
              </div>
              <hr>
              <div class="text-center">
                <p class="event-detail">Cinematography adalah salah satu cabang kompetisi ICT yang memiliki fokus terhadap kreativitas penyampaian ide dan cerita dalam bentuk video sinema. Kompetisi ini memiliki seni tersendiri dalam penyampaian alur dan pesan di dalam sebuah karya yang diharapkan dapat mengundang tiap individu untuk lebih peduli dengan persoalan masyarakat di era Society 5.0.</p>
              </div>
              <hr>
              <div class="text-center">
                <a href="{{route('home.cinema')}}" class="events-btn">Read More</a>
              </div>
              <div class="text-center">
                <a href="{{route('auth.register')}}" class="events-btn btn-success" style="background-color: green">Daftar Cinema Disini!</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Innovation App</h5>

              <div class="icon-events text-center">
                <img src="{{URL::to('client/img/events/ico-apps-idea.svg')}}" alt="CDC">
              </div>
              <hr>
              <div class="text-center">
                <p class="event-detail">Innovation App adalah kompetisi ICT yang memiliki fokus pada pembuatan rancangan aplikasi Mobile ataupun Website beserta inovasi dan potensi bisnisnya yang dapat diimplementasikan di masyarakat. Rancangan ini diharapkan dapat menjadi langkah awal dalam menyelesaikan persoalan yang ada maupun menjadi salah satu ide bisnis yang menarik di era Society 5.0.</p>
              </div>
              <hr>
              <div class="text-center">
                <a href="{{route('home.iai')}}" class="events-btn">Read More</a>
              </div>
              <div class="text-center">
                <a href="{{route('auth.register')}}" class="events-btn btn-success" style="background-color: green">Daftar IAI Disini!</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Micro Drone <br>Race</h5>
              <div class="icon-events text-center">
                <img src="{{URL::to('client/img/events/ico-drone.svg')}}" alt="Micro Drone Race">
              </div>
              <hr>
              <div class="text-center">
                <p class="event-detail">Micro Drone Race adalah salah satu cabang kompetisi ICT yang memiliki fokus pada keahlian dalam perancangan dan pengendalian drone, yang mana drone tersebut akan dikompetisikan berdasarkan siapa yang tercepat. Kompetisi ini dapat menjadi media pertunjukkan agar masyarakat dapat mengetahui perkembangan Inovasi Robotik di era Society 5.0.</p>
              </div>
              <hr>
              <div class="text-center">
                <a href="{{route('home.drone')}}" class="events-btn">Read More</a>
              </div>
              <div class="text-center">
                <a href="{{route('auth.register')}}" class="events-btn btn-success" style="background-color: green">Daftar Drone Disini!</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!--==========================
      Timeline Section
    ============================-->
  <section id="timeline" class="section-with-bg">
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h2>Timeline</h2>
      </div>

      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href="#cinema" role="tab" data-toggle="tab">Cinematography</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#apps" role="tab" data-toggle="tab">Innovation App</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#drone" role="tab" data-toggle="tab">Micro Drone Race</a>
        </li>
      </ul>

      <div class="tab-content row justify-content-center">

        <!-- Schedule Apps -->
        <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apps">

          <div class="row timeline-item">
            <div class="col-md-2"><time>6 - 22 Okt 2022</time></div>
            <div class="col-md-10">
              <h4>Online Registration</h4>
              <p>Pendaftaran online melalui website ICT 2022 </p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>23 Okt 2022</time></div>
            <div class="col-md-10">
              <h4>Closing Registration and Technical Meeting</h4>
              <p>Technical meeting online dan penutupan registrasi terakhir pukul 23.59</p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>10 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>Submit Proposal and Project</h4>
              <p>Pengumpulan proposal dan projek di Web ICT 2022 terakhir pukul 23.59 WIB</p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>19 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>Finalist Announcement</span></h4>
              <p>Pengumuman finalis akan disampaikan di website ICT 2022</p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>20 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>Finalist Technical Meeting</span></h4>
              <p>Finalis melakukan technical meeting sebelum tahap final</p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>26 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>Final Day</span></h4>
              <p>Finalis akan mengikuti babak final dan penjurian</p>
            </div>
          </div>

        </div>
        <!-- End Schdule Apps -->

        <!-- Schdule Day Cinema -->
        <div role="tabpanel" class="col-lg-9  tab-pane fade show active" id="cinema">

          <div class="row timeline-item">
            <div class="col-md-2"><time>6 - 22 Okt 2022</time></div>
            <div class="col-md-10">
              <h4>Online Registration</h4>
              <p>Pendaftaran online melalui website ICT 2022 </p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>23 Okt 2022</time></div>
            <div class="col-md-10">
              <h4>Closing Registration and Technical Meeting</h4>
              <p>Technical meeting online dan penutupan registrasi terakhir pukul 23.59</p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>10 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>Submit Proposal and Project</h4>
              <p>Pengumpulan proposal dan projek di Web ICT 2022 terakhir pukul 23.59 WIB</p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>19 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>Finalist Announcement</span></h4>
              <p>Pengumuman finalis akan disampaikan di website ICT 2022</p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>20 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>Finalist Technical Meeting</span></h4>
              <p>Finalis melakukan technical meeting sebelum tahap final</p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>26 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>Final Day</span></h4>
              <p>Finalis akan mengikuti babak final dan penjurian</p>
            </div>
          </div>

        </div>
        <!-- End Schedule Cinema -->

        <!-- Schedule Drone -->
        <div role="tabpanel" class="col-lg-9  tab-pane fade" id="drone">

          <div class="row timeline-item">
            <div class="col-md-2"><time>4 Okt - 5 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>Online Registration</h4>
              <p>Registrasi dilaksanakan secara online di Website Gebyar ICT 2022</p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>6 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>Technical Meeting</span></h4>
              <p>Peserta drone race melakukan technical meeting secara online</p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>13 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>OTS Registration</span></h4>
              <p>Registrasi On The Spot dilaksanakan Maksimal pukul 07.00</p>
            </div>
          </div>

          <div class="row timeline-item">
            <div class="col-md-2"><time>13 Nov 2022</time></div>
            <div class="col-md-10">
              <h4>Competition Day</span></h4>
              <p>Pelaksanaan Micro Drone Race dan pengumuman pemenang.</p>
            </div>
          </div>
        </div>
        <!-- End Schedule Drone -->

      </div>

    </div>

  </section>

  <!--==========================
      Gallery Section
    ============================-->
  <section id="gallery" class="wow fadeInUp">

    <div class="container">
      <div class="section-header">
        <h2>Gallery</h2>
      </div>
    </div>

    <div class="owl-carousel gallery-carousel">
      <a href="{{URL::to('client/img/gallery/1.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{URL::to('client/img/gallery/1.jpg')}}" alt=""></a>
      <a href="{{URL::to('client/img/gallery/2.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{URL::to('client/img/gallery/2.jpg')}}" alt=""></a>
      <a href="{{URL::to('client/img/gallery/3.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{URL::to('client/img/gallery/3.jpg')}}" alt=""></a>
      <a href="{{URL::to('client/img/gallery/4.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{URL::to('client/img/gallery/4.jpg')}}" alt=""></a>
      <a href="{{URL::to('client/img/gallery/5.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{URL::to('client/img/gallery/5.jpg')}}" alt=""></a>
      <a href="{{URL::to('client/img/gallery/6.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{URL::to('client/img/gallery/6.jpg')}}" alt=""></a>
      <a href="{{URL::to('client/img/gallery/7.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{URL::to('client/img/gallery/7.jpg')}}" alt=""></a>
      <a href="{{URL::to('client/img/gallery/8.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{URL::to('client/img/gallery/8.jpg')}}" alt=""></a>
      <a href="{{URL::to('client/img/gallery/9.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{URL::to('client/img/gallery/9.jpg')}}" alt=""></a>
      <a href="{{URL::to('client/img/gallery/10.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{URL::to('client/img/gallery/10.jpg')}}" alt=""></a>
    </div>

  </section>

  <!--==========================
      Subscribe Section
    ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h2>Subscribe</h2>
      </div>

      <form method="POST" action="#">
        <div class="form-row justify-content-center">
          <div class="col-auto">
            <input type="text" class="form-control" placeholder="Enter your Email to get the latest news">
          </div>
          <div class="col-auto">
            <button type="submit">Subscribe</button>
          </div>
        </div>
      </form>
    </div>
  </section>
</main>
@endsection