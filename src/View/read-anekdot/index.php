<header class="container my-4 text-center">
  <div
    class="d-inline-flex align-items-center gap-2 mb-2 bg-white border border-dark border-2 px-3 py-1.5 rounded-3 shadow-sm"
    style="transform: rotate(1deg);">
    <i class="bi bi-book-half text-primary"></i>
    <span class="small fw-bold tracking-wide text-uppercase">Lembar Bacaan Karya</span>
  </div>
</header>

<main class="container my-4 flex-grow-1">
  <div class="row justify-content-center">
    <div class="col-lg-9 col-xl-8">

      <div class="mb-4">
        <a href="/galeri"
          class="btn btn-white border border-dark border-2 text-dark fw-bold rounded-3 shadow-comic-sm bg-white text-decoration-none px-3 py-2 small text-uppercase font-monospace">
          <i class="bi bi-arrow-left-short fs-5 align-middle"></i> Kembali ke Galeri
        </a>
      </div>

      <div
        class="card border-dark-3 bg-white p-4 p-md-5 rounded-4 shadow-comic mading-paper position-relative overflow-hidden mb-5">

        <div class="position-absolute start-50 translate-middle-x" style="top: -5px; font-size: 2rem; z-index: 10;">
          <i class="bi bi-pin-fill text-danger shadow-sm"></i>
        </div>

        <div class="text-center pb-4 border-bottom border-dark border-2 border-dashed">
          <div class="mb-3">
            <span
              class="badge bg-primary-subtle text-primary border border-primary px-3 py-2 rounded-pill fw-bold text-uppercase small tracking-wide">
              <i class="bi bi-chat-left-quote-fill me-1"></i> Teks Anekdot
            </span>
          </div>

          <h1 class="fw-extrabold text-dark my-2 lh-sm display-6">
            <?= htmlspecialchars($data["anekdot"]["judul_karya"]) ?>
          </h1>

          <div
            class="d-flex flex-wrap justify-content-center align-items-center gap-3 text-muted font-monospace small mt-3">
            <span><i class="bi bi-person-fill text-dark me-1"></i>Oleh:
              <strong>
                <?= htmlspecialchars($data["anekdot"]["penulis_karya"]) ?>
              </strong></span>
            <span cl ass="text-dark-50">&bull;</span>
            <span><i class="bi bi-calendar3 me-1"></i>
              <?= date("d M Y", strtotime($data["anekdot"]["created_at"])) ?>
            </span>
          </div>
        </div>

        <div class="py-5">

          <div class="fs-5 text-dark lh-lg font-sans-serif mb-4" style="text-align: justify; white-space: pre-line;">
            <?= htmlspecialchars($data["anekdot"]["konten_anekdot"]) ?>
          </div>

        </div>

      </div>

    </div>
  </div>
</main>