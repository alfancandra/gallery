@extends('template')
@section('title', 'Home')
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{!! asset('css/member.css')  !!}">

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <h1>PAMERAN <em>2021/2022</em></h1>
                <p style="width: 900px">Biro kepengurusan dalam Hima Tricaka yang bertanggung jawab untuk meningkatkan,
                    mengembangkan, serta mengapresiasi segala bentuk potensi dan karya mahasiswa arsitektur dalam aspek
                    akademis maupun non akademis untuk membangun jurusan arsitektur dengan wujud memfasilitasi hasil karya
                    mahasiswa dalam bentuk pameran</p>

                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>
                </div>
            </div>
        </div>
        <video autoplay="" loop="" muted>
            <source src="{!! asset('video/highway-loop.mp4') !!}" type="video/mp4" />
        </video>
    </div>

    {{-- MEMBER --}}
    
    <section id="team" class="team_member section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h1 style="color:white;margin-top:50px;margin-bottom:50px">MEMBER</h1>
            </div>
            <div class="row text-center">
                <!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{!! asset('/img/anggota/FIAN.jpg') !!}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Clifian Valentino</h3>
                            <span class="post"></span>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{!! asset('/img/anggota/abel.jpg') !!}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Christian Abel Pranoto K</h3>
                            <span class="post"></span>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{!! asset('/img/anggota/darma.jpg') !!}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Ida Bagus Darma Mukti Utama </h3>
                            <span class="post"></span>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{!! asset('/img/anggota/Eppatta.jpg') !!}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Eppatta Kaelasa Antarangga</h3>
                            <span class="post"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{!! asset('img/anggota/debii.jpg') !!}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Gisela Debbie Prananda </h3>
                            <span class="post"></span>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{!! asset('img/anggota/cintakaaa.jpg') !!}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Gabriella Cintaka Sekar Kinanthi </h3>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{!! asset('/img/anggota/meliana.jpg') !!}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Meliana Putri Suman</h3>
                            <span class="post"></span>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{!! asset('img/anggota/Regatta.jpg') !!}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Regatta Enggal Handadari</h3>
                            <span class="post"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                </div>
                <!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{!! asset('img/anggota/salma.jpg') !!}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Salma Putri Widyasih</h3>
                            <span class="post"></span>
                        </div>
                    </div>
                </div>
                
                <!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{!! asset('img/anggota/anrisa.png') !!}" alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Dinda Florentina Anrissa Rotty</h3>
                            <span class="post"></span>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    {{-- END MEMBER --}}

    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            <div class="infinite-scroll">
                @foreach ($photo as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="portfolio-item">
                            <a href="{{ route('photodescription', [$item->idphoto, $item->title]) }}">
                                <div class="thumb">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h1>{{ $item->title }}</h1>
                                            <p class="deskripsi">{{ $item->deskripsi }}</p>
                                            <p>{{ $item->category }}</p>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img class="photo-collection" src="{{ asset('img/photo/' . $item->images) }}">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                {{-- {{ $photo->links('pagination::bootstrap-4') }} --}}
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="load-more-button">
                        <a href="{{ url('/photos') }}">Load More</a>
                    </div>
                </div>
            </div>


        </div>
    </div>


    {{-- <div class="grid-portfolio" id="portfolio">
      <div class="container">
        <h1 style="color:rgb(3, 3, 3);">Photo Collection</h1>
        <hr>
          <div class="row">
              @foreach ($photo as $item)
              <div class="col-md-4 col-sm-6">
                  <div class="portfolio-item">
                      <div class="thumb">
                          <a href="{{ route('photodescription',[$item->id,$item->title]) }}">
                            <div class="hover-effect">
                              <div class="hover-content">
                                  <h1>{{ $item->title }}</h1>
                                  <p class="deskripsi">{{ $item->deskripsi }}</p>
                              </div>
                          </div></a>
                          <div class="image">
                              <img class="photo-collection2" src="{{ asset('img/photo/'.$item->images) }}">
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
              
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="load-more-button">
                        <a href="#">Load More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div> --}}


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2018 Company Name

                    | Designed by TemplateMo</p>
            </div>
        </div>
    </footer>


    <!-- Modal button -->
    <div class="popup-icon">
        <button id="modBtn" class="modal-btn"><img src="{!! asset('img/contact-icon.png') !!}" alt=""></button>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <!-- Modal Content -->
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="header-title">Say hello to <em>Highway</em></h3>
                <div class="close-btn"><img src="{!! asset('img/close_contact.png') !!}" alt=""></div>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Your name..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="email" type="email" class="form-control" id="email"
                                        placeholder="Your email..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message"
                                        placeholder="Your message..." required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    {{-- <script type="text/javascript">
      $('ul.pagination').hide();
      $(function() {
          $('.infinite-scroll').jscroll({
              autoTrigger: true,
              padding: 0,
              nextSelector: '.pagination li.active + li a',
              contentSelector: 'div.infinite-scroll',
              callback: function() {
                  $('ul.pagination').remove();
              }
          });
      });
  </script> --}}
@endsection
