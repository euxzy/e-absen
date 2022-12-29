{{-- Close your eyes. Count to one. That is how long forever feels. --}}
<section class="container my-10 py-10" x-data="{ role: 1 }">
  <div class="mb-10 w-full">
    <h1 class="text-center text-5xl font-bold">Login!</h1>
    @if ($errors->any())
      <h1 class="text-center">{{ $errors->first() }}</h1>
    @endif
    <img class="w-full" src="{{ asset('images/login.svg') }}" alt="Login Image">

    <template x-if="role == 1">
      <div>
        <p class="mb-3 text-center">Bukan Siswa?</p>
        <p class="text-center">Login Sebagai
          <a x-on:click="role = 2" class="">Admin</a> |
          <a x-on:click="role = 3" class="">Wali Kelas</a>
        </p>
      </div>
    </template>

    <template x-if="role == 2">
      <div>
        <p class="mb-3 text-center">Bukan Admin?</p>
        <p class="text-center">Login Sebagai
          <a x-on:click="role = 1" class="">Siswa</a> |
          <a x-on:click="role = 3" class="">Wali Kelas</a>
        </p>
      </div>
    </template>

    <template x-if="role == 3">
      <div>
        <p class="mb-3 text-center">Bukan Wali Kelas?</p>
        <p class="text-center">Login Sebagai
          <a x-on:click="role = 2" class="">Admin</a> |
          <a x-on:click="role = 1" class="">Siswa</a>
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
