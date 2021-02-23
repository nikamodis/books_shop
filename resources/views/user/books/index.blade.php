@extends('layouts.app');

@section('content')
    <h1 class="text-center">My books</h1>
    @if (session('message'))
        <div>{{ session('message')}}</div>
    @endif   
    
    
@endsection