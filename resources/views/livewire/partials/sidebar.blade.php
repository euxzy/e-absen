{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<div class="fixed inset-y-0 left-10 my-8 w-60 rounded-xl bg-white">
  <div class="py-6 px-4">
    <h1 class="border-b-2 border-b-[#5667FD] pb-3 text-xl font-semibold">{{ session('nameUser') }}</h1>

    <ul class="flex flex-col justify-center gap-1 pt-4 text-xs font-semibold text-[#364356]">
      <li><a href="{{ route('home') }}" class="inline-block w-full rounded-xl bg-[#5667FD]/30 px-4 py-3">Dashboard</a>
      </li>
      <li><a href="{{ route('dashboard.admin.add') }}"
          class="inline-block w-full rounded-xl px-4 py-3 hover:bg-[#5667FD]/30">Tambah Admin</a></li>
      <li><a href="#" class="inline-block w-full rounded-xl px-4 py-3 hover:bg-[#5667FD]/30">Tambah Wali Kelas</a>
      </li>
      <li><a href="{{ route('dashboard.siswa.add') }}"
          class="inline-block w-full rounded-xl px-4 py-3 hover:bg-[#5667FD]/30">Tambah Siswa</a></li>
      <li><a href="#" class="inline-block w-full rounded-xl px-4 py-3 hover:bg-[#5667FD]/30">Daftar Siswa</a></li>
    </ul>
  </div>
</div>
