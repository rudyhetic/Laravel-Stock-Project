<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <h1>Enregistrement des produits</h1>
    </header>
    <main>

    <div class="container">
    <form action=" {{ url('/registerproduct') }}" method="post">
        @csrf
        <label for="">Nom</label>
        <input type="text" name="nom" placeholder="Nom du produit"> <br>
        <label for="">Description</label>
        <input type="text" name="description" placeholder="description du produit"><br>
        <label for="">Catégorie</label>
        <input type="text" name="categorie" placeholder="Catégorie du produit"><br>
        <label for="">Quantité</label>
        <input type="number" name="quantite" placeholder="Quantité du produit"><br>

            <!-- Ajouter le champ pour sélectionner un profil -->
        <label for="profil_id">Sélectionner un profil</label>
        <select name="profil_id" required>
            <option value="">-- Sélectionnez un profil --</option>
            @foreach ($addprofils as $profil)
             <option value="{{ $profil->id }}">{{ $profil->nomprofil }}</option>
            @endforeach
        </select>

        <button type="submit">Envoyer</button>


    </form>

    @if (isset($message))
        <p>{{ $message }}</p>
    @endif
    <div class="lien">
    <a href="{{ url('/') }}">Retour</a>
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

form * {
    margin-bottom: 15px; /* Ajoute de l'espace sous chaque élément */
    font-size: 18px; /* Agrandit le texte */
    padding: 10px; /* Rend les champs plus confortables */
    color: black;
  }

form button {
    color: black;
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
