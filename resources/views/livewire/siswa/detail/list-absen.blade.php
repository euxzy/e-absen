{{-- Care about people's approval and you will be their prisoner. --}}
<div class="my-10 h-max w-full rounded-xl bg-white py-6" x-data="{ absens: {{ $absens }} }">
  <h1 class="mb-5 px-6 text-left text-xl font-bold">List Absen {{ $nama }}</h1>

  <div class="flex w-full flex-col gap-5">
    <ul class="flex items-center justify-between gap-5 px-6">
      <li class="w-3 text-center">No</li>
      <li class="w-24">Tanggal</li>
      <li class="w-24">Photo</li>
      <li class="w-16">Status</li>
      <li class="w-64">Keterangan</li>
    </ul>

    <template x-for="(absen, i) of absens">
      <ul
        class="flex items-center justify-between border-b px-6 py-3 transition-all duration-300 ease-out hover:bg-[#5667FD]/30">
        <li x-text="i + 1" class="w-3 text-center"></li>
        <li x-text="absen.tgl_absen" class="w-24"></li>
        <li class="flex w-24 items-center justify-center">
          <div class="h-20 w-20 overflow-hidden rounded-lg">
            <img class="h-full" :src="absen.photo" :alt="absen.status">
          </div>
        </li>
        <li x-text="absen.status == 1 ? 'Hadir' : absen.status == 2 ? 'Sakit' : 'Izin'" class="w-16"></li>
        <li x-text="absen.keterangan" class="w-64 text-left"></li>
      </ul>
    </template>
  </div>
</div>
