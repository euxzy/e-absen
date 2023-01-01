{{-- Be like water. --}}
<form action="{{ route('dashboard.admin.update', $admin->id) }}" method="POST" class="h-max w-80 rounded-xl bg-white p-6">
  @csrf
  <h1 class="mb-5 text-xl font-bold">Data Admin</h1>
  <div class="flex w-full flex-col gap-3 text-lg">
    <label for="nama" class="relative pb-3">
      <p class="text-xs opacity-80">Nama</p>
      <input class="peer relative w-full py-1 outline-none" type="text" name="nama" id="nama"
        value="{{ $admin->nama }}" x-bind:disabled="isDisabled">
      <div
        class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
      </div>
    </label>

    <label for="username" class="relative pb-3">
      <p class="text-xs opacity-80">Username</p>
      <input class="peer relative w-full py-1 outline-none" type="text" name="username" id="username"
        value="{{ $admin->username }}" x-bind:disabled="isDisabled">
      <div
        class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
      </div>
    </label>

    <label for="email" class="relative pb-3">
      <p class="text-xs opacity-80">Email</p>
      <input class="peer relative w-full py-1 outline-none" type="email" name="email" id="email"
        value="{{ $admin->email }}" x-bind:disabled="isDisabled">
      <div
        class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
      </div>
    </label>

    <label for="password" class="relative pb-3" x-show="!isDisabled" x-transition.duration.700ms>
      <p class="text-xs opacity-80">Password</p>
      <input class="peer relative w-full py-1 outline-none" type="password" name="password" id="password"
        x-bind:disabled="isDisabled" required>
      <div
        class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
      </div>
    </label>

    <button type="submit" x-show="!isDisabled" x-transition.duration.700ms
      class="cursor-pointer rounded-xl bg-[#5667FD] py-2 text-xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Update
      Data</button>
  </div>
</form>
