<?php if (isset($data["error_message"])): ?>
  <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border border-dark border-3 rounded-4 shadow-comic bg-white">

        <div class="modal-header bg-danger-subtle border-bottom border-dark border-2 p-3 rounded-top-4">
          <h5 class="modal-title fw-bold text-dark d-flex align-items-center gap-2" id="errorModalLabel">
            <i class="bi bi-exclamation-triangle-fill text-danger fs-4"></i>
            <span class="font-monospace text-uppercase tracking-wide small">Gagal Menyimpan</span>
          </h5>
          <button type="button" class="btn-close border border-dark border-2 opacity-100" data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>

        <div class="modal-body p-4">
          <p class="font-monospace text-secondary-emphasis mb-0 small lh-base">
            <?= htmlspecialchars($data["error_message"]) ?>
          </p>
        </div>

        <div class="modal-footer border-top border-dark border-2 p-2 bg-light rounded-bottom-4">
          <button type="button"
            class="btn btn-dark border border-dark border-2 rounded-3 fw-bold px-4 py-2 text-uppercase font-monospace small shadow-comic-sm"
            data-bs-dismiss="modal">
            Perbaiki Data
          </button>
        </div>

      </div>
    </div>
  </div>
<?php endif; ?>