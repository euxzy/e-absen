{{-- Be like water. --}}
<div class="my-8 w-[79%] rounded-xl pb-40 text-[#364356]" x-data>
  <div class="mb-6 flex w-full items-center justify-between rounded-xl bg-white py-6 px-8">
    <div class="flex w-[500px] justify-start">
      <p class="w-96 text-center italic">Hello</p>
    </div>
    <div class="flex items-end gap-4">
      <div>
        <div class="mb-3">
          <p class="text-2xl font-semibold">Kelas {{ $kelas->tingkat . $kelas->nama }}</p>
          @if ($kelas->walkel)
            <p class="text-sm">Wali Kelas : {{ $kelas->walkel->nama }}</p>
          @else
            <p class="text-sm">Tidak Ada Wali Kelas</p>
          @endif
        </div>
        <div class="flex gap-3">
          <a x-text="'Edit'" class="cursor-pointer"></a>
          <span> | </span>
          <form method="POST" action="">
            @csrf
            <button type="submit">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
