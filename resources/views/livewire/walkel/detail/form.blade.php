{{-- Do your work, then step back. --}}
<form action="{{ route('dashboard.walkel.update', $walkel->nuptk) }}" method="POST" enctype="multipart/form-data"
  class="h-max w-80 rounded-xl bg-white p-6">
  @csrf
  <h1 class="mb-5 text-xl font-bold">Data Wali Kelas</h1>
  <div class="flex w-full flex-col gap-3 text-lg">
    <label for="nama" class="relative pb-3">
      <p class="text-xs opacity-80">Nama</p>
      <input class="peer relative w-full py-1 outline-none" type="text" name="nama" id="nama"
        value="{{ $walkel->nama }}" x-bind:disabled="isDisabled">
      <div
        class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
      </div>
    </label>

    <label for="nuptk" class="relative pb-3">
      <p class="text-xs opacity-80">NUPTK</p>
      <input class="peer relative w-full py-1 outline-none" type="number" name="nuptk" id="nuptk"
        value="{{ $walkel->nuptk }}" x-bind:disabled="isDisabled">
      <div
        class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
      </div>
    </label>

    <label for="gender" class="relative pb-3">
      <p class="text-xs opacity-80">Jenis Kelamin</p>
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
        value="{{ $walkel->tgl_lahir }}" x-bind:disabled="isDisabled">
      <div
        class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
      </div>
    </label>

    <label for="photo" class="relative pb-3" x-show="!isDisabled" x-transition.duration.700ms>
      <p class="text-xs opacity-80">Photo</p>
      <input type="file" name="photo" id="photo"
        class="peer relative w-full cursor-pointer rounded-lg bg-white text-base font-medium text-[#636D77] file:mr-4 file:cursor-pointer file:border-none file:bg-[#5667FD] file:px-3 file:py-2 file:font-medium file:text-white file:transition-all file:duration-300 file:hover:bg-opacity-70">
      <div
        class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
      </div>
    </label>

    <label for="password" class="relative pb-3" x-show="!isDisabled" x-transition.duration.700ms>
      <p class="text-xs opacity-80">Password</p>
      <input class="peer relative w-full py-1 outline-none" type="password" name="password" id="password"
        x-bind:disabled="isDisabled" required>
      <div
        class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
      </div>
    </label>

    <button type="submit" x-show="!isDisabled" x-transition.duration.700ms
      class="cursor-pointer rounded-xl bg-[#5667FD] py-2 text-xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Update
      Data</button>
  </div>
</form>
