@extends('layouts.main')
@section('title', 'Admin')
@section('content')
  <section class="container flex justify-end">
    @livewire('admin.dashboard.index')

    @livewire('walkel.list.index')
  </section>
@endsection
