<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Indywidualny_projekt_graficzny' => 'required',
            'Pomoc_i_wsparcie_techniczne' => 'required',
            'Galeria' => 'required',
            'Formularz_kontaktowy' => 'required',
            'Mapa_dojazdu' => 'required',
            'Responsywny_projekt_strony' => 'required',
            'Animowane_elementy_strony' => 'required',
            'Ilosc_podstron' => 'required',
            'Ilosc_dodatkowych_wersji_jezykowych' => 'required',
        ];
    }
}
