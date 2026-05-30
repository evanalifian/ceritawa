document.addEventListener("DOMContentLoaded", function () {
  const errorModalElement = document.getElementById("errorModal");
  const bootstrapModal = new bootstrap.Modal(errorModalElement);
  bootstrapModal.show();
});
