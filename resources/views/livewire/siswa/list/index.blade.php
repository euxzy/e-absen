{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<section class="my-8 w-[80%] rounded-xl bg-white text-[#364356]">
  <div class="py-4">
    <h1 class="px-5 font-semibold">List Siswa</h1>

    <div class="">
      <ul class="flex justify-between border-b px-5 py-3 font-semibold">
        <li class="w-56">Nama Siswa</li>
        <li class="w-40">NIS</li>
        <li class="w-40">NISN</li>
        <li class="w-20">Kelas</li>
        <li class="w-40"></li>
      </ul>

      <div x-data="{ data: {{ $siswas }} }" class="">
        @foreach ($siswas as $siswa)
          <ul
            class="flex items-center justify-between border-b px-5 py-3 transition-all duration-300 ease-out hover:bg-[#5667FD]/30">
            <li class="flex w-56 items-center gap-3">
              <div class="h-10 w-10 overflow-hidden rounded-xl">
                <img class="w-full" src="{{ $siswa->photo }}" alt="{{ $siswa->nama }}" />
              </div>
              <span class="font-medium">{{ $siswa->nama }}</span>
            </li>
            <li class="w-40">{{ $siswa->nis }}</li>
            <li class="w-40">{{ $siswa->nisn }}</li>
            <li class="w-20">{{ $siswa->kelas->tingkat . $siswa->kelas->nama }}</li>
            <li class="w-40"><a href="{{ route('dashboard.siswa.detail', $siswa->nis) }}">Detail</a></li>
          </ul>
        @endforeach
      </div>

    </div>
  </div>
</section>
