<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') | Absensi Siswa</title>

  @livewireStyles
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#E5E5E5]">
  {{-- @livewire('partials.navbar') --}}

  <main class="font-exo">
    @yield('content')
  </main>

  @livewireScripts
</body>

</html>
