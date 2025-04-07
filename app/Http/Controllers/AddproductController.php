<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// Models importé 

use App\Models\Addproduct;
use App\Models\Addprofil;


class AddproductController extends Controller
{
    public function welcome_index() {
        $addproduct = Addproduct::all();
        $nbProducts = count($addproduct);
    
        return view('welcome', ['addproducts' => $addproduct, 'nbProducts' => $nbProducts]);
    }

    // Fonction pour les profils ----------------------------------------------------------------------------------

    public function profil_index() {
        $addprofil = Addprofil::all();
        $nbProfil = count($addprofil);
    
        return view('profil', ['addprofils' => $addprofil, 'nbProfils' => $nbProfil]);
    }

    public function register_new_profil(Request $requestprofil ) {
        
    $msg = "profil saved";


                // insertion dans la base de données

    $addprofil = Addprofil::create([
        'nomprofil' => $requestprofil->nomprofil,
        'contact' => $requestprofil->contact
    ]);
    
    return view('register', compact('msg'));

    }


    public function register_index() {
        return view('register',);
    }

    //Fonction pour les produits ----------------------------------------------------------------------------------

    public function registerproduct_index() {
            // Récupère tous les profils dans la base de données
    $addprofils = Addprofil::all();

    // Passe les profils à la vue pour pouvoir les afficher dans le formulaire
    return view('registerproduct', compact('addprofils'));
    }

    public function register_new_product(Request $request) {
        $message = "Produit enregistré !";

                // Validation des champs du formulaire 
    
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'quantite' => 'required|numeric|min:1',
            'profil_id' => 'required|exists:profils,id'  // Validation pour vérifier que l'ID du profil existe
        ]);
    
        if ($validator->fails()){
                // return "erreur";
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
                // insertion dans la base de données
    
        $addproduct = Addproduct::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'categorie' => $request->categorie,
            'quantite' => $request->quantite,
            'profil_id' => $request->profil_id  // Ajoute l'ID du profil sélectionné
        ]);

            // Récupérer tous les profils pour les passer à la vue
            $addprofils = Addprofil::all();
    
        return view('registerproduct', compact('message', 'addprofils'));
    }

    public function update_product($id) {

                $product = Addproduct::find($id);
                $addprofils = Addprofil::all();

                return view('update', compact('product', 'addprofils'));
    }

    public function update_product_traitement(Request $request) {
                // Validation des champs du formulaire 
    
                $validator = Validator::make($request->all(), [
                    'nom' => 'required|string|max:255',
                    'description' => 'required|string|max:255',
                    'categorie' => 'required|string|max:255',
                    'quantite' => 'required|numeric|min:1',
                    'profil_id' => 'required|exists:profils,id'  // Validation pour vérifier que l'ID du profil existe
                ]);
            
                if ($validator->fails()){
                        // return "erreur";
                    return redirect()->back()->withErrors($validator)->withInput();
                }

                // modification dans la base de données
    
                $addproduct = Addproduct::find($request->id);
                $addproduct->nom = $request->nom;
                $addproduct->description = $request->description;
                $addproduct->categorie = $request->categorie;
                $addproduct->quantite = $request->quantite;
                $addproduct->profil_id = $request->profil_id;  
                $addproduct->update();
                
                return redirect()->route('welcome');
                              
    }

    public function delete_product($id) {
                $product = Addproduct::find($id);
                $product->delete();

                return redirect()->route('welcome');
    }
}
