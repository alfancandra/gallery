@extends('admin.template.template');
@section('content')
<div class="page-heading">
    <h3>Admins</h3>
</div>
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mb-3"> 
                        {{ $message }}
                    </div>
                @endif
                <div class="card-header">
                    <h4 class="card-title">Table Admins</h4>
                    <a class="btn btn-success btn-md mt-3" href="{{ route('adm.addadmin') }}">Add Data</a>
                </div>
                
                <div class="card-content">
                    
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Institusi</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td style="width:70px">{{ ++$i }}</td>
                                    <td style="word-wrap: break-word;width: 300px;">{{ $user->name }}</td>
                                    <td style="word-wrap: break-word;width: 300px;">{{ $user->email }}</td>
                                    <td style="word-wrap: break-word;width: 500px;">{{ $user->institusi }}</td>
                                    <td style="width: 150px">
                                        <a onClick="if(!confirm('Are you sure to delete this photo?')){return false;}" href="{{ route('adm.destroyadmin',$user->id) }}" class="btn btn-danger btn-md">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            {{ $users->links() }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection