{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<form action="#">
  @csrf
  <div class="flex w-full flex-col gap-10">
    <label for="nis">
      <p>NIS</p>
      <input type="number" name="nis" id="nis" required>
    </label>

    <label for="password">
      <p>Password</p>
      <input type="password" name="password" id="password" required>
    </label>

    <button type="submit">Login</button>
  </div>
</form>
