{{-- Be like water. --}}
<div class="my-8 w-[79%] rounded-xl pb-40 text-[#364356]" x-data="{ role: {{ session('role') }}, isShow: false, alertShow: true }">
  @if (session('success'))
    <div :class="alertShow ? 'block' : 'hidden'"
      class="fixed top-10 right-10 flex min-w-[300px] justify-between gap-5 rounded-xl bg-[#34A751]/50 py-5 px-6 transition-all duration-300 hover:bg-[#34A751]/70">
      <p>{{ session('success') }}</p>
      <div class="cursor-pointer font-bold" x-on:click="alertShow = false">x</div>
    </div>
  @endif

  @if ($errors->any())
    <div :class="alertShow ? 'block' : 'hidden'"
      class="fixed top-10 right-10 flex min-w-[300px] justify-between gap-5 rounded-xl bg-[#FF725E]/50 py-5 px-6 transition-all duration-300 hover:bg-[#FF725E]/70">
      <p>{{ $errors->first() }}</p>
      <div class="cursor-pointer font-bold" x-on:click="alertShow = false">x</div>
    </div>
  @endif

  <div class="mb-6 flex w-full items-center justify-between rounded-xl bg-white py-6 px-8">
    <div class="flex w-[500px] justify-start">
      <p class="w-96 text-center italic">Hello</p>
    </div>
    <div class="flex items-end gap-4">
      <div>
        <div class="mb-3">
          <p class="text-2xl font-semibold">Kelas {{ $kelas->tingkat . $kelas->nama }}</p>
          @if ($kelas->walkel)
            <p class="text-sm">Wali Kelas : {{ $kelas->walkel->nama }}</p>
          @else
            <p class="text-sm">Tidak Ada Wali Kelas</p>
          @endif
        </div>
        <template x-if="role == 2">
          <div class="flex gap-3">
            <a x-on:click="isShow = !isShow" x-text="'Edit'" class="cursor-pointer"></a>
            <span> | </span>
            <form method="POST" action="">
              @csrf
              <button type="submit">Hapus</button>
            </form>
          </div>
        </template>
      </div>
    </div>
  </div>

  @livewire('kelas.detail.form', ['kelas' => $kelas])

  @livewire('siswa.list.per-kelas', ['kelas' => $kelas])
</div>
