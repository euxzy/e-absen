{{-- Nothing in the world is as soft and yielding as water. --}}
<form action="{{ route('siswa.absen') }}" method="POST" class="relative z-20" enctype="multipart/form-data">
  @csrf
  <div
    class="flex flex-col items-center justify-center gap-5 rounded-2xl border border-[#5667FD]/50 bg-white/50 px-10 pb-10 pt-5 backdrop-blur-md">
    <h1 class="text-2xl font-bold text-[#364356]">Izin</h1>

    <input type="hidden" name="id_siswa" id="id_siswa" value="{{ session('idUser') }}">
    <input type="hidden" name="status" id="status" value="3">
    <label for="keterangan" class="w-full">
      <p class="mb-3 px-1 text-lg text-[#636D77]">Keterangan</p>
      <textarea name="keterangan" id="keterangan"
        class="w-full rounded-lg border-0 px-5 py-3 text-[#364356] outline-none placeholder:font-medium" required></textarea>
    </label>

    <label for="photo">
      <p class="mb-3 px-1 text-lg text-[#636D77]">Photo</p>
      <input
        class="cursor-pointer rounded-lg bg-white font-medium text-[#636D77] outline-none file:mr-4 file:cursor-pointer file:border-none file:bg-[#5667FD] file:px-5 file:py-3 file:font-medium file:text-white file:transition-all file:duration-300 file:hover:bg-opacity-70"
        type="file" name="photo" id="photo" required>
    </label>

    <button type="submit"
      class="w-full rounded-xl bg-[#5667FD] py-2 text-xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Izin</button>
  </div>
</form>
