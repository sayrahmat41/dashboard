
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
					<form role="form" action="<?=base_url()?>/data/update/<?= $isiData['id']?>" method="post" enctype="multipart/form-data" class="form-horizontal">
						<div class="card-body">
							<div class="form-group col-4">
								<label for="nama_anak">Nama Anak</label>
								<input type="text" name="nama_anak" class="form-control"  value="<?= $isiData['nama_anak']?>" id="nama_anak" placeholder="Masukkan Nama Anak">
							</div>
							<div class="form-group col-4">
								<label for="alamat">Alamat</label>
								<textarea name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat"><?= $isiData['alamat']?></textarea>
							</div>
							<div class="form-group col-4">

								<label for="tinggi_badan">Tinggi Badan</label>
								<div class="input-group">
									<input type="number" class="form-control" name="tinggi_badan" value="<?= $isiData['tinggi_badan']?>" id="tinggi_badan" placeholder="Masukkan Tinggi Badan">
									<div class="input-group-append">
										<span class="input-group-text">cm</span>
									</div>
								</div>
							</div>
							<div class="form-group col-4">
								<label for="berat_badan">Berat Badan</label>
								<div class="input-group">
									<input type="number" class="form-control" name="berat_badan" value="<?= $isiData['berat_badan']?>" id="berat_badan" placeholder="Masukkan Berat Badan">
									<div class="input-group-append">
										<span class="input-group-text">kg</span>
									</div>
								</div>
							</div>
							<div class="form-group col-4 ">
								<label for="lingkar_kepala">Lingkar Kepala</label>
								<div class="input-group">
									<input type="number" class="form-control" name="lingkar_kepala" value="<?= $isiData['lingkar_kepala']?>" id="lingkar_kepala" placeholder="Masukkan Lingkar Kepala">
									<div class="input-group-append">
										<span class="input-group-text">cm</span>
									</div>
								</div>

							</div>
							<div class="form-group col-4">

								<label for="lingkar_lengan_atas">Lingkar Lengan Atas</label>
								<div class="input-group">
									<input type="number" class="form-control" name="lingkar_lengan_atas" value="<?= $isiData['lingkar_lengan_atas']?>" id="lingkar_lengan_atas" placeholder="Masukkan Lingkar Lengan Atas">
									<div class="input-group-append">
										<span class="input-group-text">cm</span>
									</div>
								</div>
							</div>
							<div class="form-group col-4">
								<label for="lingkar_perut">Lingkar Perut</label>
								<div class="input-group">
									<input type="number" class="form-control" name="lingkar_perut" value="<?= $isiData['lingkar_perut']?>" id="lingkar_perut" placeholder="Masukkan Lingkar Perut">
									<div class="input-group-append">
										<span class="input-group-text">cm</span>
									</div>
								</div>
							</div>
							<div class="form-group col-8">
								<label for="imunisasi">Imunisasi</label>			
								<div class="form-check">
									<label for="hepatitis_b" class="form-check-label"> 
										<input type="checkbox"  class="form-check-input" id="hepatitis_b" name="hepatitis_b" value="1"
										<?php if ($isiData['hepatitis_b']){ echo "checked"; } ?> 
										>
										Hepatitis B
									</label>
								</div>
								<div class="form-check">
									<label for="polio" class="form-check-label"> 
										<input type="checkbox"  class="form-check-input" id="polio" name="polio" value="1"
										<?php if ($isiData['polio']){ echo "checked"; } ?>
										>
										Polio
									</label>
								</div>
								<div class="form-check">
									<label for="bcg" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="bcg" name="bcg" value="1"
										<?php if ($isiData['bcg']){ echo "checked"; } ?>
										> 
										BCG
									</label>
								</div>
								<div class="form-check">
									<label for="dtp" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="dtp" name="dtp" value="1"
										<?php if ($isiData['dtp']){ echo "checked"; } ?>
										> 
										DTP
									</label>
								</div>
								<div class="form-check">
									<label for="hib" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="hib" name="hib" value="1"
										<?php if ($isiData['hib']){ echo "checked"; } ?>
										> 
										Hib
									</label>
								</div>
								<div class="form-check">
									<label for="pcv" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="pcv" name="pcv" value="1"
										<?php if ($isiData['pcv']){ echo "checked"; } ?>
										> 
										PCV
									</label>
								</div>
								<div class="form-check">
									<label for="rotavirus" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="rotavirus" name="rotavirus" value="1"
										<?php if ($isiData['rotavirus']){ echo "checked"; } ?>
										> 
										Rotavirus
									</label>
								</div>
								<div class="form-check">
									<label for="influenza" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="influenza" name="influenza" value="1"
										<?php if ($isiData['influenza']){ echo "checked"; } ?>
										> 
										Influenza
									</label>
								</div>
								<div class="form-check">
									<label for="campak" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="campak" name="campak" value="1"
										<?php if ($isiData['campak']){ echo "checked"; } ?>
										> 
										Campak
									</label>
								</div>
								<div class="form-check">
									<label for="mmr" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="mmr" name="mmr" value="1"
										<?php if ($isiData['mmr']){ echo "checked"; } ?>
										>
										MMR
									</label>
								</div>
								<div class="form-check">
									<label for="tifoid" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="tifoid" name="tifoid" value="1"
										<?php if ($isiData['tifoid']){ echo "checked"; } ?>
										> 
										Tifoid
									</label>
								</div>
								<div class="form-check">
									<label for="hepatitis_a" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="hepatitis_a" name="hepatitis_a" value="1"
										<?php if ($isiData['hepatitis_a']){ echo "checked"; } ?>
										> 
										Hepatitis A
									</label>
								</div>
								<div class="form-check">
									<label for="varisela" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="varisela" name="varisela" value="1"
										<?php if ($isiData['varisela']){ echo "checked"; } ?>
										> 
										Varisela
									</label>
								</div>
								<div class="form-check">
									<label for="hpv" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="hpv" name="hpv" value="1"
										<?php if ($isiData['hpv']){ echo "checked"; } ?>
										> 
										HPV
									</label>
								</div>
								<div class="form-check">
									<label for="japanese_encephalitis" class="form-check-label">
										<input type="checkbox"  class="form-check-input" id="japanese_encephalitis" name="japanese_encephalitis" value="1"
										<?php if ($isiData['japanese_encephalitis']){ echo "checked"; } ?>
										> 
										Japanese encephalitis
									</label>
								</div>
								<div class="form-check">
									<label for="dangue" class="form-check-label"> 
										<input type="checkbox"  class="form-check-input" id="dangue" name="dangue" value="1"
										<?php if ($isiData['dangue']){ echo "checked"; } ?>
										>
										Dangue
									</label>
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

