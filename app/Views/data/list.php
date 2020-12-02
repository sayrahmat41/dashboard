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
				<a class="btn btn-primary mb-2 float-right" href="<?=base_url()?>/data/add"><span class="fas fa-plus">&nbsp;</span>Add</a>
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
									<th>Imunisasi</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $row):?>
									<tr>
										<td><?= $row['nama_anak']?></td>
										<td><?= $row['alamat']?></td>
										<td><?= $row['berat_badan']?>kg</td>
										<td><?= $row['tinggi_badan']?>cm</td>
										<td><?= $row['lingkar_kepala']?>cm</td>
										<td><?= $row['lingkar_lengan_atas']?>cm</td>
										<td><?= $row['lingkar_perut']?>cm</td>
										<td>
											<?php if ($row['hepatitis_b']){ echo "Hepatitis B,"; } ?>
											<?php if ($row['polio']){ echo "Polio,"; } ?>
											<?php if ($row['bcg']){ echo "BCG,"; } ?>
											<?php if ($row['dtp']){ echo "DTP,"; } ?>
											<?php if ($row['hib']){ echo "Hib,"; } ?>
											<?php if ($row['pcv']){ echo "PCV,"; } ?>
											<?php if ($row['rotavirus']){ echo "Rotavirus,"; } ?>
											<?php if ($row['influenza']){ echo "Influenza,"; } ?>
											<?php if ($row['campak']){ echo "Campak,"; } ?>
											<?php if ($row['mmr']){ echo "MMR,"; } ?>
											<?php if ($row['tifoid']){ echo "Tifoid"; } ?>
											<?php if ($row['hepatitis_a']){ echo "Hepatitis A,"; } ?>
											<?php if ($row['varisela']){ echo "Varisela,"; } ?>
											<?php if ($row['hpv']){ echo "HPV,"; } ?>
											<?php if ($row['japanese_encephalitis']){ echo "Japanese encephalitis,"; } ?>
											<?php if ($row['dangue']){ echo "Dangue"; } ?>
										</td>
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