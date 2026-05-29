<header class="container my-4 text-center">
  <div
    class="d-inline-flex align-items-center gap-2 mb-3 bg-white border border-dark border-2 px-3 py-1.5 rounded-3 shadow-sm"
    style="transform: rotate(0.5deg);">
    <i class="bi bi-collection-play-fill text-primary"></i>
    <span class="small fw-bold tracking-wide text-uppercase">Arsip Karya Pribadi</span>
  </div>
  <h1 class="display-4 fw-black text-dark mb-2" style="letter-spacing: -1px;">Anekdot Saya</h1>
  <p class="text-secondary font-monospace">Kumpulan sindiran cerdas dan tawa yang telah kamu abadikan di Ceritawa.</p>
</header>

<main class="container my-5">

  <?php if (empty($data["anekdot"])): ?>
    <div class="text-center">
      <div class="bg-white border border-dark border-2 rounded-4 p-5 d-inline-block shadow-comic">
        <i class="bi bi-emoji-frown display-1 text-muted mb-3"></i>
        <h3 class="fw-bold">Belum Ada Karya</h3>
        <p class="text-secondary font-monospace">Mading pribadimu masih kosong, yuk mulai menulis sekarang!</p>
        <a href="/latihan-menulis" class="btn btn-dark mt-3 px-4 py-2 rounded-3 fw-bold">Mulai Menulis</a>
      </div>
    </div>
  <?php else: ?>

    <div id="my-gallery-grid" class="bento-flex-grid">

      <?php foreach ($data["anekdot"] as $a): ?>
        <div class="karya-item">
          <div
            class="card border border-dark border-2 rounded-4 shadow-comic-sm bg-white position-relative overflow-hidden">

            <div class="position-absolute"
              style="top: 10px; right: 10px; opacity: 0.2; font-size: 2rem; transform: rotate(15deg);">
              <i class="bi bi-sticky"></i>
            </div>

            <div class="card-body d-flex flex-column p-4">
              <div class="mb-3">
                <span
                  class="badge bg-primary-subtle text-primary border border-primary px-3 py-2 rounded-pill fw-bold text-uppercase small">
                  Teks Anekdot
                </span>
              </div>

              <h4 class="card-title fw-bold text-dark mb-2"><?= htmlspecialchars($a["judul_karya"]) ?></h4>

              <div class="card-subtitle mb-4 text-muted font-monospace small">
                <i class="bi bi-calendar3 me-1"></i> <?= date("d M Y", strtotime($a["created_at"])) ?>
              </div>

              <div class="d-flex flex-column gap-2 mt-auto">
                <a href="/detail-anekdot/"
                  class="btn btn-dark border border-dark border-2 rounded-3 fw-bold py-2 shadow-none">
                  Baca Detail <i class="bi bi-eye ms-1"></i>
                </a>

                <div class="d-flex gap-2">
                  <a href="/edit-anekdot/"
                    class="btn btn-outline-primary border-2 rounded-3 fw-bold flex-grow-1 py-2">
                    Edit <i class="bi bi-pencil-square ms-1"></i>
                  </a>
                  <button type="button" class="btn btn-outline-danger border-2 rounded-3 fw-bold flex-grow-1 py-2"
                    onclick="confirmDelete('')">
                    Hapus <i class="bi bi-trash3-fill ms-1"></i>
                  </button>
                </div>
              </div>

            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  <?php endif; ?>

</main>