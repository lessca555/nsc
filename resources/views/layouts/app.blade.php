<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        {{-- stylesheet --}}
        <link rel="stylesheet" href="{{ url('asset/bootstrap5') }}/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ url('asset/css/app.css') }}">
        {{-- fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d508f9c7b5.js" crossorigin="anonymous"></script>
        {{-- swiper --}}
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
        />
    </head>
    <body>
        <div id="app">
            <header>
                @include('layouts.navbar')
            </header>

            <main class="py-4">
                @yield('content')
            </main>

            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-chevron-up"></i></button>

            <footer id="contacts" class="contacts">
                @include('layouts.footer')
            </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="{{ url('asset/bootstrap5') }}/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        {{-- js --}}
        <script src="{{ url('asset/js/app.js') }}"></script>
    </body>
</html>
