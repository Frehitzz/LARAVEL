<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>My Site</title>
        @vite("resources/css/app.css")
    </head>
    <body class="">
        <nav class="flex justify-between bg-red-300 px-10 py-4">
            <h1 class="text-2xl">My Site</h1>
            <ul class="flex text-2xl gap-7">
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </nav>
    </body>
</html>
