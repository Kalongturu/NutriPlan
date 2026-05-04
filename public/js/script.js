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
// Ini script untuk speedo weight
document.addEventListener("DOMContentLoaded", () => {
    const upBtn = document.getElementById("up-btn");
    const downBtn = document.getElementById("down-btn");

    const needle = document.querySelector(".svg-weight path[stroke='#374151']");
    const currentText = document.getElementById("current-weight");
    const targetText = document.getElementById("target-weight");
    const diffText = document.getElementById("value-weight-kg");

    let current = 68.0;   // berat sekarang
    const target = 65.0;  // target berat
    const min = 50;       // batas bawah gauge
    const max = 80;       // batas atas gauge
    const step = 0.5;     // perubahan tiap klik

function updateGauge() {
    currentText.textContent = current.toFixed(1);

    const diff = current - target;
    diffText.textContent = `${diff >= 0 ? "+" : ""}${diff.toFixed(1)}kg`;

    // tentukan sudut ujung kiri & kanan simetris
    const minAngle = -60; // ujung kiri hijau
    const maxAngle = 60;  // ujung kanan oranye

    // mapping nilai ke sudut simetris
    let angle = ((current - min) / (max - min)) * (maxAngle - minAngle) + minAngle;

    // batasi agar tidak melewati bar
    angle = Math.max(minAngle, Math.min(maxAngle, angle));

    needle.setAttribute("transform", `rotate(${angle},64.5,69.875)`);
}





    upBtn.addEventListener("click", () => {
        if (current < max) {
            current += step;
            updateGauge();
        }
    });

    downBtn.addEventListener("click", () => {
        if (current > min) {
            current -= step;
            updateGauge();
        }
    });

    // inisialisasi pertama
    updateGauge();
});
// Ini script untuk BMI




