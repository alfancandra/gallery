@extends('template')

@section('content')
	<nav>
        <div class="logo">
            <a href="{{ url('/') }}">High<em>way</em></a>
        </div>
        <div class="menu-icon">
            <span></span>
        </div>
    </nav>

    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
          <div class="row">
            @foreach ($photo as $item)
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{ route('photodescription',[$item->photoid,$item->title]) }}">
                      <div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>{{ $item->title }}</h1>
                                <p class="deskripsi">{{ $item->deskripsi }}</p>
                                <p>{{ $item->category }}</p>
                            </div>
                        </div>
                        <div class="image">
                            <img class="photo-collection" src="{{ asset('img/photo/'.$item->images) }}">
                        </div>
                    </div></a>
                </div>
            </div>
            @endforeach
          </div>
          
        </div>
    </div>

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
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
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

    

    <section class="overlay-menu">
      <div class="container">
        <div class="row">
          <div class="main-menu">
              <ul>
                  @foreach ($category as $cat)
                    <li>
                        <a href="">{{ $cat->category }}</a>
                    </li>
                  @endforeach
                  
                  <li>
                      <a href="{{ route('login') }}">Login</a>
                  </li>
              </ul>
              <p>I LOVE YOU.</p>
          </div>
        </div>
      </div>
    </section>

@endsection