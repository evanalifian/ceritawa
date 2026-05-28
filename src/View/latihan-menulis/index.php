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

      <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-comic mb-5">
        <form id="anekdot-form" onsubmit="submitKarya(event)">

          <div
            class="d-inline-flex align-items-center gap-2 bg-primary text-white border border-dark border-2 px-3 py-1 mb-4 rounded-3 shadow-sm">
            <i class="bi bi-person-vcard-fill"></i>
            <span class="small fw-bold font-monospace text-uppercase">Identitas Kreator</span>
          </div>
          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <label for="author_name" class="form-label small fw-bold text-dark"><i
                  class="bi bi-person-fill text-muted me-1"></i>Nama Lengkap Penulis</label>
              <input type="text" class="form-control custom-input p-3 text-dark font-monospace" id="author_name"
                placeholder="Contoh: Raka Aditya" required>
            </div>
            <div class="col-md-6">
              <label for="author_email" class="form-label small fw-bold text-dark"><i
                  class="bi bi-envelope-fill text-muted me-1"></i>Alamat Email Aktif</label>
              <input type="email" class="form-control custom-input p-3 text-dark font-monospace" id="author_email"
                placeholder="nama@sekolah.id" required>
            </div>
          </div>

          <div
            class="d-inline-flex align-items-center gap-2 bg-success text-white border border-dark border-2 px-3 py-1 mb-4 rounded-3 shadow-sm">
            <i class="bi bi-journal-richtext"></i>
            <span class="small fw-bold font-monospace text-uppercase">Lembar Kerja Utama</span>
          </div>

          <div class="mb-5">
            <label for="judul_anekdot" class="form-label small fw-bold text-dark"><i
                class="bi bi-type-h1 text-muted me-1"></i>Judul Teks Anekdot</label>
            <input type="text" class="form-control custom-input p-3 fw-bold text-dark" id="judul_anekdot"
              placeholder="Tuliskan judul karyamu di sini..." style="font-size: 1.1rem;" required>
          </div>

          <div class="d-flex flex-column gap-5 p-4 border border-2 border-dark rounded-4 mb-5"
            style="background-color: #FDFBF7; background-image: radial-gradient(#e1dbd2 1px, transparent 10px); background-size: 20px 20px;">

            <div
              class="bg-dark text-white border border-2 border-dark px-3 py-1.5 rounded-3 d-inline-flex align-items-center gap-2 shadow-sm align-self-start"
              style="transform: rotate(-1deg);">
              <i class="bi bi-grid-3x3-gap-fill text-warning"></i>
              <span class="small fw-bold font-monospace text-uppercase tracking-wider">Alur Struktur Teks Anekdot</span>
            </div>

            <div class="position-relative">
              <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                <h5 class="fw-bold text-dark m-0 d-flex align-items-center gap-2">
                  <span class="badge bg-white text-dark border border-2 border-dark rounded-circle px-2 py-1"
                    style="font-size: 0.85rem;">01</span>
                  Abstrak
                </h5>
                <span class="badge border border-dark border-2 rounded-3 small font-monospace text-dark py-1.5 px-3"
                  style="background-color: #F5F5F5;">gambaran awal cerita</span>
              </div>
              <div class="note-box border border-2 border-dark rounded-3 p-3 mb-3">
                <i class="bi bi-info-circle-fill text-dark me-1"></i> <strong>Inspirasi Kerangka Tugas Sekolah:</strong>
                Guru memberi tugas.
              </div>
              <textarea class="form-control custom-textarea p-3 text-dark font-monospace" id="struktur_abstrak" rows="2"
                placeholder="Tuliskan gambaran awal teks anekdotmu di sini..." required></textarea>
            </div>

            <div class="position-relative">
              <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                <h5 class="fw-bold text-dark m-0 d-flex align-items-center gap-2">
                  <span class="badge bg-white text-dark border border-2 border-dark rounded-circle px-2 py-1"
                    style="font-size: 0.85rem;">02</span>
                  Orientasi
                </h5>
                <span class="badge border border-dark border-2 rounded-3 small font-monospace text-dark py-1.5 px-3"
                  style="background-color: #E3F2FD;">pengenalan tokoh dan situasi</span>
              </div>
              <div class="note-box border border-2 border-dark rounded-3 p-3 mb-3">
                <i class="bi bi-info-circle-fill text-primary me-1"></i> <strong>Inspirasi Kerangka Tugas
                  Sekolah:</strong> Murid mengeluh tugas banyak.
              </div>
              <textarea class="form-control custom-textarea p-3 text-dark font-monospace" id="struktur_orientasi"
                rows="3" placeholder="Tuliskan pengenalan tokoh dan situasi di sini..." required></textarea>
            </div>

            <div class="position-relative">
              <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                <h5 class="fw-bold text-dark m-0 d-flex align-items-center gap-2">
                  <span class="badge bg-white text-dark border border-2 border-dark rounded-circle px-2 py-1"
                    style="font-size: 0.85rem;">03</span>
                  Krisis
                </h5>
                <span class="badge border border-dark border-2 rounded-3 small font-monospace text-dark py-1.5 px-3"
                  style="background-color: #FFF3E0;">muncul masalah atau kejadian lucu</span>
              </div>
              <div class="note-box border border-2 border-dark rounded-3 p-3 mb-3"
                style="border-left: 5px solid #FF9800 !important;">
                <i class="bi bi-exclamation-triangle-fill text-warning me-1"></i> <strong>Inspirasi Kerangka Tugas
                  Sekolah:</strong> Guru malah menambah tugas.
              </div>
              <textarea class="form-control custom-textarea p-3 text-dark font-monospace" id="struktur_krisis" rows="3"
                placeholder="Tuliskan letak puncak masalah atau kelucuan inti di sini..." required></textarea>
            </div>

            <div class="position-relative">
              <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                <h5 class="fw-bold text-dark m-0 d-flex align-items-center gap-2">
                  <span class="badge bg-white text-dark border border-2 border-dark rounded-circle px-2 py-1"
                    style="font-size: 0.85rem;">04</span>
                  Reaksi
                </h5>
                <span class="badge border border-dark border-2 rounded-3 small font-monospace text-dark py-1.5 px-3"
                  style="background-color: #E8F5E9;">tanggapan tokoh terhadap masalah</span>
              </div>
              <div class="note-box border border-2 border-dark rounded-3 p-3 mb-3"
                style="border-left: 5px solid #4CAF50 !important;">
                <i class="bi bi-lightning-charge-fill text-success me-1"></i> <strong>Inspirasi Kerangka Tugas
                  Sekolah:</strong> Murid berkata ingin pindah planet.
              </div>
              <textarea class="form-control custom-textarea p-3 text-dark font-monospace" id="struktur_reaksi" rows="3"
                placeholder="Tuliskan tanggapan tokoh terhadap masalah di sini..." required></textarea>
            </div>

            <div class="position-relative">
              <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                <h5 class="fw-bold text-dark m-0 d-flex align-items-center gap-2">
                  <span class="badge bg-white text-dark border border-2 border-dark rounded-circle px-2 py-1"
                    style="font-size: 0.85rem;">05</span>
                  Koda
                </h5>
                <span
                  class="badge border border-dark border-2 rounded-3 small font-monospace text-white bg-dark py-1.5 px-3">penutup
                  atau pesan moral</span>
              </div>
              <div class="note-box border border-2 border-dark rounded-3 p-3 mb-3"
                style="border-left: 5px solid #212121 !important;">
                <i class="bi bi-flag-fill text-secondary me-1"></i> <strong>Inspirasi Kerangka Tugas Sekolah:</strong>
                Semua tertawa, tetapi tetap mengerjakan tugas.
              </div>
              <textarea class="form-control custom-textarea p-3 text-dark font-monospace" id="struktur_koda" rows="2"
                placeholder="Tuliskan bagian penutup atau pesan moral di sini..." required></textarea>
            </div>
          </div>

          <div class="row g-4 justify-content-end">
            <div class="col-md-4 col-lg-3">
              <button type="button"
                class="btn btn-outline-dark bg-white w-100 py-3 fw-bold rounded-4 border-2 shadow-comic-sm font-monospace transition-all"
                onclick="saveDraft()">
                <i class="bi bi-folder-symlink me-1"></i> Simpan Draft
              </button>
            </div>
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

