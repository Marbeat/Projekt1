@extends('layouts.title', ['title' => 'Strona główna'])
@extends('layouts.app')
@extends('layouts.footer')
<div class="bg-top">
@section('content')
<div class="container textcentermedia">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="wrapper">
                <img src="storage/img3.png" class="img-fluid" alt="Responsive image" width="85%"/>
                <div class="overlay">
                    <a class="btn btn-primary2" href="/orders" role="button">Przejdź do formularza</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="text-white mt-4 mb-3">
                <div class ="text-uppercase mb-4">
                    <h4>Zaprojektuj witrynę z nami!</h4>
                </div>
                <h8>Oferujemy najniższe ceny na rynku, zapewniając satysfakcję jakości!</br>
                Nasz formularz pozwoli Ci na sprecyzowanie szczegółów dotyczących zamówienia.
                </h8>
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
                    <div class="row">
                    <div class ="col">
                        <h5>Pierwsza opcja</h5>
                        Analizujemy Twoje oczekiwania, ustalamy cele, planujemy architekturę informacji
                    </div>
                    <div class ="col">
                        <h5>Druga opcja</h5>
                        Analizujemy Twoje oczekiwania, ustalamy cele, planujemy architekturę informacji
                    </div>
                    </div>
                        <div class="row">
                    <div class ="col">
                        <h5>Trzecia opcja</h5>
                        Analizujemy Twoje oczekiwania, ustalamy cele, planujemy architekturę informacji
                    </div>
                        <div class ="col">
                            <h5>Czwarta opcja</h5>
                            Analizujemy Twoje oczekiwania, ustalamy cele, planujemy architekturę informacji
                        </div>
                        </div>
            </div>
            </div>
</div>
    </div>
@endsection
