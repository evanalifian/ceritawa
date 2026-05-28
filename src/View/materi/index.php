<header class="container my-4 text-center">
  <div
    class="d-inline-flex align-items-center gap-2 mb-3 bg-white border border-dark border-2 px-3 py-1.5 rounded-3 shadow-sm"
    style="transform: rotate(0.5deg);">
    <i class="bi bi-bookmark-star-fill text-warning"></i>
    <span class="small fw-bold tracking-wide">MODUL BELAJAR INTERAKTIF</span>
  </div>
  <h1 class="display-4 fw-black text-dark mb-2">Eksplorasi Materi</h1>
  <p class="text-secondary font-monospace">Yuk pahami konsep, struktur, dan kaidah kebahasaan Teks Anekdot!</p>
</header>

<main class="container my-4">

  <div class="d-md-none mb-4">
    <div class="dropdown">
      <button
        class="btn btn-white border border-2 border-dark rounded-3 py-3 w-100 fw-bold d-flex align-items-center justify-content-between shadow-sm dropdown-toggle"
        type="button" id="dropdownMateriMobile" data-bs-toggle="dropdown" aria-expanded="false">
        <span><i class="bi bi-journal-text text-primary me-2"></i> Pilih Bab Materi</span>
      </button>
      <ul class="dropdown-menu border border-2 border-dark rounded-3 w-100 shadow p-2" role="tablist">
        <li><button class="dropdown-item py-2.5 rounded-2 fw-semibold active" data-bs-toggle="tab"
            data-bs-target="#materi-pengertian" type="button" role="tab" aria-selected="true"><i
              class="bi bi-info-circle-fill me-2 text-primary"></i> 1. Pengertian</button></li>
        <li><button class="dropdown-item py-2.5 rounded-2 fw-semibold" data-bs-toggle="tab"
            data-bs-target="#materi-fungsi" type="button" role="tab" aria-selected="false"><i
              class="bi bi-ui-checks-grid me-2 text-success"></i> 2. Fungsi Teks Anekdot</button></li>
        <li><button class="dropdown-item py-2.5 rounded-2 fw-semibold" data-bs-toggle="tab"
            data-bs-target="#materi-tujuan" type="button" role="tab" aria-selected="false"><i
              class="bi bi-bullseye me-2 text-danger"></i> 3. Tujuan</button></li>
        <li><button class="dropdown-item py-2.5 rounded-2 fw-semibold" data-bs-toggle="tab"
            data-bs-target="#materi-ciri" type="button" role="tab" aria-selected="false"><i
              class="bi bi-stars me-2 text-warning"></i> 4. Ciri-ciri Teks Anekdot</button></li>
        <li><button class="dropdown-item py-2.5 rounded-2 fw-semibold" data-bs-toggle="tab"
            data-bs-target="#materi-unsur" type="button" role="tab" aria-selected="false"><i
              class="bi bi-tags-fill me-2 text-info"></i> 5. Unsur-unsur Teks Anekdot</button></li>
        <li><button class="dropdown-item py-2.5 rounded-2 fw-semibold" data-bs-toggle="tab"
            data-bs-target="#materi-struktur" type="button" role="tab" aria-selected="false"><i
              class="bi bi-diagram-3-fill me-2 text-primary"></i> 6. Struktur Teks Anekdot</button></li>
        <li><button class="dropdown-item py-2.5 rounded-2 fw-semibold" data-bs-toggle="tab"
            data-bs-target="#materi-jenis" type="button" role="tab" aria-selected="false"><i
              class="bi bi-collection-play-fill me-2 text-secondary"></i> 7. Jenis-jenis Teks Anekdot</button></li>
        <li><button class="dropdown-item py-2.5 rounded-2 fw-semibold" data-bs-toggle="tab"
            data-bs-target="#materi-langkah" type="button" role="tab" aria-selected="false"><i
              class="bi bi-pencil-square me-2 text-warning"></i> 8. Langkah-langkah Membuat</button></li>
        <li><button class="dropdown-item py-2.5 rounded-2 fw-semibold" data-bs-toggle="tab"
            data-bs-target="#materi-perbedaan" type="button" role="tab" aria-selected="false"><i
              class="bi bi-arrow-left-right me-2 text-dark"></i> 9. Anekdot vs Humor</button></li>
        <li><button class="dropdown-item py-2.5 rounded-2 fw-semibold" data-bs-toggle="tab"
            data-bs-target="#materi-contoh" type="button" role="tab" aria-selected="false"><i
              class="bi bi-book-half me-2 text-info"></i> 10. Contoh Teks Anekdot</button></li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-lg-3 d-none d-md-block mb-4">
      <div class="d-flex flex-column gap-2 position-sticky" style="top: 100px;">
        <div class="nav flex-column nav-pills gap-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button
            class="nav-link active text-start border border-2 border-dark bg-white text-dark rounded-3 py-2.5 shadow-sm fw-bold transition-all small"
            data-bs-toggle="pill" data-bs-target="#materi-pengertian" type="button" role="tab" aria-selected="true"><i
              class="bi bi-info-circle-fill me-2 text-primary"></i> 1. Pengertian</button>
          <button
            class="nav-link text-start border border-2 border-dark bg-white text-dark rounded-3 py-2.5 shadow-sm fw-bold transition-all small"
            data-bs-toggle="pill" data-bs-target="#materi-fungsi" type="button" role="tab" aria-selected="false"><i
              class="bi bi-ui-checks-grid me-2 text-success"></i> 2. Fungsi Teks Anekdot</button>
          <button
            class="nav-link text-start border border-2 border-dark bg-white text-dark rounded-3 py-2.5 shadow-sm fw-bold transition-all small"
            data-bs-toggle="pill" data-bs-target="#materi-tujuan" type="button" role="tab" aria-selected="false"><i
              class="bi bi-bullseye me-2 text-danger"></i> 3. Tujuan</button>
          <button
            class="nav-link text-start border border-2 border-dark bg-white text-dark rounded-3 py-2.5 shadow-sm fw-bold transition-all small"
            data-bs-toggle="pill" data-bs-target="#materi-ciri" type="button" role="tab" aria-selected="false"><i
              class="bi bi-stars me-2 text-warning"></i> 4. Ciri-ciri Teks Anekdot</button>
          <button
            class="nav-link text-start border border-2 border-dark bg-white text-dark rounded-3 py-2.5 shadow-sm fw-bold transition-all small"
            data-bs-toggle="pill" data-bs-target="#materi-unsur" type="button" role="tab" aria-selected="false"><i
              class="bi bi-tags-fill me-2 text-info"></i> 5. Unsur-unsur Teks</button>
          <button
            class="nav-link text-start border border-2 border-dark bg-white text-dark rounded-3 py-2.5 shadow-sm fw-bold transition-all small"
            data-bs-toggle="pill" data-bs-target="#materi-struktur" type="button" role="tab" aria-selected="false"><i
              class="bi bi-diagram-3-fill me-2 text-primary"></i> 6. Struktur Teks Anekdot</button>
          <button
            class="nav-link text-start border border-2 border-dark bg-white text-dark rounded-3 py-2.5 shadow-sm fw-bold transition-all small"
            data-bs-toggle="pill" data-bs-target="#materi-jenis" type="button" role="tab" aria-selected="false"><i
              class="bi bi-collection-play-fill me-2 text-secondary"></i> 7. Jenis-jenis Teks</button>
          <button
            class="nav-link text-start border border-2 border-dark bg-white text-dark rounded-3 py-2.5 shadow-sm fw-bold transition-all small"
            data-bs-toggle="pill" data-bs-target="#materi-langkah" type="button" role="tab" aria-selected="false"><i
              class="bi bi-pencil-square me-2 text-warning"></i> 8. Langkah-langkah</button>
          <button
            class="nav-link text-start border border-2 border-dark bg-white text-dark rounded-3 py-2.5 shadow-sm fw-bold transition-all small"
            data-bs-toggle="pill" data-bs-target="#materi-perbedaan" type="button" role="tab" aria-selected="false"><i
              class="bi bi-arrow-left-right me-2 text-dark"></i> 9. Anekdot vs Humor</button>
          <button
            class="nav-link text-start border border-2 border-dark bg-white text-dark rounded-3 py-2.5 shadow-sm fw-bold transition-all small"
            data-bs-toggle="pill" data-bs-target="#materi-contoh" type="button" role="tab" aria-selected="false"><i
              class="bi bi-book-half me-2 text-info"></i> 10. Contoh Lengkap</button>
        </div>
      </div>
    </div>

    <div class="col-md-8 col-lg-9">
      <div class="tab-content" id="v-pills-tabContent">

        <div class="tab-pane fade show active" id="materi-pengertian" role="tabpanel">
          <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-sm position-relative">
            <div
              class="position-absolute top-0 end-0 bg-primary text-white border-start border-bottom border-dark px-3 py-1 rounded-bl-4 small fw-bold font-monospace">
              INFO #01</div>
            <h2 class="fw-bold text-dark mb-4"><i class="bi bi-info-circle text-primary me-2"></i>Pengertian</h2>
            <p class="fs-5 text-secondary lh-lg mb-4">
              Teks anekdot adalah cerita singkat yang lucu, menarik, dan biasanya mengandung sindiran atau kritik
              terhadap suatu keadaan, tokoh, maupun pelayanan publik. Walaupun bersifat humor, teks anekdot tetap
              memiliki pesan moral atau kritik sosial yang ingin disampaikan kepada pembaca.
            </p>
            <div class="p-3 bg-light border border-2 border-dark rounded-3"
              style="border-left: 5px solid #0d6efd !important;">
              <p class="fs-5 text-secondary lh-lg mb-0">
                Menurut Kemendikbud (2013), teks anekdot merupakan cerita singkat mengenai orang penting atau peristiwa
                tertentu yang dapat menimbulkan kesan lucu, jengkel, atau menghibur bagi pembaca.
              </p>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="materi-fungsi" role="tabpanel">
          <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-sm position-relative">
            <div
              class="position-absolute top-0 end-0 bg-success text-white border-start border-bottom border-dark px-3 py-1 small fw-bold font-monospace">
              INFO #02</div>
            <h2 class="fw-bold text-dark mb-4"><i class="bi bi-ui-checks-grid text-success me-2"></i>Fungsi Teks Anekdot
            </h2>
            <p class="fs-5 text-secondary lh-lg mb-4">
              Fungsi teks anekdot adalah sebagai sarana hiburan sekaligus media penyampaian kritik sosial secara halus.
              Kritik tersebut biasanya disampaikan melalui humor sehingga tidak terasa menyinggung secara langsung.
            </p>
            <div class="p-3 bg-success-subtle border border-2 border-dark rounded-3">
              <p class="fs-5 text-success-emphasis lh-lg mb-0">
                Selain itu, teks anekdot juga berfungsi untuk menyadarkan masyarakat terhadap suatu masalah sosial,
                politik, pendidikan, maupun pelayanan umum dengan cara yang ringan dan menarik.
              </p>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="materi-tujuan" role="tabpanel">
          <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-sm position-relative">
            <div
              class="position-absolute top-0 end-0 bg-danger text-white border-start border-bottom border-dark px-3 py-1 small fw-bold font-monospace">
              INFO #03</div>
            <h2 class="fw-bold text-dark mb-4"><i class="bi bi-bullseye text-danger me-2"></i>Tujuan</h2>
            <p class="fs-5 text-secondary lh-lg mb-4">
              Tujuan utama teks anekdot adalah membangkitkan tawa pembaca, memberikan hiburan, serta menyampaikan kritik
              atau sindiran terhadap suatu fenomena.
            </p>
            <div class="p-3 bg-light border border-2 border-dark rounded-3"
              style="border-left: 5px solid #dc3545 !important;">
              <p class="fs-5 text-secondary lh-lg mb-0">
                Melalui cerita yang lucu dan singkat, pembaca diharapkan dapat memahami pesan tersirat yang ingin
                disampaikan penulis mengenai suatu permasalahan dalam kehidupan sehari-hari.
              </p>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="materi-ciri" role="tabpanel">
          <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-sm position-relative">
            <div
              class="position-absolute top-0 end-0 bg-warning text-dark border-start border-bottom border-dark px-3 py-1 small fw-bold font-monospace">
              INFO #04</div>
            <h2 class="fw-bold text-dark mb-4"><i class="bi bi-stars text-warning me-2"></i>Ciri-ciri Teks Anekdot</h2>
            <p class="fs-5 text-secondary lh-lg mb-4">
              Teks anekdot memiliki beberapa ciri khas, yaitu mengandung humor, bersifat menggelitik, serta menyindir
              pihak tertentu secara halus. Selain itu, teks anekdot biasanya singkat, padat, menggunakan bahasa
              sederhana, dan sering berkaitan dengan kejadian nyata dalam kehidupan sosial.
            </p>
            <div class="p-3 bg-warning-subtle border border-2 border-dark rounded-3">
              <p class="fs-5 text-warning-emphasis lh-lg mb-0">
                Ciri lain dari teks anekdot adalah adanya unsur kritik terhadap kebiasaan, kebijakan, atau perilaku
                tertentu yang disampaikan dengan cara lucu agar pembaca tidak merasa digurui.
              </p>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="materi-unsur" role="tabpanel">
          <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-sm position-relative">
            <div
              class="position-absolute top-0 end-0 bg-info text-dark border-start border-bottom border-dark px-3 py-1 small fw-bold font-monospace">
              INFO #05</div>
            <h2 class="fw-bold text-dark mb-3"><i class="bi bi-tags-fill text-info me-2"></i>Unsur-unsur Teks Anekdot
            </h2>
            <p class="fs-5 text-secondary lh-lg mb-4">
              Unsur-unsur teks anekdot meliputi tema, tokoh, latar, alur, sudut pandang, amanat, dan unsur humor.
            </p>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="p-3 bg-light border border-2 border-dark rounded-3 h-100">
                  <h5 class="fw-bold text-primary"><i class="bi bi-bookmark-fill me-2"></i>Tema</h5>
                  <p class="text-secondary small mb-0">Tema adalah gagasan utama yang dibahas dalam cerita.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 bg-light border border-2 border-dark rounded-3 h-100">
                  <h5 class="fw-bold text-danger"><i class="bi bi-people-fill me-2"></i>Tokoh</h5>
                  <p class="text-secondary small mb-0">Tokoh dalam teks anekdot biasanya merupakan orang penting,
                    masyarakat umum, atau tokoh fiktif yang terlibat dalam suatu peristiwa lucu.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 bg-light border border-2 border-dark rounded-3 h-100">
                  <h5 class="fw-bold text-warning"><i class="bi bi-geo-alt-fill me-2"></i>Latar</h5>
                  <p class="text-secondary small mb-0">Latar menjelaskan tempat, waktu, dan suasana kejadian.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 bg-light border border-2 border-dark rounded-3 h-100">
                  <h5 class="fw-bold text-success"><i class="bi bi-envelope-heart-fill me-2"></i>Amanat</h5>
                  <p class="text-secondary small mb-0">Amanat dalam teks anekdot berupa pesan moral atau kritik sosial
                    yang ingin disampaikan penulis kepada pembaca.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="materi-struktur" role="tabpanel">
          <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-sm position-relative">
            <div
              class="position-absolute top-0 end-0 bg-primary text-white border-start border-bottom border-dark px-3 py-1 small fw-bold font-monospace">
              INFO #06</div>
            <h2 class="fw-bold text-dark mb-3"><i class="bi bi-diagram-3-fill text-primary me-2"></i>Struktur Teks
              Anekdot</h2>
            <p class="text-secondary font-monospace mb-4">Teks anekdot memiliki struktur sebagai berikut:</p>

            <div class="d-flex flex-column gap-3">
              <div class="p-3 bg-light border border-2 border-dark rounded-3 border-start border-5 border-primary">
                <h5 class="fw-bold mb-1">Abstrak</h5>
                <p class="text-secondary small mb-0">Bagian pembuka yang memberikan gambaran singkat mengenai isi
                  cerita.</p>
              </div>
              <div class="p-3 bg-light border border-2 border-dark rounded-3 border-start border-5 border-danger">
                <h5 class="fw-bold mb-1">Orientasi</h5>
                <p class="text-secondary small mb-0">Bagian yang menjelaskan awal kejadian, tokoh, maupun latar cerita.
                </p>
              </div>
              <div class="p-3 bg-light border border-2 border-dark rounded-3 border-start border-5 border-warning">
                <h5 class="fw-bold mb-1">Krisis</h5>
                <p class="text-secondary small mb-0">Bagian munculnya masalah atau kejadian lucu yang menjadi inti
                  cerita.</p>
              </div>
              <div class="p-3 bg-light border border-2 border-dark rounded-3 border-start border-5 border-success">
                <h5 class="fw-bold mb-1">Reaksi</h5>
                <p class="text-secondary small mb-0">Bagian yang berisi tanggapan tokoh terhadap masalah yang terjadi.
                  Biasanya menjadi bagian paling lucu atau mengejutkan.</p>
              </div>
              <div class="p-3 bg-light border border-2 border-dark rounded-3 border-start border-5 border-info">
                <h5 class="fw-bold mb-1">Koda</h5>
                <p class="text-secondary small mb-0">Bagian penutup yang berisi kesimpulan atau pesan moral. Bagian ini
                  bersifat opsional.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="materi-jenis" role="tabpanel">
          <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-sm position-relative">
            <div
              class="position-absolute top-0 end-0 bg-secondary text-white border-start border-bottom border-dark px-3 py-1 small fw-bold font-monospace">
              INFO #07</div>
            <h2 class="fw-bold text-dark mb-4"><i class="bi bi-collection-play-fill text-secondary me-2"></i>Jenis-jenis
              Teks Anekdot</h2>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="p-3 bg-light border border-2 border-dark rounded-3 h-100">
                  <span class="badge bg-primary mb-2">Jenis 1</span>
                  <h5 class="fw-bold mb-1">Anekdot Sindiran</h5>
                  <p class="text-secondary small mb-0">Berisi kritik terhadap suatu kebijakan atau perilaku tertentu
                    dengan gaya humor.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 bg-light border border-2 border-dark rounded-3 h-100">
                  <span class="badge bg-danger mb-2">Jenis 2</span>
                  <h5 class="fw-bold mb-1">Anekdot Politik</h5>
                  <p class="text-secondary small mb-0">Mengangkat tema politik, pejabat, atau pemerintahan dengan tujuan
                    menyampaikan kritik sosial.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 bg-light border border-2 border-dark rounded-3 h-100">
                  <span class="badge bg-warning text-dark mb-2">Jenis 3</span>
                  <h5 class="fw-bold mb-1">Anekdot Layanan Publik</h5>
                  <p class="text-secondary small mb-0">Menceritakan pelayanan masyarakat yang dianggap kurang baik atau
                    lucu.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 bg-light border border-2 border-dark rounded-3 h-100">
                  <span class="badge bg-success mb-2">Jenis 4</span>
                  <h5 class="fw-bold mb-1">Anekdot Pendidikan</h5>
                  <p class="text-secondary small mb-0">Berisi kejadian lucu yang terjadi di lingkungan sekolah atau
                    pembelajaran.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="materi-langkah" role="tabpanel">
          <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-sm position-relative">
            <div
              class="position-absolute top-0 end-0 bg-warning text-dark border-start border-bottom border-dark px-3 py-1 small fw-bold font-monospace">
              INFO #08</div>
            <h2 class="fw-bold text-dark mb-4"><i class="bi bi-pencil-square text-warning me-2"></i>Langkah-langkah
              Membuat Teks Anekdot</h2>
            <ul class="list-group list-group-numbered border-0 gap-3">
              <li class="list-group-item border border-2 border-dark rounded-3 bg-light p-3 shadow-sm">
                <strong class="fs-5">Menentukan tema</strong>
                <p class="text-secondary small mb-0 mt-1">Penulis menentukan topik yang ingin dibahas, misalnya
                  pendidikan, sosial, atau politik.</p>
              </li>
              <li class="list-group-item border border-2 border-dark rounded-3 bg-light p-3 shadow-sm">
                <strong class="fs-5">Menentukan kritik atau pesan</strong>
                <p class="text-secondary small mb-0 mt-1">Penulis menentukan sindiran atau pesan yang ingin disampaikan
                  kepada pembaca.</p>
              </li>
              <li class="list-group-item border border-2 border-dark rounded-3 bg-light p-3 shadow-sm">
                <strong class="fs-5">Menyusun alur cerita</strong>
                <p class="text-secondary small mb-0 mt-1">Cerita dibuat singkat, runtut, dan menarik agar mudah
                  dipahami.</p>
              </li>
              <li class="list-group-item border border-2 border-dark rounded-3 bg-light p-3 shadow-sm">
                <strong class="fs-5">Menambahkan unsur humor</strong>
                <p class="text-secondary small mb-0 mt-1">Humor digunakan agar kritik terasa ringan dan menghibur.</p>
              </li>
              <li class="list-group-item border border-2 border-dark rounded-3 bg-light p-3 shadow-sm">
                <strong class="fs-5">Menyunting teks</strong>
                <p class="text-secondary small mb-0 mt-1">Penulis memeriksa kembali penggunaan bahasa, struktur, dan isi
                  cerita sebelum dipublikasikan.</p>
              </li>
            </ul>
          </div>
        </div>

        <div class="tab-pane fade" id="materi-perbedaan" role="tabpanel">
          <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-sm position-relative">
            <div
              class="position-absolute top-0 end-0 bg-dark text-white border-start border-bottom border-dark px-3 py-1 small fw-bold font-monospace">
              INFO #09</div>
            <h2 class="fw-bold text-dark mb-4"><i class="bi bi-arrow-left-right text-dark me-2"></i>Persamaan dan
              Perbedaan Teks Anekdot dengan Teks Humor</h2>

            <div class="table-responsive mb-4">
              <table class="table table-bordered border-dark align-middle">
                <thead class="table-dark text-center font-monospace small">
                  <tr>
                    <th>Aspek</th>
                    <th>Teks Anekdot</th>
                    <th>Teks Humor</th>
                  </tr>
                </thead>
                <tbody class="small font-monospace text-secondary">
                  <tr>
                    <td class="fw-bold text-dark bg-light text-center">Tujuan</td>
                    <td>Menghibur dan menyindir</td>
                    <td>Menghibur</td>
                  </tr>
                  <tr>
                    <td class="fw-bold text-dark bg-light text-center">Isi</td>
                    <td>Mengandung kritik sosial</td>
                    <td>Berisi kelucuan semata</td>
                  </tr>
                  <tr>
                    <td class="fw-bold text-dark bg-light text-center">Pesan Moral</td>
                    <td>Ada pesan tersirat</td>
                    <td>Tidak selalu ada</td>
                  </tr>
                  <tr>
                    <td class="fw-bold text-dark bg-light text-center">Tokoh</td>
                    <td>Sering melibatkan tokoh penting</td>
                    <td>Bebas</td>
                  </tr>
                  <tr>
                    <td class="fw-bold text-dark bg-light text-center">Sifat Cerita</td>
                    <td>Lucu dan menyindir</td>
                    <td>Lucu dan menghibur</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="p-3 bg-light border border-2 border-dark rounded-3 border-start border-5 border-dark">
              <p class="fs-5 text-secondary lh-lg mb-0">
                Teks anekdot dan teks humor sama-sama mengandung unsur lucu yang dapat menghibur pembaca. Perbedanyya,
                teks anekdot memiliki tujuan menyampaikan kritik atau sindiran, sedangkan teks humor lebih berfokus pada
                hiburan semata.
              </p>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="materi-contoh" role="tabpanel">
          <div class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-sm position-relative">
            <div
              class="position-absolute top-0 end-0 bg-info text-dark border-start border-bottom border-dark px-3 py-1 small fw-bold font-monospace">
              INFO #10</div>
            <h2 class="fw-bold text-dark mb-2"><i class="bi bi-book-half text-info me-2"></i>Contoh Teks Anekdot Lengkap
            </h2>

            <div
              class="d-inline-flex align-items-center gap-2 mb-4 bg-primary-subtle border border-primary border-2 px-3 py-1.5 rounded-3 shadow-sm"
              style="transform: rotate(-0.5deg);">
              <i class="bi bi-laptop text-primary"></i>
              <span class="small fw-bold text-primary tracking-wide">JUDUL CERITA: “UJIAN ONLINE”</span>
            </div>

            <div class="table-responsive">
              <table class="table table-bordered border-dark align-middle">
                <thead class="table-dark font-monospace text-center small">
                  <tr>
                    <th style="width: 25%;">Struktur</th>
                    <th>Isi Cerita</th>
                  </tr>
                </thead>
                <tbody class="small font-monospace text-secondary">
                  <tr>
                    <td class="fw-bold text-dark bg-light text-center">Abstrak</td>
                    <td class="p-3">Pada masa pembelajaran daring, seorang guru sedang mengadakan ujian online kepada
                      murid-muridnya.</td>
                  </tr>
                  <tr>
                    <td class="fw-bold text-dark bg-light text-center">Orientasi</td>
                    <td class="p-3">Guru itu terkenal sangat disiplin. Ia selalu meminta murid menyalakan kamera saat
                      ujian berlangsung.</td>
                  </tr>
                  <tr>
                    <td class="fw-bold text-dark bg-light text-center bg-warning-subtle text-warning-emphasis">Krisis
                    </td>
                    <td class="p-3 bg-warning-subtle text-dark border-dark">Ketika ujian dimulai, seorang siswa terlihat
                      sangat fokus menatap layar sambil sesekali tersenyum. Guru pun curiga lalu bertanya, “Kenapa kamu
                      senyum-senyum sendiri saat ujian?” Siswa itu menjawab, “Tidak apa-apa, Bu. Saya cuma merasa
                      soal-soalnya sangat mudah.” Guru semakin heran karena soal yang diberikan sebenarnya cukup sulit.
                    </td>
                  </tr>
                  <tr>
                    <td class="fw-bold text-dark bg-light text-center">Reaksi</td>
                    <td class="p-3">Setelah beberapa menit, guru baru sadar bahwa siswa tersebut ternyata membuka grup
                      jawaban di ponselnya. Guru berkata, “Kalau begitu bukan soal yang mudah, tapi kamu yang terlalu
                      kreatif.” Seluruh kelas langsung tertawa.</td>
                  </tr>
                  <tr>
                    <td class="fw-bold text-dark bg-light text-center">Koda</td>
                    <td class="p-3">Sejak saat itu, guru meminta siswa meletakkan ponsel jauh dari meja saat ujian
                      online berlangsung.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>