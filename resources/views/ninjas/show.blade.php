<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ninjas | Net Ninja Laravel</title>

  @vite('resources/css/app.css')
</head>

<body class="text-center flex flex-col justify-between border w-fit m-auto px-8 py-4 h-100 mt-10">
  <div>
    <h2 class="text-xl font-bold">Welcome to Ninjas Page</h2>
    <p class="text-xs">Your name is Yusuf, right?</p>
  </div>

  <div class="self-center">
    <h3 class="text-xl font-bold">Congratulations!</h3>
    <p>The ID of Ninja is {{$id}}</p>
  </div>

  <div>
    <a href="/ninjas" class="border-2 px-4 py-2 w-fit rounded-md mt-2 self-center bg-blue-200 font-bold shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">🥷 LIST NINJAS</a>
    <a href="/" class="border-2 px-4 py-2 w-fit self-center rounded-md mt-2 font-bold shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">🏠 HOMEPAGE</a>

  </div>

</body>

</html>