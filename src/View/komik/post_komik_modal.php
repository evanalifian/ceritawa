<div class="modal fade" id="uploadComicModal" tabindex="-1" aria-labelledby="uploadComicModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content modal-comic-content">
      <div class="modal-header border-bottom border-dark border-2 px-4 py-3 bg-light rounded-top-4">
        <h5 class="modal-title fw-bold text-dark d-flex align-items-center" id="uploadComicModalLabel">
          <i class="bi bi-cloud-arrow-up-fill text-warning me-2 fs-4"></i> Sematkan Karya Komik
        </h5>
        <button type="button" class="btn-close border border-dark border-2 opacity-100" data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <form action="/profile/komik" method="POST" enctype="multipart/form-data">
        <div class="modal-body p-4">
          <div class="mb-3">
            <label for="judul_karya" class="form-label small fw-bold">Judul Komik</label>
            <input type="text"
              class="form-control custom-input p-2.5 font-monospace border border-2 border-dark rounded-3"
              id="judul_karya" name="judul_karya" placeholder="Contoh: Penguasa Sinyal Rapat">
          </div>

          <div class="mb-3">
            <label for="penulis_karya" class="form-label small fw-bold">Penulis / Ilustrator</label>
            <input type="text"
              class="form-control custom-input p-2.5 font-monospace border border-2 border-dark rounded-3"
              id="penulis_karya" name="penulis_karya" placeholder="Nama lengkap ilustrator">
          </div>

          <div class="mb-3">
            <label for="email_penulis_karya" class="form-label small fw-bold">Email Penulis</label>
            <input type="email"
              class="form-control custom-input p-2.5 font-monospace border border-2 border-dark rounded-3"
              id="email_kpenulis_karya" name="email_penulis_karya" placeholder="nama@sekolah.id">
          </div>

          <div class="mb-3">
            <label for="deskripsi_komik" class="form-label small fw-bold">Deskripsi Cerita</label>
            <textarea class="form-control custom-input p-2.5 font-monospace border border-2 border-dark rounded-3"
              id="deskripsi_komik" name="deskripsi_komik" rows="3"
              placeholder="Ceritakan singkat humor atau sindiran di dalam komikmu..."></textarea>
          </div>

          <div class="mb-2">
            <label for="file_komik" class="form-label small fw-bold">Berkas Komik (.PDF)</label>
            <input type="file"
              class="form-control custom-input p-2.5 font-monospace border border-2 border-dark rounded-3"
              id="file_komik" name="file_komik" accept=".pdf">
            <div class="form-text small font-monospace text-muted mt-1"><i class="bi bi-info-circle"></i> Ekstensi wajib
              berformat dokumen PDF.</div>
          </div>
        </div>
        <div class="modal-footer border-top border-dark border-2 p-3 bg-light rounded-bottom-4">
          <button type="reset" class="btn btn-secondary border border-dark border-2 rounded-3 fw-bold px-3 py-2"
            data-bs-dismiss="modal">Batal</button>
          <button type="submit"
            class="btn btn-dark border border-dark border-2 rounded-3 fw-bold px-4 py-2 shadow-comic-sm text-uppercase">
            Pajang Karya <i class="bi bi-send-fill ms-1 text-warning"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>