@extends('layouts.main')
@section('title', 'Home')
@section('content')
  @if (!session('logged'))
    @livewire('home')
  @endif

  @if (session('role') == 1)
    @livewire('siswa.absen.index')
  @endif
@endsection
