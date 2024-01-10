<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Vote a été Enregistré</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #3498db;
        }

        p {
            color: #555;
            font-size: 18px;
        }

        .success-icon {
            color: #2ecc71;
            font-size: 80px;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #2ecc71;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<div class="container">
    <i class="success-icon">&#10003;</i>
    <h1>Votre Vote a été Enregistré avec Succès</h1>
    <p>Merci d'avoir exercé votre droit démocratique.</p>
    <button onclick="redirectToHome()">Retour à l'accueil</button>
</div>

<script>
    function redirectToHome() {
        // Vous pouvez remplacer cette URL par celle de votre page d'accueil
        window.location.href = "accueil";
    }
</script>

</body>
</html>
