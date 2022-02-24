<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    
        <!--- Navbar --->

        <nav class="nav bg-slate-100 h-14">
            <div class="container mx-auto">
                <div class="nav__inner flex justify-between">
                    <div class="logo mt-3">
                        <h1 class="text-xl">Laravel Tailwind</h1>
                    </div>
                    <div class="bar mt-4">
                        <a href="#" class="item mr-1 p-3 hover:bg-slate-200 hover:px-3 hover:py-3 transition-all">Home</a>
                        <a href="#" class="item p-3 hover:bg-slate-200 hover:px-3 hover:py-3 transition-all">About</a>
                    </div>
                </div>
            </div>
        </nav>

        <!---- Content ---->

        @yield('content')

        <!--- Footer ---->

        <footer class="footer bg-slate-100 w-full h-16 absolute bottom-0">
            <div class="container mx-auto">
                <div class="footer__inner mt-6 flex justify-center">
                    <a class="text-black decoration-black ">Copyright By. Hellen</a>
                </div>
            </div>
        </footer>

    </body>
</html>