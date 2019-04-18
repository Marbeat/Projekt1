@extends('layouts.title', ['title' => 'Strona główna'])
@extends('layouts.app')
@extends('layouts.footer')
@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h2 class="jumbotron-heading text-uppercase text-white">Zaprojektuj stronę z <strong><font color="#e99a35">My-design</font></strong></h2>
        <p class="lead text-white">Oferujemy najniższe ceny na rynku, zapewniając satysfakcję jakości</br>Ustal warunki projektu w naszym formularzu, a my ułatwimy Tobie drogę do stworzenia własnego wyglądu w sieci!</p>
    </div>
</section>
<div class="bg-homepage">
<div class="container textcentermedia pt-4 pb-4">
    <div class="row justify-content-center pb-lg-3">
        <div class="col-lg-6">
            <div class="wrapper">
                <img src="storage/img-home.png" class="img-fluid" alt="Responsive image" width="72%"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="text-white">
                <div class ="text-uppercase">
                    <h4>Przedstaw nam swoje wymagania</h4>
                </div>
                <p>W prosty sposób możesz ustalić warunki dotyczące swojej strony</br>
                Jeśli posiadasz konto na naszej stronie możesz utworzyć nowy wniosek. Nasz formularz pozwoli Ci na sprecyzowanie szczegółów dotyczących zamówienia</p>
                <p>
                    <a href="{{ route('orders.create') }}" class="btn btn-primary2 my-2"><span class="glyphicon glyphicon-file"></span> Przejdź do formularza</a>
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
                        <h5><span class="glyphicon glyphicon-user"></span> Wsparcie</h5>
                        <font color="#6c757d">Opieka, oraz pomoc w sprawach technicznych po ukończonym projekcie </font>
                    </div>
                        <div class ="col-sm">
                            <h5><span class="glyphicon glyphicon-picture"></span> Wygląd</h5>
                            <font color="#6c757d">Projektujemy strony o unikalnym wyglądzie dopasowanym do Twoich oczekiwań </font>
                        </div>
                        </div>
            </div>
            </div>
</div>
@endsection
