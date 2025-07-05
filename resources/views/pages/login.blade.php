<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logos/favicon.ico') }}" type="image/x-icon" />
    <title>Admin Login</title>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 container_admin">
        <div class="col-md-4 h-100 admin_block rounded">
            <div class="col-md-12 text-center bg-white p-4">
                <div class="admin_logo">
                    <img src="assets/images/logos/logo-2.png" alt="Logo" />
                </div>
                <h6>Admin Login</h6>
            </div>
            <div class="col-md-12 bg-white p-3">
                <form action="{{ route('admin.store') }}" method="post">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class='list-group'>
                                @foreach ($errors->all() as $error)
                                    <li class='list-group-item'>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <div class="col-md-12">

                        <div class="input-group">
                            <span class="input-group-text" id="visible-addon"><i class="ri-user-shared-line"></i></span>
                            <input type="text" class="form-control" placeholder="Name " name="email"
                                aria-describedby="visible-addon" value="{{ old('name') }}" />
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="input-group">
                            <span class="input-group-text" id="visible-addon"><i
                                    class="ri-git-repository-private-line"></i></span>
                            <input type="password" class="form-control" placeholder="password" name='password'
                                aria-describedby="visible-addon" value="{{ old('password') }}" />
                        </div>
                    </div>

                    <div class="col-md-12 mt-4 text-center">
                        <button type="submit" class="btn btn-warning w-50">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
