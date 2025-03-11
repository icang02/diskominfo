<!-- Card 2: Categories List -->
<div class="bg-white shadow-lg rounded-lg p-6">
  <h2
    class="inline-block relative text-lg font-semibold text-gray-800 mb-8 after:content-[''] after:absolute after:h-[3px] after:w-[60%] after:bg-primary after:top-[33px] after:left-0">
    Kategori</h2>
  <ul class="space-y-2">
    @foreach ($categories as $item)
      <a wire:navigate href="{{ route('category.news', $item->slug) }}"
        class="flex items-center justify-between px-2 py-1 text-gray-700 hover:text-primary hover:px-0 hover:bg-gray-50 rounded-lg transition-all duration-300
                {{ $item->slug == $this->slug ? '!px-0 !text-primary' : '' }}">
        <span class="text-sm">{{ $item->category_name }}</span>
        <span class="text-xs font-light">{{ $item->news_count }} Articles</span>
      </a>
    @endforeach
  </ul>
</div>
