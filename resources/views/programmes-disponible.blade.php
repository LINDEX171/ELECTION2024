<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des programmes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Couleur de fond */
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #28a745; /* Couleur du texte */
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5); /* Ombre du texte */
        }

        .table {
            background-color: #fff; /* Couleur de fond de la table */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre de la table */
            border-radius: 10px;
        }

        .table th, .table td {
            text-align: center;
        }

        .btn {
            transition: transform 0.3s ease-in-out; /* Animation de déplacement */
        }

        .btn:hover {
            transform: scale(1.1); /* Agrandissement au survol */
        }

        .thead-dark {
            background-color: #343a40; /* Couleur de fond de l'en-tête */
            color: #fff; /* Couleur du texte de l'en-tête */
        }
    </style>

<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Ajoutez ce script après vos autres scripts jQuery -->
<script>
    $(document).ready(function() {
        $('.btn-like').on('click', function(event) {
            handleVote($(this), '/vote-like', event);
        });

        $('.btn-dislike').on('click', function(event) {
            handleVote($(this), '/vote-dislike', event);
        });

        function handleVote(button, url, event) {
            event.preventDefault();

            var programmeId = button.data('programme-id');

            $.ajax({
                type: 'POST',
                url: url,
                data: { programme_id: programmeId },
                dataType: 'json',
                success: function(response) {
                    // Mettez à jour les compteurs de likes et dislikes sur la page
                    // Vous pouvez ajouter ces éléments à votre structure HTML
                    console.log('Likes: ' + response.likes);
                    console.log('Dislikes: ' + response.dislikes);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    });
    </script>




</head>
<body>




<div class="container">
    <a href="/accueil" style="font-size: 24px; color: black;">&#8592; Retour</a>
    <h2><Marquee> <span style="color: green;">★</span>
        <span style="color: yellow;">★</span>
        <span style="color: red;">★</span>Liste des Programmes <span style="color: green;">★</span>
        <span style="color: yellow;">★</span>
        <span style="color: red;">★</span></Marquee></h2>


        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>

                <th scope="col">Photo</th>
                <th scope="col">programme</th>
                <th scope="col">Voter</th>





            </tr>
        </thead>
        <tbody>
            @foreach ($programme as $p)
                <tr>

                    <td><img src="{{ asset('uploads/programmes/' . $p->photo) }}" alt="Photo du candidat" height="100;" width="100;"></td>
                    <td>
                        <!-- Utilisation de la balise embed pour afficher le PDF -->
                        <embed src="{{ asset('uploads/programmes/' . $p->pdf) }}" type="application/pdf" width="500" height="500">
                    </td>
                    <td> <!-- Colonne d'action -->
                        <!-- Ajoutez des boutons J'aime et Je n'aime pas ici -->
                        <a href="/electeur" class="btn btn-primary">Voter</a>
                    </td>


                </tr>

                </tr>
            @endforeach
        </tbody
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>










