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

    <div class="col-md-6 col-lg-4 karya-item" data-category="anekdot">
      <div class="card h-100 border border-dark border-2 rounded-4 shadow-sm bg-white">
        <div class="card-body d-flex flex-column p-4">
          <div class="mb-3">
            <span
              class="badge bg-primary-subtle text-primary border border-primary px-3 py-2 rounded-pill fw-bold text-uppercase small">Teks
              Anekdot</span>
          </div>
          <h4 class="card-title fw-bold text-dark mb-2">Mahasiswa Serba Tahu</h4>
          <h6 class="card-subtitle mb-3 text-muted font-monospace small"><i class="bi bi-pencil-fill me-1"></i>Oleh:
            Hani Dwi</h6>
          <p class="card-text text-secondary font-monospace flex-grow-1 lh-lg"
            style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; font-size: 0.9rem;">
            "Wah, itu jelas merugikan masyarakat, Pak. Saya sudah baca beritanya semalaman." Dosen mengangguk kagum.
            "Bagus. Coba jelaskan isi lengkap kebijakannya." Raka mendadak diam. "Eee… sebenarnya… saya belum baca
            lengkap, Pak."
          </p>
          <button type="button"
            class="btn btn-dark border border-dark border-2 rounded-3 fw-bold w-100 mt-4 py-2.5 shadow-none"
            onclick="openDetail('anekdot-1')">
            Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
          </button>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 karya-item" data-category="komik">
      <div class="card h-100 border border-dark border-2 rounded-4 shadow-sm bg-white overflow-hidden">
        <img src="https://images.unsplash.com/photo-1580436544696-16c328197172?q=80&w=640&h=400&fit=crop"
          class="card-img-top border-bottom border-dark border-2" alt="Thumbnail Komik"
          style="height: 190px; object-fit: cover;">
        <div class="card-body d-flex flex-column p-4">
          <div class="mb-3">
            <span
              class="badge bg-success-subtle text-success border border-success px-3 py-2 rounded-pill fw-bold text-uppercase small">Komik
              Digital</span>
          </div>
          <h4 class="card-title fw-bold text-dark mb-2">Doa Orang Tua</h4>
          <h6 class="card-subtitle mb-3 text-muted font-monospace small"><i class="bi bi-pencil-fill me-1"></i>Oleh:
            Raka Aditya</h6>
          <p class="card-text text-secondary font-monospace flex-grow-1 lh-lg"
            style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; font-size: 0.9rem;">
            Kisah Bimo yang disuruh ayahnya sukses bagai pesawat terbang tinggi, tapi bensinnya disuruh cari sendiri.
            Ilustrasi komik lucu tentang ekspektasi orang tua.
          </p>
          <button type="button"
            class="btn btn-dark border border-dark border-2 rounded-3 fw-bold w-100 mt-4 py-2.5 shadow-none"
            onclick="openDetail('komik-1')">
            Lihat Komik Digital <i class="bi bi-eye ms-1"></i>
          </button>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 karya-item" data-category="anekdot">
      <div class="card h-100 border border-dark border-2 rounded-4 shadow-sm bg-white">
        <div class="card-body d-flex flex-column p-4">
          <div class="mb-3">
            <span
              class="badge bg-primary-subtle text-primary border border-primary px-3 py-2 rounded-pill fw-bold text-uppercase small">Teks
              Anekdot</span>
          </div>
          <h4 class="card-title fw-bold text-dark mb-2">KTP Bupati</h4>
          <h6 class="card-subtitle mb-3 text-muted font-monospace small"><i class="bi bi-pencil-fill me-1"></i>Oleh:
            Budi Santoso</h6>
          <p class="card-text text-secondary font-monospace flex-grow-1 lh-lg"
            style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; font-size: 0.9rem;">
            "Untungnya dompet saya isinya sedikit yang hilang, Pak. Yang paling berbahaya justru kartu identitas KTP
            saya ikut lenyap." Pak Bupati mengernyit bingung. "Memangnya kenapa?"
          </p>
          <button type="button"
            class="btn btn-dark border border-dark border-2 rounded-3 fw-bold w-100 mt-4 py-2.5 shadow-none"
            onclick="openDetail('anekdot-2')">
            Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
          </button>
        </div>
      </div>
    </div>

  </div>
</main>

<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border border-dark border-3 rounded-4">
      <div class="modal-header bg-light border-bottom border-dark border-2 py-3">
        <h5 class="modal-title fw-bold text-dark" id="modalJudul">Judul Karya</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4 bg-white">
        <div id="modalContent"
          class="p-4 bg-light border border-dark border-2 rounded-3 font-monospace text-dark lh-lg">
        </div>
      </div>
      <div class="modal-footer bg-light border-top border-dark border-2">
        <button type="button" class="btn btn-secondary border border-dark fw-bold px-4"
          data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>