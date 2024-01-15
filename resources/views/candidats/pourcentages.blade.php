<style>

    canvas {
        display: block;
        margin: auto;
        width: 300px; /* Ajustez la largeur en fonction de vos préférences */
        height: 300px; /* Ajustez la hauteur en fonction de vos préférences */
    }


    <!-- Ajoutez ces styles à votre fichier CSS ou à la balise <style> de votre vue -->


    h2 {
        text-align: center;
    }


    /* Ajoutez ces styles pour styliser le total des votes */
    .total-votes {
        text-align: center;
        font-size: 18px;
        font-weight: bold;
    }


    </style>

<a href="/accueil" style="font-size: 24px; color: black;">&#8592; Retour</a>
<!-- dans la vue 'candidats/pourcentages.blade.php' -->
<h2>Pourcentages de Votes</h2>
<canvas id="chart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('chart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [@foreach ($candidats as $candidat) '{{ $candidat->Nom }} {{ $candidat->Prenom }}', @endforeach],
            datasets: [{
                data: [@foreach ($candidats as $candidat) {{ $candidat->pourcentageVotes }}, @endforeach],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(153, 102, 255, 0.7)',
                ],
            }],
        },
    });


</script>

@foreach ($candidats as $candidat)
        <li>
            {{ $candidat->Nom }} {{ $candidat->Prenom }} : {{ $candidat->pourcentageVotes }}%

            <p class="total-votes">Total des votes : {{ $totalVotes }}</p>
        </li>
    @endforeach




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>







