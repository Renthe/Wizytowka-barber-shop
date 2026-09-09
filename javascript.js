const przycisk = document.getElementById("przycisk");
const navList = document.getElementById("navList");

przycisk.addEventListener("click", function () {
    navList.classList.toggle("active");
});

const formularz = document.getElementById("formularz");

formularz.addEventListener("submit", function (event) {
    
    alert("Dziękujemy! Rezerwacja została wysłana");
});