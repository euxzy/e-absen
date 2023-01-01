{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<div class="fixed inset-y-0 left-10 my-8 w-60 rounded-xl bg-white" x-data="{ role: {{ session('role') }} }">
  <div class="py-6 px-4">
    <h1 class="border-b-2 border-b-[#5667FD] pb-3 text-xl font-semibold text-[#364356]">{{ session('nameUser') }}</h1>

    <ul class="flex flex-col justify-center gap-1 pt-4 text-xs font-semibold text-[#364356]">
      <li>
        <a href="{{ route('home') }}"
          class="{{ request()->routeIs('home') ? 'bg-[#5667FD]/30' : '' }} inline-block w-full rounded-xl px-4 py-3 hover:bg-[#5667FD]/30">Dashboard</a>
      </li>

      <template x-if="role == 2">
        <div class="flex flex-col justify-center gap-1">
          <li>
            <a href="{{ route('dashboard.admin.add') }}"
              class="{{ request()->routeIs('dashboard.admin.add') ? 'bg-[#5667FD]/30' : '' }} inline-block w-full rounded-xl px-4 py-3 hover:bg-[#5667FD]/30">Tambah
              Admin</a>
          </li>
          <li>
            <a href="{{ route('dashboard.walkel.add') }}"
              class="{{ request()->routeIs('dashboard.walkel.add') ? 'bg-[#5667FD]/30' : '' }} inline-block w-full rounded-xl px-4 py-3 hover:bg-[#5667FD]/30">Tambah
              Wali Kelas</a>
          </li>
          <li>
            <a href="{{ route('dashboard.walkel.list') }}"
              class="{{ request()->routeIs('dashboard.walkel.list') ? 'bg-[#5667FD]/30' : '' }} inline-block w-full rounded-xl px-4 py-3 hover:bg-[#5667FD]/30">List
              Wali Kelas</a>
          </li>
          <li>
            <a href="{{ route('dashboard.siswa.add') }}"
              class="{{ request()->routeIs('dashboard.siswa.add') ? 'bg-[#5667FD]/30' : '' }} inline-block w-full rounded-xl px-4 py-3 hover:bg-[#5667FD]/30">Tambah
              Siswa</a>
          </li>
          <li>
            <a href="{{ route('dashboard.siswa.list') }}"
              class="{{ request()->routeIs('dashboard.siswa.list') ? 'bg-[#5667FD]/30' : '' }} inline-block w-full rounded-xl px-4 py-3 hover:bg-[#5667FD]/30">List
              Siswa</a>
          </li>
        </div>
      </template>

      <li><a href="{{ route('auth.logout') }}"
          class="inline-block w-full rounded-xl px-4 py-3 hover:bg-[#5667FD]/30">Logout</a></li>
    </ul>
  </div>
</div>
