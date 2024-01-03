

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome (pour les icônes) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <!-- Styles personnalisés -->
  <style>
    body {
      padding: 20px;
      color: white; /* Changement de la couleur du texte en blanc */
      background-color: black; /* Changement de la couleur de fond en noir */
    }

    #videoContainer {
      text-align: center;
      color: black; /* Changement de la couleur du texte dans la section vidéo en noir */
    }

    .space {
      margin-bottom: 20px;
    }

    h4 {
      color: white; /* Changement de la couleur du texte dans les balises h4 en blanc */
    }

    p {
      color: white; /* Changement de la couleur du texte dans les balises p en blanc */
    }

    button{
        text-align: center;


    }
  </style>

</head>
<body>
    

   <!-- ... (votre contenu actuel) ... -->

<div class="container space mb-3 d-flex justify-content-end">


    <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); " >
        {{ __('SE DECONNECTER') }}
    </a>



    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>



  <div class="container space">
    <h4><marquee> <span style="color: green;">★</span>
        <span style="color: yellow;">★</span>
        <span style="color: red;">★</span>Bienvenue {{ Auth::user()->name }} sur la page dédiée à l'élection présidentielle du 24 février ! <span style="color: green;">★</span>
        <span style="color: yellow;">★</span>
        <span style="color: red;">★</span></marquee></h4>
  </div>

  <br> </br>
  <div class="container space">
    <p>Nous sommes ravis de t'accueillir dans cet espace démocratique où tu pourras exercer ton droit de vote et jouer un rôle essentiel dans le choix du futur leader de notre pays. Nous te souhaitons un agréable parcours sur notre plateforme, en espérant que tu trouves toutes les informations nécessaires pour faire un choix éclairé lors de cette élection.</p>
    <a href="/electeur" class="btn btn-primary">Voter</a>
    <div class="container space mb-3 d-flex justify-content-end">
  <!--    <button id="listerBtn" class="btn btn-success" ><a href={{ url('/candidat') }} class="btn btn-success">Ajouter candidat</a></button> -->
    </div>

  </div>

  <br> </br>
  <div class="container space" id="videoContainer">
    <video controls width="100%" height="auto">
      <source src="uploads/video.mp4" type="video/mp4">
      Votre navigateur ne prend pas en charge la balise vidéo.
    </video>
  </div>




  <!-- Bootstrap JS et Popper.js (requis pour Bootstrap) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Votre script JavaScript -->
  <script>
    // Vous pouvez ajouter du code ici pour gérer les actions des boutons si nécessaire
  </script>

</body>
</html>
