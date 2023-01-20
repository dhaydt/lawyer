@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.pengumuman', ['title' => $title])
@endsection
