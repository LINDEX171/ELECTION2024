<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulaire pour les electeurs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }

        .container:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #16181b;
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
            transition: transform 0.3s;
        }

        .form-group:hover {
            transform: translateX(5px);
        }

        select,
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            background-color: #f8f9fa;
            color: #495057;
            transition: border-color 0.3s;
        }

        select,
        input[type="text"],
        textarea:hover {
            border-color: #007bff;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8"><polygon fill="%23343a40" points="0,0 8,0 4,5"/></svg>');
            background-repeat: no-repeat;
            background-position-x: 100%;
            background-position-y: 50%;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <a href="/admin-dashboard" style="font-size: 24px; color: black;">&#8592; Retour</a>
  <h2 class="mb-4">Formulaire de programme</h2>
  <form id="awesomeForm" action="{{ Route('enregistrerProgramme') }}"  enctype="multipart/form-data"  method="post">
    @csrf
    <div class="form-group">
        <label for="photo">photo candidat :</label>
        <input type="file" class="form-control-file" id="" name="photo"accept="image/*">
    </div>

    <div class="form-group">
        <label for="pdf">programme candidat :</label>
        <input type="file" class="form-control-file" id="" name="pdf">
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

