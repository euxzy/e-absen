{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
<div class="mb-6 flex w-full items-center justify-between rounded-xl bg-white py-6 px-8" x-show="isShow"
  x-transition.duration.700ms>
  <form action="{{ route('dashboard.kelas.update', $kelas->id) }}" method="POST"
    class="w-full rounded-xl bg-white p-6 text-left">
    @csrf
    <div class="flex w-full flex-col gap-3 text-lg">
      <div class="flex w-full gap-3">
        <label for="tingkat" class="relative w-1/2 pb-3">
          <p class="text-xs opacity-80">Tingkat</p>
          <select name="tingkat" id="tingkat" class="peer relative w-full bg-transparent py-1 outline-none" required>
            <option value="{{ $kelas->tingkat }}" selected>{{ $kelas->tingkat }}</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <div
            class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
          </div>
        </label>

        <label for="nama_kelas" class="relative w-1/2 pb-3">
          <p class="text-xs opacity-80">Nama Kelas</p>
          <input class="peer relative w-full py-1 outline-none" type="text" name="nama_kelas" id="nama_kelas"
            placeholder="Nama Kelas..." value="{{ $kelas->nama }}" required>
          <div
            class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
          </div>
        </label>
      </div>

      <label for="id_wali_kelas" class="relative pb-3">
        <p class="text-xs opacity-80">Wali Kelas</p>
        <select name="id_wali_kelas" id="id_wali_kelas" class="peer relative w-full bg-transparent py-1 outline-none">
          <option value="{{ $kelas->walkel->id }}" selected disabled>{{ $kelas->walkel->nama }}</option>
          @foreach ($walkels as $walkel)
            <option value="{{ $walkel->id }}">{{ $walkel->nama }}</option>
          @endforeach
        </select>
        <div
          class="absolute inset-x-0 bottom-0 mx-auto block h-0.5 w-0 bg-[#364356]/50 transition-all duration-300 peer-hover:w-full peer-focus:w-full peer-active:w-full">
        </div>
      </label>

      <button type="submit"
        class="cursor-pointer rounded-xl bg-[#5667FD] py-2 text-xl font-semibold text-white transition-all duration-300 hover:bg-opacity-70">Update
        Kelas</button>
    </div>
  </form>
</div>
