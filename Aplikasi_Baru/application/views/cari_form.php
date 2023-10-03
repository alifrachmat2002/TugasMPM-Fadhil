<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="container">
		<h1>Cari User</h1>
		<p>Tuliskan kata kunci  yang ingin kamu cari</p>
		<form action="" method="get" style="flex-direction: row; align-items:center">
			<div>
				<input type="search" name="keyword" style="width: 360px;" placeholder="Keyword" value="<?= html_escape($keyword) ?>" required maxlength="32" />
			</div>

			<div>
				<input type="submit" class="button button-primary" value="Cari">
			</div>
		</form>

		<?php if ($search_result) : ?>
			<div class="search-result">
				<hr>
				<?php foreach ($search_result as $buku) : ?>
					<h2>
						<?= html_escape($buku->nama_alif) ?></a>
					</h2>
					<p><?= strip_tags(substr($buku->username_alif, 0, 200)) ?></p>
				<?php endforeach ?>
			</div>
		<?php else : ?>
			<?php if ($keyword) : ?>
				<div style="height: 400px;">
					<h1>Tidak ada yang ditemukan</h1>
					<p>Coba dengan kata kunci yang lain</p>
				</div>
			<?php endif ?>
		<?php endif ?>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>