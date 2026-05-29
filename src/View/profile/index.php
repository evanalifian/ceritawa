<!-- HEADER HALAMAN PROFIL -->
<header class="container my-4 text-center">
  <div
    class="d-inline-flex align-items-center gap-2 mb-3 bg-white border border-dark border-2 px-3 py-1.5 rounded-3 shadow-sm"
    style="transform: rotate(-0.5deg)">
    <i class="bi bi-person-badge-fill text-primary"></i>
    <span class="small fw-bold tracking-wide text-uppercase">Mading Identitas</span>
  </div>
  <h1 class="display-5 fw-extrabold text-dark mb-2" style="letter-spacing: -1px">
    Profil Kreator
  </h1>
  <p class="text-secondary font-monospace">
    Kelola identitas madingmu agar karyamu selalu dikenali!
  </p>
</header>

<!-- KONTEN FORM PROFIL -->
<main class="container my-4">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <!-- MAIN PROFILE CARD (GAYA MADING INTERAKTIF) -->
      <div
        class="card border border-dark border-2 bg-white p-4 p-md-5 rounded-4 shadow-comic mb-5 position-relative overflow-hidden">
        <!-- Ornamen Dekoratif Pin Mading di Pojok Kanan Atas -->
        <div class="position-absolute" style="
                top: 15px;
                right: 20px;
                font-size: 1.5rem;
                transform: rotate(15deg);
              ">
          <i class="bi bi-pin-angle-fill text-danger"></i>
        </div>

        <?php if (isset($data["error_message"])): ?>
          <div
            class="alert bg-danger-subtle text-dark border border-dark border-2 rounded-3 d-flex align-items-center gap-2 mb-4 shadow-sm"
            role="alert">
            <i class="bi bi-exclamation-triangle-fill text-danger fs-5"></i>
            <div class="small fw-bold font-monospace text-uppercase tracking-wide">
              <?= $data["error_message"] ?>
            </div>
          </div>
        <?php endif; ?>

        <form action="/account/update" method="POST">
          <!-- SECTION 1: INFORMASI AKUN -->
          <div
            class="d-inline-flex align-items-center gap-2 bg-primary text-white border border-dark border-2 px-3 py-1 mb-4 rounded-3 shadow-sm"
            style="transform: rotate(-1deg)">
            <i class="bi bi-shield-lock-fill"></i>
            <span class="small fw-bold font-monospace text-uppercase">Kredensial Masuk</span>
          </div>

          <div class="mb-4">
            <label for="username" class="form-label small fw-bold text-dark">
              <i class="bi bi-at text-muted me-1"></i>Username (Tidak Dapat
              Diubah)
            </label>
            <input type="text"
              class="form-control p-3 text-muted font-monospace bg-light border border-2 border-dark rounded-3"
              id="username" name="username" value="<?= $data["user"]["username"] ?>" readonly disabled />
          </div>

          <!-- SECTION 2: DATA DIRI -->
          <div
            class="d-inline-flex align-items-center gap-2 bg-success text-white border border-dark border-2 px-3 py-1 my-3 rounded-3 shadow-sm"
            style="transform: rotate(1deg)">
            <i class="bi bi-card-list"></i>
            <span class="small fw-bold font-monospace text-uppercase">Biodata Penulis</span>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-md-12">
              <label for="nama_lengkap" class="form-label small fw-bold text-dark">
                <i class="bi bi-person-fill text-muted me-1"></i>Nama
                Lengkap
              </label>
              <input type="text"
                class="form-control custom-input p-3 text-dark font-monospace border border-2 border-dark rounded-3 shadow-sm"
                id="nama_lengkap" name="nama_lengkap" value="<?= $data["user"]["nama_lengkap"] ?>"
                placeholder="Contoh: Evan Alifian" />
            </div>

            <div class="col-md-12">
              <label for="email" class="form-label small fw-bold text-dark">
                <i class="bi bi-envelope-fill text-muted me-1"></i>Alamat
                Email Aktif
              </label>
              <input type="email"
                class="form-control custom-input p-3 text-dark font-monospace border border-2 border-dark rounded-3 shadow-sm"
                id="email" name="email" value="<?= $data["user"]["email"] ?>" placeholder="nama@sekolah.id" />
            </div>
          </div>

          <!-- TOMBOL AKSI -->
          <div class="row g-3">
            <div class="col-md-6">
              <button type="submit"
                class="btn btn-dark w-100 py-3 fw-bold rounded-4 border-2 border-dark shadow-comic-sm text-uppercase tracking-wide fs-6">
                Simpan Perubahan
                <i class="bi bi-save2-fill ms-1 text-warning"></i>
              </button>
            </div>
            <div class="col-md-6">
              <a href="/"
                class="btn btn-white border border-dark border-2 text-dark w-100 py-3 fw-bold rounded-4 shadow-comic-sm text-uppercase tracking-wide fs-6 text-center d-block bg-white text-decoration-none">
                <i class="bi bi-arrow-left-short fs-5 align-middle"></i>
                Kembali ke Beranda
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>