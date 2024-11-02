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
        <a href="#home" class="active">Home</a>
        <a href="#about">Over Mij</a>
        <a href="#projects">Projecten</a>
        <a href="#contact">Contact</a>
    </div>
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

        <div class="project-slider">
            <span class="arrow left-arrow" onclick="prevProject()">&#10094;</span>
            <div class="project" id="project-display">
                <h3>SummaMove</h3>
                <p>Het SummaMove-project is een web applicatie ontwikkeld om studenten van Summa College te stimuleren meer te bewegen...</p>
                <a href="https://summamove.berksonmez.nl" target="_blank" class="btn">Bekijk project</a>
            </div>
            <span class="arrow right-arrow" onclick="nextProject()">&#10095;</span>
        </div>
    </div>
</div>


    <div id="contact" class="section">
        <div class="content">
            <h2>Contact</h2>
            <p>Wil je contact met mij opnemen? Stuur me een bericht en ik zal zo snel mogelijk reageren.</p>
            <a href="mailto:berkgazi2006@gmail.com" class="btn">Stuur een bericht</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Berk Sonmez. Alle rechten voorbehouden.</p>
            <div class="social-media">
                <a href="https://www.linkedin.com/in/berk-sonmez-270382287/" target="_blank">LinkedIn</a>
                <a href="https://github.com/Berkieeeeee" target="_blank">GitHub</a>
                <a href="https://x.com/BerkGazi21" target="_blank">Twitter</a>
            </div>
        </div>
    </footer>

    <script>
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });

     // Array of projects
        const projects = [
            {
                title: "SummaMove",
                description: "Het SummaMove-project is een web applicatie ontwikkeld om studenten van Summa College te stimuleren meer te bewegen...",
                link: "https://summamove.berksonmez.nl",
                loading: false 
            },
            {
                title: "", 
                description: "",
                link: "",
                loading: true 
            },
        ];

        let currentIndex = 0;

        function displayProject(index) {
            const projectDisplay = document.getElementById("project-display");
            
            // Check if the project is still loading
            if (projects[index].loading) {
                projectDisplay.innerHTML = `
                    <div class="spinner"></div>
                    <p>Projects loading...</p>
                `;
            } else {
                projectDisplay.innerHTML = `
                    <h3>${projects[index].title}</h3>
                    <p>${projects[index].description}</p>
                    <a href="${projects[index].link}" target="_blank" class="btn">Bekijk project</a>
                `;
            }
        }

        function nextProject() {
            currentIndex = (currentIndex + 1) % projects.length;
            displayProject(currentIndex);
        }

        function prevProject() {
            currentIndex = (currentIndex - 1 + projects.length) % projects.length;
            displayProject(currentIndex);
        }

        displayProject(currentIndex);
    </script>
</body>
</html>
