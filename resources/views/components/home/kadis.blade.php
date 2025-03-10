@php
  $tagline = [
      'Smart City Terdepan',
      'Transformasi Digital',
      'Inovasi Teknologi',
      'Layanan Publik Prima',
      'Keamanan Siber',
      'Literasi Digital',
  ];
@endphp

<section class="mt-225 py-16 lg:mt-40 container max-w-6xl">
  <x-head-section title="Sambutan Kepala Diskominfo Kota Kendari"
    description="Selamat datang di website resmi Diskominfo Kota Kendari. Kami berkomitmen mewujudkan Smart City yang maju, inovatif, dan berdaya saing." />

  <div class="grid grid-cols-12 gap-7">
    <div class="order-2 lg:order-1 col-span-12 lg:col-span-7">
      <h3 class="text-[24px] font-semibold">Ir. NISMAWATI, M.Si</h3>
      <span class="inline-block w-13 h-[2px] bg-primary my-3"></span>
      <div class="flex flex-col space-y-8">
        <p class="text-neutral-500 text-sm leading-6">
          Sebagai institusi yang bertanggung jawab dalam bidang teknologi informasi dan komunikasi, kami berkomitmen
          untuk memberikan layanan terbaik guna mendukung transformasi digital dan mewujudkan Kota Kendari sebagai
          Smart
          City yang maju, inovatif, dan berdaya saing.</p>
        <p class="text-neutral-500 text-sm leading-6">Website ini hadir sebagai sarana informasi dan komunikasi antara
          pemerintah dan masyarakat. Kami mengajak
          seluruh masyarakat Kota Kendari untuk bersama-sama memanfaatkan teknologi informasi guna menciptakan kota
          yang
          lebih cerdas, terhubung, dan sejahtera.</p>
        <p class="text-neutral-500 text-sm leading-6">Dengan semangat kolaborasi dan inovasi, mari kita wujudkan visi
          Kota Kendari sebagai pusat pertumbuhan
          ekonomi digital dan teknologi di wilayah Indonesia Timur.</p>
      </div>

      <div class="mt-9 grid grid-cols-2 tex-sm text-neutral-500 space-y-4 lg:space-y-3">
        @foreach ($tagline as $item)
          <div class="col-span-2 lg:col-span-1 flex items-center space-x-4">
            <span
              class="text-[15px] bg-primary h-[14px] flex items-center justify-end w-[15px] text-white p-1 rounded-[50%]">
              <i class="fa fa-caret-right"></i>
            </span>
            <span class="text-sm">{{ $item }}</span>
          </div>
        @endforeach
      </div>
    </div>

    <div class="order-1 lg:order-2 col-span-12 lg:col-span-5">
      <img src="{{ asset('front/img/kadis.webp') }}" alt="img" class="w-full h-auto">
    </div>
  </div>

</section>
