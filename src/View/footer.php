<?php if (http_response_code() !== 404 && $_SERVER['REQUEST_URI'] !== "/login" && $_SERVER['REQUEST_URI'] !== "/signup"): ?>
  <footer class="bg-white border-top border-2 border-dark py-5 mt-auto">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-md-5 text-center text-md-start">
          <span class="fw-bold text-dark fs-4 mb-2 d-block tracking-tight"><i
              class="bi bi-emoji-laughing text-warning me-1"></i> Ceritawa</span>
          <p class="small text-muted mb-0" style="max-width: 380px;">
            Mading digital interaktif materi Teks Anekdot khusus kelas X SMA/SMK. Belajar kritis lewat komik, humor
            jenaka, dan karya sastra kreatif.
          </p>
        </div>
        <div class="col-md-7">
          <div class="d-flex flex-wrap justify-content-center justify-content-md-end gap-3 small fw-bold">
            <a href="mailto:hani.dyp@gmail.com" class="btn btn-sm btn-outline-dark border-2 rounded-3 px-3 py-2">
              <i class="bi bi-envelope-fill text-danger me-1"></i> GMAIL
            </a>
            <a href="https://www.instagram.com/_hanptrr/" target="_blank"
              class="btn btn-sm btn-outline-dark border-2 rounded-3 px-3 py-2">
              <i class="bi bi-instagram text-danger me-1"></i> INSTAGRAM
            </a>
            <a href="https://www.linkedin.com/in/hani-dyp/" target="_blank"
              class="btn btn-sm btn-outline-dark border-2 rounded-3 px-3 py-2">
              <i class="bi bi-linkedin text-primary me-1"></i> LINKEDIN
            </a>
            <a href="https://www.youtube.com/@hndaily" target="_blank"
              class="btn btn-sm btn-outline-dark border-2 rounded-3 px-3 py-2">
              <i class="bi bi-youtube text-danger me-1"></i> YOUTUBE
            </a>
          </div>
        </div>
      </div>
      <div class="border-top border-light-subtle my-4"></div>
      <div class="text-center">
        <p class="small text-muted mb-0">&copy;
          <?php echo date("Y"); ?> Ceritawa. Desain Media Pembelajaran BI — Universitas Trunojoyo Madura.
        </p>
      </div>
    </div>
  </footer>
<?php endif ?>

<script src="/public/js/bootstrap.bundle.min.js"></script>
<script src="/public/js/app.js"></script>
<?php if (isset($data["scripts"])): ?>
  <?php foreach ($data["scripts"] as $script): ?>
    <script src="/public/js/<?= $script ?>"></script>
  <?php endforeach ?>
<?php endif ?>

<?php if (isset($data["styles"])): ?>
  <?php foreach ($data["styles"] as $style): ?>
    <link rel="stylesheet" href="/public/css/<?= $style ?>">
  <?php endforeach ?>
<?php endif ?>
</body>

</html>