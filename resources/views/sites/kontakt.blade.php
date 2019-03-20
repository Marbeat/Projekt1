@extends('layouts.title', ['title' => 'Kontakt'])
@extends('layouts.app')
@extends('layouts.footer')
<section class="jumbotron text-center">
    <div class="container">
        <h2 class="jumbotron-heading text-uppercase text-white">Zaprojektuj stronę z <strong>My-design</strong></h2>
        <p class="lead text-white">Oferujemy najniższe ceny na rynku, zapewniając satysfakcję jakości</br>Ustal warunki projektu w naszym formularzu, a my ułatwimy Tobie drogę do stworzenia własnego wyglądu w sieci!</p>
        <p>
            <a href="{{ route('formularz') }}" class="btn btn-primary my-2"><span class="glyphicon glyphicon-file"></span> Formularz projektu</a>
            <a href="{{ route('kontakt') }}" class="btn btn-secondary my-2"><span class="glyphicon glyphicon-envelope"></span> Kontakt</a>
        </p>
    </div>
</section>