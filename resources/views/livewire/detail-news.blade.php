<div>
  <x-breadcrumb title="Berita" :list="[
      [
          'label' => $news->category->category_name,
          'href' => route('category.news', $news->category->slug),
      ],
      [
          'label' => 'Detail',
      ],
  ]" />

  <section class="mt-12 lg:mt-16 mb-17 lg:mb-20 container max-w-6xl">
    <div class="grid grid-cols-12 gap-8">
      <div class="col-span-12 lg:col-span-8">
        <div class="rounded bg-white p-7 border border-neutral-200">
          {{-- Image --}}
          <img class="aspect-[16/9] w-full h-auto rounded" src="{{ url($news->image) }}" alt="#">
          {{-- Title --}}
          <h1 class="mt-6 mb-4 lg:mb-7 font-medium text-lg lg:text-[24px] leading-6 lg:leading-7">{{ $news->title }}
          </h1>
          {{-- Author, Date, Views --}}
          <div
            class="text-sm lg:text-sm flex flex-col lg:flex-row items-start lg:items-center gap-1.5 lg:gap-0 justify-between">
            <div class="flex items-center space-x-3">
              <a href="#" class="flex items-center space-x-2.5">
                <img class="size-8 lg:size-10 rounded-full"
                  src="{{ url('https://as2.ftcdn.net/v2/jpg/02/23/78/39/1000_F_223783951_jdjCePyht6dgQ6OjDMld50ynEIo5Ypm7.jpg') }}"
                  alt="#">
                <span>Admin</span>
              </a>
              <span class="date">
                <i class="fa-regular fa-clock text-primary text-[10px] lg:text-xs"></i>
                {{ $news->created_at->format('d F, Y') }}
              </span>
            </div>

            <div class="flex items-center space-x-3">
              <span
                class="cursor-default bg-primary text-white rounded text-[10px] font-medium px-1.5 py-0.5">{{ $news->category->category_name }}</span>
              <span class="views">
                <i class="fa-regular fa-eye text-primary text-xs"></i>
                &nbsp;{{ format_short_number(rand(50, 9999)) }}
                Views</span>
            </div>
          </div>

          <!-- News Text -->
          <div class="mt-8 prose prose-sm">
            {!! $news->content !!}
          </div>
          {{-- Bottom Social Button --}}
          <div class="flex flex-col sm:flex-row justify-between items-center gap-6 pt-6 border-t border-gray-200 mt-8">
            <!-- Social Share -->
            <ul class="social-share flex items-center gap-4">
              <li>
                <a href="#"
                  class="flex items-center gap-2 text-gray-600 hover:text-blue-600 transition duration-300">
                  <i class="fab fa-facebook text-lg"></i>
                  <span class="hidden sm:inline">Facebook</span>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center gap-2 text-gray-600 hover:text-blue-400 transition duration-300">
                  <i class="fab fa-twitter text-lg"></i>
                  <span class="hidden sm:inline">Twitter</span>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center gap-2 text-gray-600 hover:text-red-600 transition duration-300">
                  <i class="fab fa-google-plus text-lg"></i>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center gap-2 text-gray-600 hover:text-blue-700 transition duration-300">
                  <i class="fab fa-linkedin text-lg"></i>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center gap-2 text-gray-600 hover:text-red-600 transition duration-300">
                  <i class="fab fa-pinterest text-lg"></i>
                </a>
              </li>
            </ul>

            <ul class="prev-next flex items-center gap-3">
              <li @class(['opacity-60 pointer-events-none' => !isset($prevNews)])>
                <a wire:navigate href="{{ isset($prevNews) ? route('show.news', $prevNews->slug) : '#' }}"
                  class="bg-primary text-white px-4 py-2.5 rounded flex items-center gap-2 transition duration-300">
                  <i class="fas fa-angle-double-left text-base"></i>
                </a>
              </li>
              <li @class(['opacity-60 pointer-events-none' => !isset($nextNews)])>
                <a wire:navigate href="{{ isset($nextNews) ? route('show.news', $nextNews->slug) : '#' }}"
                  class="bg-primary text-white px-4 py-2.5 rounded flex items-center gap-2 transition duration-300">
                  <i class="fas fa-angle-double-right text-base"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-span-12 lg:col-span-4">
        <x-search-and-categories :categories="$categories" />
      </div>
    </div>
  </section>
</div>
