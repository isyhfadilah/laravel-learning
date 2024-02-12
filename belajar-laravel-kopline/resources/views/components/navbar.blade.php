<nav class="px-16 py-6 flex justify-between items-center">
    <h1 class="text-lg text-white font-semibold"><span class="text-rose-700">KOP</span>line</h1>
    <ul class="text-white flex space-x-10 font-medium cursor-pointer">
        <li>Beranda</li>
        <li>Kategori Film</li>
        <li>Pesanan</li>
    </ul>
    <div class="space-x-4 flex items-center">
        <a href="{{ route('actionlogout') }}" class="bg-rose-700 text-white px-4 py-1 rounded-full">Logout</a>
        <a href="{{ route('login') }}">
            <i class="fa-solid fa-user text-white text-xl cursor-pointer"></i>
        </a>
    </div>
</nav>