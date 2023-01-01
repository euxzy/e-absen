{{-- Stop trying to control. --}}
<section class="my-10 py-10 lg:my-0 lg:mt-16 lg:flex lg:items-center lg:justify-center lg:gap-8 lg:py-0"
  x-data="{ alertShow: true }">
  <div class="mb-14 w-full lg:mb-0 lg:w-[500px]">
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

    <h1 class="mb-5 text-center text-4xl font-bold text-[#364356]">Tambah Wali Kelas</h1>
    <img class="w-full" src="{{ asset('images/add-admin.svg') }}" alt="Add Admin">
  </div>
  @livewire('walkel.add.form')
</section>
