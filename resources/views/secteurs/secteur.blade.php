
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de modification pour les candidats</title>
  <!-- Inclure Bootstrap CSS (à remplacer par le chemin local ou CDN) -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Ajoutez votre propre style CSS ici pour personnaliser davantage le formulaire */
  </style>
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Formulaire pour les candidats</h2>
  <form id="awesomeForm" action="{{ Route('enregistrerCandidat') }}"  enctype="multipart/form-data"  method="post">
    @csrf
    <div class="form-group">
      <label for="Nom">Nom :</label>
      <input type="text" class="form-control" id="" name="Nom"placeholder="Entrez votre nom" value="{{ $candidat->Nom }}" required>
    </div>
    <div class="form-group">
      <label for="Prenom">Prenom :</label>
      <input type="text" class="form-control" id="" name="Prenom" placeholder="Entrez votre prenom" value="{{ $candidat->Prenom }}" required>
    </div>
    <div class="form-group">
        <label for="Partie">Partie :</label>
        <input type="text" class="form-control" id="" name="Partie" placeholder="Entrez votre Partie" value="{{ $candidat->Partie }}" required>
    </div>
    <div class="form-group">
        <label for="Biographie">Biographie :</label>
        <input type="text" class="form-control" id="" name="Biographie" placeholder="Entrez votre Biographie" value="{{ $candidat->Biographie }} "required>
    </div>
    <div class="form-group">
        <label for="validite">validité :</label>
        <input type="text" class="form-control" id="" name="validité" placeholder="Entrez votre Biographie" value="{{ $candidat->validité }}" required>
    </div>
    <div class="form-group">
        <label for="photo">Téléchargez votre photo :</label>
        <input type="file" class="form-control-file" id="" name="photo" value="{{ $candidat->photo }}" accept="image/*">
      </div>

    <button type="submit" class="btn btn-primary"  value="envoyer" onclick="validerFormulaire()">Modifier</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function validerFormulaire() {
    // Ajoutez ici le code JavaScript pour valider et traiter le formulaire
    // Par exemple, vous pouvez utiliser AJAX pour envoyer les données au serveur.
    alert("Formulaire soumis avec succès !");
  }
</script>


<!-- Inclure Bootstrap JS (à remplacer par le chemin local ou CDN) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function validerFormulaire() {
    // Ajoutez ici le code JavaScript pour valider et traiter le formulaire
    // Par exemple, vous pouvez utiliser AJAX pour envoyer les données au serveur.
    alert("Candidat  soumis avec succès !");
  }
</script>

</body>
</html>

