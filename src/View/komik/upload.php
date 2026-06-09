<header class="container my-4 text-center">
  <div
    class="d-inline-flex align-items-center gap-2 mb-3 bg-white border border-dark border-2 px-3 py-1.5 rounded-3 shadow-sm"
    style="transform: rotate(-0.5deg);">
    <i class="bi bi-cloud-arrow-up-fill text-warning"></i>
    <span class="small fw-bold tracking-wide">RUANG KREASI SISWA</span>
  </div>
  <h1 class="display-4 fw-black text-dark mb-2">Unggah Komik</h1>
  <p class="text-secondary font-monospace">Bagikan karya komik anekdot serumu dan buat teman-teman tertawa bersama!</p>
</header>

<section class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">

      <div class="card border border-dark border-2 bg-white p-4 p-md-5 rounded-4 shadow-sm"
        style="box-shadow: 6px 6px 0px 0px #000000 !important;">

        <form action="/komik/upload" method="POST" enctype="multipart/form-data">

          <div class="mb-4">
            <label for="judul_karya" class="form-label fw-bold text-dark fs-5">
              <i class="bi bi-type me-1 text-primary"></i> Judul Komik
            </label>
            <input type="text" class="form-control p-2.5 font-monospace border border-2 border-dark rounded-3 fw-medium"
              id="judul_karya" name="judul_karya" placeholder="Contoh: Penguasa Sinyal Rapat">
          </div>

          <div class="mb-4">
            <label for="penulis_karya" class="form-label fw-bold text-dark fs-5">
              <i class="bi bi-person-fill me-1 text-success"></i> Penulis / Ilustrator
            </label>
            <input type="text" class="form-control p-2.5 font-monospace border border-2 border-dark rounded-3 fw-medium"
              id="penulis_karya" name="penulis_karya" placeholder="Nama lengkap ilustrator">
          </div>

          <div class="mb-4">
            <label for="email_kpenulis_karya" class="form-label fw-bold text-dark fs-5">
              <i class="bi bi-envelope-fill me-1 text-info"></i> Email Penulis
            </label>
            <input type="email"
              class="form-control p-2.5 font-monospace border border-2 border-dark rounded-3 fw-medium"
              id="email_kpenulis_karya" name="email_penulis_karya" placeholder="nama@sekolah.id">
          </div>

          <div class="mb-4">
            <label for="deskripsi_komik" class="form-label fw-bold text-dark fs-5">
              <i class="bi bi-justify-left me-1 text-secondary"></i> Deskripsi Cerita
            </label>
            <textarea class="form-control p-2.5 font-monospace border border-2 border-dark rounded-3 fw-medium"
              id="deskripsi_komik" name="deskripsi_komik" rows="3"
              placeholder="Ceritakan singkat humor atau sindiran di dalam komikmu..."></textarea>
          </div>

          <div class="mb-5">
            <label for="file_komik" class="form-label fw-bold text-dark fs-5">
              <i class="bi bi-file-earmark-pdf-fill me-1 text-danger"></i> Berkas Komik (.PDF)
            </label>
            <input type="file" class="form-control p-2.5 font-monospace border border-2 border-dark rounded-3 fw-medium"
              id="file_komik" name="file_komik" accept=".pdf">
            <div class="form-text small font-monospace text-muted mt-1">
              <i class="bi bi-info-circle"></i> Ekstensi wajib berformat dokumen PDF.
            </div>
          </div>

          <div class="d-flex flex-column flex-sm-row gap-3 justify-content-end align-items-center">
            <a href="/profile/komik"
              class="btn btn-white border border-2 border-dark rounded-pill px-4 py-2 fw-bold text-dark w-100 w-sm-auto text-center"
              style="transition: none;">
              Batal
            </a>
            <button type="submit"
              class="btn btn-dark border border-dark border-2 rounded-pill px-5 py-2 fw-bold shadow-comic-sm text-uppercase w-100 w-sm-auto"
              style="transition: none;">
              Pajang Karya <i class="bi bi-send-fill ms-1 text-warning"></i>
            </button>
          </div>

        </form>

      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/error_post_modal.php" ?>