{{-- In work, do what you enjoy. --}}
<section class="container my-10 py-10 lg:my-0 lg:mt-10 lg:flex lg:items-end lg:justify-center lg:gap-16">
  <div class="mx-auto mb-14 w-5/6 lg:mx-0 lg:mb-0 lg:w-[500px]">
    @if ($errors->any())
      <div class="mb-5 rounded-xl bg-[#FF725E]/70 py-2">
        <h1 class="text-center text-xl font-bold text-white">{{ $errors->first() }}</h1>
      </div>
    @endif

    <h1 class="mb-5 text-center text-4xl font-bold text-[#364356] lg:text-5xl">Tambahkan Admin</h1>
    <img class="w-full" src="{{ asset('images/add-admin.svg') }}" alt="Add Admin">
  </div>
  @livewire('admin.add.form')
</section>
