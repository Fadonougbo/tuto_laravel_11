<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/index.js'])
</head>
<body>
    @includeWhen(true,'home.header')
    <a href="{{route("socialite.signin")}}">signin github</a>
    <img src="{{asset("clupyn8wm000c0gl505m8gn4i.jpg")}}" class="scale-[0.2] " alt="">
    <img src="{{asset("clupyn8wm000c0gl505m8gn4i2.webp")}}" class="scale-[0.2] " alt="">
    <img src="{{asset("clupyn8wm000c0gl505m8gn4i.jpg")}}" class="scale-[0.2] " alt="">
    <img src="{{asset("Screenshot_20241101-142028_1-1.jpg")}}" class="" alt="">

</body>
</html>