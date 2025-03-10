<section class="py-16 lg:py-25">
  <div class="container max-w-6xl">

  </div>
  <x-head-section title="Galeri Kegiatan Diskominfo Kota Kendari"
    description="Lihat dokumentasi kegiatan dan program Diskominfo Kota Kendari dalam mendukung transformasi digital." />

  <swiper-container class="hidden lg:block" loop="true" speed="500" slides-per-view="4">
    @for ($i = 0; $i < 10; $i++)
      <swiper-slide class="group">
        <div class="relative mx-2">
          <img class="aspect-[4/2.6] object-cover object-center"
            src="https://picsum.photos/seed/{{ rand(1000, 9999) }}/800/{{ rand(200, 600) }}" alt="img">
          <div
            class="opacity-0 group-hover:opacity-100 transition duration-500 z-10 absolute inset-0 bg-primary/60 flex items-center justify-center">
            <a href="#" class="btn-light">
              <span>Lihat Detail</span></a>
          </div>
        </div>
      </swiper-slide>
    @endfor
  </swiper-container>

  <swiper-container class="block lg:hidden" loop="true" speed="500" slides-per-view="1">
    @for ($i = 0; $i < 10; $i++)
      <swiper-slide class="group">
        <div class="relative mx-2">
          <img class="aspect-[4/2.6] object-cover object-center"
            src="https://picsum.photos/seed/{{ rand(1000, 9999) }}/800/{{ rand(200, 600) }}" alt="img">
          <div
            class="opacity-0 group-hover:opacity-100 transition duration-500 z-10 absolute inset-0 bg-primary/60 flex items-center justify-center">
            <a href="#" class="btn-light">
              <span>Lihat Detail</span></a>
          </div>
        </div>
      </swiper-slide>
    @endfor
  </swiper-container>
</section>
