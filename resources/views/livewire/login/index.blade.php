{{-- Close your eyes. Count to one. That is how long forever feels. --}}
<section class="container my-10 items-center py-10 lg:flex lg:justify-center lg:gap-10" x-data="{ role: 1 }">
  <div class="mx-auto mb-10 w-5/6 lg:mx-0 lg:w-[600px]">
    @if ($errors->any())
      <div class="mb-4 rounded-xl bg-[#FF725E]/70 py-2 lg:mb-0">
        <h1 class="text-center text-xl font-bold text-white">{{ $errors->first() }}</h1>
      </div>
    @endif

    <h1 class="text-center text-5xl font-bold text-[#364356] lg:hidden">Login!</h1>
    <img class="w-full" src="{{ asset('images/login.svg') }}" alt="Login Image">

    <template x-if="role == 1">
      <div>
        <p class="mb-2 text-center font-medium">Bukan Siswa?</p>
        <p class="text-center">Login Sebagai
          <a x-on:click="role = 2"
            class="cursor-pointer font-semibold transition-all duration-300 hover:text-[#5667FD]">Admin</a> |
          <a x-on:click="role = 3"
            class="cursor-pointer font-semibold transition-all duration-300 hover:text-[#5667FD]">Wali Kelas</a>
        </p>
      </div>
    </template>

    <template x-if="role == 2">
      <div>
        <p class="mb-2 text-center font-medium">Bukan Admin?</p>
        <p class="text-center">Login Sebagai
          <a x-on:click="role = 1"
            class="cursor-pointer font-semibold transition-all duration-300 hover:text-[#5667FD]">Siswa</a> |
          <a x-on:click="role = 3"
            class="cursor-pointer font-semibold transition-all duration-300 hover:text-[#5667FD]">Wali Kelas</a>
        </p>
      </div>
    </template>

    <template x-if="role == 3">
      <div>
        <p class="mb-2 text-center font-medium">Bukan Wali Kelas?</p>
        <p class="text-center">Login Sebagai
          <a x-on:click="role = 2"
            class="cursor-pointer font-semibold transition-all duration-300 hover:text-[#5667FD]">Admin</a> |
          <a x-on:click="role = 1"
            class="cursor-pointer font-semibold transition-all duration-300 hover:text-[#5667FD]">Siswa</a>
        </p>
      </div>
    </template>
  </div>

  <template x-if="role == 1">
    @livewire('login.form.siswa')
  </template>
  <template x-if="role == 2">
    @livewire('login.form.admin')
  </template>
  <template x-if="role == 3">
    @livewire('login.form.walkel')
  </template>
</section>
