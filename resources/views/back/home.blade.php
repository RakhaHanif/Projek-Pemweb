@extends('layouts.back.inc.app')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <h1>Halaman Admin</h1>
    <p>Ini adlaah ahalam nada odwsjdkwf </p>
@endsection