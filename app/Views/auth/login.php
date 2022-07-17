<?= $this->extend('templates/auth') ?>
<?= $this->section('content') ?>
<section class="vh-100">
	<div class="container py-5 h-100">
		<div class="row d-flex align-items-center justify-content-center h-100">
			<div class="col-md-8 col-lg-7 col-xl-6">
				<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_jcsfwbvi.json" background="transparent" speed="1" style="width: 600px; height: 600px;" loop autoplay></lottie-player>
			</div>
			<div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
				<h2 class="mb-5" style="color:#014ed5">Apotek Ami Pharmacy Login</h2>
				<?php if (session()->getFlashdata('pesan')) : ?>
					<div class="alert alert-success" role="alert">
						<?= session()->getFlashdata('pesan'); ?>
					</div>
				<?php elseif (session()->getFlashdata('kesalahan')) : ?>
					<div class="alert alert-danger" role="alert">
						<?= session()->getFlashdata('kesalahan'); ?>
					</div>
				<?php elseif (session()->has('logout')) : ?>
					<div class="alert alert-success" role="alert">
						<?= session()->get('logout'); ?>
					</div>
				<?php endif; ?>
				<form action="/loged" method="post">
					<?= csrf_field(); ?>
					<div class="form-outline mb-4">
						<label class="form-label" for="form1Example13">Masukkan Username</label>
						<input type="text" name="username" id="form1Example13" <?= ($validation->hasError('username') ? 'is-invalid' : ''); ?> class="form-control form-control-lg" />
						<div class="invalid-feedback">
							<?= $validation->getError('username'); ?>
						</div>
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="form1Example13">Masukkan Password</label>
						<input type="password" name="password" id="form1Example13" <?= ($validation->hasError('password') ? 'is-invalid' : ''); ?> class="form-control form-control-lg" />
						<div class="invalid-feedback">
							<?= $validation->getError('password'); ?>
						</div>
					</div>
					<div class="d-flex justify-content-around align-items-center mb-4">
						<!-- Checkbox -->
						<a href="/register">Belum punya akun?</a>
					</div>
					<!-- /.col -->
					<button type="submit" name="login" class="btn btn-primary btn-lg btn-block" style="background-color:#014ed5">Login</button>
					<!-- /.col -->
					<div class="row">

					</div>
				</form>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->
	<?= $this->endSection() ?>