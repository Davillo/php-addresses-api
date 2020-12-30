<?php

namespace App\Http\Controllers;

use App\Models\Address;

class AddressController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function findByCep(string $cep){
        $address = Address::where('cep', $cep)->first();

        if(!$address){
            return response()->json(['error' => 'CEP não encontrado'], 404);
        }

        return response()->json($address);
    }

    public function findByStreet(){

    }
}
