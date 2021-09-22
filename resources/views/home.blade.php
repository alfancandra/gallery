@extends('template')

@section('content')
	

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Welcome to <em>Highway</em></h1>
              <p>FREE CSS TEMPLATE by templatemo</p>
              <p>Homepage with full-width image gallery</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>
                </div>    
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="{!! asset('video/highway-loop.mp4') !!}" type="video/mp4" />
        </video>
    </div>

    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
          <div class="infinite-scroll">
            @foreach ($photo as $item)
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{ route('photodescription',[$item->idphoto,$item->title]) }}">
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
        <h1 style="color:white;">Photo Collection</h1>
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