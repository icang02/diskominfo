@php
  $visitors = [
      [
          'title' => 'Total Pengunjung',
          'total' => 12000,
          'icon' => '<i class="icofont icofont-users"></i>',
      ],
      [
          'title' => 'Pengunjung Bulan Ini',
          'total' => 1500,
          'icon' => ' <i class="icofont icofont-calendar"></i>',
      ],
      [
          'title' => 'Pengunjung Minggu Ini',
          'total' => 400,
          'icon' => '   <i class="icofont icofont-calendar"></i>',
      ],
      [
          'title' => 'Pengunjung Hari Ini',
          'total' => 80,
          'icon' => '   <i class="icofont icofont-clock-time"></i>',
      ],
  ];
@endphp

<section class="relative py-16 lg:py-22 background-blue-opacity"
  style="background-image: url('{{ asset('front/img/bg-counting.webp') }}')">
  <div class="relative z-10 container max-w-6xl text-white">
    <div class="grid grid-cols-12 gap-y-10">
      @foreach ($visitors as $item)
        <div class="col-span-12 lg:col-span-3 group">
          <div class="flex flex-col lg:flex-row text-center lg:text-left items-center gap-6">
            <div
              class="text-2xl size-17 border-2 rounded-full flex items-center justify-center transition duration-500 group-hover:text-primary group-hover:bg-white">
              {!! $item['icon'] !!}
            </div>
            <div class="content">
              <span class="font-semibold text-[30px] leading-6">{{ number_format($item['total']) }}</span>
              <p class="mt-1 text-[15px] leading-6">{{ $item['title'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
