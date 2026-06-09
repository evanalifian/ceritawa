function confirmDeleteComic(id_karya) {
  if (confirm("Apakah Anda yakin ingin menurunkan karya ini?")) {
    // Jika pengguna mengklik "OK", lanjutkan dengan penghapusan
    window.location.href = `/komik/delete/${id_karya}`;
  }
}