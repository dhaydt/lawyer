@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.client', ['title' => $title])
@endsection
