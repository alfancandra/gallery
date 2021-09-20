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
                    <a class="btn btn-success btn-md mt-3" href="{{ route('adm.addphotoadmin') }}">Tambah Data</a>
                </div>
                
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
                                    <th>Images</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($photo as $p)
                                <tr>
                                    <td style="width:70px">{{ ++$i }}</td>
                                    <td style="word-wrap: break-word;width: 300px;">{{ $p->title }}</td>
                                    <td style="word-wrap: break-word;width: 500px;">{{ $p->deskripsi }}</td>
                                    <td style="width:120px;">{{ $p->category }}</td>
                                    <td style="width: 150px"><a href="{{ url('img/photo/'.$p->images) }}"><img src="{{ asset('img/photo/'.$p->images)  }}" width="100px"></td>
                                    <td style="width: 150px"><a href="" class="btn btn-success btn-md">Edit</a>
                                        <a href="" class="btn btn-danger btn-md">Hapus</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection