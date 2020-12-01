<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1><?= $heading?></h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<?= $breadcrumb ?>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<a class="btn btn-primary mb-2 float-right" href="<?=base_url()?>/users/create"><span class="fas fa-plus">&nbsp;</span>Add</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Users</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="usersTable" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nama Anak</th>
									<th>Alamat</th>
									<th>Berat Badan</th>
									<th>Tinggi Badan</th>
									<th>Lingkar Kepala</th>
									<th>Lingkar Lengan Atas</th>
									<th>Lingkar Perut</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $row):?>
									<tr>
										<td><?= $row['nama_anak']?></td>
										<td><?= $row['alamat']?></td>
										<td><?= $row['berat_badan']?></td>
										<td><?= $row['tinggi_badan']?></td>
										<td><?= $row['lingkar_kepala']?></td>
										<td><?= $row['lingkar_lengan_atas']?></td>
										<td><?= $row['lingkar_perut']?></td>
										<td><a href="<?=base_url()?>/data/edit/<?=$row['id'] ?>" data-toggle="tooltip" data-placement="top" title="Edit Data"class="btn btn-xs btn-primary">edit</a>
											<a href="<?=base_url()?>/data/delete/<?=$row['id'] ?>" data-toggle="tooltip" data-placement="top" title="Edit Data"class="btn btn-xs btn-danger">delete</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- page script -->
<script>
	$(function () {
		$("#usersTable").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
	});
</script>
<?= $this->endSection() ?>