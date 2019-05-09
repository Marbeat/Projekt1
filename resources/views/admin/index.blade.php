@extends('layouts.title', ['title' => 'Panel użytkownika'])
@extends('layouts.app')
@extends('layouts.footer')
@section('content')
    <style>
        body{ margin:0}
    </style>
    <section class="bg-panel text-center">
        <div class="container">
            <p class="lead text-white text-uppercase mb-5">Panel administratora</p>
            <div class="row">
                <div class="col-sm-12">
                    <a class="text-white" href="{{ route('admin/orders') }}"><img src="storage/panel-img3.png" width="100px"><br/>Zamówienia klientów</a><br/><br/>
                </div>
            </div>
    </section>
@endsection