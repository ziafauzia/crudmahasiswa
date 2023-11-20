<div class ="container-fluid">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Edit Beasiswa Mahasiswa
                        </div>
                        <div class="card-body">
                        <form action="<?= base_url('Beasiswa/edit/' . $beasiswa['id']); ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama"  value="<?= $beasiswa['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                                    <?= form_error('nama', '<small class="text-danger p-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin"  class="form-control" id="jenis_kelamin">
                                            <option value="Laki-laki" <?php if ($beasiswa['jenis_kelamin'] == "Laki-Laki") {
                                                echo "selected";
                                            } ?>>Laki-laki</option>
                                            <option value="Perempuan" <?php if ($beasiswa['jenis_kelamin'] == "Perempuan") {
                                                echo "selected";
                                            } ?>>Perempuan</option>
                                    </select>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger p-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="NIK">NIK</label>
                                    <input type="text" name="nik"  value="<?= $beasiswa['nik']; ?>" class="form-control" id="nik" placeholder="NIK">
                                    <?= form_error('nik', '<small class="text-danger p-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="temtang_lahir">Tempat/Tanggal Lahir</label>
                                    <input type="text" name="temtang_lahir"  value="<?= $beasiswa['temtang_lahir']; ?>" class="form-control" id="temtang_lahir" placeholder="Tempat/Tanggal Lahir">
                                    <?= form_error('temtang_lahir', '<small class="text-danger p-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select name="agama"  class="form-control" id="agama">
                                            <option value="Islam" <?php if ($beasiswa['agama'] == "Islam") {
                                                echo "selected";
                                            } ?>>Islam</option>
                                            <option value="Buddha" <?php if ($beasiswa['agama'] == "Buddha") {
                                                echo "selected";
                                            } ?>>Buddha</option>
                                            <option value="Kristen" <?php if ($beasiswa['agama'] == "Kristen") {
                                                echo "selected";
                                            } ?>>Kristen</option>
                                    </select>
                                    <?= form_error('tahun_masuk', '<small class="text-danger p-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nama_pertinggi">Nama Perguruan Tinggi</label>
                                    <input type="text" name="nama_pertinggi"  value="<?= $beasiswa['nama_pertinggi']; ?>" class="form-control" id="nama_pertinggi" placeholder="Nama Perguruan Tinggi">
                                    <?= form_error('nama_pertinggi', '<small class="text-danger p-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_masuk">Tahun Masuk</label>
                                    <select name="tahun_masuk"  class="form-control" id="tahun_masuk">
                                            <option value="2020" <?php if ($beasiswa['tahun_masuk'] == "2020") {
                                                echo "selected";
                                            } ?>>2020</option>
                                            <option value="2021" <?php if ($beasiswa['tahun_masuk'] == "2021") {
                                                echo "selected";
                                            } ?>>2021</option>
                                            <option value="2022" <?php if ($beasiswa['tahun_masuk'] == "2022") {
                                                echo "selected";
                                            } ?>>2022</option>
                                            <option value="2023" <?php if ($beasiswa['tahun_masuk'] == "2023") {
                                                echo "selected";
                                            } ?>>2023</option>
                                    </select>
                                    <?= form_error('tahun_masuk', '<small class="text-dangerp-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="fakul_prodi">Fakultas/Prodi</label>
                                    <select name="fakul_prodi"  class="form-control" id="fakul_prodi">
                                            <option value="Teknik Informatika" <?php if ($beasiswa['fakul_prodi'] == "Teknik Informatika") {
                                                echo "selected";
                                            } ?>>Teknik Informatika</option>
                                            <option value="Teknik Komputer" <?php if ($beasiswa['fakul_prodi'] == "Teknik Komputer") {
                                                echo "selected";
                                            } ?>>Teknik Komputer</option>
                                            <option value="Sistem Informasi" <?php if ($beasiswa['fakul_prodi'] == "Sistem Informasi") {
                                                echo "selected";
                                            } ?>>Sistem Informasi</option>
                                            <option value="Akutansi" <?php if ($beasiswa['fakul_prodi'] == "Akutansi") {
                                                echo "selected";
                                            } ?>>Akutansi</option>
                                    </select>
                                    <?= form_error('fakul_prodi', '<small class="text-danger p-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="NIM">NIM</label>
                                    <input type="text" name="nim"  value="<?= $beasiswa['nim']; ?>" class="form-control" id="nim" placeholder="NIM">
                                    <?= form_error('nim', '<small class="text-danger p-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="number" name="no_hp"  value="<?= $beasiswa['no_hp']; ?>" class="form-control" id="no_hp" placeholder="no hp">
                                    <?= form_error('no_hp', '<small class="text-danger p-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email"  value="<?= $beasiswa['email']; ?>" class="form-control" id="email" placeholder="email">
                                    <?= form_error('email', '<small class="text-danger p-1">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="alamat_kos">Alamat di tempat Kuliah</label>
                                    <input type="text" name="alamat_kos" value="<?= $beasiswa['alamat_kos']; ?>"class="form-control" id="alamat_kos" placeholder="Alamat di tempat Kuliah">
                                    <?= form_error('alamat_kos', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="alamat_rumah">Alamat di Prov Riau</label>
                                    <input type="text" name="alamat_rumah" value="<?= $beasiswa['alamat_rumah']; ?>"class="form-control" id="alamat_rumah" placeholder="Alamat di Prov Riau">
                                    <?= form_error('alamat_rumah', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <a href="<?= base_url('Beasiswa')?>" class="btn btn-danger">Tutup</a>
                                 <button type="submit" name="tambah" class="btn btn-primary">ubah Beasiswa</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>