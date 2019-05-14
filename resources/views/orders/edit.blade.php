@extends('layouts.title', ['title' => 'Edytuj zamówienie'])
@extends('layouts.app')
@extends('layouts.footer')
@section('content')
    <style>
        body{ margin:0}
    </style>
    <section class="bg-panel">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default text-white text-center">
                    <div class="panel-heading font-weight-bold blockquote"><p>Edytuj zamówienie</p></div>

                    <div class="panel-body mt-n2">
                        @if ($errors->count() > 0)
                            <ul class="text-left text-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{ route('orders.update', $order->id) }}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <input type="hidden" name="uzytkownik" value="{{ Auth::user()->name }}">
                            <input type="hidden" type="email" name="Adres_email" value="{{ Auth::user()->email }}"/>
                            <p><b>Indywidualny projekt graficzny:</b></p>
                            <fieldset>
                                <input type="radio" name="Indywidualny_projekt_graficzny" value="Tak" id="tak" @if ($order->Indywidualny_projekt_graficzny == 'Tak') checked @endif />
                                <label for="tak">Tak</label>
                                <input type="radio" name="Indywidualny_projekt_graficzny" value="Nie" id="nie" @if ($order->Indywidualny_projekt_graficzny == 'Nie') checked @endif />
                                <label for="nie">Nie</label>
                            </fieldset>
                            <hr>
                            <p><b>Pomoc i wsparcie techniczne:</b></p>
                            <fieldset>
                                <input type="radio" name="Pomoc_i_wsparcie_techniczne" value="Tak" id="tak2" @if ($order->Pomoc_i_wsparcie_techniczne == 'Tak') checked @endif />
                                <label for="tak2">Tak</label>
                                <input type="radio" name="Pomoc_i_wsparcie_techniczne" value="Nie" id="nie2" @if ($order->Pomoc_i_wsparcie_techniczne == 'Nie') checked @endif />
                                <label for="nie2">Nie</label>
                            </fieldset>
                            <hr>
                            <p><b>Galeria:</b></p>
                            <fieldset>
                                <input type="radio" name="Galeria" value="Tak" id="tak3" @if ($order->Galeria == 'Tak') checked @endif />
                                <label for="tak3">Tak</label>
                                <input type="radio" name="Galeria" value="Nie" id="nie3" @if ($order->Galeria == 'Nie') checked @endif />
                                <label for="nie3">Nie</label>
                            </fieldset>
                            <hr>
                            <p><b>Formularz kontaktowy:</b></p>
                            <fieldset>
                                <input type="radio" name="Formularz_kontaktowy" value="Tak" id="tak4" @if ($order->Formularz_kontaktowy == 'Tak') checked @endif />
                                <label for="tak4">Tak</label>
                                <input type="radio" name="Formularz_kontaktowy" value="Nie" id="nie4" @if ($order->Formularz_kontaktowy == 'Nie') checked @endif />
                                <label for="nie4">Nie</label>
                            </fieldset>
                            <hr>
                            <p><b>Mapa dojazdu:</b></p>
                            <fieldset>
                                <input type="radio" name="Mapa_dojazdu" value="Tak" id="tak5" @if ($order->Mapa_dojazdu == 'Tak') checked @endif />
                                <label for="tak5">Tak</label>
                                <input type="radio" name="Mapa_dojazdu" value="Nie" id="nie5" @if ($order->Mapa_dojazdu == 'Nie') checked @endif />
                                <label for="nie5">Nie</label>
                            </fieldset>
                            <hr>
                            <p><b>Responsywny projekt strony:</b></p>
                            <fieldset>
                                <input type="radio" name="Responsywny_projekt_strony" value="Tak" id="tak6" @if ($order->Responsywny_projekt_strony == 'Tak') checked @endif />
                                <label for="tak6">Tak</label>
                                <input type="radio" name="Responsywny_projekt_strony" value="Nie" id="nie6" @if ($order->Responsywny_projekt_strony == 'Nie') checked @endif />
                                <label for="nie6">Nie</label>
                            </fieldset>
                            <hr>
                            <p><b>Animowane elementy strony:</b></p>
                            <fieldset>
                                <input type="radio" name="Animowane_elementy_strony" value="Tak" id="tak7" @if ($order->Animowane_elementy_strony == 'Tak') checked @endif />
                                <label for="tak7">Tak</label>
                                <input type="radio" name="Animowane_elementy_strony" value="Nie" id="nie7" @if ($order->Animowane_elementy_strony == 'Nie') checked @endif />
                                <label for="nie7">Nie</label>
                            </fieldset>
                            <hr>
                            <p><b>Ilość podstron:</b></p>
                            <input type="number" min="0" name="Ilosc_podstron" value="{{ $order->Ilosc_podstron }}"/>
                            <hr>
                            <p><b>Ilość dodatkowych wersji językowych:</b></p>
                            <input type="number" min="0" name="Ilosc_dodatkowych_wersji_jezykowych" value="{{ $order->Ilosc_dodatkowych_wersji_jezykowych }}"/>
                            <hr>
                            <p><b>Dodatkowe informacje:</b></p>
                            <textarea name="Dodatkowe_informacje" name="Dodatkowe_informacje" rows="5" cols="40">{{ ($order->Dodatkowe_informacje) }}</textarea>
                            <br/><br/>
                            <a class="btn btn-link" href="#" onclick="GoBackWithRefresh();return false;">
                                {{ __('Back') }}
                            </a>
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>{{ __(' Apply changes') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection