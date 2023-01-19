@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.organization', ['title' => $title])
@endsection
