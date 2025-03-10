@php
  $sliders = [
      [
          'title' => 'Dinas Komunikasi <span>Informatika</span> Kota <span>Kendari</span>',
          'image' => 'front/img/slider-1.webp',
          'description' =>
              'Dinas Kominfo Kota Kendari berkomitmen untuk menyediakan layanan teknologi informasi yang inovatif, aman, dan terpercaya guna mendukung transformasi digital menuju Smart City.',
      ],
      [
          'title' => 'Transformasi Digital <span>Kota Kendari</span> Menuju <span>Smart City</span>',
          'image' => 'front/img/slider-2.webp',
          'description' =>
              'Dinas Komunikasi dan Informatika Kota Kendari berkomitmen untuk mempercepat transformasi digital dengan menyediakan layanan teknologi informasi yang inovatif, aman, dan terpercaya bagi masyarakat.',
      ],
      [
          'title' => 'Edukasi dan Literasi <span>Digital</span> untuk <span>Masyarakat</span>',
          'image' => 'front/img/slider-3.webp',
          'description' =>
              'Dinas Kominfo Kota Kendari menyelenggarakan berbagai program edukasi dan pelatihan untuk meningkatkan literasi digital masyarakat.',
      ],
  ];

  $card = [
      [
          'title_1' => 'Layanan Cepat',
          'title_2' => 'Layanan Darurat TI',
          'desc' => 'Layanan darurat untuk masalah teknologi informasi, keamanan siber, dan infrastruktur TI.',
          'href' => '#',
          'icon' => 'fa fa-life-ring',
      ],
      [
          'title_1' => 'Edukasi Masyarakat',
          'title_2' => 'Pelatihan Digital',
          'desc' => 'Daftar pelatihan dan workshop literasi digital untuk masyarakat, pelajar, dan pelaku usaha.',
          'href' => '#',
          'icon' => 'fa fa-calendar',
      ],
      [
          'title_1' => 'Layanan Publik',
          'title_2' => 'Pengaduan Masyarakat',
          'desc' => 'Layanan pengaduan untuk masalah teknologi informasi dan komunikasi yang dialami oleh masyarakat.',
          'href' => '#',
          'icon' => 'fa fa-comments',
      ],
  ];
@endphp

<div class="h-[25rem] lg:h-[35rem]">
  <button
    class="btn-prev-slide hidden lg:block cursor-pointer z-10 absolute size-12 text-2xl rounded-full bg-primary text-white left-3 top-1/2 translate-y-[-50%] hover:opacity-90 transition duration-500">
    <i class="fa fa-angle-left" aria-hidden="true"></i>
  </button>
  <button
    class="btn-next-slide hidden lg:block cursor-pointer z-10 absolute size-12 text-2xl rounded-full bg-primary text-white right-3 top-1/2 translate-y-[-50%] hover:opacity-90 transition duration-500">
    <i class="fa fa-angle-right" aria-hidden="true"></i>
  </button>

  <swiper-container loop="true" speed="500" slides-per-view="1">
    @foreach ($sliders as $item)
      <swiper-slide>
        <section
          class="border-none outline-none relative h-[25rem] lg:h-[35rem] bg-cover bg-center after:content-[''] after:absolute after:inset-0 after:bg-black/40 lg:after:bg-black/60"
          style="background-image: url('{{ $item['image'] }}')">
          <div class="container max-w-6xl relative z-10 h-full pt-7 lg:pt-24">
            <h1 class="text-white font-bold text-[20px] lg:text-4xl max-w-xl [&>span]:text-primary">
              {!! $item['title'] !!}</h1>
            <p class="text-white text-[13px] lg:text-sm my-7 lg:my-8 leading-6 max-w-2xl">{{ $item['description'] }}</p>
            <div class="flex flex-col lg:flex-row text-center items-center gap-3 lg:gap-4">
              <a href="#" class="text-[13px] w-full lg:w-fit lg:text-sm btn-primary">
                <span>Ajukan Layanan</span>
              </a>
              <a href="#" class="text-[13px] w-full lg:w-fit lg:text-sm btn-secondary">
                <span>Tentang Kami</span>
              </a>
            </div>
          </div>
        </section>
      </swiper-slide>
    @endforeach
  </swiper-container>

  <div class="overflow-hidden mt-0 py-16 lg:py-0 lg:-mt-33 container max-w-6xl relative z-20 grid grid-cols-12 gap-7">
    @foreach ($card as $item)
      <div class="col-span-12 lg:col-span-4">
        <div
          class="relative p-7 px-8 bg-primary text-white transition-all hover:shadow-xl duration-500 hover:-translate-y-1 rounded">
          <div class="absolute bottom-0 right-4 opacity-20 scale-[7] lg:scale-[5]">
            <i class="{{ $item['icon'] }}"></i>
          </div>
          <div class="single-content">
            <span class="text-sm">{{ $item['title_1'] }}</span>
            <h2 class="mt-2 text-[20px] font-semibold">{{ $item['title_2'] }}</h2>
            <p class="text-sm py-6 leading-6">{{ $item['desc'] }}</p>
            <a class="text-sm font-medium uppercase relative after:content-[''] after:absolute after:left-1/2 after:-translate-x-1/2 after:top-5 after:h-[1px] after:bg-white after:w-full after:origin-left after:scale-x-0 hover:after:scale-x-100 after:duration-500"
              href="{{ $item['href'] }}">
              LEARN MORE&nbsp;&nbsp;
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
