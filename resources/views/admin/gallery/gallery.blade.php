@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.gallery', ['title' => $title])
@endsection
