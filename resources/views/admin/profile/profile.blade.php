@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.profile', ['title' => $title])
@endsection
