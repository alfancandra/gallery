@extends('admin.template.template');
@section('content')
<div class="page-heading">
    <h3>Category</h3>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Category</h4>
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
                    <form action="{{ route('adm.storecategory') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="basicInput">Category</label>
                            <input type="text" name="category" class="form-control" id="basicInput"
                                placeholder="Enter Category">
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