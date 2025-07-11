@extends('layouts.admin')

@section('Title', 'Blogs')

@section('content')
    <div class="col-md-12">
        <h4 class="pb-3">Manage Blog</h4>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Post List
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Create New Post
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="col-md-12 bg-white p-3">
                    <h5 class="pb-3">All Post</h5>
                    <table class="table table-striped" class="tableContainer">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @forelse($Blogs as $blog)
                                <tr id="tableRow-{{ $blog->id }}">
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->created_at }}</td>
                                    <td>
                                        <a href="{{ route('blogs.show', $blog->id) }}" class="badge bg-dark fs-6 edit-btn"
                                            data-id={{ $blog->id }}>
                                            <i class="ri-edit-box-line"></i>
                                        </a>
                                        <span class="badge bg-danger fs-6 cursor-pointer delete-btn"
                                            data-id="{{ $blog->id }}">
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
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div class="col-md-12 bg-white p-3">
                    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="col-md-6">
                        @csrf
                        <div class="form-group">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Blog Title">
                        </div>
                        <div class="form-group mt-4">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="5"
                                placeholder="Description"></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for="" class="form-label">Images</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-warning">Create Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/Js/operations.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            handleDeleteButtons('#tableBody', '/blogs', 'tableRow-', 'Blog Deleted Successfully', () =>
                toggleNoRecordsRow('#tableContainer'));
        });
    </script>
@endsection
