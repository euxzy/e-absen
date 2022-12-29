@extends('layouts.main')
@section('title', 'Home')
@section('content')
  {{-- @livewire('home') --}}

  @livewire('siswa.absen.index')
@endsection
