@if (session('success'))
    <script>
        toastr.success("{!! e(session('success')) !!}");
    </script>
@endif

@if (session('error'))
    <script>
        toastr.error("{!! e(session('error')) !!}");
    </script>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error("{!! e($error) !!}");
        </script>
    @endforeach
@endif
