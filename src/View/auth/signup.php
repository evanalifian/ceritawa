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

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="fullname" class="form-label fw-bold font-monospace small text-uppercase">Nama
                                Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-dark border-2 rounded-start-3"><i
                                        class="bi bi-type me-1"></i></span>
                                <input type="text" class="form-control border-dark border-2 rounded-end-3" id="fullname"
                                    name="fullname" placeholder="Nama lengkap sesuai absensi" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nisn"
                                class="form-label fw-bold font-monospace small text-uppercase">NISN</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-dark border-2 rounded-start-3"><i
                                        class="bi bi-card-text"></i></span>
                                <input type="text" class="form-control border-dark border-2 rounded-end-3" id="nisn"
                                    name="nisn" placeholder="10 digit nomor induk siswa" maxlength="10" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold font-monospace small text-uppercase">Kata
                                Sandi Baru</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-dark border-2 rounded-start-3"><i
                                        class="bi bi-lock-fill"></i></span>
                                <input type="password" class="form-control border-dark border-2 rounded-end-3"
                                    id="password" name="password" placeholder="Minimal 6 karakter" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="confirm_password"
                                class="form-label fw-bold font-monospace small text-uppercase">Ulangi Kata Sandi</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-dark border-2 rounded-start-3"><i
                                        class="bi bi-shield-lock-fill"></i></span>
                                <input type="password" class="form-control border-dark border-2 rounded-end-3"
                                    id="confirm_password" name="confirm_password"
                                    placeholder="Ulangi kata sandi di atas" required>
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