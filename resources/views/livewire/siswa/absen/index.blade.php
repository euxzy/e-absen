{{-- The whole world belongs to you. --}}
<section class="container relative my-10 py-10 lg:flex lg:items-center lg:justify-center lg:gap-10 lg:py-0 lg:pt-10"
  x-data="{
      showHadir: false,
      showSakit: false,
      showIzin: false,
      alertShow: true
  }" x-cloak>
  <div class="mx-auto w-5/6 lg:order-2 lg:mx-0 lg:w-96">
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

    <h1 class="mb-10 text-center text-3xl font-bold text-[#364356] lg:hidden">Absen!</h1>
    <img src="{{ asset('images/absen.svg') }}" alt="Absen Image">
  </div>
  <div class="lg:order-1">

    <h1 class="mb-10 hidden text-center text-3xl font-bold text-[#364356] lg:block">Absen!</h1>
    <ul class="mx-auto flex w-5/6 flex-col gap-3 text-center lg:mx-0 lg:w-96">
      <li><a x-on:click="showHadir = true"
          class="inline-block w-full cursor-pointer rounded-2xl bg-[#5667FD] py-2 text-2xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Hadir</a>
      </li>
      <li><a x-on:click="showSakit = true"
          class="inline-block w-full cursor-pointer rounded-2xl bg-[#5667FD] py-2 text-2xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Sakit</a>
      </li>
      <li><a x-on:click="showIzin = true"
          class="inline-block w-full cursor-pointer rounded-2xl bg-[#5667FD] py-2 text-2xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Izin</a>
      </li>
      <li><a href="{{ route('auth.logout') }}" class="font-semibold text-[#5667FD]">Logout</a></li>
    </ul>
  </div>

  <div class="fixed inset-0 flex items-center justify-center" :style=" showHadir ? 'z-index: 5' : 'z-index: -5'">
    <div class="overflow-auto" x-show="showHadir" x-transition:enter="ease-out duration-500"
      x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="ease-in duration-500" x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-90">
      <div class="absolute inset-0 z-10 rounded-xl bg-gray-500/30 backdrop-blur-[2px]" x-on:click="showHadir = false">
      </div>
      @livewire('siswa.absen.hadir')
    </div>
  </div>

  <div class="fixed inset-0 flex items-center justify-center" :style=" showSakit ? 'z-index: 5' : 'z-index: -5'">
    <div class="overflow-auto" x-show="showSakit" x-transition:enter="ease-out duration-500"
      x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="ease-in duration-500" x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-90">
      <div class="absolute inset-0 z-10 rounded-xl bg-gray-500/30 backdrop-blur-[2px]" x-on:click="showSakit = false">
      </div>
      @livewire('siswa.absen.sakit')
    </div>
  </div>

  <div class="fixed inset-0 flex items-center justify-center" :style=" showIzin ? 'z-index: 5' : 'z-index: -5'">
    <div class="overflow-auto" x-show="showIzin" x-transition:enter="ease-out duration-500"
      x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="ease-in duration-500" x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-90">
      <div class="absolute inset-0 z-10 rounded-xl bg-gray-500/30 backdrop-blur-[2px]" x-on:click="showIzin = false">
      </div>
      @livewire('siswa.absen.izin')
    </div>
  </div>
</section>
