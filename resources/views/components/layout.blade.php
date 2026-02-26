<<<<<<< HEAD
{{-- THIS IS A DEFAULT TITLE NAME FOR THOS WHO DONT HAVE TITLE --}}

{{--
    @props([
    "title" => "My-website",
    ])
--}}
=======
@props([
    'title' => 'Laracasts'
])
>>>>>>> d7b310eadb2bf57cc2ea2133c6d4fa609e5663d4
<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<<<<<<< HEAD
        <title>{{ $title }}</title>
        @vite("resources/css/app.css")
    </head>
    <body>
=======
        <title>{{$title}}</title>
        @vite("resources/css/app.css")
    </head>
    <body class="">
>>>>>>> d7b310eadb2bf57cc2ea2133c6d4fa609e5663d4
        <nav class="flex justify-between bg-red-300 px-10 py-4">
            <h1 class="text-2xl">My Site</h1>
            <ul class="flex text-2xl gap-7">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>

        <main>
<<<<<<< HEAD
            {{ $slot }}
        </main>
=======
           {{$slot}}
        </main>
        
>>>>>>> d7b310eadb2bf57cc2ea2133c6d4fa609e5663d4
    </body>
</html>
