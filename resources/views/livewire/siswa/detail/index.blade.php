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
        <div>
          <a x-on:click="isDisabled = !isDisabled" x-text="'Edit'" class="cursor-pointer"></a>
          |
          <a href="#">Hapus</a>
        </div>
      </div>
    </div>
    <div class="flex w-[500px] justify-start">
      <p class="w-96 text-center italic">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, excepturi?"</p>
    </div>
  </div>

  <div class="flex w-full justify-between">
    <form action="{{ route('dashboard.siswa.update', $siswa->nis) }}" method="POST"
      class="w-80 rounded-xl bg-white p-6">
      @csrf
      <h1 class="mb-5 text-xl font-bold">Data Siswa</h1>
      <div class="flex w-full flex-col gap-3 text-lg">
        <label for="nama" class="relative pb-3">
          <p class="text-xs opacity-80">Nama</p>
          <input class="peer relative w-full py-1 outline-none" type="text" name="nama" id="nama"
            value="{{ $siswa->nama }}" x-bind:disabled="isDisabled">
          <div
            class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
          </div>
        </label>

        <label for="nis" class="relative pb-3">
          <p class="text-xs opacity-80">NIS</p>
          <input class="peer relative w-full py-1 outline-none" type="number" name="nis" id="nis"
            value="{{ $siswa->nis }}" x-bind:disabled="isDisabled">
          <div
            class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
          </div>
        </label>

        <label for="nisn" class="relative pb-3">
          <p class="text-xs opacity-80">NISN</p>
          <input class="peer relative w-full py-1 outline-none" type="number" name="nisn" id="nisn"
            value="{{ $siswa->nisn }}" x-bind:disabled="isDisabled">
          <div
            class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
          </div>
        </label>

        <label for="id_kelas" class="relative pb-3">
          <p class="text-xs opacity-80">Kelas</p>
          <select name="id_kelas" id="id_kelas" class="peer relative w-full bg-transparent py-1 outline-none"
            x-bind:disabled="isDisabled">
            <option value="{{ $siswa->kelas->id }}" selected disabled>
              Kelas {{ $siswa->kelas->tingkat . $siswa->kelas->nama }}
            </option>
            @foreach ($kelass as $kelas)
              <option value="{{ $kelas->id }}">Kelas {{ $kelas->tingkat . $kelas->nama }}</option>
            @endforeach
          </select>
          <div
            class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
          </div>
        </label>

        <label for="gender" class="relative pb-3">
          <p class="text-xs opacity-80">Kelas</p>
          <template x-if="gender == 0">
            <select name="gender" id="gender" class="peer relative w-full bg-transparent py-1 outline-none"
              x-bind:disabled="isDisabled">
              <option value="1">Laki-laki</option>
              <option value="0" selected>Perempuan</option>
            </select>
          </template>
          <template x-if="gender == 1">
            <select name="gender" id="gender" class="peer relative w-full bg-transparent py-1 outline-none"
              x-bind:disabled="isDisabled">
              <option value="1" selected>Laki-laki</option>
              <option value="0">Perempuan</option>
            </select>
          </template>
          <div
            class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
          </div>
        </label>

        <label for="tgl_lahir" class="relative pb-3">
          <p class="text-xs opacity-80">Tanggal Lahir</p>
          <input class="peer relative w-full py-1 outline-none" type="date" name="tgl_lahir" id="tgl_lahir"
            value="{{ $siswa->tgl_lahir }}" x-bind:disabled="isDisabled">
          <div
            class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
          </div>
        </label>

        <button type="submit" x-show="!isDisabled" x-transition.duration.700ms
          class="cursor-pointer rounded-xl bg-[#5667FD] py-2 text-xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Update
          Data</button>
      </div>
    </form>

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
  </div>
</div>
