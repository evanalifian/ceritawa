<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($data["title"]) ? $data["title"] : "Ceritawa — Mading Digital Teks Anekdot" ?></title>
  <link href="/public/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body class="text-dark d-flex flex-column min-vh-100"
  style="background-color: #FFF8F0; font-family: system-ui, -apple-system, sans-serif;">
  <?php if (http_response_code() !== 404 && $_SERVER['REQUEST_URI'] !== "/login" && $_SERVER['REQUEST_URI'] !== "/signup"): ?>
    <nav class="navbar navbar-expand-lg bg-white border-bottom border-dark border-2 sticky-top py-2">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
          <img src="/public/ceritawa-logo.png" alt="Logo Ceritawa" height="38" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <i class="bi bi-grid-fill fs-3 text-dark"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="navbar-nav ms-auto gap-1 fw-bold small text-uppercase tracking-wider align-items-center">
            <?php foreach ($data["navbar_menu"] as $menu): ?>
              <a class="nav-link text-<?= $menu["path"] === $_SERVER['REQUEST_URI'] ? "primary" : "muted" ?>"
                href="<?= $menu["path"] ?>"><?= $menu["name"] ?></a>
            <?php endforeach ?>
            <?php if (isset($_SESSION['auth'])): ?>
              <div class="nav-item dropdown ms-lg-2 mt-2 mt-lg-0">
                <button class="nav-link dropdown-toggle d-flex align-items-center gap-2 border border-dark border-2 rounded-pill px-3 py-1 bg-light text-dark shadow-sm"
                  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="transition: none;">
                  <i class="bi bi-person-circle fs-5 text-primary"></i>
                  <span class="small text-lowercase fw-bolder">Siswa Ceritawa</span>
                </button>

                <ul class="dropdown-menu dropdown-menu-end border border-dark border-2 rounded-3 p-2 shadow mt-2">
                  <li>
                    <a class="dropdown-item rounded-2 fw-bold mb-1 py-2 text-dark" href="/profile">
                      <i class="bi bi-person-bounding-box me-2 text-primary"></i>Profile Saya
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item rounded-2 fw-bold mb-1 py-2 text-dark" href="/profile/teks-anekdot">
                      <i class="bi bi-file-earmark-text-fill me-2 text-success"></i>Teks Anekdot Dibuat
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item rounded-2 fw-bold mb-2 py-2 text-dark" href="/profile/komik-diunggah">
                      <i class="bi bi-image-fill me-2 text-warning"></i>Komik Saya
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider border-dark border-1 my-1">
                  </li>
                  <li>
                    <button type="button" id="logout-button" class="dropdown-item rounded-2 fw-bold py-2 text-danger">
                      <i class="bi bi-box-arrow-right me-2"></i>Logout
                    </button>
                  </li>
                </ul>
              </div>
            <?php endif ?>
          </div>
        </div>
      </div>
    </nav>
  <?php endif ?>