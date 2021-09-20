@extends('admin.template.template');
@section('content')
<div class="page-heading">
    <h3>Category</h3>
</div>
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Category</h4>
                    <a class="btn btn-success btn-md mt-3" href="{{ route('adm.addcategoryadmin') }}">Tambah Data</a>
                </div>
                
                <div class="card-content">
                    
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category</th>
                                    <th>Active</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cat as $c)
                                <tr>
                                    <td style="width:70px">{{ ++$i }}</td>
                                    <td style="word-wrap: break-word;width: 300px;">{{ $c->category }}</td>
                                    <td style="word-wrap: break-word;width: 200px;">
                                        @if($c->active==1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Non-Active</span>
                                        @endif
                                    </td>
                                    <td style="width: 150px"><a href="{{ route('adm.editcategory',$c->id) }}" class="btn btn-success btn-md">Edit</a>
                                        @if($c->active==1)
                                        <a href="{{ route('adm.deactivecategory',$c->id) }}" class="btn btn-warning btn-md">Deactive</a>
                                        @else
                                        <a href="{{ route('adm.activecategory',$c->id) }}" class="btn btn-info btn-md">Active</a>
                                        @endif
                                        <a href="{{ route('adm.deletecategory',$c->id) }}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-md">Hapus</a></td>
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