<div>
  <x-breadcrumb title="Berita" :list="[
      [
          'label' => Str::title(str_replace('-', ' ', $slug)),
          'href' => route('category.news', $slug),
      ],
      [
          'label' => 'Detail',
      ],
  ]" />

  <section class="mt-12 lg:mt-16 mb-17 lg:mb-20 container max-w-6xl">
    <div class="grid grid-cols-12 gap-8">
      <div class="col-span-12 lg:col-span-8">
        <div class="grid grid-cols-12 gap-y-10">
          @forelse ($news as $item)
            <div class="col-span-12">
              <div class="rounded bg-white border border-neutral-200 flex flex-col lg:flex-row bottom-underline">
                <img class="aspect-[16/9] w-full lg:w-[30%] h-auto rounded" src="{{ url($item->image) }}" alt="#">

                <div class="p-7">
                  <a wire:navigate href="{{ route('show.news', $item->slug) }}">
                    <h2 class="leading-6 font-medium hover:text-primary transition duration-500">
                      {{ Str::limit($item->title, 80) }}</h2>
                  </a>
                  <p class="my-4 text-sm text-neutral-500">{{ Str::limit(strip_tags($item->content), 100) }}</p>
                  <div class="text-sm lg:text-sm flex items-start lg:items-center gap-1.5 lg:gap-0 justify-between">
                    <div class="flex items-center space-x-3">
                      <span class="date">
                        <i class="fa-regular fa-clock text-primary text-[10px] lg:text-xs"></i>
                        {{ $item->created_at->format('d F, Y') }}
                      </span>
                    </div>

                    <div class="flex items-center space-x-3">
                      <span
                        class="cursor-default bg-primary text-white rounded text-[10px] font-medium px-1.5 py-0.5">{{ $item->category->category_name }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @empty
            <div class="col-span-12">
              <p class="text-sm text-center text-neutral-500">No data found.</p>
            </div>
          @endforelse
          @if ($news->total() >= 5)
            <div class="col-span-12">
              {{ $news->links() }}
            </div>
          @endif
        </div>
      </div>

      <div class="col-span-12 lg:col-span-4">
        <x-search-and-categories :categories="$categories" />
      </div>
    </div>
  </section>
</div>
