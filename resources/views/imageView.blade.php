!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <h1>Image View</h1>
    <img src="{{ $imageUrl }}" alt="logoMoj" />
    @include('components.application-logo') // Uključite logo
@endsection
