<!-- Card 1: Search Card -->
<div class="bg-white shadow-lg rounded-lg p-6 mb-8 {{ isset($class) ? $class : '' }}">
  <h2
    class="inline-block relative text-lg font-semibold text-gray-800 mb-8 after:content-[''] after:absolute after:h-[3px] after:w-[60%] after:bg-primary after:top-[33px] after:left-0">
    Cari Berita</h2>
  <form wire:submit.prevent="handleSearch">
    <div class="flex items-center">
      <input wire:model="search" type="text" placeholder="Kata kunci..." autocomplete="off"
        class="text-sm w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
      <button type="submit" wire:loading.class="pointer-events-none"
        class="bg-primary text-white px-6 py-2 rounded-r-lg hover:bg-blue-600 transition duration-300">
        <i class="fa-solid fa-magnifying-glass" wire:loading.remove></i>
        <i class="fa-solid fa-spinner fa-spin" wire:loading></i>
      </button>
    </div>
  </form>
</div>
