@extends('layouts.main')

@section('content')
<section class="flex flex-col gap-8">
    <div class="flex flex-col gap-2">
      <h1 class="text-3xl font-semibold">Halaman Profile</h1>
      <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, asperiores perferendis cupiditate quia provident eaque exercitationem illum facere inventore possimus eveniet placeat, sint vitae expedita! Temporibus praesentium, cupiditate distinctio eligendi exercitationem, nobis, fugiat ab fuga a recusandae veritatis. Ipsum laborum iure libero fugiat harum perspiciatis.</p>
    </div>
    <div class="flex flex-col gap-2">
      <h3 class="text-xl font-semibold">Halaman Profile</h3>
      
      <div class="flex gap-8 mt-4">
        <form action="" class="w-[25rem] flex flex-col gap-3" action="/login" method="POST">
          @csrf
          <div class="flex flex-col gap-2">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="{{ auth()->user()->username }}" class="flex w-full h-10 px-3 py-2 text-sm border rounded-md border-input bg-background ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" required>
          </div>
          
          <div class="flex flex-col gap-2">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Password baru" class="flex w-full h-10 px-3 py-2 text-sm border rounded-md border-input bg-background ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" required>
          </div>
          
          <div class="flex flex-col gap-2">
            <label for="role">Role</label>
            <input id="role" name="role" type="password" placeholder="{{ auth()->user()->role }}" class="flex w-full h-10 px-3 py-2 text-sm border rounded-md border-input bg-background ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-90" disabled>
          </div>
          
          <div class="flex flex-col gap-2">
            <label for="photo">Photo Profil</label>
            <input id="photo" name="photo" type="file" class="flex w-full h-10 px-3 py-2 text-sm border rounded-md border-input bg-background ring-offset-background file:border-0 file:cursor-pointer file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-90" required>
          </div>
          
          <div class="">
            <button type="submit" class="px-4 py-2 text-white rounded-md bg-slate-900">Simpan</button>
          </div>
        </form>

        <img src="https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg" class="p-2 shadow-sm bg-white rounded-md w-[300px] object-cover">
      </div>
    </div>
</section>
@endsection
