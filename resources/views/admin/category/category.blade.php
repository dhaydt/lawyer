@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.category', ['title' => $title])
@endsection
