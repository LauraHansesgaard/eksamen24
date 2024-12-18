<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="madgenerator.css">

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
                <li><a href="#">Tips og tricks</a></li>
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


<h1>Indtast det du har i køleskabet</h1>
<div class="indtast">
    <form name="myForm" action="#" onsubmit="return validateForm()" method="post">
        GRØNSAGER
        <br>
        <input type="text" name="fbryst">
        <br>
        <br>
        <br>
        <br>
        SAUCE
        <br>
        <input type="text" name="ftalje">
        <br>
        <br>
        <br>
        <br>
        <div class="indtast2">
            KØD
            <br>
            <input type="text" name="flængde">
            <br>
            <br>
            <br>
            <br>
            TØRVARER
            <br>
            <input type="text" name="fhofte">
            <br>
            <br>
        </div>
        <div class="knap">
            <input type="submit" value="GENERER OPSKRIFTER">
        </div>
    </form>
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
    /*den validerer vores form*/
    function validateForm() {
        // definerer feltnavne i formularen, som man vil validere
        const form = document.forms["myForm"];
        const felter = ["fbryst", "ftalje","fhofte"];

        // kontrollerer, om felterne er tomme
        for (let felt of felter) {
            let value = form[felt].value;
            if (value === "") {
                alert("UDFYLD BOKSE");
                return false; // her stopper den formularen, hvis et felt er tomt
            }

            // tjek for specialtegn ved hjælp af regulært udtryk
            const specialTegn = /[;:/()*[\]$]/;
            if (specialTegn.test(value)) {
                alert("UGYLDIGT INPUT"); // Vis fejlbesked ved ugyldigt input
                return false; // Stop formularen, hvis der er specialtegn
            }
        }
        // hvis alt er OK
        alert("SUCCES");
        return true; // Tillad formularindsendelse
    }

</script>
</body>
</html>