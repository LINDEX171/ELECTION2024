
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire pour les electeurs</title>
  <!-- Inclure Bootstrap CSS (à remplacer par le chemin local ou CDN) -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Ajoutez votre propre style CSS ici pour personnaliser davantage le formulaire */
  </style>
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Formulaire de programme</h2>
  <form id="awesomeForm" action="{{ Route('enregistrerProgramme') }}"  enctype="multipart/form-data"  method="post">
    @csrf
    <div class="form-group">
      <label for="titre">Titre :</label>
      <input type="text" class="form-control" id="" name="titre"placeholder="Entrez le titre" required>
    </div>
    <div class="form-group">
        <label for="titre">Document :</label>
        <input type="text" class="form-control" id="" name="document"placeholder="Entrez le titre" required>
      </div>
    <div class="form-group">
        <label for="Adresse">Contenue :</label>
        <input type="text" class="form-control" id="" name="contenue" placeholder="Entrez le contenue" required>
    </div>


    <button type="submit" class="btn btn-primary"  value="envoyer" ">Envoyer</button>
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
    alert("Formulaire soumis avec succès !");
  }
</script>

</body>
</html>

