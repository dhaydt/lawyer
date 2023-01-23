@extends('layout.backend.app')
@section('title',$title)
@section('content')
@livewire('admin.recruitment', ['title' => $title])
@endsection
