@extends('firebase.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <h4 class="alert alert-warning">{{session('status')}}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Contact List
                        <a href="{{url('add-contact')}}" class="btn btn-outline-success btn-sm float-end">Add Contact</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $key => $item)
                            <tr>
                                <td>{{ $loop -> index+1 }}</td>
                                <td>{{ $item['fname'] }}</td>
                                <td>{{ $item['lname'] }}</td>
                                <td>{{ $item['phone'] }}</td>
                                <td>{{ $item['email'] }}</td>
                                <td>
                                    <a href="{{url('edit-contact/'.$key)}}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{url('delete-contact/'.$key)}}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Mau Hapus Contact {{$item['fname']}} ?')">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">No Record Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection