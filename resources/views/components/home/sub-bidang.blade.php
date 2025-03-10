@php
  $bidangKominfo = [
      [
          'title' => 'Sekretariat Dinas',
          'description' => 'Mengelola administrasi, keuangan, dan koordinasi internal dinas secara efektif.',
          'icon' => '<i class="icofont icofont-paper"></i>',
      ],
      [
          'title' => 'Bidang T.I.K dan E-Government',
          'description' => 'Mengembangkan dan mengelola teknologi informasi serta layanan e-government.',
          'icon' => '<i class="icofont icofont-computer"></i>',
      ],
      [
          'title' => 'Bidang Informasi, Komunikasi, dan Publikasi',
          'description' => 'Mengelola informasi publik, media komunikasi, dan strategi publikasi dinas.',
          'icon' => '<i class="icofont icofont-newspaper"></i>',
      ],
      [
          'title' => 'Bidang Keamanan Informasi dan Persandian',
          'description' => 'Menjaga keamanan data, sistem informasi, dan mengelola persandian dinas.',
          'icon' => '<i class="icofont icofont-lock"></i>',
      ],
      [
          'title' => 'Bidang Statistik Sektoral',
          'description' => 'Mengumpulkan, mengolah, dan menyajikan data statistik untuk perencanaan pembangunan.',
          'icon' => '<i class="icofont icofont-chart-bar-graph"></i>',
      ],
  ];
@endphp

<section class="container pt-8 pb-18 lg:pt-10 lg:pb-20 max-w-6xl">
  <x-head-section title="Bidang Layanan"
    description="Diskominfo Kota Kendari memiliki beberapa bidang yang bertanggung jawab dalam mengelola layanan teknologi informasi dan komunikasi." />

  <div class="grid grid-cols-12 gap-x-0 lg:gap-x-17 gap-y-10 lg:gap-y-7 text-center">
    @foreach ($bidangKominfo as $item)
      <div class="col-span-12 lg:col-span-4 group">
        <div
          class="text-4xl lg:text-5xl text-primary p-4 lg:p-5 border border-neutral-300 mx-auto rounded-full w-fit transition duration-500 group-hover:border-primary group-hover:text-white group-hover:bg-primary">
          {!! $item['icon'] !!}</div>
        <h3 class="mt-5 lg:mt-6 mb-4 lg:mb-5 text-[20px] lg:text-[21px] leading-[24px] lg:leading-[25px] font-semibold">
          {{ $item['title'] }}</h3>
        <p class="text-sm text-neutral-500 leading-6">{{ $item['description'] }}</p>
      </div>
    @endforeach
  </div>
</section>
