@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.content', ['title' => $title])
@endsection
