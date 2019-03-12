@extends('layouts.title', ['title' => 'Strona główna'])
@extends('layouts.app')
@extends('layouts.footer')
<section class="jumbotron text-center">
    <div class="container">
        <h2 class="jumbotron-heading text-uppercase text-white">Zaprojektuj stronę z <strong>My-design</strong></h2>
        <p class="lead text-white">Oferujemy najniższe ceny na rynku, zapewniając satysfakcję jakości</br>Ustal warunki projektu w naszym formularzu, a my ułatwimy Tobie drogę do stworzenia własnego wyglądu w sieci!</p>
        <p>
            <a href="/orders" class="btn btn-primary my-2"><span class="glyphicon glyphicon-list-alt"></span> Formularz projektu</a>
            <a href="/contact" class="btn btn-secondary my-2"><span class="glyphicon glyphicon-envelope"></span> Kontakt</a>
        </p>
    </div>
</section>
<div class="bg-homepage">
@section('content')
<div class="container textcentermedia py-n5 my-2">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="wrapper">
                <img src="storage/img-home.png" class="img-fluid" alt="Responsive image" width="72%"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="text-white mt-4 mb-3">
                <div class ="text-uppercase mb-4">
                    <h4>Przedstaw nam swoje wymagania</h4>
                </div>
                <p>W prosty sposób możesz ustalić warunki dotyczące swojej strony</br>
                Nasz formularz pozwoli Ci na sprecyzowanie szczegółów dotyczących zamówienia
                </p>
            </div>
            </div>
    </div>
</div>
</div>
    <div class="container paddingtopmedia textcentermedia">
        <div class="row justify-content-center">
    <div class ="col-lg-6">
        <div class="vcenter">
        <img src="storage/responsive.png" class="img-fluid" alt="Responsive image" />
    </div>
    </div>
            <div class ="col-lg-6">
                    <div class ="text-uppercase">
                <h4>Oferujemy szeroką możliwość dopasowania projektu do Twoich wymagań!</h4>
                    </div>
                    <div class="row my-n3">
                    <div class ="col-sm">
                        <h5><span class="glyphicon glyphicon-phone"></span> Responsywność</h5>
                        <font color="#6c757d">Tworzymy strony, które w oparciu o najnowsze technologie dostosowują się do każdej rozdzielczości na której są wyświetlane</font>
                    </div>
                        <div class ="col-sm">
                            <h5><span class="glyphicon glyphicon-cog"></span> Funkcjonalność</h5>
                            <font color="#6c757d">Jansno określona nawigacja, dzięki czemu poruszanie się po stronie nie będzie stanowiło żadnego problemu</font>
                        </div>

                    </div>
                    <div class="row">
                    <div class ="col-sm">
                        <h5><span class="glyphicon glyphicon-user"></span> Administracja</h5>
                        <font color="#6c757d">Zarządzanie, oraz pomoc w sprawach technicznych po ukończonym projekcie </font>
                    </div>
                        <div class ="col-sm">
                            <h5><span class="glyphicon glyphicon-eye-open"></span> Wygląd</h5>
                            <font color="#6c757d">Projektujemy strony o unikalnym wyglądzie dopasowanym do Twoich oczekiwań </font>
                        </div>
                        </div>
            </div>
            </div>
</div>
@endsection
