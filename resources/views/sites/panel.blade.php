@extends('layouts.title', ['title' => 'Panel użytkownika'])
@extends('layouts.app')
@extends('layouts.footer')
@section('content')
    <style>
        body{ margin:0}
    </style>
<section class="bg-panel text-center">
    <div class="container">
        <p class="lead text-white text-uppercase">{{ Auth::user()->name }}, witaj w panelu klienta</p>
        <p class="lead text-white">Tutaj możesz przejść do konfiguracji swoich danych personalnych, lub danych dotyczących Twoich zamówień. Ponadto możesz przejść do złożenia zamówienia nowego projektu</p><br/><br/>
        <div class="row">
            <div class="col-sm-4">
                <a class="text-white" href=""><img src="storage/panel-img2.png" width="100px"><br/>Edytuj dane osobowe</a><br/><br/>
            </div>
            <div class="col-sm-4">
                <a class="text-white" href="{{ route('orders.index') }}"><img src="storage/panel-img3.png" width="100px"><br/>Twoje zamówienia</a><br/><br/>
            </div>
            <div class="col-sm-4">
                <a class="text-white" href="{{ route('orders.create') }}"><img src="storage/panel-img1.png" width="100px"><br/>Złóż zamówienie</a><br/><br/>
            </div>
        </div>
</section>
@endsection