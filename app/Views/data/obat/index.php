<?= $this->extend('templates/app') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<!-- Main content -->
<div class="content">
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h2>Data Obat</h2>
			</div>
			<div class="card-body">
				<?php if (session()->getFlashdata('created')) : ?>
					<div class="alert alert-success" role="alert">
						<?= session()->getFlashdata('created'); ?>
					</div>
				<?php elseif (session()->getFlashdata('updated')) : ?>
					<div class="alert alert-success" role="alert">
						<?= session()->getFlashdata('updated'); ?>
					</div>
				<?php elseif (session()->getFlashdata('deleted')) : ?>
					<div class="alert alert-success" role="alert">
						<?= session()->getFlashdata('deleted'); ?>
					</div>
				<?php endif; ?>
				<table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Icon</th>
							<th>Kode Obat</th>
							<th>Kode Suplier</th>
							<th>Nama Obat</th>
							<th>Produsen</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($obat as $obat) : ?>
							<tr>
								<td>
									<img width="70" height="70" src="/img/obat/<?= $obat['icon']; ?>">
								</td>
								<td><?= $obat['kode_obat']; ?></td>
								<td><?= $obat['kode_suplier']; ?></td>
								<td><?= $obat['nama_obat']; ?></td>
								<td><?= $obat['produsen']; ?></td>
								<td>Rp. <?= $obat['harga']; ?></td>
								<td><?= $obat['jml_stok']; ?></td>
								<td class="">
									<a href="/obat/edit/<?= $obat['kode_obat'] ?>" class="btn btn-success">edit</a>
									<form action="/obat/delete/<?= $obat['kode_obat'] ?>" method="post" class="d-inline">
										<input type="hidden" name="_method" value="DELETE" />
										<?= csrf_field(); ?>
										<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">delete</button>
									</form>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
</div>
<?= $this->endSection() ?>