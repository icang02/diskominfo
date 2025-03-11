<div>
  <x-breadcrumb title="Pegawai Diskominfo Kota Kendari" :list="[
      [
          'label' => 'Profil',
      ],
      [
          'label' => 'Pegawai',
      ],
  ]" />

  <section class="mt-12 lg:mt-16 mb-17 lg:mb-20 container max-w-5xl">
    <div class="grid grid-cols-12">
      <div class="col-span-12">
        <div class="rounded bg-white p-7 border border-neutral-200 shadow-[0px_4px_30px_0px_rgba(31,_38,_135,_0.15)]">
          <!-- Search Section -->
          <form wire:submit.prevent="handleSearch"
            class="max-w-md mx-auto flex items-center bg-white rounded border border-neutral-200 overflow-hidden">
            <input type="text" wire:model="search" autocomplete="off" placeholder="Cari nama pegawai..."
              class="w-full px-6 py-3 text-sm text-neutral-700 focus:outline-none" />
            <button class="bg-primary text-white px-6 py-3 hover:bg-primary/90 transition-colors duration-300">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
    </div>


    <!-- Employee List Grid -->
    <div class="mt-16 grid grid-cols-2 gap-6">
      <!-- Employee Card -->
      @forelse ($employees as $item)
        @php
          $input = $item->nip;
          $part1 = substr($input, 0, 8);
          $part2 = substr($input, 8, 6);
          $part3 = substr($input, 14, 1);
          $part4 = substr($input, 15, 3);
          $formattedString = "$part1 $part2 $part3 $part4";
        @endphp
        <div
          class="col-span-2 lg:col-span-1 group relative shadow-[0px_4px_30px_0px_rgba(31,_38,_135,_0.15)] bg-white rounded-lg overflow-hidden">
          <div
            class="border-[0.5px] border-primary/20 text-sm transition-transform duration-700 ease-in-out absolute flex space-x-2 px-3 py-2 text-sm font-medium text-gray-900 bg-white rounded shadow leading-5 top-2 right-5 left-32 group-hover:translate-x-0 translate-x-[110%]">
            <i class="fa-regular fa-map mt-1.5 text-primary"></i>
            <span>{{ $item->address }}</span>
          </div>

          <div class="flex flex-col lg:flex-row">
            <div class="w-[30%] lg:w-[20%] m-5 mb-4 lg:m-5 lg:mr-2 mx-auto">
              <img src="http://localhost:8000/front/img/kadis.webp" alt="img"
                class="w-full mx-auto object-cover object-top aspect-square rounded-full">
              <p class="mt-2.5 text-xs text-center text-nowrap">
                <i class="fa-regular fa-calendar mr-0.5 text-primary"></i>
                {{ \Carbon\Carbon::parse($item->date_of_birth)->translatedFormat('d M Y') }}
              </p>
            </div>

            <div class="flex-1 p-5 pt-0 lg:p-5 lg:pl-2 flex flex-col justify-center">
              <h3 class="text-lg font-semibold text-neutral-800 text-center lg:text-start">{{ $item->name }}</h3>
              <span
                class="text-center lg:text-start inline-block bg-primary/10 text-primary text-sm px-3 py-1 rounded-xl mt-2">
                {{ $item->position->position_name }}
              </span>
              <p class="text-[13px] text-neutral-600 mt-2 flex justify-between">
                <span>
                  <i class="fa-regular fa-id-card mr-1.5 mt-1 text-primary"></i>
                  <span class="tracking-wide font-normal]">{{ $formattedString }}</span>
                </span>
                <span>
                  @if ($item->gender == 'Laki-laki')
                    <i class="fas fa-mars text-blue-500"></i>&nbsp; {{ $item->gender }}
                  @elseif($item->gender == 'Perempuan')
                    <i class="fas fa-venus text-pink-500"></i>&nbsp; {{ $item->gender }}
                  @endif
                </span>
              </p>
            </div>
          </div>
        </div>
      @empty
        <div
          class="col-span-2 p-7 group relative shadow-[0px_4px_30px_0px_rgba(31,_38,_135,_0.15)] bg-white rounded-lg overflow-hidden">
          <p class="text-neutral-500 text-sm text-center">Data not found.</p>
        </div>
      @endforelse
    </div>
    <div class="mt-9 w-full">
      {{ $employees->links() }}
    </div>
  </section>
</div>
