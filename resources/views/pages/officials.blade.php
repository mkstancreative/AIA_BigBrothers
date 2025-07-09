@extends('layouts.admin')

@section('Title', 'Officials')

@section('content')

    <div class="col-md-12">
        <h4 class="pb-3">Official Setup</h4>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Create Official
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    View Other Official
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="col-md-12 bg-white p-3">
                    <h5 class="pb-3">Create New Official</h5>
                    <form action="{{ route('officials.store') }}" method="post" class="col-md-6">
                        @csrf
                        <div class="col-md-12 mt-4">
                            <label class="form-label">FirstName:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Firstname"
                                    aria-describedby="visible-addon" name="firstname" />
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <label class="form-label">LastName:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Lastname"
                                    aria-describedby="visible-addon" name="lastname" />
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <label class="form-label">Official Positions:</label>
                            <div class="input-group">
                                <select name="positions" id="" class="form-select">
                                    <option hidden>Select Positions</option>
                                    <option value="Chairman">Chairman</option>
                                    <option value="vice Chairman">vice Chairman</option>
                                    <option value="General Secretary">General Secretery</option>
                                    <option value="Financial Secretary">Financial Secretary</option>
                                    <option value="Treasurer">Treasurer</option>
                                    <option value="Public Relations Officer (PRO)">Public Relations Officer (PRO)</option>
                                    <option value="Provost">Provost</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button type="submit" class="btn btn-warning">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div class="col-md-12 bg-white p-3">
                    <h5 class="pb-3">Other Officials</h5>
                    <table class="table table-striped overflow-auto" id="tableContainer">
                        <thead>
                            <tr>
                                <th>FirstName</th>
                                <th>Last Name</th>
                                <th>Positions</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @forelse($officials as $official)
                                <tr id="tableRow-{{ $official->id }}">
                                    <td>{{ $official->firstname }}</td>
                                    <td>{{ $official->lastname }}</td>
                                    <td>{{ $official->positions }}</td>
                                    <td>
                                        <span class="badge bg-danger fs-6 cursor-pointer delete-btn"
                                            data-id="{{ $official->id }}">
                                            <i class="ri-delete-bin-line"></i>
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr id="no-records-row">
                                    <td colspan="4" class="text-center">No Records Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/Js/operations.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            handleDeleteButtons('#tableBody', '/officials', 'tableRow-', 'Official Deleted Successfully');
        });
    </script>
@endsection
