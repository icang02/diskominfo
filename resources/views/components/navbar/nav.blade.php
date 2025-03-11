<div class="grid grid-cols-12 items-center">
  <div class="col-span-12 lg:col-span-3 flex justify-between items-center py-1.5 lg:py-0">
    <!-- Start Logo -->
    <div class="w-40 lg:w-46">
      <a wire:navigate href="{{ route('home') }}" class="outline-none"><img src="{{ asset('front/img/logo.png') }}"
          alt="logo"></a>
    </div>
    <!-- End Logo -->
    <!-- Mobile Nav -->
    <button class="block lg:hidden p-2 focus:outline-none" aria-label="btn-hamburger">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>
    <!-- End Mobile Nav -->
  </div>
  <div class="hidden lg:block col-span-12 lg:col-span-6 mx-auto">
    <!-- Main Menu -->
    <div class="text-sm text-neutral-700 font-medium">
      <ul class="flex items-center">
        <li @class(['nav-link', 'active' => request()->is('/')])>
          <a wire:navigate href="{{ route('home') }}">Beranda</a>
        </li>
        <li @class([
            'nav-link relative group',
            'active' => request()->is('/profil'),
        ])>
          <button class="cursor-pointer">Profil &nbsp;<i class="fa-solid fa-angle-down"></i></button>
          <ul
            class="w-50 max-h-0 group-hover:max-h-96 transition-all ease-in duration-500 text-neutral-500 text-sm mt-13 z-50 absolute top-0 left-2 border border-l-primary bg-white overflow-hidden">
            <li>
              <a class="w-full px-4 py-3 block hover:text-primary transition duration-500" wire:navigate
                href="{{ route('index.profile', 'visi') }}">Visi</a>
            </li>
            <li>
              <a class="w-full px-4 py-3 block hover:text-primary transition duration-500" wire:navigate
                href="{{ route('index.profile', 'misi') }}">Misi</a>
            </li>
            <li><a class="w-full px-4 py-3 block hover:text-primary transition duration-500" wire:navigate
                href="{{ route('index.profile', 'struktur') }}">Struktur
                Organisasi</a>
            </li>
            <li><a class="w-full px-4 py-3 block hover:text-primary transition duration-500" wire:navigate
                href="{{ route('index.pegawai') }}">Pegawai</a></li>
          </ul>
        </li>
        <li @class([
            'nav-link',
            'active' => Str::startsWith(request()->path(), 'berita'),
        ])>
          <a wire:navigate href='{{ route('category.news', 'all') }}'>Berita</a>
        </li>
        <li @class([
            'nav-link relative group',
            'active' => request()->is('/layanan'),
        ])>
          <button class="cursor-pointer">Layanan &nbsp;<i class="fa-solid fa-angle-down"></i></button>
          <ul
            class="w-50 max-h-0 group-hover:max-h-96 transition-all ease-in duration-500 text-neutral-500 text-sm mt-13 z-50 absolute top-0 left-2 bg-white overflow-hidden">
            <li>
              <a class="w-full px-4 py-3 block hover:text-primary transition duration-500" wire:navigate
                href="{{ route('category.news', 'all') }}">Sub Domain, Hosting, & VPS</a>
            </li>
            <li><a class="w-full px-4 py-3 block hover:text-primary transition duration-500" wire:navigate
                href="index.html">Pembuatan Email Dinas</a>
            </li>
            <li><a class="w-full px-4 py-3 block hover:text-primary transition duration-500" wire:navigate
                href="index.html">Pengajuan TTE</a></li>
          </ul>
        </li>
        <li @class(['nav-link', 'active' => request()->is('/dokumen')])><a href="#">Dokumen </a></li>
        <li @class(['nav-link', 'active' => request()->is('/galeri')])><a href="contact.html">Galeri</a></li>
      </ul>
    </div>
    <!--/ End Main Menu -->
  </div>
  <div class="hidden lg:block col-span-12 lg:col-span-3">
    <div class="text-end">
      <a href="#" class="btn-primary">
        <span>
          <i class="fa-solid fa-magnifying-glass"></i>
        </span>
      </a>
    </div>
  </div>
</div>
