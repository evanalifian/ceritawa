function confirmDelete(id) {
  if (confirm("Apakah kamu yakin ingin menghapus karya ini dari mading?")) {
    window.location.href = "/delete-anekdot/" + id;
  }
}
