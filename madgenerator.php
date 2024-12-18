<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        *{
            background-color: #E0D4C6;
            margin: 0px;
            font-family: "Helvetica Neue";
        }
        nav {
            padding: 10px 20px;
        }
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .logo{
            width: 100px;
            padding: 10px;
            margin-left: -170px;
            margin-top: -25px;
        }
        li {
            position: relative; /* Needed for positioning the dropdown */
            margin-right: 20px;
            margin-top: 20px;
        }
        a {
            text-decoration: none;
            color: #1F3A20;
            font-size: 18px;
            display: block;
            font-weight: bolder;
            margin-left: 170px;
            margin-top: 30px;
        }

        /* Dropdown Menu Styles */
        .dropdown {
            display: none; /* Hidden by default */
            position: absolute;
            padding-bottom: 15px;
            list-style: none;
            top: 100%; /* Position dropdown below the parent */
            left: 100px;
        }

        .dropdown a {
            color: #1F3A20;
            font-weight: normal;
            margin-left: 70px;
        }

        /* Show Dropdown on Hover */
        li:hover .dropdown {
            display: block; /* Show the dropdown */
        }

        .bjælke1{
            background-color: #557D56;
            height: 50px;
        }

        h1{
            font-size: 20px;
            margin-top: 60px;
            margin-left: 360px;
        }

        .indtast{
            margin-left: 360px;
            margin-top: 100px;
        }

        .indtast2{
            margin-left: 616px;
            margin-top: -196px;
        }

        .knap{
            margin-left: 300px;
            margin-top: 50px;
        }


    </style>

</head>
<body>

<nav>
    <ul>
        <a href="prøver.php">
            <img src="billeder/nytlogo.png" class="logo">
        </a>
        <li>
            <a href="#">Madspild</a>
            <ul class="dropdown">
                <li><a href="#">Tips og tricks</a></li>
                <li><a href="#">Supermarkeder</a></li>
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