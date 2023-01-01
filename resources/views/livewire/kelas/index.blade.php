{{-- If your happiness depends on money, you will never be happy with yourself. --}}
<div class="h-max w-[650px] rounded-xl px-6 pb-10 text-center">
  <div class="mb-8 flex w-full items-center justify-between rounded-xl bg-white py-5 px-6">
    <h1 class="text-xl font-bold">List Semua Kelas</h1>
    <p><a
        class="inline-block cursor-pointer rounded-lg bg-[#5667FD]/30 px-5 py-2.5 text-xs font-semibold transition-all duration-300 hover:bg-[#5667FD]/60 hover:text-white"
        x-on:click="showKelas = !showKelas">Tambah Data
        Kelas</a></p>
  </div>

  @livewire('kelas.add.index')

  @livewire('kelas.list.index')
</div>
