<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>

  @vite('resources/css/app.css')
</head>

<body class="text-center flex flex-col justify-between border w-fit m-auto px-8 py-4 min-h-100 mt-10 gap-4 overflow-hidden">
  {{ $slot }}
</body>

</html>