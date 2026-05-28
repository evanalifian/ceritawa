window.onload = function () {
  if (localStorage.getItem("anekdot_draft")) {
    const draft = JSON.parse(localStorage.getItem("anekdot_draft"));
    document.getElementById("author_name").value = draft.name || "";
    document.getElementById("author_email").value = draft.email || "";
    document.getElementById("judul_anekdot").value = draft.judul || "";
    document.getElementById("struktur_abstrak").value = draft.abstrak || "";
    document.getElementById("struktur_orientasi").value = draft.orientasi || "";
    document.getElementById("struktur_krisis").value = draft.krisis || "";
    document.getElementById("struktur_reaksi").value = draft.reaksi || "";
    document.getElementById("struktur_koda").value = draft.koda || "";

    showNotification(
      "info",
      '<i class="bi bi-info-circle-fill me-1"></i> <strong>Sistem:</strong> Berhasil memuat lembar kerja terakhir yang disimpan!',
    );
  }
};

function saveDraft() {
  const draftData = {
    name: document.getElementById("author_name").value,
    email: document.getElementById("author_email").value,
    judul: document.getElementById("judul_anekdot").value,
    abstrak: document.getElementById("struktur_abstrak").value,
    orientasi: document.getElementById("struktur_orientasi").value,
    krisis: document.getElementById("struktur_krisis").value,
    reaksi: document.getElementById("struktur_reaksi").value,
    koda: document.getElementById("struktur_koda").value,
  };

  localStorage.setItem("anekdot_draft", JSON.stringify(draftData));
  showNotification(
    "success",
    '<i class="bi bi-check-circle-fill me-1"></i> <strong>Draft Disimpan:</strong> Progress menulis berhasil disimpan aman di browser!',
  );
}

function submitKarya(event) {
  event.preventDefault();
  showNotification(
    "success",
    '<i class="bi bi-rocket-takeoff-fill text-warning me-1"></i> <strong>Sukses!</strong> Teks anekdot buatanmu berhasil dikirim ke halaman <strong>Galeri Karya Siswa</strong>!',
  );
  localStorage.removeItem("anekdot_draft");

  setTimeout(() => {
    document.getElementById("anekdot-form").reset();
    window.location.href = "galeri.php";
  }, 2500);
}

function showNotification(type, message) {
  const alertBox = document.getElementById("status-alert");
  alertBox.classList.remove(
    "d-none",
    "alert-success",
    "alert-info",
    "bg-success-subtle",
    "bg-info-subtle",
    "text-success-emphasis",
    "text-info-emphasis",
  );

  if (type === "success") {
    alertBox.classList.add(
      "alert-success",
      "bg-success-subtle",
      "text-success-emphasis",
    );
  } else {
    alertBox.classList.add(
      "alert-info",
      "bg-info-subtle",
      "text-info-emphasis",
    );
  }

  alertBox.innerHTML = message;
  alertBox.scrollIntoView({ behavior: "smooth", block: "center" });
}
