// add hover class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
    list.forEach(item => {
        item.classList.remove("hovered");
    })
    this.classList.add("hovered");
}
list.forEach(item => item.addEventListener("mouseover", activeLink));


// Menu Toggle
let toggle = document.querySelector(".toggle");

let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
    navigation.classList.toggle("active");
    main.classList.toggle("active");

}



// Random Farbe
let metadataParagraphs = document.querySelectorAll(".metadata p:nth-child(2)");

metadataParagraphs.forEach(function (paragraph) {
    paragraph.style.color = getRandomColor();
});

// Funktion zur Generierung einer zufälligen Farbe
function getRandomColor() {
    let letters = "0123456789ABCDEF";
    let color = "#";
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}


