<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CinemaCollector</title>
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>

<body class="bg-indigo-900 text-white">
    <div class="flex h-full">
        <div class="">
            <x-navigation />
        </div>
        <div class="grow">
            <x-search />
            {{$slot}}
        </div>
    </div>

    <script src="{{asset('minimize.js')}}"></script>
</body>

</html>