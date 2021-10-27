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

                                        <td style="width: 150px">
                                            <?php foreach (json_decode($photo->images) as $image) { ?>
                                                <a href="{{url('img/photo/'.$image)}}"><img src="{{url('img/photo/'.$image)}}" width="150px" alt="{{$image}}"> <?php } ?></a>
                                        </td>

                                    </div>

                                    <div class="col-md-4 mb-3">

                                        <label>View</label>

                                    </div>

                                    <div class="col-md-8 form-group">

                                        <label>{{ $photo->reads }}</label>

                                    </div>

                                    <div class="col-md-4 mb-3">

                                        <label>Status</label>

                                    </div>

                                    <div class="col-md-8 form-group">

                                        @if($photo->photoactive==1)

                                        <span class="badge bg-success">Active</span>

                                        @else

                                        <span class="badge bg-danger">Non-Active</span>

                                        @endif

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
