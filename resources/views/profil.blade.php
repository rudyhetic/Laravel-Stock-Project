<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profils list</title>
</head>
<body>
    <header>
        <h1>Profils list</h1>
    </header>
<main>

<div class="container">
<div class="barrerecherche">
            <input type="text" name="" id="inputerecherche" placeholder="Rechercher">
        </div>

        
     @if ($nbProfils > 0)
         <h1>Il y'a actuellement {{ $nbProfils }} profil enregistrés</h1>
        @else 
        <h1>Il n'y a actuellement aucun profil enregistrés</h1>
        @endif
        
      <!-- Table des profils -->
      <table border="1" cellpadding="5" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Contact</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($addprofils as $profil)
                        <tr>
                            <td> {{ $profil->nomprofil }} </td>                <!-- Nom du profil -->
                            <td> {{ $profil->contact }} </td>           <!-- Contact -->
                            <td><a href=""><img src="#" ></a></td>         <!-- Img modif -->
                        </tr>
                        @endforeach
                </tbody>
            </table>
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