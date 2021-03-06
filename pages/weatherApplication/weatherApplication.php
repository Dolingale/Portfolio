<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppMétéo</title>
    <link rel="stylesheet" href="assets/css/weatherApplicationStyle/styles.css">
</head>
<body>
    <div class="container">

        <div class="overlay-icone-chargement">
            <img src="data/weatherApplicationRessources/chargement/circles.svg" alt="Logo chargement">
        </div>

        <h1>Application météo</h1>
        <div class="bloc-logo-info">
            <div class="bloc-logo">
                <img src="data/weatherApplicationRessources/jour/04d.svg" alt="logo du temps qu'il fait" class="logo-meteo">
            </div>
            
            <div class="bloc-info">
                <p class="temps"></p>
                <p class="temperature"></p>
                <p class="localisation"></p>
            </div>
        </div>

        

        <div class="heure-bloc-prevision">
            <!-- Column 1 row 1 -->
            <div class="bloc-h">
                <p class="heure-nom-prevision"></p>
                <p class="heure-prevision-valeur"></p>
            </div>

            <!-- Column 2 row 1 -->
            <div class="bloc-h">
                <p class="heure-nom-prevision"></p>
                <p class="heure-prevision-valeur"></p>
            </div>

            <!-- Column 3 row 1 -->
            <div class="bloc-h">
                <p class="heure-nom-prevision"></p>
                <p class="heure-prevision-valeur"></p>
            </div>

            <!-- Column 4 row 1 -->
            <div class="bloc-h">
                <p class="heure-nom-prevision"></p>
                <p class="heure-prevision-valeur"></p>
            </div>

            <!-- Column 5 row 1 -->
            <div class="bloc-h">
                <p class="heure-nom-prevision"></p>
                <p class="heure-prevision-valeur"></p>
            </div>

            <!-- Column 6 row 1 -->
            <div class="bloc-h">
                <p class="heure-nom-prevision"></p>
                <p class="heure-prevision-valeur"></p>
            </div>

            <!-- Column 7 row 1 -->
            <div class="bloc-h">
                <p class="heure-nom-prevision"></p>
                <p class="heure-prevision-valeur"></p>
            </div>
        </div>

        <div class="jour-prevision-bloc">
            <!-- Column 1 row 2 -->
            <div class="bloc-j">
                <p class="jour-prevision-nom"></p>
                <p class="jour-prevision-temps"></p>
            </div>

            <!-- Column 2 row 2 -->
            <div class="bloc-j">
                <p class="jour-prevision-nom"></p>
                <p class="jour-prevision-temps"></p>
            </div>

            <!-- Column 3 row 2 -->
            <div class="bloc-j">
                <p class="jour-prevision-nom"></p>
                <p class="jour-prevision-temps"></p>
            </div>

            <!-- Column 4 row 2 -->
            <div class="bloc-j">
                <p class="jour-prevision-nom"></p>
                <p class="jour-prevision-temps"></p>
            </div>

            <!-- Column 5 row 2 -->
            <div class="bloc-j">
                <p class="jour-prevision-nom"></p>
                <p class="jour-prevision-temps"></p>
            </div>

            <!--Column 6 row 2 -->
            <div class="bloc-j">
                <p class="jour-prevision-nom"></p>
                <p class="jour-prevision-temps"></p>
            </div>

            <!-- Column 7 row 2 -->
            <div class="bloc-j">
                <p class="jour-prevision-nom"></p>
                <p class="jour-prevision-temps"></p>
            </div>
        </div>
    </div>
   
 
   
    <script type="module" src="assets/js/weatherApplicationScripts/main.js"></script>
</body>
</html>