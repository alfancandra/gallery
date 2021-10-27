@extends('admin.template.template');
@section('content')
<div class="page-heading">
    <h3>Edit Photo</h3>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Photo ID {{ $photo->id }}</h4>
        </div>  
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="{{ route('adm.updatephoto',$photo->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="basicInput">Title</label>
                            <input type="text" name="title" class="form-control" id="basicInput"
                                value="{{ $photo->title }}" required>
                        </div>

                        <div class="form-group">
                            <label for="basicInput">Description</label>
                            <textarea class="form-control" name="deskripsi">{{ $photo->deskripsi }}</textarea>
                        </div>

                        <div class="form-group">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Photo</label><br>
                                <a href="{{ url('img/photo/'.$photo->images) }}"><img src="{{ asset('img/photo/'.$photo->images)  }}" style="max-width: 400px"></a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="basicInput">Category</label>
                            <select class="form-select" name="category_id" id="basicSelect">
                                @foreach ($category as $c)
                                    <option value="{{ $c->id }}" {{ ( $c->id == $photo->category_id) ? 'selected' : '' }}>{{ $c->category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success btn-lg mt-3" style="width: 200px" type="submit">Save</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection