<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php');
	?>
	<h2>Data User</h2>
	<table class="table">
  <thead>
    <tr>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($buku as $buku) : ?>
			<tr>
				<td>
					<?php echo $buku->nama_alif ?>
				</td>
				<td>
					<?php echo $buku->username_alif ?>
				</td>
				<td>
					<?php echo md5(sha1($buku->password_alif)) ?>
				</td>
				<td>
					<?php echo $buku->level_alif ?>
				</td>
				<!-- <td><a href=edit/<?php echo $buku->id_alif ?>>Edit</a>||<a href=delete/<?php echo $buku->id_alif ?>>Hapus</a></td> -->
				<td>
					<a href=edit/<?php echo $buku->id_alif ?>>
						<button type="button" class="btn btn-warning">
						Edit
						</button> 
					</a>
						
					<a href=delete/<?php echo $buku->id_alif ?>>
					<button type="button" class="btn btn-danger">
						Hapus</button>
					</a>
					
  				</td>

			</tr>
		<?php endforeach; ?>
  </tbody>
</table>
	<!-- <table border=1>
		<tr>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Action</th>
		</tr>

		<?php foreach ($buku as $buku) : ?>
			<tr>
				<td>
					<?php echo $buku->kodebuku ?>
				</td>
				<td>
					<?php echo $buku->judulbuku ?>
				</td>
				<td>
					<?php echo $buku->pengarang ?>
				</td>
				<td>
					<?php echo $buku->penerbit ?>
				</td>
				<td><a href=edit/<?php echo $buku->id ?>>Edit</a>||<a href=delete/<?php echo $buku->id ?>>Hapus</a></td>
			</tr>
		<?php endforeach; ?>
	</table> -->
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>