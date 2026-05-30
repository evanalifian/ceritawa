<header class="container my-4 text-center">
  <div
    class="d-inline-flex align-items-center gap-2 mb-3 bg-white border border-dark border-2 px-3 py-1.5 rounded-3 shadow-sm">
    <i class="bi bi-images text-primary"></i>
    <span class="small fw-bold text-uppercase tracking-wide">Pajangan Karya Terpilih</span>
  </div>
  <h1 class="display-5 fw-bolder text-dark mb-2" style="letter-spacing: -1px;">Galeri Karya Siswa</h1>
  <p class="text-secondary font-monospace">Inspirasi tawa dari siswa kelas X untuk dunia!</p>
</header>

<main class="container my-5">

  <?php if (empty($data["karya"])): ?>
    <div class="text-center py-5">
      <div class="bg-white border border-dark border-2 rounded-4 p-5 d-inline-block shadow-sm text-center" style="max-width: 500px; box-shadow: 6px 6px 0px 0px #000000 !important;">
        <i class="bi bi-collection-play display-1 text-muted mb-3 d-block"></i>
        <h3 class="fw-bold text-dark mb-2">Mading Masih Kosong</h3>
        <p class="text-secondary font-monospace small mb-0">Belum ada karya komik digital maupun teks anekdot yang dipajang di sini. Jadilah siswa pertama yang menginspirasi!</p>
      </div>
    </div>
  <?php else: ?>
    <div class="masonry-gallery-row" id="gallery-grid">
      <?php foreach ($data["karya"] as $k): ?>
        <?php $badgeCond = $k["tipe_karya"] === "anekdot" ? "primary" : "success" ?>

        <div class="masonry-gallery-item karya-item" data-category="<?= $k["tipe_karya"] ?>">
          <div class="card border border-dark border-2 rounded-4 shadow-sm bg-white h-auto">
            <div class="card-body d-flex flex-column p-4">

              <div class="mb-3">
                <span
                  class="badge bg-<?= $badgeCond ?>-subtle text-<?= $badgeCond ?> border border-<?= $badgeCond ?> px-3 py-2 rounded-pill fw-bold text-uppercase small">
                  <?= htmlspecialchars($k["tipe_karya"]) ?>
                </span>
              </div>

              <h4 class="card-title fw-bold text-dark mb-2"><?= htmlspecialchars($k["judul_karya"]) ?></h4>

              <h6 class="card-subtitle mb-3 text-muted font-monospace small d-flex flex-wrap align-items-center gap-1">
                <span><i class="bi bi-person-fill me-1"></i>Oleh: <?= htmlspecialchars($k["penulis_karya"]) ?></span>
                <span class="text-dark-50 mx-1">&bull;</span>
                <span><i class="bi bi-calendar3 me-1"></i><?= date("d M Y", strtotime($k["created_at"])) ?></span>
              </h6>

              <?php if ($k["tipe_karya"] === "komik" && !empty($k["deskripsi_komik"])): ?>
                <p class="text-secondary small mb-0 mt-2 flex-grow-1">
                  <?= htmlspecialchars($k["deskripsi_komik"]) ?>
                </p>
              <?php endif; ?>

              <a href="<?= $k["tipe_karya"] === 'anekdot' ? '/anekdot/' : '/public/uploads/komik/' ?><?= $k["tipe_karya"] === 'anekdot' ? $k["judul_karya"] : $k["file_name_komik"] ?>"
                class="btn btn-dark border border-dark border-2 rounded-3 fw-bold w-100 mt-3 py-2.5 shadow-none">
                <?= $k["tipe_karya"] === "anekdot" ? 'Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>' : 'Lihat Komik Digital <i class="bi bi-eye ms-1"></i>' ?>
              </a>

            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  <?php endif; ?>
</main>