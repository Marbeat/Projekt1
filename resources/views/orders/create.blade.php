@extends('layouts.title', ['title' => 'Nowe zamówienie'])
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
                    <div class="panel-heading font-weight-bold blockquote"><p>Formularz zamówienia</p></div>

                    <div class="panel-body mt-n2">
                        @if ($errors->count() > 0)
                            <ul class="text-left text-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{ route('orders.store') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="uzytkownik" value="{{ Auth::user()->name }}">
                            <input type="hidden" type="email" name="Adres_email" value="{{ Auth::user()->email }}"/>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                            <p><b>Indywidualny projekt graficzny:</b></p>
                            <input type="radio" name="Indywidualny_projekt_graficzny" value="Tak" @if(old('Indywidualny_projekt_graficzny') == 'Tak') checked @endif>Tak
                            <input type="radio" name="Indywidualny_projekt_graficzny" value="Nie" @if(old('Indywidualny_projekt_graficzny') == 'Nie') checked @endif>Nie
                            <span id="result"></span>
                            <hr>
                            <p><b>Pomoc i wsparcie techniczne:</b></p>
                            <input type="radio" name="Pomoc_i_wsparcie_techniczne" value="Tak" @if(old('Pomoc_i_wsparcie_techniczne') == 'Tak') checked @endif>Tak
                            <input type="radio" name="Pomoc_i_wsparcie_techniczne" value="Nie" @if(old('Pomoc_i_wsparcie_techniczne') == 'Nie') checked @endif>Nie
                            <hr>
                            <p><b>Galeria:</b></p>
                            <input type="radio" name="Galeria" value="Tak" @if(old('Galeria') == 'Tak') checked @endif>Tak
                            <input type="radio" name="Galeria" value="Nie" @if(old('Galeria') == 'Nie') checked @endif>Nie
                            <hr>
                            <p><b>Formularz kontaktowy:</b></p>
                            <input type="radio" name="Formularz_kontaktowy" value="Tak" @if(old('Formularz_kontaktowy') == 'Tak') checked @endif>Tak
                            <input type="radio" name="Formularz_kontaktowy" value="Nie"  @if(old('Formularz_kontaktowy') == 'Nie') checked @endif>Nie
                            <hr>
                            <p><b>Mapa dojazdu:</b></p>
                            <input type="radio" name="Mapa_dojazdu" value="Tak" @if(old('Mapa_dojazdu') == 'Tak') checked @endif>Tak
                            <input type="radio" name="Mapa_dojazdu" value="Nie" @if(old('Mapa_dojazdu') == 'Nie') checked @endif>Nie
                            <hr>
                            <p><b>Responsywny projekt strony:</b></p>
                            <input type="radio" name="Responsywny_projekt_strony" value="Tak" @if(old('Responsywny_projekt_strony') == 'Tak') checked @endif>Tak
                            <input type="radio" name="Responsywny_projekt_strony" value="Nie" @if(old('Responsywny_projekt_strony') == 'Nie') checked @endif>Nie
                            <hr>
                            <p><b>Animowane elementy strony:</b></p>
                            <input type="radio" name="Animowane_elementy_strony" value="Tak" @if(old('Animowane_elementy_strony') == 'Tak') checked @endif>Tak
                            <input type="radio" name="Animowane_elementy_strony" value="Nie" @if(old('Animowane_elementy_strony') == 'Nie') checked @endif>Nie
                            <hr>
                            <p><b>Ilość podstron:</b></p>
                            <input type="number" min="0" name="Ilosc_podstron" value="{{ old('Ilosc_podstron') }}"/>
                            <hr>
                            <p><b>Ilość dodatkowych wersji językowych:</b></p>
                            <input type="number" min="0" name="Ilosc_dodatkowych_wersji_jezykowych" value="{{ old('Ilosc_dodatkowych_wersji_jezykowych') }}"/>
                            <hr>
                            <p><b>Dodatkowe informacje:</b></p>
                            <textarea name="Dodatkowe_informacje" rows="5" cols="33">{{ old('Dodatkowe_informacje') }}</textarea>
                            <br/><br/>
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Wyślij</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection