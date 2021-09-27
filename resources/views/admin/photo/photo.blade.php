@extends('admin.template.template');
@section('content')
<div class="page-heading">
    <h3>Photo</h3>
</div>
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Photo</h4>
                    <a class="btn btn-success btn-md mt-3" href="{{ route('adm.addphotoadmin') }}">Add Data</a>
                </div>
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mb-3">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        {{ $message }}
                    </div>
                @endif
                
                <div class="card-content">
                    
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>View</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($photo as $p)
                                <tr>
                                    <td style="width:70px">{{ ++$i }}</td>
                                    <td style="word-wrap: break-word;width: 300px;"><a href="{{ route('adm.showphoto',$p->idphoto) }}">{{ $p->title }}</a></td>
                                    <td style="word-wrap: break-word;width: 500px;">{{ $p->deskripsi }}</td>
                                    <td style="width:200px;">{{ $p->category }}</td>
                                    <td style="width:70px">{{ $p->reads }}</td>
                                    <td style="width: 150px"><a href="{{ route('adm.editphoto',$p->idphoto) }}" class="btn btn-success btn-md">Edit</a>
                                        <a onClick="if(!confirm('Are you sure to delete this photo?')){return false;}" href="{{ route('adm.destroyphotoadmin',$p->idphoto) }}" class="btn btn-danger btn-md">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            {{ $photo->links() }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection