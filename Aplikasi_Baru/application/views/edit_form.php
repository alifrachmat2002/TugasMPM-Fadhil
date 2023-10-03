<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php');
	?>

	<form action="<?php base_url("edit") ?>" method="post" enctype="multipart/form-data">


		<div class="form-group">
			<label for="id_alif">Id User* </label>
			<input class="form-control <?php echo form_error('id_alif') ? 'is-invalid' : '' ?>" type="text" name="id_alif" placeholder="ID" value="<?php echo $buku->id_alif ?>" />
			<div class="invalid-feedback">
				<?php echo form_error('id_alif') ?>
			</div>
		</div>

		<div class="form-group">
			<label for="nama_alif">Nama User</label>
			<input class="form-control <?php echo form_error('nama_alif') ? 'is-invalid' : '' ?>" type="text" name="nama_alif" min="0" placeholder="Nama" value="<?php echo $buku->nama_alif ?>" />
			<div class="invalid-feedback">
				<?php echo form_error('judul') ?>
			</div>
		</div>

		<div class="form-group">
			<label for="username_alif">Username</label>
			<input class="form-control <?php echo form_error('username_alif') ? 'is-invalid' : '' ?>" type="text" name="username_alif" min="0" placeholder="Username" value="<?php echo $buku->username_alif ?>" />
			<div class="invalid-feedback">
				<?php echo form_error('pengarang') ?>
			</div>
		</div>

		<div class="form-group">
			<label for="password_alif">Password</label>
			<input class="form-control <?php echo form_error('password_alif') ? 'is-invalid' : '' ?>" type="text" name="password_alif" min="0" placeholder="Password" value="<?php echo $buku->password_alif ?>" />
			<div class="invalid-feedback">
				<?php echo form_error('penerbit') ?>
			</div>
		</div>

		<div class="form-group">
			<label for="level_alif">Level</label>
			<input class="form-control <?php echo form_error('level_alif') ? 'is-invalid' : '' ?>" type="text" name="level_alif" min="0" placeholder="Level" value="<?php echo $buku->level_alif ?>" />
			<div class="invalid-feedback">
				<?php echo form_error('penerbit') ?>
			</div>
		</div>

		<input type=hidden name=id_alif value=<?php echo $buku->id_alif; ?>>

		<input class="btn btn-success" type="submit" name="btn" value="Save" />
	</form>
	</div>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>