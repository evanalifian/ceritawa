<?php if (http_response_code() !== 404 && $_SERVER['REQUEST_URI'] !== "/login" && $_SERVER['REQUEST_URI'] !== "/signup"): ?>
  <footer class="bg-white border-top border-2 border-dark py-5 mt-auto">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-md-12 text-center">
          <span class="fw-bold text-dark fs-4 mb-2 d-block tracking-tight"><i
              class="bi bi-emoji-laughing text-warning me-1"></i> Ceritawa</span>
          <p class="small text-muted mb-0 mx-auto" style="max-width: 500px;">
            Mading digital interaktif materi Teks Anekdot khusus kelas X SMA/SMK. Belajar kritis lewat komik, humor
            jenaka, dan karya sastra kreatif.
          </p>
        </div>
      </div>
      <div class="border-top border-light-subtle my-4"></div>
      <div class="text-center">
        <p class="small text-muted mb-0">&copy; <?php echo date("Y"); ?> Ceritawa.</p>
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