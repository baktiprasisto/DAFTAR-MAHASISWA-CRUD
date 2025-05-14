<div class="page-header text-center py-3 animate__animated animate__fadeIn">
    <h3 class="header-title"><i class="bi bi-mortarboard-fill me-2"></i>DAFTAR MAHASISWA</h3>
    <p class="header-subtitle">Universitas Gunadarma</p>
</div>

<div class="card animate__animated animate__fadeIn animate__delay-1s mb-4">
    <div class="card-body">
        <!-- Alert Info -->
        <div class="alert alert-info mb-4 d-flex align-items-center">
            <i class="bi bi-info-circle-fill alert-icon"></i>
            <div>
                <strong>Informasi:</strong> Silakan edit data mahasiswa dengan lengkap dan benar.
            </div>
        </div>

        <div class="row">
            <!-- Form Section -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="form-section animate__animated animate__fadeInLeft">
                    <h5 class="text-center mb-4"><i class="bi bi-person-plus-fill me-2"></i>Edit Data Mahasiswa</h5> 

                    <form action="<?php echo site_url('mahasiswa/eksekusi_edit'); ?>" method="post" enctype="multipart/form-data">
                        <?php foreach($data as $a): ?>
                        <input type="hidden" name="id" value="<?php echo($a->id); ?>"/>
                        <div class="mb-3">
                            <label for="nama" class="form-label"><i class="bi bi-person me-2"></i>Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $a->nama; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label"><i class="bi bi-card-heading me-2"></i>NPM</label>
                            <input type="text" class="form-control" id="npm" name="npm" value="<?php echo $a->npm; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="jurusan" class="form-label"><i class="bi bi-book me-2"></i>Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan" required>
                                <option value="<?php echo $a->jurusan; ?>"><?php echo $a->jurusan; ?></option>
                                <option value="Informatika">Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="photo" class="form-label"><i class="bi bi-camera me-2"></i>Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                            <small class="text-muted">Format: JPG, PNG (Max: 2MB)</small>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-submit">
                                <i class="bi bi-save me-2"></i>Simpan Perubahan
                            </button>
                        </div>
                        <?php endforeach; ?> 
                    </form>
                </div>
            </div>

            <div class="col-lg-8">
              <div class="table-responsive table-container animate__animated animate__fadeInRight">
                <table class="table table-hover table-dark">
                  <thead class="text-center" style="background: linear-gradient(45deg, #1e3c72, #2a5298);">
                    <tr>
                      <th width="5%">No</th>
                      <th width="10%">Photo</th>
                      <th width="15%">NPM</th>
                      <th width="25%">Nama</th>
                      <th width="20%">Jurusan</th>
                      <th width="25%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    if ($c_mhs > 0) {
                      $no = 0;
                      foreach ($mhs as $list) {
                        // Tentukan warna badge berdasarkan jurusan
                        $badge_color = '';
                        switch($list->jurusan) {
                          case 'Informatika':
                            $badge_color = 'bg-success';
                            break;
                          case 'Sistem Informasi':
                            $badge_color = 'bg-primary';
                            break;
                          case 'Akuntansi':
                            $badge_color = 'bg-warning text-dark';
                            break;
                          case 'Teknik Komputer':
                            $badge_color = 'bg-info text-dark';
                            break;
                          default:
                            $badge_color = 'bg-secondary';
                        }
                    ?>
                    <tr class="text-center align-middle fade-in table-dark">
                      <td><?php echo ++$no; ?></td>
                      <td>
                        <img src="<?php echo base_url('uploads/' . $list->photo); ?>" class="img-profile rounded-circle border border-light" alt="<?php echo $list->nama; ?>">
                      </td>
                      <td class="text-center align-middle"><?php echo $list->npm; ?></td>
                      <td class="text-center align-middle"><?php echo $list->nama; ?></td>
                      <td>
                        <span class="badge <?php echo $badge_color; ?> badge-jurusan text-center align-middle">
                          <?php echo $list->jurusan; ?>
                        </span>
                      </td>
                      <td>
                        <div class="d-flex justify-content-center gap-2">
                          <a class="btn btn-sm btn-outline-primary action-btn" href="<?php echo site_url('mahasiswa/edit_data/' . $list->id); ?>">
                            <i class="bi bi-pencil-square me-1"></i> Edit
                          </a>
                          <a class="btn btn-sm btn-outline-danger action-btn" href="<?php echo site_url('mahasiswa/hapus_data/' . $list->id); ?>">
                            <i class="bi bi-trash me-1"></i> Hapus
                          </a>
                        </div>
                      </td>
                    </tr>
                    <?php 
                      }
                    } else {
                    ?>
                    <tr>
                      <td colspan="6" class="empty-data py-5 text-center">
                        <i class="bi bi-inbox fs-1 text-white"></i>
                        <h5 class="mt-3 text-white">Data Mahasiswa Kosong</h5>
                        <p class="text-white">Silakan tambahkan data mahasiswa baru</p>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
                    
              <?php if ($c_mhs > 0) { ?>
              <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                <small class="text-white">Menampilkan <?php echo $c_mhs; ?> data mahasiswa</small>
              </div>
              <?php } ?>
            </div>
        </div>
    </div>
</div>
