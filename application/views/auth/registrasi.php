<!doctype html>
<html lang="en">
  <head>
  	<title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="<?= base_url('assets/') ?>https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/login.css">
	</head>
	<body>
	<section class="ftco-section  background-size: cover; " >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5"> </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-8">
                <div class="wrap d-md-flex justify-content-center align-items-center">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4 text-center">Buat Akun</h3>
                                <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>" class="signin-form">
                                    <div class="form-group mb-4">
                                        <label class="label" for="name">Nama Lengkap</label>
                                        <input type="text" class="form-control" value="<?= set_value('nama_lengkap'); ?>" id="Nama Lengkap" name="nama_lengkap" placeholder="Nama Lengkap" >
                                        <?= form_error('nama_lengkap','<small class="text-danger pl-3">','</small>');?>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="label" for="name">Email</label>
                                        <input type="email" class="form-control"  value="<?= set_value('email'); ?>" id="Email" name="email" placeholder="Email" >
                                        <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="label" for="password">Password</label>
                                        <input type="password" class="form-control"  value="<?= set_value('password1'); ?>"id="password1" name="password1" placeholder="Password" >
                                        <?= form_error('password1','<small class="text-danger pl-3">','</small>');?>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="label" for="password">Ulangi Password</label>
                                        <input type="password" class="form-control"  value="<?= set_value('password2'); ?>" id="password2" name="password2" placeholder="Ulangi Password" >
                                        <?= form_error('password2','<small class="text-danger pl-3">','</small>');?>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar Akun</button>
                                    </div>   
                                </form>         
                                <p class="text-center mb-0"><a class="small" data-toggle="tab" href="<?= base_url('auth/logout');?>">Sudah Punya Akun? Login!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/popper.js"></script>
  <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/main.js"></script>
	</body>
</html>

