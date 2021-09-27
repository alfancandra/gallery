@extends('admin.template.template');
@section('content')
<div class="page-heading">
    <h3>Detail Photo</h3>
</div>
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Title</label>
                                    </div>
                                    <div class="col-md-8">
                                        <label>{{ $photo->title }}</label>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Description</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <label>{{ $photo->deskripsi }}</label>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Category</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <label>{{ $photo->category }}</label>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Image</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <td style="width: 150px"><a href="{{ url('img/photo/'.$photo->images) }}"><img src="{{ asset('img/photo/'.$photo->images)  }}" style="max-width: 400px"></a></td>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>View</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <label>{{ $photo->reads }}</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection