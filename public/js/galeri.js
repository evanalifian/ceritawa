// Logika Penyaringan Jenis Karya via Dropdown Bootstrap
function filterKarya(category, label, element) {
  // Memasukkan ikon yang sesuai ke tombol utama dropdown saat opsi dipilih
  let iconHtml = "";
  if (category === "all") iconHtml = '<i class="bi bi-collection me-1"></i>';
  else if (category === "anekdot")
    iconHtml = '<i class="bi bi-file-eartext-fill me-1"></i>';
  else if (category === "komik") iconHtml = '<i class="bi bi-image me-1"></i>';

  document.getElementById("filterDropdownBtn").innerHTML =
    `${iconHtml} ${label}`;

  // Atur status class .active pada item menu dropdown
  document
    .querySelectorAll(".dropdown-menu-item")
    .forEach((item) => item.classList.remove("active"));
  element.classList.add("active");

  // Sembunyikan atau tampilkan elemen grid card
  const items = document.querySelectorAll(".karya-item");
  items.forEach((item) => {
    if (category === "all" || item.getAttribute("data-category") === category) {
      item.classList.remove("d-none");
    } else {
      item.classList.add("d-none");
    }
  });
}

// Kontrol Modal Detail Karya
const modalObj = new bootstrap.Modal(document.getElementById("detailModal"));
function openDetail(id) {
  const judul = document.getElementById("modalJudul");
  const content = document.getElementById("modalContent");

  if (id === "anekdot-1") {
    judul.innerText = "Mahasiswa Serba Tahu";
    content.innerText =
      '"Wah, itu jelas merugikan masyarakat, Pak. Saya sudah baca beritanya semalaman." Dosen mengangguk kagum. "Bagus. Coba jelaskan isi lengkap kebijakannya." Raka mendadak diam. "Eee… sebenarnya… saya belum baca lengkap, Pak."';
  } else if (id === "komik-1") {
    judul.innerText = "Doa Orang Tua";
    content.innerHTML = `<img src="https://images.unsplash.com/photo-1580436544696-16c328197172?q=80&w=800" class="img-fluid border border-dark border-2 rounded-3 mb-3 shadow-sm" alt="Komik"> <p class="mb-0 fw-bold">Bimo akhirnya sadar bahwa sebagian orang tua memang ingin anaknya jadi pesawat… tapi bensinnya disuruh cari sendiri.</p>`;
  } else if (id === "anekdot-2") {
    judul.innerText = "KTP Bupati";
    content.innerText =
      '"Untungnya dompet saya isinya sedikit yang hilang, Pak. Yang paling berbahaya justru kartu identitas KTP saya ikut lenyap." Pak Bupati mengernyit bingung. "Memangnya kenapa?"';
  }
  modalObj.show();
}
