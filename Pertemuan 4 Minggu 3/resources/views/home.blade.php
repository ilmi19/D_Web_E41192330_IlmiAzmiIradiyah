@extends('layouts.app')

@section('content')
        <div class="jumbotron jumbroton-fluide">
            <div class="contrainer">
            <h1 class="display-4">Home Page</h1>
            <p class="lead">This is the Home Page</p>
            </div>
            <p>Nama : {{ $nama }}</p>
            <p>Mata Pelajaran</p>
            <ul>
                @foreach($pelajaran as $p)
                <li>{{ $p }}</li>
                @endforeach
        </div>
@endsection