{{-- Do your work, then step back. --}}
<form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="flex w-full flex-col gap-8 px-5 font-medium">
    <label for="nama">
      <p class="mb-3 px-1 text-lg text-[#636D77]">Nama</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium" type="text"
        name="nama" id="nama" placeholder="Nama..." required>
    </label>

    <label for="nis">
      <p class="mb-3 px-1 text-lg text-[#636D77]">NIS</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium" type="number"
        name="nis" id="nis" placeholder="NIS..." required>
    </label>

    <label for="nisn">
      <p class="mb-3 px-1 text-lg text-[#636D77]">NISN</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium" type="number"
        name="nisn" id="nisn" placeholder="NISN..." required>
    </label>

    <label for="id_kelas">
      <p class="mb-3 px-1 text-lg text-[#636D77]">Kelas</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium" type="text"
        name="id_kelas" id="id_kelas" placeholder="Kelas..." required>
    </label>

    <div class="flex w-full flex-col items-start gap-10 md:flex-row">
      <label for="tgl_lahir" class="w-full">
        <p class="mb-3 px-1 text-lg text-[#636D77]">Tanggal Lahir</p>
        <input
          class="w-full cursor-pointer rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium"
          type="date" name="tgl_lahir" id="tgl_lahir" required>
      </label>

      <label for="gender" class="w-full">
        <p class="mb-3 px-1 text-lg text-[#636D77]">Jenis Kelamin</p>
        <input
          class="w-full cursor-pointer rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium"
          type="text" name="gender" id="gender" required>
      </label>

      <label for="photo" class="w-full">
        <p class="mb-3 px-1 text-lg text-[#636D77]">Photo</p>
        <input
          class="cursor-pointer rounded-lg bg-white font-medium text-[#636D77] file:mr-4 file:cursor-pointer file:border-none file:bg-[#5667FD] file:px-5 file:py-3 file:font-medium file:text-white file:transition-all file:duration-300 file:hover:bg-opacity-70"
          type="file" name="photo" id="photo">
      </label>
    </div>

    <label for="password">
      <p class="mb-3 px-1 text-lg text-[#636D77]">Password</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium"
        type="password" name="password" id="password" placeholder="Password..." required>
    </label>

    <button type="submit"
      class="rounded-xl bg-[#5667FD] py-4 text-xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Tambah
      Admin</button>
  </div>
</form>
