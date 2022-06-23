<!DOCTYPE html>
<html lang="tr" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scrable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
  @include('front.menu')

    <div class="content min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    @yield('content')
                </div>
                <div class="col-4">
                    @include('front.category')
                </div>

            </div>

        </div>

    </div>

    <footer>
      <div class="container-fluid bg-dark text-center min-">
        Footer Bölümü
      </div>
    </footer>
    <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>

    @yield('js')
</body>

</html>
