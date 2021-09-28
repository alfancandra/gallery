@extends('admin.template.template');
@section('content')
<link rel="stylesheet" href="{!! asset('assets/admin/vendors/simple-datatables/style.css') !!}">
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
                        {{ $message }}
                    </div>
                @endif
                
                <div class="card-content">
                    
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Status</th>
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
                                    <td style="width: 100px">
                                        @if($p->photoactive==1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Non-Active</span>
                                        @endif
                                        </td>
                                    <td style="width:70px">{{ $p->reads }}</td>
                                    <td style="width: 250px"><a href="{{ route('adm.editphoto',$p->idphoto) }}" class="btn btn-success btn-md">Edit</a>
                                        @if($p->photoactive==1)
                                        <a href="{{ route('adm.deactivephoto',$p->idphoto) }}" class="btn btn-warning btn-md">Deactive</a>
                                        @else
                                        <a href="{{ route('adm.activephoto',$p->idphoto) }}" class="btn btn-info btn-md">Active</a>
                                        @endif
                                        <a onClick="if(!confirm('Are you sure to delete this photo?')){return false;}" href="{{ route('adm.destroyphotoadmin',$p->idphoto) }}" class="btn btn-danger btn-md">Delete</a></td>
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
@push('js-plugin')
<script src="{!! asset('assets/admin/vendors/simple-datatables/simple-datatables.js') !!}"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
@endpush