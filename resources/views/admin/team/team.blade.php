@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.team', ['title' => $title])
@endsection
