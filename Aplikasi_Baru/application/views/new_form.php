<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php');
	?>
	<?php if ($this->session->flashdata('success')) : ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php endif; ?>

	<form action="<?php base_url('add') ?>" method="post">

		<label for="id_alif">id*</label>
		<input class="form-control <?php echo form_error('id_alif') ? 'is-invalid' : '' ?>" type="numeric" name="id_alif" placeholder="id User" />
		<div class="invalid-feedback">
			<?php echo form_error('id_alif') ?>
		</div>

		<label for="nama_alif">Nama*</label>
		<input class="form-control <?php echo form_error('nama_alif') ? 'is-invalid' : '' ?>" type="text" name="nama_alif" placeholder="Nama User" />
		<div class="invalid-feedback">
			<?php echo form_error('nama_alif') ?>
		</div>

		<label for="username_alif">Username*</label>
		<input class="form-control <?php echo form_error('username_alif') ? 'is-invalid' : '' ?>" type="text" name="username_alif" min="0" placeholder="Username" />
		<div class="invalid-feedback">
			<?php echo form_error('username_alif') ?>
		</div>

		<label for="password_alif">Password*</label>
		<input class="form-control <?php echo form_error('password_alif') ? 'is-invalid' : '' ?>" type="text" name="password_alif" min="0" placeholder="password" />
		<div class="invalid-feedback">
			<?php echo form_error('password_alif') ?>
		</div>

		<label for="level_alif">Level*</label>
		<input class="form-control <?php echo form_error('level_alif') ? 'is-invalid' : '' ?>" type="text" name="level_alif" min="0" placeholder="Level" />
		<div class="invalid-feedback">
			<?php echo form_error('level_alif') ?>
		</div>


		<input class="btn btn-success" type="submit" name="btn" value="Save" />
	</form>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>