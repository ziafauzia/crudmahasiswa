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
            <div class="col-md-6 text-center mb-5">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-8">
                <div class="wrap d-md-flex justify-content-center align-items-center">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4 text-center">Halaman Login</h3>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>" class="signin-form">
                                <div class="form-group mb-5">
                                    <label class="label" for="name">Email</label>
                                    <input name="email" type="email" class="form-control" value="<?=set_value('email');?>" id="email" placeholder="Email" required>
                                    <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group mb-5">
                                    <label class="label" for="password">Password</label>
                                    <input name="password" type="password" class="form-control" value="<?=set_value('nama');?>" id="password" placeholder="Password" required>
                                    <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <button type="submit" class="form-control btn btn-primary rounded submit mb-1 mr-2">Login</button>
                                </div>
                                <p class="text-center mb-0">Lupa Password? <a href="<?= base_url('Auth/registrasi') ?>">Buat Akun!</a></p>
                            </form>
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

