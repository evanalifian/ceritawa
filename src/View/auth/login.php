<main class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">

      <div class="text-center mb-4">
        <a href="index.php">
          <img src="/public/ceritawa-logo.png" alt="Logo Ceritawa" height="42" class="mb-2">
        </a>
        <p class="text-secondary font-monospace small">Siap belajar teks anekdot sambil tertawa?</p>
      </div>

      <div class="card border border-dark border-2 rounded-4 bg-white shadow-sm p-3">
        <div class="card-body">
          <h3 class="card-title fw-bolder text-dark mb-4">Selamat Datang!</h3>

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

          <form action="/login" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label fw-bold font-monospace small text-uppercase">Username</label>
              <div class="input-group">
                <span class="input-group-text bg-light border-dark border-2 rounded-start-3"><i
                    class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control border-dark border-2 rounded-end-3" id="username" name="username"
                  placeholder="Masukkan NISN atau username">
              </div>
            </div>

            <div class="mb-4">
              <label for="password" class="form-label fw-bold font-monospace small text-uppercase">Kata Sandi</label>
              <div class="input-group">
                <span class="input-group-text bg-light border-dark border-2 rounded-start-3"><i
                    class="bi bi-lock-fill"></i></span>
                <input type="password" class="form-control border-dark border-2 rounded-end-3" id="password"
                  name="password" placeholder="••••••••">
              </div>
            </div>

            <button type="submit"
              class="btn btn-warning border border-dark border-2 rounded-3 fw-bold w-100 py-2.5 shadow-none mb-3">
              MASUK <i class="bi bi-box-arrow-in-right ms-1"></i>
            </button>
          </form>

          <div class="text-center mt-3">
            <p class="small text-muted font-monospace mb-0">Belum punya akun? <a href="/signup"
                class="text-primary fw-bold text-decoration-none">Daftar Sekarang</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>