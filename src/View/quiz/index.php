<header class="container my-4 text-center">
  <div
    class="d-inline-flex align-items-center gap-2 mb-3 bg-white border border-dark border-2 px-3 py-1.5 rounded-3 shadow-sm"
    style="transform: rotate(-0.5deg);">
    <i class="bi bi-brain-fill text-primary"></i>
    <span class="small fw-bold tracking-wide">ASAH KEMAMPUAN LITERASI</span>
  </div>
  <h1 class="display-4 fw-black text-dark mb-2">Quiz Teks Anekdot</h1>
  <p class="text-secondary font-monospace">Sejauh mana kamu menguasai materi? Mari kita uji dengan tawa!</p>
</header>

<main class="container my-4">
  <div class="row justify-content-center">
    <div class="col-lg-8">

      <div id="quiz-start-screen" class="card border border-2 border-dark bg-white p-5 rounded-4 shadow-sm text-center">
        <i class="bi bi-patch-question display-1 text-warning mb-4 animate-bounce"></i>
        <h2 class="fw-bold mb-3">Siap Memulai Tantangan?</h2>
        <p class="text-secondary fs-5 mb-4">Terdapat 10 soal pilihan ganda untuk menguji pemahamanmu tentang struktur,
          fungsi, dan ciri teks anekdot.</p>
        <button class="btn btn-dark btn-lg px-5 py-3 fw-bold rounded-4 border-0 shadow" onclick="startQuiz()">
          Mulai Sekarang <i class="bi bi-play-fill ms-2"></i>
        </button>
      </div>

      <div id="quiz-container" class="d-none">
        <div class="mb-4">
          <div class="d-flex justify-content-between align-items-end mb-2">
            <span class="badge bg-dark px-3 py-2 rounded-3 small fw-bold font-monospace">SOAL #<span
                id="current-question-num">1</span>/10</span>
            <span class="text-muted small fw-bold"><i class="bi bi-bar-chart-fill me-1"></i> Kemajuan: <span
                id="progress-percent">0</span>%</span>
          </div>
          <div class="progress border border-dark border-2 rounded-pill shadow-sm"
            style="height: 14px; background-color: #eee;">
            <div id="quiz-progress-bar" class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
              role="progressbar" style="width: 0%"></div>
          </div>
        </div>

        <div id="question-card"
          class="card border border-2 border-dark bg-white p-4 p-md-5 rounded-4 shadow-sm mb-4 position-relative">
          <h4 id="question-text" class="fw-bold text-dark lh-base mb-4">Memuat soal...</h4>
          <div id="options-container" class="d-grid gap-3">
          </div>
        </div>

        <div id="feedback-container" class="d-none mb-4">
          <div id="feedback-card"
            class="p-4 border border-2 border-dark rounded-4 shadow-sm position-relative overflow-hidden">
            <div id="feedback-icon" class="position-absolute top-50 end-0 translate-middle-y pe-4 opacity-25"
              style="font-size: 5rem;"></div>
            <div class="position-relative" style="z-index: 2;">
              <h5 id="feedback-title" class="fw-bold mb-2">Feedback</h5>
              <p id="feedback-text" class="mb-0 fs-6 lh-lg"></p>
            </div>
          </div>
          <button id="next-btn"
            class="btn btn-primary w-100 py-3 mt-3 fw-bold rounded-4 border border-dark border-2 shadow-sm fs-5"
            onclick="nextQuestion()">
            Lanjut ke Soal Berikutnya <i class="bi bi-arrow-right-short ms-1"></i>
          </button>
        </div>
      </div>

      <div id="result-screen" class="d-none card border border-2 border-dark bg-white p-5 rounded-4 shadow text-center">
        <h2 class="fw-bold text-dark mb-4">Skor Akhir Kamu</h2>
        <div
          class="d-inline-flex align-items-center justify-content-center bg-warning border border-3 border-dark rounded-circle mb-4 shadow"
          style="width: 150px; height: 150px;">
          <span id="final-score" class="display-3 fw-bold text-dark">0</span>
        </div>
        <h4 id="score-status" class="fw-bold mb-4 text-primary">Luar Biasa!</h4>

        <div class="row g-3 mt-2">
          <div class="col-md-6">
            <button class="btn btn-dark w-100 py-3 fw-bold rounded-4 border-2 shadow-sm" onclick="restartQuiz()">
              <i class="bi bi-arrow-clockwise me-1"></i> Ulangi Quiz
            </button>
          </div>
          <div class="col-md-6">
            <button class="btn btn-outline-dark bg-white w-100 py-3 fw-bold rounded-4 border-2 shadow-sm"
              onclick="showSummary()">
              <i class="bi bi-card-list me-1"></i> Lihat Rangkuman Jawaban
            </button>
          </div>
        </div>
      </div>

      <div id="summary-screen" class="d-none">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h3 class="fw-bold text-dark m-0"><i class="bi bi-list-check text-success me-2"></i>Rangkuman Evaluasi</h3>
          <button class="btn btn-sm btn-dark rounded-3 px-3 fw-bold" onclick="restartQuiz()"><i
              class="bi bi-arrow-clockwise"></i> Coba Lagi</button>
        </div>
        <div id="summary-list" class="d-flex flex-column gap-3">
        </div>
        <button class="btn btn-outline-dark bg-white w-100 py-3 mt-4 fw-bold rounded-4 border-2 shadow-sm"
          onclick="window.location.href='materi.php'">
          <i class="bi bi-book me-1"></i> Kembali ke Halaman Materi
        </button>
      </div>

    </div>
  </div>
</main>