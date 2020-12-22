<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('page-title', 'La Molisana')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        <header>
            @include('partials.header')
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
        <footer>
            @include('partials.footer')
        </footer>

        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
        @yield('specific-script')
    </body>
</html>
