
@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Dashboard</div>
    <div class="card-body">
        Welcome back, {{ auth()->user()->name }}!
    </div>
</div>
@endsection