<div class="modal fade" id="guideModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="guideModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border border-3 border-dark rounded-4 shadow-comic">

      <div class="modal-header bg-warning border-bottom border-3 border-dark py-3 px-4">
        <h5 class="modal-title fw-black text-dark d-flex align-items-center gap-2" id="guideModalLabel"
          style="font-size: 1.1rem;">
          <i class="bi bi-journal-bookmark-fill fs-4 animate-bounce"></i> PANDUAN SINGKAT MENULIS TEKS ANEKDOT
        </h5>
        <button type="button" class="btn-close border-2 border-dark shadow-none" data-bs-toggle="modal"
          aria-label="Close"></button>
      </div>

      <div class="modal-body p-4 bg-white" style="max-height: 68vh; overflow-y: auto;">

        <div class="mb-4">
          <h6 class="fw-bold text-dark d-flex align-items-center gap-2 mb-2">
            <i class="bi bi-patch-check-fill text-primary"></i> 1. Pilih tema yang dekat dengan kehidupan sehari-hari,
            misalnya:
          </h6>
          <div class="ps-4">
            <div class="row g-2 font-monospace small text-dark mb-2">
              <div class="col-sm-6"><i class="bi bi-dot"></i> Sekolah</div>
              <div class="col-sm-6"><i class="bi bi-dot"></i> Pelayanan publik</div>
              <div class="col-sm-6"><i class="bi bi-dot"></i> Politik</div>
              <div class="col-sm-6"><i class="bi bi-dot"></i> Media sosial</div>
              <div class="col-sm-12"><i class="bi bi-dot"></i> Kehidupan mahasiswa</div>
            </div>
            <p class="small text-muted font-monospace lh-base mb-0">Tema yang sederhana akan lebih mudah dikembangkan
              menjadi cerita lucu dan menarik.</p>
          </div>
        </div>

        <div class="mb-4">
          <h6 class="fw-bold text-dark d-flex align-items-center gap-2 mb-2">
            <i class="bi bi-patch-check-fill text-danger"></i> 2. Tentukan Kritik atau Sindiran
          </h6>
          <div class="ps-4">
            <p class="small text-dark font-monospace mb-2">Teks anekdot tidak hanya lucu, tetapi juga mengandung kritik
              sosial. Tentukan hal apa yang ingin disindir, misalnya:</p>
            <div class="row g-2 font-monospace small text-muted mb-2">
              <div class="col-sm-6"><i class="bi bi-dash"></i> Kebiasaan terlambat</div>
              <div class="col-sm-6"><i class="bi bi-dash"></i> Pelayanan yang lambat</div>
              <div class="col-sm-6"><i class="bi bi-dash"></i> Tugas terlalu banyak</div>
              <div class="col-sm-6"><i class="bi bi-dash"></i> Kecanduan gadget</div>
            </div>
            <p class="small text-dark fw-bold font-monospace lh-base mb-0">Sindiran disampaikan secara halus melalui
              humor.</p>
          </div>
        </div>

        <div class="mb-4">
          <h6 class="fw-bold text-dark d-flex align-items-center gap-2 mb-2">
            <i class="bi bi-patch-check-fill text-success"></i> 3. Buat Alur Cerita Singkat
          </h6>
          <div class="ps-4">
            <p class="small text-dark font-monospace mb-2">Susun cerita secara runtut menggunakan struktur teks anekdot:
            </p>
            <ul class="list-unstyled small font-monospace text-muted ps-0 lh-lg">
              <li><strong>Abstrak</strong> &rarr; gambaran awal cerita</li>
              <li><strong>Orientasi</strong> &rarr; pengenalan tokoh dan situasi</li>
              <li><strong>Krisis</strong> &rarr; muncul masalah atau kejadian lucu</li>
              <li><strong>Reaksi</strong> &rarr; tanggapan tokoh terhadap masalah</li>
              <li><strong>Koda</strong> &rarr; penutup atau pesan moral</li>
            </ul>
          </div>
        </div>

        <div class="mb-4">
          <h6 class="fw-bold text-dark d-flex align-items-center gap-2 mb-2">
            <i class="bi bi-patch-check-fill text-warning"></i> 4. Gunakan Bahasa yang Ringan dan Lucu
          </h6>
          <div class="ps-4">
            <p class="small text-muted font-monospace lh-base mb-3">Gunakan dialog sederhana agar cerita terasa hidup.
              Tambahkan unsur humor yang menghibur pembaca, tetapi tetap sopan dan tidak menyinggung secara berlebihan.
            </p>
            <div class="p-3 border border-2 border-dark rounded-3 bg-light font-monospace small text-dark shadow-sm">
              <strong>Contoh Dialog:</strong><br>
              “Pak, kenapa tugasnya banyak sekali?”<br>
              “Supaya kalian sadar hidup tidak semudah rebahan.”
            </div>
          </div>
        </div>

        <div class="mb-4">
          <h6 class="fw-bold text-dark d-flex align-items-center gap-2 mb-2">
            <i class="bi bi-patch-check-fill text-info"></i> 5. Sisipkan Pesan Moral
          </h6>
          <div class="ps-4">
            <p class="small text-muted font-monospace lh-base mb-0">Di akhir cerita, berikan pesan atau pelajaran yang
              dapat dipahami pembaca, baik secara langsung maupun tersirat.</p>
          </div>
        </div>

        <div class="p-3 border border-2 border-dark rounded-4 bg-warning-subtle position-relative overflow-hidden mt-4">
          <h6 class="fw-bold text-dark mb-2"><i class="bi bi-stars text-warning me-1"></i> Tips Menulis Teks Anekdot:
          </h6>
          <ul class="small font-monospace text-dark ps-4 mb-0 lh-lg">
            <li>Gunakan cerita yang singkat dan padat.</li>
            <li>Hindari humor yang menyinggung SARA.</li>
            <li>Buat akhir cerita mengejutkan atau lucu.</li>
            <li>Ambil inspirasi dari kejadian nyata di sekitar.</li>
            <li>Fokus pada satu masalah agar cerita tidak melebar.</li>
          </ul>
        </div>

      </div>

      <div class="modal-footer bg-light border-top border-3 border-dark py-2.5 px-4">
        <button type="button" class="btn btn-dark fw-bold rounded-3 border-0 px-4 py-2" data-bs-dismiss="modal">Saya
          Siap Menulis!</button>
      </div>

    </div>
  </div>
</div>