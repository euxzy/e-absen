{{-- The best athlete wants his opponent at his best. --}}
<section class="my-8 w-[80%] rounded-xl bg-white text-[#364356]">
  <div class="py-4">
    <h1 class="px-5 font-semibold">List Wali Kelas</h1>

    <div class="">
      <ul class="flex justify-between border-b px-5 py-3 font-semibold">
        <li class="w-56">Nama Siswa</li>
        <li class="w-40">NUPTK</li>
        <li class="w-40"></li>
      </ul>

      <div x-data="{ data: {{ $walkels }} }" class="">
        @foreach ($walkels as $walkel)
          <ul
            class="flex items-center justify-between border-b px-5 py-3 transition-all duration-300 ease-out hover:bg-[#5667FD]/30">
            <li class="flex w-56 items-center gap-3">
              <div class="h-10 w-10 overflow-hidden rounded-xl">
                <img class="w-full" src="{{ $walkel->photo }}" alt="{{ $walkel->nama }}" />
              </div>
              <span class="font-medium">{{ $walkel->nama }}</span>
            </li>
            <li class="w-40">{{ $walkel->nuptk }}</li>
            <li class="w-40"><a href="#">Detail</a></li>
          </ul>
        @endforeach
      </div>

    </div>
  </div>
</section>
