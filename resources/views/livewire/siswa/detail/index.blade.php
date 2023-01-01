{{-- The Master doesn't talk, he acts. --}}
<div class="my-8 w-[79%] rounded-xl pb-40 text-[#364356]" x-data="{ isDisabled: true, gender: {{ $siswa->gender }} }">
  <div class="mb-6 flex w-full items-center justify-between rounded-xl bg-white p-4">
    <div class="flex items-end gap-4">
      <div class="h-32 w-32 overflow-hidden rounded-xl"><img class="w-full" src="{{ $siswa->photo }}"
          alt="{{ $siswa->nama }}">
      </div>
      <div>
        <div class="mb-3">
          <p class="text-2xl font-semibold">{{ $siswa->nama }}</p>
          <p class="text-sm">Kelas {{ $siswa->kelas->tingkat . $siswa->kelas->nama }}</p>
        </div>
        <div class="flex gap-3">
          <a x-on:click="isDisabled = !isDisabled" x-text="'Edit'" class="cursor-pointer"></a>
          <span> | </span>
          <form method="POST" action="{{ route('dashboard.siswa.delete', $siswa->nis) }}">
            @csrf
            <button type="submit">Hapus</button>
          </form>
        </div>
      </div>
    </div>
    <div class="flex w-[500px] justify-start">
      <p class="w-96 text-center italic">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, excepturi?"</p>
    </div>
  </div>

  <div class="flex w-full justify-between">
    @livewire('siswa.detail.form', ['nis' => $siswa->nis])

    <div class="h-max w-[650px] rounded-xl text-center">
      @livewire('siswa.detail.persentase', ['nis' => $siswa->nis])

      @livewire('siswa.detail.list-absen', ['idSiswa' => $siswa->id, 'nama' => $siswa->nama])
    </div>
  </div>
</div>
