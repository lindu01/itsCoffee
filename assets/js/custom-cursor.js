document.addEventListener("DOMContentLoaded", function() {
    const cursor = document.querySelector(".custom-cursor");

    document.addEventListener("mousemove", (e) => {
        const x = e.clientX; // Coordinate x del mouse
        const y = e.clientY; // Coordinate y del mouse
        cursor.style.left = `${x}px`; // Imposta la posizione orizzontale del cursore
        cursor.style.top = `${y}px`; // Imposta la posizione verticale del cursore
    });
});

