<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Data Beasiswa</div>
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-4">Nama</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['nama']; ?></div>
                        </div>
                      
                        <div class="row">
                            <div class="col-md-4">Jenis Kelamin</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['jenis_kelamin']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">NIK</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['nik']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Tempat/Tanggal Lahir</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['temtang_lahir']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Agama</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['agama']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Nama Perguruan Tinggi</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['nama_pertinggi']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Tahun Masuk</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['tahun_masuk']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Fakultas/Program Studi</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['fakul_prodi']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">NIM</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['nim']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">No HP</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['no_hp']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Email</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['email']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Alamat di tempat Kuliah</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['alamat_kos']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">Alamat di Prov Riau</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $Beasiswa['alamat_rumah']; ?></div>
                        </div>

                    </div>
                    <div class="card-footer justify-content-center">
                        <a href="<?= base_url('Beasiswa') ?>" class="btn btn-danger">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

