{{-- The whole world belongs to you. --}}
<form action="{{ route('admin.store') }}" method="POST" class="lg:w-[400px]">
  @csrf
  <div class="flex w-full flex-col gap-8 px-5 font-medium lg:gap-5">
    <label for="nama">
      <p class="mb-3 px-1 text-lg text-[#636D77]">Nama</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium" type="text"
        name="nama" id="nama" placeholder="Nama..." required>
    </label>

    <label for="username">
      <p class="mb-3 px-1 text-lg text-[#636D77]">Username</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium" type="text"
        name="username" id="username" placeholder="Username..." required>
    </label>

    <label for="email">
      <p class="mb-3 px-1 text-lg text-[#636D77]">Email</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium" type="email"
        name="email" id="email" placeholder="Email..." required>
    </label>

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
