<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Validator;

class ProduitController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->query('title');

        if($title){
            $produits = Produit::search($title)
                ->get();
        }else{
            $produits = Produit::All();
        }

        return view('index',compact('produits'))->with('title', $title);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|numeric|min:0',
            'quantite' => 'required|integer|min:0',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        Produit::create($request->all());
    
        return redirect()->route('produit.index')->with('success', 'Produit créé avec succès.');
    }
}
