<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'uzytkownik',
        'Adres_email',
        'Indywidualny_projekt_graficzny',
        'Ilosc_podstron',
        'Pomoc_i_wsparcie_techniczne',
        'Galeria',
        'Formularz_kontaktowy',
        'Mapa_dojazdu',
        'Ilosc_dodatkowych_wersji_jezykowych',
        'Responsywny_projekt_strony',
        'Animowane_elementy_strony',
        'Dodatkowe_informacje'
    ];
    protected $dates = ['deleted_at'];
}
