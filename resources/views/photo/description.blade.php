@extends('template')

@section('content')
<nav>
    <div class="logo">
        <a href="{{ url('/') }}">Gala<em>xy</em></a>
    </div>
  <div class="menu-icon">
    <span></span>
  </div>
</nav>



<div class="blog-entries">
    <div class="container">
        <div class="col">
            <div class="blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-blog-post">
                            <img src="{{ asset('img/photo/'.$photo->images) }}" alt="">
                            <div class="text-content">
                                <h2>{{ $photo->title }}</h2>
                                <span><a href="#">Admin</a> / <a href="#">{{ $photo->category }}</a></span>
                                <p style="text-align: justify;">{{ $photo->deskripsi }}</p>
                                <div class="tags-share">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="tags">
                                                <li>Tags:</li>
                                                <li><a href="#">life</a>,</li>
                                                <li><a href="#">nature</a>,</li>
                                                <li><a href="#">life is good</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="share">
                                                <li>Share:</li>
                                                <li><a href="#">facebook</a>,</li>
                                                <li><a href="#">twitter</a>,</li>
                                                <li><a href="#">behance</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
      <div class="close-btn"><img src="img/close_contact.png" alt=""></div>    
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