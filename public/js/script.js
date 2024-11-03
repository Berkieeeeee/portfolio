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
            <p>Projecten laden...</p>
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