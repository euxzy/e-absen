{{-- Be like water. --}}
<form action="{{ route('dashboard.walkel.store') }}" method="POST" enctype="multipart/form-data" class="lg:w-[500px]">
  @csrf
  <div class="flex w-full flex-col gap-8 px-5 font-medium lg:gap-3">
    <label for="nama" class="w-full">
      <p class="mb-2 px-1 text-lg text-[#636D77]">Nama</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium" type="text"
        name="nama" id="nama" placeholder="Nama..." required>
    </label>

    <label for="nuptk" class="w-full">
      <p class="mb-2 px-1 text-lg text-[#636D77]">NUPTK</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium" type="number"
        name="nuptk" id="nuptk" placeholder="NUPTK..." required>
    </label>

    <div class="flex w-full flex-col items-start gap-3 md:flex-row">
      <label for="tgl_lahir" class="w-full flex-1">
        <p class="mb-2 px-1 text-lg text-[#636D77]">Tanggal Lahir</p>
        <input
          class="w-full cursor-pointer rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium"
          type="date" name="tgl_lahir" id="tgl_lahir" required>
      </label>

      <label for="gender" class="w-full flex-1">
        <p class="mb-2 px-1 text-lg text-[#636D77]">Jenis Kelamin</p>
        <select name="gender" id="gender"
          class="w-full rounded-xl bg-white bg-clip-padding px-5 py-3 text-[#636D77] outline-[#5667FD]" required>
          <option selected disabled>Jenis Kelamin</option>
          <option value="1">Laki - laki</option>
          <option value="0">Perempuan</option>
        </select>
      </label>
    </div>

    <label for="photo" class="w-full">
      <p class="mb-2 px-1 text-lg text-[#636D77]">Photo</p>
      <input
        class="w-full cursor-pointer rounded-lg bg-white font-medium text-[#636D77] file:mr-4 file:cursor-pointer file:border-none file:bg-[#5667FD] file:px-5 file:py-3 file:font-medium file:text-white file:transition-all file:duration-300 file:hover:bg-opacity-70"
        type="file" name="photo" id="photo">
    </label>

    <label for="password" class="">
      <p class="mb-2 px-1 text-lg text-[#636D77]">Password</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium"
        type="password" name="password" id="password" placeholder="Password..." required>
    </label>

    <button type="submit"
      class="rounded-xl bg-[#5667FD] py-2 text-xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Tambah
      Wali Kelas</button>
  </div>
</form>
