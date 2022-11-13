@extends('firebase.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Contact</h4>
                </div>
                <div class="card-body">
                    <form action="{{url('add-contact')}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <Label>First Name</Label>
                            <input type="text" name="first_name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <Label>Last Name</Label>
                            <input type="text" name="last_name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <Label>Phone Number</Label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <Label>Email Address</Label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <a href="{{url('contacts')}}" class="btn btn-outline-warning btn-sm">Back</a>
                            <button type="submit" class="btn btn-outline-success btn-sm float-end">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection