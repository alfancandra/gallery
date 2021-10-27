@extends('admin.template.template');
@section('content')
<div class="page-heading">
    <h3>User Admin</h3>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add User Admin</h4>
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
                    <form action="{{ route('adm.storeadmin') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="basicInput">Name</label>
                            <input type="text" name="name" class="form-control" id="basicInput">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Institusi</label>
                            <input type="text" name="institusi" class="form-control" id="basicInput">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Email</label>
                            <input type="email" name="email" class="form-control" id="basicInput">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Password</label>
                            <input type="password" name="password" class="form-control">
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