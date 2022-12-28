{{-- Close your eyes. Count to one. That is how long forever feels. --}}
<section class="container my-8 items-center justify-between py-8 font-exo md:my-0 md:flex md:h-screen md:py-0">
  <div class="mb-10 w-full">
    <img class="w-full" src="{{ asset('images/hero.svg') }}" alt="Hero Image">
  </div>
  <div class="mx-auto w-11/12 py-5 text-center">
    <h1 class="mb-2 text-4xl font-semibold text-[#364356]">Sekolah!</h1>
    <p class="mb-16 text-2xl text-[#636D77]">Mohon login untuk melakukan absensi</p>
    <p><a href="{{ route('auth.login') }}"
        class="rounded-xl bg-[#5667FD] px-20 py-5 text-2xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Login</a>
    </p>
  </div>
</section>
