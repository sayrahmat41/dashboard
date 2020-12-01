
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
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="card card-primary">
					<!-- /.card-header -->
					<!-- form start -->
					<form role="form" action="<?=base_url()?>/data/add" method="post" enctype="multipart/form-data" class="form-horizontal">
						<div class="card-body">
							<div class="form-group col-4">
								<label for="nama_anak">Nama Anak</label>
								<input type="text" name="nama_anak" class="form-control"  value="<?= set_value('nama_anak')?>" id="nama_anak" placeholder="Masukkan Nama Anak">
							</div>
							<div class="form-group col-4">
								<label for="alamat">Alamat</label>
								<textarea name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat"><?= set_value('alamat')?></textarea>
							</div>
							<div class="form-group col-4">

								<label for="tinggi_badan">Tinggi Badan</label>
								<div class="input-group">
									<input type="number" class="form-control" name="tinggi_badan" value="<?= set_value('tinggi_badan')?>" id="tinggi_badan" placeholder="Masukkan Tinggi Badan">
									<div class="input-group-append">
										<span class="input-group-text">cm</span>
									</div>
								</div>
							</div>
							<div class="form-group col-4">
								<label for="berat_badan">Berat Badan</label>
								<div class="input-group">
									<input type="number" class="form-control" name="berat_badan" value="<?= set_value('berat_badan')?>" id="berat_badan" placeholder="Masukkan Berat Badan">
									<div class="input-group-append">
										<span class="input-group-text">kg</span>
									</div>
								</div>
							</div>
							<div class="form-group col-4 ">
								<label for="lingkar_kepala">Lingkar Kepala</label>
								<div class="input-group">
									<input type="number" class="form-control" name="lingkar_kepala" value="<?= set_value('lingkar_kepala')?>" id="lingkar_kepala" placeholder="Masukkan Lingkar Kepala">
									<div class="input-group-append">
										<span class="input-group-text">cm</span>
									</div>
								</div>

							</div>
							<div class="form-group col-4">

								<label for="lingkar_lengan_atas">Lingkar Lengan Atas</label>
								<div class="input-group">
									<input type="number" class="form-control" name="lingkar_lengan_atas" value="<?= set_value('lingkar_lengan_atas')?>" id="lingkar_lengan_atas" placeholder="Masukkan Lingkar Lengan Atas">
									<div class="input-group-append">
										<span class="input-group-text">cm</span>
									</div>
								</div>
							</div>
							<div class="form-group col-4">
								<label for="lingkar_perut">Lingkar Perut</label>
								<div class="input-group">
									<input type="number" class="form-control" name="lingkar_perut" value="<?= set_value('lingkar_perut')?>" id="lingkar_perut" placeholder="Masukkan Lingkar Perut">
									<div class="input-group-append">
										<span class="input-group-text">cm</span>
									</div>
								</div>
							</div>
							<?php if (isset($validation)):?>
								<div class="row">
									<div class="form-group col-12">
										<div class="alert alert-danger" role="alert">
											<?= $validation->listErrors()?>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-primary float-right">Submit</button>
						</div>
					</form>
				</div>
				<!-- /.card -->
			</div>
		</div>
	</div>
</section>
<?= $this->endSection() ?>

