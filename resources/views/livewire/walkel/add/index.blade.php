{{-- Stop trying to control. --}}
<section class="my-10 py-10 lg:my-0 lg:mt-16 lg:flex lg:items-center lg:justify-center lg:gap-8 lg:py-0">
  <div class="mb-14 w-full lg:mb-0 lg:w-[500px]">
    @if ($errors->any())
      <div class="mb-4 rounded-xl bg-[#FF725E]/70 py-2">
        <h1 class="text-center text-xl font-bold text-white">{{ $errors->first() }}</h1>
      </div>
    @endif

    <h1 class="mb-5 text-center text-4xl font-bold text-[#364356]">Tambah Wali Kelas</h1>
    <img class="w-full" src="{{ asset('images/add-admin.svg') }}" alt="Add Admin">
  </div>
  @livewire('walkel.add.form')
</section>
