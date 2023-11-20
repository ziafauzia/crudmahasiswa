<div class ="container-fluid">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Edit Prodi
                        </div>
                        <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                                <div class="form-group">
                                    <label for="namaprodi">Nama Prodi</label>
                                    <input type="text" name="namaprodi" value="<?= $prodi['namaprodi']; ?>" class="form-control" id="nama prodi">
                                    <?= form_error('namaprodi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="ruangan">Ruangan</label>
                                    <input type="text" name="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control" id="ruangan" placeholder="ruangan">
                                    <?= form_error('ruangan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" name="jurusan" value="<?= $prodi['jurusan']; ?>" class="form-control" id="jurusan" placeholder="jurusan">
                                    <?= form_error('jurusan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="akreditasi">Akreditasi</label>
                                    <input type="text" name="akreditasi" value="<?= $prodi['akreditasi']; ?>" class="form-control" id="akreditasi" placeholder="akreditasi">
                                    <?= form_error('akreditasi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="namakaprodi">Nama Kaprodi</label>
                                    <input type="text" name="namakaprodi" value="<?= $prodi['namakaprodi']; ?>" class="form-control" id="namakaprodi" placeholder="nama kaprodi">
                                    <?= form_error('namakaprodi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="tahunberdiri">Tahun Berdiri</label>
                                    <input type="text" name="tahunberdiri" value="<?= $prodi['tahunberdiri']; ?>"class="form-control" id="tahunberdiri" placeholder="tahun berdiri">
                                    <?= form_error('tahunberdiri', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="outputlulusan">Output Lulusan</label>
                                    <input type="text" name="outputlulusan" value="<?= $prodi['outputlulusan']; ?>"class="form-control" id="outputlulusan" placeholder="Output Lulusan">
                                    <?= form_error('outputlulusan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>   
                                <div class="form-group">
                                <img src="<?= base_url('assets/img/prodi/') . $prodi['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                <div class="custom-file">
                                    <input type="file" name="gambar" class="form-control" id="gambar">
                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                    <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                            </div>
                                <a href="<?= base_url('Prodi')?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Prodi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>