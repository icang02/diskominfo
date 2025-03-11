<div>
  <x-breadcrumb :title="$data->title" :list="[
      [
          'label' => 'Profil',
      ],
      [
          'label' => Str::title(str_replace('-', ' ', $page)),
      ],
  ]" />

  <section class="mt-12 lg:mt-16 mb-17 lg:mb-20 container max-w-5xl">
    <div class="grid grid-cols-12">
      <div class="col-span-12">
        <div class="rounded bg-white p-7 border border-neutral-200">
          @if ($data->type == 'struktur')
            <img class="w-full h-auto mb-6 lg:mb-7" src="{{ url($data->image) }}" alt="img">
          @endif
          <div class="prose prose-sm max-w-none">
            {!! $data->content !!}
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
