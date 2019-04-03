@extends('layouts.title', ['title' => 'Panel użytkownika'])
@extends('layouts.app')
@extends('layouts.footer')
@section('content')
<section class="bg-panel text-center">
    <div class="container">
        <p class="lead text-white">{{ Auth::user()->name }}, witaj w panelu użytkownika</p>
        <p class="lead text-white">Tutaj możesz konfigurować swoje dane personalne, lub dane dotyczące Twoich zamówień</p>
</section>
@endsection