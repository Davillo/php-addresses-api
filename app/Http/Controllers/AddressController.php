<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function findByCep(string $cep){
        $address = Address::where('cep', $cep)->first();

        if(!$address){
            return response()->json(['error' => 'CEP não encontrado'], 404);
        }

        return response()->json(['data' => $address]);
    }

    public function findByStreet(Request $request){
        $street = $request->query('street');

        $address = Address::where('street', 'LIKE', "%$street%")->paginate(15);

        if(!$address){
            return response()->json(['error' => 'Rua não encontrada'], 404);
        }

        return response()->json($address);
    }
}
