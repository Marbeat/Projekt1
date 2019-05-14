@extends('layouts.title', ['title' => 'Zamówienia'])
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
                    <div class="panel panel-default text-white">
                        <div class="panel-heading text-center font-weight-bold blockquote">Zamówienia</div>
                        <div class="panel-body">
                            @if (session('message'))
                                <div class="alert alert-info">{{ session('message') }}</div>
                            @endif
                            <table class="table table-bordered">
                                <tbody>
                                @forelse($orders as $order)
                                    <tr>
                                        <td colspan="3" class="text-center">Data złożenia zamówienia:
                                            {{ $order->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>ID użytkownika</td>
                                        <td>{{ $order->user_id }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Indywidualny projekt graficzny</td>
                                        <td>{{ $order->Indywidualny_projekt_graficzny }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Pomoc i wsparcie techniczne</td>
                                        <td>{{ $order->Pomoc_i_wsparcie_techniczne }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Galeria</td>
                                        <td>{{ $order->Galeria }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Formularz kontaktowy</td>
                                        <td>{{ $order->Formularz_kontaktowy }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Mapa dojazdu</td>
                                        <td>{{ $order->Mapa_dojazdu }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Responsywny projekt strony</td>
                                        <td>{{ $order->Responsywny_projekt_strony }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Animowane elementy strony</td>
                                        <td>{{ $order->Animowane_elementy_strony }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Ilość podstron</td>
                                        <td>{{ $order->Ilosc_podstron }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Ilość dodatkowych wersji językowych</td>
                                        <td>{{ $order->Ilosc_dodatkowych_wersji_jezykowych }}</td>
                                    </tr>
                                    @if ($order->Dodatkowe_informacje != NULL)
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Dodatkowe informacje</td>
                                        <td class="text-break">{{ $order->Dodatkowe_informacje }}</td>
                                    </tr>
                                    @endif
                                    @if ($order->deleted_at != NULL)
                                    <tr>
                                        <th scope="row" class="text-warning">12</th>
                                        <td class="text-warning">Data usunięcia</td>
                                        <td class="text-break text-warning">{{ $order->deleted_at }}</td>
                                    </tr>
                                    @endif
                                @empty
                                    <tr>
                                        <td colspan="3">Aktualnie nie ma zamówień.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            @foreach($orders as $order)
                                {{ $orders->links() }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <style>

        th {
            background: #08315aa6;
            color: white;
            font-weight: bold
        }
        td, th {
            border: 1px solid #ccc;
            text-align: left
        }
    </style>
@endsection


