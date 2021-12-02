<!doctype html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        <div class="container">
            <div id="main" class="row">
                @yield('content')
            </div>
        </div>
        <footer class="row">
            @include('includes.footer')
        </footer>
    </body>
</html>