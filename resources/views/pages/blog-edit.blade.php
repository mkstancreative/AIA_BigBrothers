@extends('layouts.admin')

@section('Title', 'Blogs')

@section('content')
    <div class="col-md-12">
        <h4 class="pb-3">Manage Blog</h4>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Update Post
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="{{ route('blogs.index') }}">
                    Post List
                </a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="col-md-12 bg-white p-3">
                    <h5 class="pb-3">All Post</h5>
                    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data"
                        class="col-md-6">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $blog->title }}">
                        </div>
                        <div class="form-group mt-4">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="5"
                                placeholder="Description">{{ $blog->description }}</textarea>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-warning">Update Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
