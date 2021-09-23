@extends('template')

@section('content')
<link rel="stylesheet" href="{!! asset('css/description.css') !!}">
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
                                    
                                </div>
                                <h3 style="color:white">Send Comment</h3>
                                @php
                                if(Auth::user()){
                                  $iduser = Auth::user()->id;
                                }else{
                                  $iduser = 0;
                                }
                                @endphp
                                <form action="{{ route('newcomment',['id_photo'=>$photo->idphoto,'id_user'=>$iduser]) }}" method="POST">
                                  @csrf
                                  <textarea name="comment" class="form-control" style="margin-bottom: 10px"></textarea>
                                  <input class="btn btn-outline-primary mt-2" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <h1>Comments</h1>
                      @foreach ($comment as $c)
                      <div class="comment mt-4 mb-2 text-justify float-left" style="width: 100%;border-bottom:2px solid grey;"> <img src="{!! asset('img/profile.png') !!}" alt="" class="rounded-circle" width="40" height="40">
                          <h4 style="margin-left: 5px">{{ $c->name }}</h4> <span>- {{ Carbon\Carbon::parse($c->tanggal)->diffForHumans() }}</span> <br>
                          <p style="margin-left: 50px">{{ $c->comment }}</p>
                      </div>
                      @endforeach
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
@endsection