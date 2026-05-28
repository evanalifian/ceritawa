<header class="container my-4 text-center">
  <div
    class="d-inline-flex align-items-center gap-2 mb-3 bg-white border border-dark border-2 px-3 py-1.5 rounded-3 shadow-sm"
    style="transform: rotate(0.5deg);">
    <i class="bi bi-pencil-square text-primary animate-pulse"></i>
    <span class="small fw-bold tracking-wide text-uppercase">Ruang Kreasi Siswa</span>
  </div>
  <h1 class="display-4 fw-black text-dark mb-2" style="letter-spacing: -1px;">Latihan Menulis Anekdot</h1>
  <p class="text-secondary font-monospace">Tuangkan sindiran lucumu menjadi karya teks anekdot yang terstruktur!</p>

  <button type="button"
    class="btn btn-warning btn-md fw-bold border border-2 border-dark rounded-4 shadow-comic mt-2 px-4 py-2.5 transition-all"
    data-bs-toggle="modal" data-bs-target="#guideModal">
    <i class="bi bi-lightbulb-fill text-dark me-1"></i> Buka Panduan Singkat Menulis Teks Anekdot
  </button>
</header>

<main class="container my-4">
  <div class="row justify-content-center">
    <div class="col-lg-10">

      <div id="status-alert" class="alert d-none border border-2 border-dark rounded-4 p-3 mb-4 shadow-sm" role="alert">
      </div>

      <?php if (isset($data["error_message"])): ?>
        <div
          class="alert bg-danger-subtle text-dark border border-dark border-2 rounded-4 d-flex align-items-center gap-2 mb-4 shadow-sm p-3"
          role="alert">
          <i class="bi bi-exclamation-triangle-fill text-danger fs-4"></i>
          <div class="fw-bold font-monospace text-uppercase tracking-wide small">
            Gagal Menyimpan: <?= htmlspecialchars($data["error_message"]) ?>
          </div>
        </div>
      <?php endif; ?>

      <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-comic mb-5">
        <form action="/save-anekdot" method="POST">

          <div
            class="d-inline-flex align-items-center gap-2 bg-primary text-white border border-dark border-2 px-3 py-1 mb-4 rounded-3 shadow-sm">
            <i class="bi bi-person-vcard-fill"></i>
            <span class="small fw-bold font-monospace text-uppercase">Identitas Kreator</span>
          </div>
          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <label for="penulis_anekdot" class="form-label small fw-bold text-dark"><i
                  class="bi bi-person-fill text-muted me-1"></i>Nama Lengkap Penulis</label>
              <input type="text" class="form-control custom-input p-3 text-dark font-monospace" name="penulis_anekdot"
                id="penulis_anekdot" placeholder="Contoh: Raka Aditya">
            </div>
            <div class="col-md-6">
              <label for="email_penulis_anekdot" class="form-label small fw-bold text-dark"><i
                  class="bi bi-envelope-fill text-muted me-1"></i>Alamat Email Aktif</label>
              <input type="email" class="form-control custom-input p-3 text-dark font-monospace"
                name="email_penulis_anekdot" id="email_penulis_anekdot" placeholder="nama@sekolah.id">
            </div>
          </div>

          <div
            class="d-inline-flex align-items-center gap-2 bg-success text-white border border-dark border-2 px-3 py-1 mb-4 rounded-3 shadow-sm">
            <i class="bi bi-journal-richtext"></i>
            <span class="small fw-bold font-monospace text-uppercase">Lembar Kerja Utama</span>
          </div>

          <div class="mb-4">
            <label for="judul_anekdot" class="form-label small fw-bold text-dark"><i
                class="bi bi-type-h1 text-muted me-1"></i>Judul Teks Anekdot</label>
            <input type="text" class="form-control custom-input p-3 fw-bold text-dark" name="judul_anekdot"
              id="judul_anekdot" placeholder="Tuliskan judul karyamu di sini..." style="font-size: 1.1rem;">
          </div>

          <div class="d-flex flex-column gap-4 p-4 border border-2 border-dark rounded-4 mb-5"
            style="background-color: #FDFBF7; background-image: radial-gradient(#e1dbd2 1px, transparent 10px); background-size: 20px 20px;">

            <div
              class="bg-dark text-white border border-2 border-dark px-3 py-1.5 rounded-3 d-inline-flex align-items-center gap-2 shadow-sm align-self-start"
              style="transform: rotate(-1deg);">
              <i class="bi bi-chat-left-heart-fill text-warning"></i>
              <span class="small fw-bold font-monospace text-uppercase tracking-wider">Isi Cerita Teks Anekdot</span>
            </div>

            <div class="note-box border border-2 border-dark rounded-3 p-3 bg-light small text-dark">
              <strong class="font-monospace text-uppercase tracking-wide">
                <i class="bi bi-info-circle-fill text-primary me-1"></i> Tips Struktur Cerita:
              </strong>
              Pastikan narasi teks anekdotmu mengalir mengikuti 5 tahapan penting ini:
              <span class="badge bg-secondary-subtle border border-dark text-dark fw-bold ms-1">Abstrak</span>
              <i class="bi bi-arrow-right text-muted mx-1"></i>
              <span class="badge bg-info-subtle border border-dark text-dark fw-bold">Orientasi</span>
              <i class="bi bi-arrow-right text-muted mx-1"></i>
              <span class="badge bg-warning-subtle border border-dark text-dark fw-bold">Krisis</span>
              <i class="bi bi-arrow-right text-muted mx-1"></i>
              <span class="badge bg-success-subtle border border-dark text-dark fw-bold">Reaksi</span>
              <i class="bi bi-arrow-right text-muted mx-1"></i>
              <span class="badge bg-dark border border-dark text-white fw-bold">Koda</span>
            </div>

            <div class="position-relative">
              <textarea
                class="form-control custom-textarea p-4 text-dark font-monospace border border-2 border-dark rounded-3 shadow-sm"
                name="konten_anekdot" id="konten_anekdot" rows="12"
                placeholder="Tuliskan cerita anekdot utuhmu di sini secara mengalir...&#10;&#10;Contoh alur cerita sekolah:&#10;- Guru memberikan tugas mendadak saat jam terakhir.&#10;- Murid mulai mengeluh karena lelah namun tidak didengar.&#10;- Guru berkata, 'Tugas ini melatih masa depan kalian!'&#10;- Salah satu murid menyahut, 'Masa depan kami jadi kuli kertas ya, Pak?'&#10;- Seisi kelas tertawa kecut, dan suasana pun hening."
                required></textarea>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-md-6 col-lg-5">
              <button type="submit"
                class="btn btn-dark btn-submit w-100 py-3 fw-bold rounded-4 border-0 shadow-comic-sm text-uppercase tracking-wide fs-6 transition-all">
                Kirim Karya ke Galeri <i class="bi bi-rocket-takeoff-fill ms-1 text-warning"></i>
              </button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</main>

<?php require_once __DIR__ . "/modal_panduan.php" ?>