<!-- Card 1: Search Card -->
<div class="bg-white shadow-lg rounded-lg p-6 mb-8">
  <h2
    class="inline-block relative text-lg font-semibold text-gray-800 mb-8 after:content-[''] after:absolute after:h-[3px] after:w-[60%] after:bg-primary after:top-[33px] after:left-0">
    Cari Berita</h2>
  <form action="#" method="GET">
    <div class="flex items-center">
      <input type="text" name="search" placeholder="Kata kunci..." autocomplete="off"
        class="text-sm w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
      <button type="submit"
        class="bg-primary text-white px-6 py-2 rounded-r-lg hover:bg-blue-600 transition duration-300">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </div>
  </form>
</div>

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
</div>
