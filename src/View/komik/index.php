<header class="container my-4">
  <div
    class="bg-white border border-dark-3 rounded-4 p-4 p-md-5 text-center shadow-comic position-relative overflow-hidden">
    <div class="d-inline-flex align-items-center gap-2 mb-3 bg-light border border-dark border-2 px-3 py-1.5 rounded-3"
      style="transform: rotate(-0.5deg);">
      <i class="bi bi-images text-primary"></i>
      <span class="small fw-bold tracking-wide text-uppercase">Studio Ilustrasi Digital</span>
    </div>
    <h1 class="display-5 fw-black text-dark mb-2" style="letter-spacing: -1px; font-weight: 800;">Koleksi Komik Saya
    </h1>
    <p class="text-secondary font-monospace col-lg-8 mx-auto mb-4">Salurkan kritik sosialmu lewat goresan strip komik
      dan humor visual cerdas di mading digital Ceritawa.</p>

    <button type="button"
      class="btn btn-warning border border-dark-2 rounded-3 fw-bold px-4 py-2.5 shadow-comic-sm text-uppercase"
      data-bs-toggle="modal" data-bs-target="#uploadComicModal">
      <i class="bi bi-cloud-arrow-up-fill me-1"></i> Unggah Komik Baru (.PDF)
    </button>
  </div>
</header>

<main class="container my-5 flex-grow-1">
  <div
    class="d-inline-flex align-items-center gap-2 mb-4 bg-white border border-dark-2 px-3 py-1.5 rounded-3 shadow-comic-sm"
    style="transform: rotate(0.5deg);">
    <i class="bi bi-grid-3x3-gap-fill text-success"></i>
    <span class="small fw-bold font-monospace text-uppercase">Arsip Karya Komik Anda</span>
  </div>

  <?php if (empty($data["komik"])): ?>
    <div class="text-center py-5">
      <div class="bg-white border border-dark-2 rounded-4 p-5 d-inline-block shadow-comic text-center" style="max-width: 500px;">
        <i class="bi bi-images display-1 text-muted mb-3 d-block"></i>
        <h3 class="fw-bold text-dark mb-2">Belum Ada Komik</h3>
        <p class="text-secondary font-monospace small mb-4">Papan pajanganmu masih sepi nih. Yuk, jadi ilustrator pertama yang menyindir realitas lewat strip komik jenaka!</p>
      </div>
    </div>
  <?php else: ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">

      <?php foreach ($data["komik"] as $k): ?>
        <div class="col">
          <div class="card comic-card border-dark-2 rounded-4 shadow-comic-sm">
            <div class="card-body p-4 d-flex flex-column">
              <div class="d-flex justify-content-between align-items-start mb-3">
                <span class="badge bg-danger-subtle text-danger border border-danger px-2.5 py-1.5 rounded-3 fw-bold small">
                  <i class="bi bi-file-earmark-pdf-fill me-1"></i> PDF DOCUMENT
                </span>
              </div>

              <h4 class="fw-bold text-dark mb-2 text-truncate"><?= htmlspecialchars($k["judul_karya"]) ?></h4>
              <p class="text-secondary small mb-4 flex-grow-1">
                <?= htmlspecialchars($k["deskripsi_komik"]) ?>
              </p>

              <div class="bg-light p-3 border border-dark rounded-3 mb-4 font-monospace small">
                <div class="text-truncate"><strong>Kreator:</strong> <?= htmlspecialchars($k["penulis_karya"]) ?></div>
                <div class="text-truncate text-muted mt-1" style="font-size: 0.8rem;">
                  <i class="bi bi-envelope me-1"></i><?= htmlspecialchars($k["email_penulis_karya"]) ?>
                </div>
              </div>

              <div class="d-grid gap-2">
                <a href="/public/uploads/komik/<?= htmlspecialchars($k['file_name_komik']) ?>" target="_blank" class="btn btn-dark border border-dark-2 rounded-3 fw-bold py-2">
                  Buka Dokumen <i class="bi bi-box-arrow-up-right ms-1"></i>
                </a>
                <button type="button" class="btn btn-outline-danger border-2 rounded-3 fw-bold py-2"
                  onclick="confirmDeleteComic('<?= $k['id_komik'] ?>')">
                  Turunkan Karya <i class="bi bi-trash3-fill ms-1"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  <?php endif; ?>
</main>

<?php require_once __DIR__ . "/post_komik_modal.php" ?>
<?php require_once __DIR__ . "/error_post_modal.php" ?>