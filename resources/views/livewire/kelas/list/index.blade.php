{{-- Care about people's approval and you will be their prisoner. --}}
<div class="flex w-full flex-wrap justify-center gap-[30px] rounded-xl bg-white p-5">
  @foreach ($kelass as $kelas)
    <a href="{{ route('dashboard.kelas.detail', $kelas->id) }}"
      class="flex w-32 flex-col items-center justify-center rounded-lg bg-slate-400 bg-[#5667FD]/30 py-5 px-4 transition-all duration-500 hover:bg-[#5667FD]/60 hover:text-white">
      <h3 class="text-xl font-semibold">Kelas {{ $kelas->tingkat . $kelas->nama }}</h3>
      @if ($kelas->walkel)
        <p class="text-xs">{{ $kelas->walkel->nama }}</p>
      @else
        <p class="text-xs">Tidak Ada Wali Kelas</p>
      @endif
    </a>
  @endforeach
</div>
