<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body class="text-center flex flex-col justify-between border w-fit m-auto px-8 py-4 h-100 mt-10">
    <div>
        <h1 class="font-bold text-xl">Welcome {{ $name }}!</h1>
        <p class="text-xs">This website build from net ninja tutorial.</p>
    </div>

    <div class="self-center">
        <h3 class="text-xl font-bold">Get ready for your self!</h3>
    </div>

    <a href="/ninjas" class="border-2 px-4 py-2 w-fit rounded-md mt-2 self-center bg-blue-200 font-bold shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">LIST NINJAS 🥷</a>

</body>

</html