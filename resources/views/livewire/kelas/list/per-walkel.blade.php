{{-- Do your work, then step back. --}}
<div class="h-max w-[650px]">
  <div class="flex w-full flex-wrap justify-center gap-[30px] rounded-xl bg-white p-5">
    @foreach ($kelass as $kelas)
      <a href="{{ route('dashboard.kelas.detail', $kelas->id) }}"
        class="flex min-h-[128px] w-32 flex-col items-center justify-center rounded-lg bg-slate-400 bg-[#5667FD]/30 py-5 px-4 transition-all duration-500 hover:bg-[#5667FD]/60 hover:text-white">
        <h3 class="text-xl font-semibold">Kelas {{ $kelas->tingkat . $kelas->nama }}</h3>
        <p class="text-xs">{{ $walkel->nama }}</p>
      </a>
    @endforeach
  </div>
</div>
