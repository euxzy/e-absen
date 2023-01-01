{{-- Close your eyes. Count to one. That is how long forever feels. --}}
<div class="w-full rounded-xl bg-white py-5">
  <h1 class="mb-5 text-xl font-bold">Tambah Data Kelas</h1>

  <form action="{{ route('dashboard.kelas.store') }}" method="POST" class="w-full rounded-xl bg-white p-6 text-left">
    @csrf
    <div class="flex w-full flex-col gap-3 text-lg">
      <div class="flex w-full gap-3">
        <label for="tingkat" class="relative w-1/2 pb-3">
          <p class="text-xs opacity-80">Tingkat</p>
          <select name="tingkat" id="tingkat" class="peer relative w-full bg-transparent py-1 outline-none" required>
            <option selected disabled>Pilih Kelas</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <div
            class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
          </div>
        </label>

        <label for="nama_kelas" class="relative w-1/2 pb-3">
          <p class="text-xs opacity-80">Nama Kelas</p>
          <input class="peer relative w-full py-1 outline-none" type="text" name="nama_kelas" id="nama_kelas"
            placeholder="Nama Kelas..." required>
          <div
            class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
          </div>
        </label>
      </div>

      <label for="id_wali_kelas" class="relative pb-3">
        <p class="text-xs opacity-80">Wali Kelas</p>
        <select name="id_wali_kelas" id="id_wali_kelas" class="peer relative w-full bg-transparent py-1 outline-none">
          <option selected disabled>Pilih Wali Kelas</option>
          @foreach ($walkels as $walkel)
            <option value="{{ $walkel->id }}">{{ $walkel->nama }}</option>
          @endforeach
        </select>
        <div
          class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
        </div>
      </label>

      <button type="submit"
        class="cursor-pointer rounded-xl bg-[#5667FD] py-2 text-xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Tambah
        Kelas</button>
    </div>
  </form>

</div>
