@extends('layouts.admin')

@section('Title', 'Change Password')

@section('content')
    <div class="col-md-6 bg-white p-3 rounded">
        <form action="{{ route('change-password.store') }}" method="post">
            @csrf
            <div class="col-md-12">
                <label class="form-label">Old Password</label>
                <div class="input-group">
                    <span class="input-group-text" id="visible-addon"><i class="ri-git-repository-private-line"></i></span>
                    <input type="text" class="form-control" placeholder="Old Password" aria-describedby="visible-addon"
                        name="old_password" />
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <label class="form-label">New Password</label>
                <div class="input-group">
                    <span class="input-group-text" id="visible-addon"><i class="ri-git-repository-private-line"></i></span>
                    <input type="password" class="form-control" placeholder="New Password" aria-describedby="visible-addon"
                        name="new_password" />
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <label class="form-label">Confirm Password</label>
                <div class="input-group">
                    <span class="input-group-text" id="visible-addon"><i class="ri-git-repository-private-line"></i></span>
                    <input type="password" class="form-control" placeholder="Confirm Password"
                        aria-describedby="visible-addon" name="new_password_confirmation" />
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <button type="submit" class="btn btn-warning">
                    Change Password
                </button>
            </div>
        </form>
    </div>

@endsection
