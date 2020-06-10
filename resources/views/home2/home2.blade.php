@extends('layouts.main')

@section('content')

   @include('partials.header')

    <main class="full-height2 flex-center2">
        
            <h2>Info pagina laravel</h2>
            <ul>
                <li>Name: {{ $name.' '. $last_name }}</li>
                <li>Phone: {{ $phone }}</li>
                <li>Email: {{ $email }}</li>
            </ul>
        
    </main>

    @include('partials.footer')
    
@endsection