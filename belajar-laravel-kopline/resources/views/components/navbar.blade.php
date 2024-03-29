<nav class="px-10 lg:px-16 py-6 flex justify-between items-center">
    <h1 class="text-lg text-white font-semibold"><span class="text-rose-700">KOP</span>line</h1>
    <ul class="hidden text-white lg:flex space-x-10 font-medium cursor-pointer">
        <a href="{{ route('home') }}">
            <li>Beranda</li>
        </a>
        <a href="{{ route('home') }}">
            <li>Kategori Film</li>
        </a>
        <li>Pesanan</li>
        <a href="{{ route('dashboard') }}">
            <li>Dashboard</li>
        </a>
    </ul>
    <div class="space-x-4 flex items-center">
        @guest
        <a href="{{ route('login') }}">
            <i class="fa-solid fa-user text-white text-xl cursor-pointer"></i>
        </a>
        @else
        <a href="{{ route('actionlogout') }}" class="bg-rose-700 text-white px-4 py-1 rounded-full">Logout</a>
        @endguest
    </div>
</nav>