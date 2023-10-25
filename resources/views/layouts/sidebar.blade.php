<aside class="bg-white w-[350px] h-screen fixed top-0 left-0 z-40 flex flex-col p-8 drop-shadow-md">
  <div class="h-[120px] w-full absolute -mt-[32px] -ml-[32px] flex justify-center items-center text-xs bg-cover rounded-b-2xl" style="background-image: url('{{ url('assets/img/bg-sidebar.png') }}');"></div>

  <div class="flex flex-col items-center justify-center mt-7">
    <div class="h-[120px] w-[120px] z-40 rounded-full flex justify-center items-center text-xs border-solid border-[3px] border-white bg-cover" style="background-image: url('{{ url('assets/img/profile-sidebar.jpeg') }}');"></div>
    <h2 class="mt-4 font-medium">Kalam Mahardhika</h2>
    <p class="mb-4 text-sm">
      @if (auth()->check() && auth()->user()->role == 'admin')
        Administrator
      @elseif (auth()->check() && auth()->user()->role == 'manager')
        Manager
      @endif
    </p>
  </div>

  <hr>

  <div class="flex flex-col gap-2 mt-4">
    <div class="{{ Route::is('beranda') ? 'w-full rounded-md bg-stone-100 hover:bg-stone-100' : 'w-full rounded-md hover:bg-stone-100' }}">
      <a href="{{ route('beranda') }}" class="flex items-center gap-2 p-2 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
        
        <p>Beranda</p>
      </a>
    </div>
    
    <div class="{{ Route::is('profile.index') ? 'w-full rounded-md bg-stone-100 hover:bg-stone-100' : 'w-full rounded-md hover:bg-stone-100' }}">
      <a href="{{ route('profile.index') }}" class="flex items-center gap-2 p-2 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
        </svg>
        
        <p>Profile</p>
      </a>
    </div>

    <div class="{{ Route::is('team.index') ? 'w-full rounded-md bg-stone-100 hover:bg-stone-100' : 'w-full rounded-md hover:bg-stone-100' }}">
      <a href="{{ route('team.index') }}" class="flex items-center gap-2 p-2 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
        </svg>
        
        <p>Data Team</p>
      </a>
    </div>

    <div class="{{ Route::is('performansi.index') ? 'w-full rounded-md bg-stone-100 hover:bg-stone-100' : 'w-full rounded-md hover:bg-stone-100' }}">
      <a href="{{ route('performansi.index') }}" class="flex items-center gap-2 p-2 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
        </svg>
        
        <p>Data Performansi</p>
      </a>
    </div>
    
    @if (auth()->check() && auth()->user()->role == 'manager')
      <div class="{{ Route::is('buser.index') ? 'w-full rounded-md bg-stone-100 hover:bg-stone-100' : 'w-full rounded-md hover:bg-stone-100' }}">
        <a href="{{ route('buser.index') }}" class="flex items-center gap-2 p-2 cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
          </svg>        
          
          <p>Bursa Transfer</p>
        </a>
      </div>

      <div class="{{ Route::is('notif.index') ? 'w-full rounded-md bg-stone-100 hover:bg-stone-100' : 'w-full rounded-md hover:bg-stone-100' }}">
        <a href="{{ route('notif.index') }}" class="flex items-center gap-2 p-2 cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
          </svg>        
          
          <p>Notifikasi</p>
        </a>
      </div>
    @endif

    <div class="w-full rounded-md hover:bg-stone-100">
      <form class="flex items-center gap-2 p-2 cursor-pointer" action="/logout" method="post">
        @csrf
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
        </svg>
        
        <button type="submit">Logout</button>
      </form>
    </div>
  </div>
</aside>