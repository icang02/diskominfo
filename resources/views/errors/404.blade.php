<x-layouts.app>
  <!-- Card Container -->
  <div class="px-2">
    <div class="border border-neutral-100 min-h-[55vh] my-16 py-20 container max-w-5xl rounded-lg shadow-lg text-center">
      <!-- Icon -->
      <div class="text-6xl text-blue-500 mb-4">
        <i class="fas fa-exclamation-triangle"></i>
      </div>

      <!-- Title -->
      <h1 class="text-xl lg:text-3xl font-bold text-gray-800 mb-2">404 - Page Not Found</h1>

      <!-- Description -->
      <p class="text-sm lg:text-base text-gray-600 mb-6">
        Oops! The page you're looking for doesn't exist or has been moved.
      </p>

      <!-- Back to Home Button -->
      <a wire:navigate href="{{ route('home') }}"
        class="text-xs lg:text-sm inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
        <i class="fas fa-home mr-2"></i> Kembali
      </a>
    </div>
  </div>
</x-layouts.app>
