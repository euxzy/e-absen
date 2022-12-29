@extends('layouts.main')
@section('title', 'Home')
@section('content')
  @if (!session('logged'))
    @livewire('home')
  @endif

  @if (session('role') == 1)
    @livewire('siswa.absen.index')
  @endif

  @if (session('role') == 2)
    @livewire('admin.dashboard.index')
  @endif
@endsection
