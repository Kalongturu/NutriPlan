// Ini script buat water level di konten report home
document.addEventListener("DOMContentLoaded", () => {
    const plusBtn = document.getElementById("plus");
    const minusBtn = document.getElementById("minus");
    const waterValue = document.getElementById("water-value-report");
    const waterBar = document.querySelector(".water-bar");

    let current = 0;
    const goal = 2000;
    const step = 200;

    function updateWater() {
        // update angka
        waterValue.textContent = current;

        // hitung persentase
        let percent = (current / goal) * 100;
        if (percent > 100) percent = 100;

        // update bar
        waterBar.style.height = percent + "%";

        // warna: biru kalau belum penuh, hijau kalau sudah penuh
        if (percent >= 100) {
            waterBar.style.background = "#22c55e"; // hijau
        } else {
            waterBar.style.background = "#3b82f6"; // biru
        }
    }

    plusBtn.addEventListener("click", () => {
        if (current < goal) {
            current += step;
            updateWater();
        }
    });

    minusBtn.addEventListener("click", () => {
        if (current > 0) {
            current -= step;
            updateWater();
        }
    });

    // inisialisasi
    updateWater();
});
