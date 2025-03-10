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
        <li @class(['nav-link', 'active' => request()->is('/profil')])><a href="#">Profil <i class="icofont-rounded-down"></i></a>
          <ul class="dropdown hidden">
            <li><a href="index.html">Visi & Misi</a></li>
            <li><a href="index.html">Struktur Organisasi</a></li>
            <li><a href="index.html">Lorem ipsum</a></li>
          </ul>
        </li>
        <li @class([
            'nav-link',
            'active' => Str::startsWith(request()->path(), 'berita'),
        ])>
          <a wire:navigate href='{{ route('category.news', 'all') }}'>Berita</a>
        </li>
        <li @class(['nav-link', 'active' => request()->is('/layanan')])><a href="#">Layanan <i class="icofont-rounded-down"></i></a>
          <ul class="dropdown hidden">
            <li><a href="404.html">Sub Domain, Hosting, VPS</a></li>
            <li><a href="404.html">Pembuatan Email Dinas</a></li>
            <li><a href="404.html">Pengajuan TTE &#40;Tanda Tangan Elektrnoik&#41;</a></li>
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
