<div class="relative py-16 lg:py-30 background-blue-opacity flex items-center justify-center"
  style="background-image: url('{{ asset('front/img/bg-page.webp') }}')">
  <div class="relative z-10 text-white container max-w-6xl text-center">
    <div>
      <h2 class="text-[28px] lg:text-[38px] font-bold leading-6">{{ $title }}</h2>
      <ul class="mt-5 lg:mt-8 text-sm lg:text-[15px] flex items-center justify-center space-x-2.5 lg:space-x-4">
        <li class=""><a wire:navigate href={{ route('home') }} class="text-light hover:underline">Beranda</a></li>
        <li class="text-xs"><i class="fa-solid fa-angle-right"></i></li>
        @foreach ($list as $i => $item)
          @if (isset($item['href']))
            <li><a wire:navigate href={{ url($item['href']) }}
                class="text-light hover:underline">{{ $item['label'] }}</a></li>
          @else
            <li>{{ $item['label'] }}</li>
          @endif
          <li @class(['text-xs', 'hidden' => count($list) - 1 == $i])><i class="fa-solid fa-angle-right"></i></li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
