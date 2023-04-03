<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('images/icon.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/scss/style.scss', 'resources/js/app.js', 'resources/js/script.js', 'resources/js/navdrop.js'])
</head>

<body>

    <div class="container-fluid" id="student">
        <div class="card p-2 w-50 fw-bolder fs-4 shadow" id="student_card">
            Congratulations!!! You have successfully registered to be a GS Student for the 2022/2023 Academic session.
            You are required to wait while your details are being inspected for admission approval.

            You will be notified through the email you registered with.<br>
            Thanks <i class="fas fa-smile mx-auto"></i>
            <div class="py-3 d-flex justify-content-between">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-success">
                        Awaiting Admission
                    </button>
                </form>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Exit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
