@php
  $layanan = [
      [
          'title' => 'Sub Domain, Hosting, & VPS',
          'description' =>
              'Layanan penyediaan sub domain, hosting, dan VPS untuk mendukung kebutuhan website dan aplikasi instansi.',
          'href' => '#',
          'icon' => '<i class="icofont icofont-server"></i>',
      ],
      [
          'title' => 'Pembuatan Email Dinas',
          'description' =>
              'Layanan pembuatan email dinas resmi untuk meningkatkan profesionalitas komunikasi instansi.',
          'href' => '#',
          'icon' => '<i class="icofont icofont-email"></i>',
      ],
      [
          'title' => 'Pengajuan TTE (Tanda Tangan Elektronik)',
          'description' => 'Layanan pengajuan Tanda Tangan Elektronik (TTE) untuk dokumen resmi instansi pemerintah.',
          'href' => '#',
          'icon' => '<i class="icofont icofont-document-folder"></i>',
      ],
  ];
@endphp


<section class="container pt-8 pb-18 lg:pt-10 lg:pb-20 max-w-6xl">
  <x-head-section title="Layanan Diskominfo"
    description="Diskominfo Kota Kendari menyediakan layanan untuk mendukung kebutuhan teknologi informasi dan komunikasi." />

  <div class="grid grid-cols-12 gap-x-0 lg:gap-x-17 gap-y-10 lg:gap-y-7">
    @foreach ($layanan as $item)
      <div class="col-span-12 lg:col-span-4">
        <div class="flex items-start gap-5">
          <span class="text-primary text-5xl">
            {!! $item['icon'] !!}
          </span>
          <div class="flex flex-col">
            <h4 class="text-[20px] mb-4 leading-6 font-semibold hover:text-primary transition duration-500"><a
                href="{{ $item['href'] }}">{{ $item['title'] }}</a>
            </h4>
            <p class="text-sm text-neutral-500 leading-6">{{ $item['description'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>
