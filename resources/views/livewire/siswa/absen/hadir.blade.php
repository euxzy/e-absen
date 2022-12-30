{{-- If your happiness depends on money, you will never be happy with yourself. --}}
<form action="{{ route('siswa.absen') }}" method="POST" class="relative z-20" enctype="multipart/form-data">
  @csrf
  <div
    class="flex flex-col items-center justify-center gap-8 rounded-2xl border border-[#5667FD]/50 bg-white/50 px-10 pb-10 pt-5 backdrop-blur-md">
    <h1 class="text-2xl font-bold text-[#364356]">Hadir</h1>

    <input type="hidden" name="id_siswa" id="id_siswa" value="{{ session('idUser') }}">
    <input type="hidden" name="status" id="status" value="1">
    <input type="hidden" name="keterangan" id="keterangan" value="hadir">

    <label for="photo">
      <p class="mb-3 px-1 text-lg text-[#636D77]">Photo <span class="text-sm font-semibold text-red-700">*max 2MB</span>
      </p>
      <input
        class="cursor-pointer rounded-lg bg-white font-medium text-[#636D77] outline-none file:mr-4 file:cursor-pointer file:border-none file:bg-[#5667FD] file:px-5 file:py-3 file:font-medium file:text-white file:transition-all file:duration-300 file:hover:bg-opacity-70"
        type="file" name="photo" id="photo" required>
    </label>

    <button type="submit"
      class="w-full rounded-xl bg-[#5667FD] py-2 text-xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Hadir</button>
  </div>
</form>
