<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_app')</title>
    @vite(["resources/css/app.css","resources/js/app.js"])
</head>

<body>
 <x-menu tiponav="negro">TecnologySoft</x-menu>

 <div class="container my-2">
    {{$slot}}
 </div>


 @yield('js')
</body>