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

  <div class="d-flex justify-content-end mb-4">
    <div class="dropdown">
      <button
        class="btn btn-warning border border-dark border-2 rounded-3 fw-bold px-4 py-2.5 shadow-sm dropdown-toggle"
        type="button" data-bs-toggle="dropdown" aria-expanded="false" id="filterDropdownBtn">
        <i class="bi bi-funnel-fill me-1"></i> Filter Jenis Karya
      </button>
      <ul class="dropdown-menu dropdown-menu-end border border-dark border-2 rounded-3 p-2 shadow">
        <li><a class="dropdown-menu-item dropdown-item active rounded-2 fw-bold mb-1" href="#"
            onclick="filterKarya('all', 'Semua Karya', this)"><i class="bi bi-collection me-2"></i>Semua Karya</a></li>
        <li><a class="dropdown-menu-item dropdown-item rounded-2 fw-bold mb-1" href="#"
            onclick="filterKarya('anekdot', 'Teks Anekdot', this)"><i
              class="bi bi-file-earmark-text-fill me-2 text-primary"></i>Teks Anekdot</a></li>
        <li><a class="dropdown-menu-item dropdown-item rounded-2 fw-bold" href="#"
            onclick="filterKarya('komik', 'Komik Digital', this)"><i class="bi bi-image me-2 text-success"></i>Komik
            Digital</a></li>
      </ul>
    </div>
  </div>

  <div class="row g-4" id="gallery-grid">
    <?php foreach ($data["karya"] as $k): ?>
      <?php $badgeCond = $k["tipe_karya"] === "anekdot" ? "primary" : "success" ?>
      <div class="col-md-6 col-lg-4 karya-item" data-category="<?= $k["tipe_karya"] ?>">
        <div class="card h-100 border border-dark border-2 rounded-4 shadow-sm bg-white">
          <div class="card-body d-flex flex-column p-4">

            <div class="mb-3">
              <span
                class="badge bg-<?= $badgeCond ?>-subtle text-<?= $badgeCond ?> border border-<?= $badgeCond ?> px-3 py-2 rounded-pill fw-bold text-uppercase small">
                <?= htmlspecialchars($k["tipe_karya"]) ?>
              </span>
            </div>

            <h4 class="card-title fw-bold text-dark mb-2"><?= htmlspecialchars($k["judul_karya"]) ?></h4>

            <!-- DETAIL PENULIS & TANGGAL PEMBUATAN (CREATED AT) -->
            <h6 class="card-subtitle mb-3 text-muted font-monospace small d-flex flex-wrap align-items-center gap-1">
              <span><i class="bi bi-person-fill me-1"></i>Oleh: <?= htmlspecialchars($k["penulis_karya"]) ?></span>
              <span class="text-dark-50 mx-1">&bull;</span>
              <span><i class="bi bi-calendar3 me-1"></i><?= date("d M Y", strtotime($k["created_at"])) ?></span>
            </h6>

            <button type="button"
              class="btn btn-dark border border-dark border-2 rounded-3 fw-bold w-100 mt-4 py-2.5 shadow-none"
              onclick="openDetail('<?= $k['tipe_karya'] ?>-<?= $k['id_karya'] ?>')">
              <?= $k["tipe_karya"] === "anekdot" ? 'Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>' : 'Lihat Komik Digital <i class="bi bi-eye ms-1"></i>' ?>
            </button>

          </div>
        </div>
      </div>
    <?php endforeach ?>


  </div>
</main>