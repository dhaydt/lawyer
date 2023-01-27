@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.applied', ['title' => $title])
@endsection
