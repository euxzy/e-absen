{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<div class="h-max w-[650px] rounded-xl bg-white py-10 px-6 text-center">
  <h1 class="mb-5 text-3xl font-bold">Persentase Kehadiran</h1>
  <div class="flex w-full flex-wrap justify-center gap-x-12 gap-y-6 text-lg font-medium">
    <div class="flex h-32 w-56 flex-col items-center justify-center gap-1 rounded-2xl bg-[#5667FD]/30">
      <p>Hadir</p>
      <p class="text-3xl font-bold">{{ $siswa->absenHadir }} %</p>
    </div>
    <div class="flex h-32 w-56 flex-col items-center justify-center gap-1 rounded-2xl bg-[#5667FD]/30">
      <p>Sakit</p>
      <p class="text-3xl font-bold">{{ $siswa->absenSakit }} %</p>
    </div>
    <div class="flex h-32 w-56 flex-col items-center justify-center gap-1 rounded-2xl bg-[#5667FD]/30">
      <p>Izin</p>
      <p class="text-3xl font-bold">{{ $siswa->absenIzin }} %</p>
    </div>
  </div>
</div>
