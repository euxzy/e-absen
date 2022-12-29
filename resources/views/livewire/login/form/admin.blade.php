{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<form action="{{ route('auth.login.check') }}" method="POST" class="lg:w-[450px]">
  @csrf
  <h1 class="hidden text-center text-5xl font-bold text-[#364356] lg:mb-10 lg:block">Login!</h1>
  <div class="flex w-full flex-col gap-10 px-5 font-medium">
    <label for="nis">
      <p class="mb-3 px-1 text-lg text-[#636D77]">Username</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium" type="text"
        name="username" id="username" placeholder="Username..." required>
    </label>

    <label for="password">
      <p class="mb-3 px-1 text-lg text-[#636D77]">Password</p>
      <input class="w-full rounded-xl px-5 py-3 text-[#364356] outline-[#5667FD] placeholder:font-medium"
        type="password" name="password" id="password" placeholder="Password..." required>
    </label>

    <input type="hidden" name="role" id="role" x-bind:value="role">

    <button type="submit"
      class="rounded-xl bg-[#5667FD] py-4 text-xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Login</button>
  </div>
</form>
