@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.hastags', ['title' => $title])
@endsection
