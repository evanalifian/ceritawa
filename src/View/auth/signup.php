<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">

            <div class="text-center mb-4">
                <a href="index.php">
                    <img src="/public/ceritawa-logo.png" alt="Logo Ceritawa" height="42" class="mb-2">
                </a>
                <p class="text-secondary font-monospace small">Buat akunmu untuk mulai mengunggah karya terbaik!</p>
            </div>

            <div class="card border border-dark border-2 rounded-4 bg-white shadow-sm p-3">
                <div class="card-body">
                    <h3 class="card-title fw-bolder text-dark mb-4">Daftar Akun Baru</h3>

                    <?php if (isset($data["error_message"])): ?>
                        <div class="alert bg-danger-subtle text-dark border border-dark border-2 rounded-3 d-flex align-items-center gap-2 mb-4 shadow-sm"
                            role="alert">
                            <i class="bi bi-exclamation-triangle-fill text-danger fs-5"></i>
                            <div class="small fw-bold font-monospace text-uppercase tracking-wide">
                                <?= $data["error_message"] ?>
                            </div>
                        </div>
                    <?php endif ?>

                    <form action="/signup" method="POST">
                        <div class="mb-3">
                            <label for="username"
                                class="form-label fw-bold font-monospace small text-uppercase">Username</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-dark border-2 rounded-start-3"><i
                                        class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control border-dark border-2 rounded-end-3" id="username"
                                    name="username" placeholder="Masukkan username unik kamu">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nama_lengkap"
                                class="form-label fw-bold font-monospace small text-uppercase">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-dark border-2 rounded-start-3"><i
                                        class="bi bi-type me-1"></i></span>
                                <input type="text" class="form-control border-dark border-2 rounded-end-3"
                                    id="nama_lengkap" name="nama_lengkap" placeholder="Nama lengkap sesuai absensi">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold font-monospace small text-uppercase">Kata
                                Sandi Baru</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-dark border-2 rounded-start-3"><i
                                        class="bi bi-lock-fill"></i></span>
                                <input type="password" class="form-control border-dark border-2 rounded-end-3"
                                    id="password" name="password" placeholder="Minimal 6 karakter">
                            </div>
                        </div>

                        <button type="submit"
                            class="btn btn-warning border border-dark border-2 rounded-3 fw-bold w-100 py-2.5 shadow-none mb-3">
                            DAFTAR SEKARANG <i class="bi bi-person-plus-fill ms-1"></i>
                        </button>
                    </form>

                    <div class="text-center mt-3">
                        <p class="small text-muted font-monospace mb-0">Sudah punya akun? <a href="/login"
                                class="text-primary fw-bold text-decoration-none">Masuk di Sini</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>