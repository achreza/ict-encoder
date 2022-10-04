@extends('client.layouts.app')

@section('content')
	<!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="i{{route('home')}}" class="scrollto"><img src="{{URL::to('client/img/logo.svg')}}" alt="" title="Gebyar ICT 2022"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="login"><a href="{{route('auth.register')}}">REGISTER</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page events-page">

    <!--==========================
      Events Details Section
    ============================-->
    <section id="event-details" class="wow fadeIn">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <img src="{{URL::to('client/img/events/events-cinema.svg')}}" alt="Cinema" class="img-fluid" width="80%">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2>Cinematography</h2>
              <p>Cinematography Competition bertujuan untuk memberikan kesempatan berkompetisi bagi para sineas muda
                agar dapat menjalin kerjasama antar tim, berkreatif dalam membuat suatu film yang memiliki makna dan
                pesan untuk disampaikan.</p>

              <p>Informasi Lebih Lanjut :</p>
              <ul class="contact-person">
                <li><a href="https://wa.me/6285731582564">085731582564 (Alfina)</a></li>
                <li><a href="https://wa.me/6287755667545">087755667545 (Ibni)</a></li>
                <li><a href="https://wa.me/6285748887864">085748887864 (Najah)</a></li>
              </ul>
            </div>
            <a href="{{URL::to('juknis/Cinematography.pdf')}}" class="ict-btn scrollto" target="_blank">Download Juknis</a>
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

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row timeline-item">
              <div class="col-md-2"><time>1 Okt - 22 Okt 2022</time></div>
              <div class="col-md-10">
                <h4>Online Registration</h4>
                <p>Peserta Innov App melakukan pendaftaran online melalui website ICT</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>23 Okt 2022</time></div>
              <div class="col-md-10">
                <h4>Technical Meeting</h4>
                <p>Peserta Cinemato melakukan Technical Meeting Tahap Penyisihan secara online</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>24 Okt - 10 Nov 2022</time></div>
              <div class="col-md-10">
                <h4>Submit Film</h4>
                <p>Peserta submit film pada Website ICT 2022</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>11 Nov - 18 Nov 2022</time></div>
              <div class="col-md-10">
                <h4>Penilaian Babak Penyisihan</h4>
                <p>Film peserta akan dinilai dan diseleksi oleh Juri</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>19 Nov 2022</time></div>
              <div class="col-md-10">
                <h4>Finalist Announcement</span></h4>
                <p>Finalis Cinemato akan diumumkan di Website dan Instagram ICT 2022</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>26 Nov 2022</time></div>
              <div class="col-md-10">
                <h4>Final Day</span></h4>
                <p>Tahap Final, Finalis cinemato akan melakukan presentasi kepada juri</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day -->
        </div>
      </div>
    </section>

    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <ul id="faq-list">

              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">Bagaimana cara untuk mendaftar?
                  <i class="fa fa-minus-circle"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                  <p>
                    Peserta dapat mendaftar melalui website kemudian input judul, nama tim, ketua dan anggota tim.
                    Setelah itu melakukan pembayaran ke rekening yang sudah ditentukan.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Dapatkah saya mendaftar secara individu jika
                  tidak memiliki tim? <i class="fa fa-minus-circle"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p>
                    Boleh, peserta diperbolehkan tim yang maksimal berjumlah 3 orang ataupun perseorangan. Jika peserta
                    mendaftar secara individu, maka peserta harus mengisi judul film, nama tim, dan hanya nama ketua
                    saja. kemudian melakukan pembayaran.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Apakah peseta diwajibkan untuk mengupload poster? Dan, dimana peserta harus mengupload poster?<i class="fa fa-minus-circle"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                  <p>
                      Iya wajib, sebagai bukti bahwa peserta serius dalam mengikuti lomba, kemudian cara menguploadnya di instagram masing-masing anggota dengan menandai akun instagram @ict_encoder.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">Apakah anggota tim boleh berasal dari sekolah/universitas/instansi yang berbeda? <i class="fa fa-minus-circle"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                  <p>
                    Boleh, Anggota tim boleh berasal dari sekolah/universitas/instansi yang berbeda.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section>

  </main>
@endsection