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
          <div class="navbar-nav ms-auto gap-1 fw-bold small text-uppercase tracking-wider">
            <?php foreach ($data["navbar_menu"] as $menu): ?>
              <a class="nav-link text-<?= $menu["path"] === $_SERVER['REQUEST_URI'] ? "primary" : "muted" ?>"
                href="<?= $menu["path"] ?>"><?= $menu["name"] ?></a>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </nav>
    <?php endif ?>