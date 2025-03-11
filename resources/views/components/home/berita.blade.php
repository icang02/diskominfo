<section class="container pt-8 pb-18 lg:pt-10 lg:pb-20 max-w-6xl">
  <x-head-section title="Berita Terbaru Diskominfo Kota Kendari"
    description="Informasi terbaru seputar program dan kegiatan Diskominfo Kota Kendari. <a wire:navigate href='{{ route('category.news', 'all') }}' class='text-primary hover:underline'>Lihat lainnya</a>" />

  @php
    $news = \App\Models\News::limit(3)->get();
  @endphp

  <div class="grid grid-cols-12 gap-8">
    @foreach ($news as $item)
      <div class="col-span-12 lg:col-span-4">
        <div class="after:h-[2px] rounded border border-neutral-100 shadow bottom-underline">
          <img class="aspect-16/9 lg:aspect-4/3" src="{{ urL($item->image) }}" alt="img">
          <div class="p-6">
            <a wire:navigate href="{{ route('show.news', $item->slug) }}">
              <span
                class="bg-primary text-white px-4 py-1.5 text-sm rounded">{{ $item->created_at->format('d M, Y') }}</span>
              <h5 class="hover:text-primary transition duration-500 text-[18px] font-medium mt-3 mb-4">
                {{ str()->limit($item->title, 25) }}</h5>
              <p class="text-[13px] text-neutral-500 leading-6">{{ str()->limit(strip_tags($item->content), 100) }}</p>
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>
