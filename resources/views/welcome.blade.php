<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Dashbord</h1>
    </header>
<main>

<div class="container">
<div class="barrerecherche">
            <input type="text" name="" id="inputerecherche" placeholder="Rechercher">
        </div>


        @if ($nbProducts > 0)
         <h1>Il y'a actuellement {{ $nbProducts }} produits enregistrés</h1>
        @else 
        <h1>Il n'y a actuellement aucun produits enregistrés</h1>
        @endif

        
      <!-- Table des produits -->
      <table border="1" cellpadding="5" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Références (id)</th>
                        <th>Description</th>
                        <th>Catégorie</th>
                        <th>Quantité</th>
                        <th>Dates de Réception</th>
                        <th>Propriétaire</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($addproducts as $product)
                        <tr>
                            <td> {{ $product->nom }} </td>                <!-- Nom du produit -->
                            <td> {{ $product->id }} </td>           <!-- Référence du produit -->
                            <td> {{ $product->description }} </td>         <!-- Description du produit -->
                            <td> {{ $product->categorie }} </td>            <!-- Catégorie du produit -->
                            <td> {{ $product->quantite }} </td>            <!-- Quantité du produit -->
                            <td> {{ $product->created_at }} </td> <!-- Date de réception -->
                            <td> {{ $product->profil ? $product->profil->nomprofil : 'Aucun profil' }} </td>
                            <td><a href="/update-product/{{ $product->id }}"><img src="{{ asset('images/pen.png') }}" width="50px"></a></td>         <!-- Img modif -->
                            <td><a href="/delete-product/{{ $product->id }}"><img src="{{ asset('images/cross.png') }}" width="50px" ></a></td>         <!-- Img supp -->
                        </tr>
                @endforeach
                </tbody>
            </table>
            <div class="lien">
            <div>
                <a href="{{ url('/register') }}">Créer un profil</a>
            </div>
                <div>
                <a href="{{ url('/registerproduct') }}">Créer un produit</a>
            </div>
                <div>
                <a href="{{ url('/profil') }}">Voir les profils</a>
            </div>
        </div>
        </div>
        </main>
</body>
</html>

<style>
    * {
    margin: 0;
    color: white;
    font-family: "Fjalla One", sans-serif;
    font-weight: 700;
    font-style: normal;
      
}

header {
    background: #615F74;
    margin-bottom: 150px;
}

header h1 {
    padding-left: 10%;
}


body {
    background: #282738;

}

input {
    color: #473d3d;
}

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 20px;
}

.lien {
    line-height: 2;
}

.lien a:hover {
    color: #473d3d;
}

</style>