<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-stone-100">
  <section class="flex">
    @include('layouts.sidebar')

    <main class="ml-[350px] p-8">
      @yield('content')
    </main>
  </section>
</body>
</html>