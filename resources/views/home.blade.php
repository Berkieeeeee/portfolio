<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Berk Sonmez</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="navbar">
        <a href="/" onclick="scrollToSection(event, 'home')">Home</a>
        <a href="/" onclick="scrollToSection(event, 'about')">Over Mij</a>
        <a href="/" onclick="scrollToSection(event, 'projects')">Projecten</a>
        <a href="/" onclick="scrollToSection(event, 'contact')">Contact</a>
    </div>

    <div id="home" class="container">
        <div class="content">
            <h1>Welkom bij mijn Portfolio</h1>
            <p>Ik ben Berk Sonmez, een gepassioneerde softwareontwikkelaar met ervaring in Laravel, Flutter, en meer. Verken mijn projecten en ontdek mijn vaardigheden!</p>
            <a href="/" onclick="scrollToSection(event, 'projects')" class="btn">Bekijk mijn projecten</a>
        </div>
    </div>

    <div id="about" class="section">
        <h2>Over Mij</h2>
        <p>Informatie over mij en mijn achtergrond als softwareontwikkelaar.</p>
    </div>

    <div id="projects" class="section">
        <h2>Projecten</h2>
        <p>Hier zijn enkele van mijn recente projecten.</p>
    </div>

    <div id="contact" class="section">
        <h2>Contact</h2>
        <p>Neem contact met mij op via e-mail of sociale media.</p>
    </div>

    <script>
        function scrollToSection(event, sectionId) {
            event.preventDefault();
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
            history.pushState(null, '', '/' + sectionId); // Verandert de URL zonder `#`
        }
    </script>

</body>
</html>
