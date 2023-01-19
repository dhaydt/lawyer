@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.about-us', ['title' => $title])
@endsection
