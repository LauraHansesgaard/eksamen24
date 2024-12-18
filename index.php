<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="forside.css">
</head>
<body>

<nav>
    <ul>
        <a href="index.php">
            <img src="billeder/nytlogo.png" class="logo">
        </a>

        <li>
            <a href="#">Madspild</a>
            <ul class="dropdown">
                <li><a href="tipsogtricks.php">Tips og tricks</a></li>
                <li><a href="supermarkeder.php">Supermarkeder</a></li>
            </ul>
        </li>

        <li>
            <a href="#">Retter og måltider</a>
            <ul class="dropdown">
                <li><a href="madgenerator.php">Madgenerator</a></li>
                <li><a href="#">Madplaner</a></li>
            </ul>
        </li>
        <li><a href="#">Donationsbank</a></li>
        <li><a href="#">Madpyramiden</a></li>
    </ul>
</nav>

<section class="bjælke1">
</section>

<video controls> <source src="video/madspild.mp4" type="video/mp4"> </video>

<section class="undervideo"></section>

<section class="viden">
    <h1>Vidste du...</h1>

    <!--køge tiltag med javascript-->
    <div id="kommentarBox"></div>

    <img src="billeder/stopspildlokalt.png" class="stopmadspild">
</section>


<h2>Ugens favoritter</h2>

<div id="image-container">
    <img src="billeder/tømkøleskabet.png" class="billede">
    <img src="billeder/gemoggivtilandre.png" class="billede">
    <img src="billeder/tipoftheday.png" class="billede">
</div>

<div id="favoritter">
    <button class="fav">Tøm køleskabet</button>
    <button class="fav">Gem og giv til andre</button>
    <button class="fav">Tip of the day</button>
</div>


<footer>
    <img src="billeder/køge.png" class="køgelogo">
    <div class="line">
        <div></div>
    </div>
    <h3>KØGE KOMMUNE</h3>
    <br>
    <h4>Køge Kommune <br><br> Torvet 1 <br><br> DK-4600 Køge <br><br> CVR-nr. 29189374</h4>
    <br>
    <br>
    <h6>&copy; Bekæmp Madspild.</h6>

    <div class="følg">
        <h5 style="background-color: #557D56">FØLG</h5>
        <img src="billeder/socialemedier.png" class="socialemedier">
    </div>

    <div class="personligeoplysninger">
        Håndtering af personlige oplysninger
    </div>
    <div class="betingelser">
        Betingelser for brug
    </div>
    <div class="politik">
        Cookie politik
    </div>
    <div class="cookies">
        Vælg en anden cookies
    </div>
</footer>



<script>
    // PHP array med kommentarer
    <?php
    $kommentarer = [
        "Kommunen samarbejder med madspildsorganisationer og lokale initiativer for at sikre en bedre udnyttelse af fødevarer?",
        "Køge Kommune arbejder med DK2020-planen, som inkluderer at reducere CO2-udledning, blandt andet ved at fokusere på at minimere madspild?",
        "Der er fokus på at øge bevidstheden om madspild blandt både private og virksomheder, herunder gennem kampagner og information?",
    ];
    // Konverter PHP array til en JavaScript array
    echo "const kommentarer = " . json_encode($kommentarer) . ";";
    ?>

    // Vælg en tilfældig kommentar
    function visTilfaeldigKommentar() {
        const tilfældigIndex = Math.floor(Math.random() * kommentarer.length);
        const kommentar = kommentarer[tilfældigIndex];
        document.getElementById("kommentarBox").innerText = kommentar;
    }

    // Kald funktionen, når siden indlæses
    window.onload = visTilfaeldigKommentar;
</script>
</body>
</html>
