<div class ="container-fluid">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Tambah Data Mahasiswa
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" id="nama" placeholder="Nama">
                                    <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" class="form-control" id="jenis_kelamin">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="NIK">NIK</label>
                                    <input type="text" name="nik" value="<?= set_value('nik') ?>" class="form-control" id="nik" placeholder="NIK">
                                    <?= form_error('nik', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="temtang_lahir">Tempat/Tanggal Lahir</label>
                                    <input type="text" name="temtang_lahir" value="<?= set_value('temtang_lahir') ?>" class="form-control" id="temtang_lahir" placeholder="Tempat Tanggal Lahir">
                                    <?= form_error('temtang_lahir', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select name="agama" value="<?= set_value('agama') ?>" class="form-control" id="agama">
                                        <option value="">Silahkan Pilih</option>
                                        <option value="islam">Islam</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="Kristem">Kristen</option>
                                    </select>
                                    <?= form_error('agama', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nama_pertinggi">Nama Perguruan Tinggi</label>
                                    <input type="text" name="nama_pertinggi" value="<?= set_value('nama_pertinggi') ?>" class="form-control" id="nama_pertinggi" placeholder="Nama Perguruan Tinggi">
                                    <?= form_error('nama_pertinggi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_masuk">Tahun Masuk</label>
                                    <select name="tahun_masuk" value="<?= set_value('tahun_masuk') ?>" class="form-control" id="tahun_masuk">
                                        <option value="">Silahkan Pilih</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                    <?= form_error('tahun_masuk', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="fakul_prodi">Fakultas/Program Studi</label>
                                    <select name="fakul_prodi" value="<?= set_value('fakul_prodi') ?>" class="form-control" id="fakul_prodi">
                                        <option value="">Silahkan Pilih</option>
                                        <option value="TI">TI</option>
                                        <option value="SI">SI</option>
                                        <option value="TRK">TKR</option>
                                        <option value="AKTP">AKTP</option>
                                    </select>
                                    <?= form_error('fakul_prodi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" name="nim" value="<?= set_value('nim') ?>" class="form-control" id="nim" placeholder="NIM">
                                    <?= form_error('nim', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control" id="no_hp" placeholder="no hp">
                                    <?= form_error('no_hp', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control" id="email" placeholder="Email">
                                    <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_kos">Alamat di tempat Kuliah</label>
                                    <input type="text" name="alamat_kos" value="<?= set_value('alamat_kos') ?>" class="form-control" id="alamat_kos" placeholder="Alamat di tempat Kuliah">
                                    <?= form_error('alamat_kos', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="alamat_rumah">Alamat di Prov Riau</label>
                                    <input type="text" name="alamat_rumah" value="<?= set_value('alamat_rumah') ?>" class="form-control" id="alamat_rumah" placeholder="Alamat di Prov Riau">
                                    <?= form_error('alamat_rumah', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <a href="<?= base_url('Beasiswa')?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

           