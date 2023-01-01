{{-- Close your eyes. Count to one. That is how long forever feels. --}}
<section class="container my-10 items-center py-10 lg:flex lg:justify-center lg:gap-10" x-data="{ role: 1, alertShow: true }">
  <div class="mx-auto mb-10 w-5/6 lg:mx-0 lg:w-[600px]">
    @if (session('success'))
      <div :class="alertShow ? 'block' : 'hidden'"
        class="fixed top-10 right-10 flex min-w-[300px] justify-between gap-5 rounded-xl bg-[#34A751]/50 py-5 px-6 transition-all duration-300 hover:bg-[#34A751]/70">
        <p>{{ session('success') }}</p>
        <div class="cursor-pointer font-bold" x-on:click="alertShow = false">x</div>
      </div>
    @endif

    @if ($errors->any())
      <div :class="alertShow ? 'block' : 'hidden'"
        class="fixed top-10 right-10 flex min-w-[300px] justify-between gap-5 rounded-xl bg-[#FF725E]/50 py-5 px-6 transition-all duration-300 hover:bg-[#FF725E]/70">
        <p>{{ $errors->first() }}</p>
        <div class="cursor-pointer font-bold" x-on:click="alertShow = false">x</div>
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
