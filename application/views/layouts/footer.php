</div>
<!-- Spacing sebelum footer -->
<div class="mb-5"></div>

<!-- Footer bawah -->
<footer class="bg-dark text-white text-center py-4 mt-auto fixed-bottom custom-footer">
  <div class="container">
    <p class="mb-1 fs-bold">Kelompok 7. All rights reserved.</p>
    <div class="team-member small">Anugerah Bakti • Muhammad Istiqlal • Ghifari Maulana • Muhammad Fery Syahputra</div>
    <small class="copyright">&copy; <?= date('Y') ?> Universitas Gunadarma - Mahasiswa Informatika</small>
  </div>
</footer>


<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.21.0/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery (Opsional, jika perlu) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // Script untuk animasi dan interaktivitas
  $(document).ready(function() {
    // Animasi untuk baris tabel saat halaman dimuat
    setTimeout(function() {
      $('tbody tr').each(function(index) {
        $(this).css('opacity', '0');
        setTimeout(function(row) {
          $(row).css('opacity', '1');
        }, index * 100, this);
      });
    }, 500);
    
    // Preview gambar sebelum upload
    $('#photo').change(function() {
      const file = this.files[0];
      if (file) {
        let reader = new FileReader();
        reader.onload = function(event) {
          // Bisa ditambahkan elemen preview jika diinginkan
        }
        reader.readAsDataURL(file);
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    // Cek jika form berhasil disubmit
    $('form').on('submit', function(e) {
      // Mencegah pengiriman form sementara
      e.preventDefault();

      // Tampilkan SweetAlert2 setelah form disubmit
      Swal.fire({
        icon: 'success',
        title: 'Data Berhasil Disimpan',
        text: 'Data mahasiswa telah berhasil disimpan!',
      }).then((result) => {
        if (result.isConfirmed) {
          // Kirim data form setelah SweetAlert ditutup
          this.submit();
        }
      });
    });
  });
</script>
<script>
  $(document).ready(function() {
    // SweetAlert untuk konfirmasi saat klik tombol hapus
    $('a.btn-outline-danger').on('click', function (e) {
      e.preventDefault();
      let link = $(this).attr('href');

      Swal.fire({
        title: 'Yakin ingin menghapus?',
        text: "Data mahasiswa tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = link;
        }
      });
    });
  });
</script>

</body>
</html>
