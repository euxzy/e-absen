@extends('layouts.main')
@section('title', 'Detail Kelas')
@section('content')
  <section class="container flex justify-end">
    @livewire('admin.dashboard.index')

    @livewire('kelas.detail.index', ['idKelas' => $id])
  </section>
@endsection
