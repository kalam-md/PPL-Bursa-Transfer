<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <section class="flex items-center justify-center h-screen bg-cover" style="background-image: url('{{ url('assets/img/bg-login.png') }}');">
    <form action="" class="w-[25rem] bg-white p-6 rounded-md flex flex-col gap-3" action="/login" method="POST">
      @if (session('loginError'))
      <small class="my-2 ml-1 text-sm text-center text-red-600">{{ session('loginError') }}</small>
      @endif
      
      @csrf
      <div class="flex flex-col gap-2">
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Username" class="flex w-full h-10 px-3 py-2 text-sm border rounded-md border-input bg-background ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" required>
      </div>
      
      <div class="flex flex-col gap-2">
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Password" class="flex w-full h-10 px-3 py-2 text-sm border rounded-md border-input bg-background ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" required>
      </div>
      <button type="submit" class="px-4 py-2 text-white rounded-md bg-slate-900">Login</button>
    </form>
  </section>
</body>
</html>