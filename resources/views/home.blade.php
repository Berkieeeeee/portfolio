<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Berk Sonmez</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigatiebalk -->
    <div class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">Over Mij</a>
        <a href="#projects">Projecten</a>
        <a href="#contact">Contact</a>
    </div>

    <!-- Secties -->
    <div id="home" class="section">
        <div class="content">
            <h1>Welkom bij mijn Portfolio</h1>
            <p>Ik ben Berk Sonmez, een gepassioneerde softwareontwikkelaar met ervaring in Laravel, Flutter, en meer.</p>
            <a href="#projects" class="btn">Bekijk mijn projecten</a>
        </div>
    </div>

    <div id="about" class="section">
        <div class="content">
            <h2>Over Mij</h2>
            <p>Ik ben een softwareontwikkelaar met ervaring in verschillende technologieën. Ik hou ervan om te blijven leren en mijn vaardigheden te verbeteren.</p>
        </div>
    </div>

    <div id="projects" class="section">
        <div class="content">
            <h2>Projecten</h2>
            <p>Hier zijn enkele van mijn projecten die ik heb gemaakt met behulp van Laravel, Flutter, en andere technologieën.</p>
        </div>
    </div>

    <div id="contact" class="section">
        <div class="content">
            <h2>Contact</h2>
            <p>Wil je contact met mij opnemen? Stuur me een bericht en ik zal zo snel mogelijk reageren.</p>
            <a href="mailto:berkgazi2006@gmail.com" class="btn">Stuur een bericht</a>
        </div>
    </div>

    <!-- JavaScript voor scroll-effecten op de navbar -->
    <script>
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    </script>
</body>
</html>
