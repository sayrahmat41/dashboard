<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $heading?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <?= $breadcrumb ?>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->tinggi_badan;  ?></h3>

                        <p>Rata Rata Tinggi Badan</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo number_format($row->berat_badan, 2, ',', '');  ?></h3>

                        <p>Rata Rata Berat Badan</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo number_format($row->lingkar_kepala, 2, ',', '');  ?></h3>

                        <p>Rata Rata Lingkar Kepala</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo number_format($row->lingkar_lengan_atas, 2, ',', '');  ?></h3>

                        <p>Rata Rata Lingkar Lengan Atas</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo number_format($row->lingkar_perut, 2, ',', '');  ?></h3>

                        <p>Rata Rata Lingkar Perut</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->hepatitis_b;  ?></h3>

                        <p>Anak sudah diimunisasi <b> Hepatitis B</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->polio;  ?></h3>

                        <p>Anak sudah diimunisasi <b>Polio</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->bcg;  ?></h3>

                        <p>Anak sudah diimunisasi <b>BCG</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->dtp;  ?></h3>

                        <p>Anak sudah diimunisasi <b> DTP</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->hib;  ?></h3>

                        <p>Anak sudah diimunisasi <b> DTP</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->pcv;  ?></h3>

                        <p>Anak sudah diimunisasi <b> PCV</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->rotavirus;  ?></h3>

                        <p>Anak sudah diimunisasi <b> Rotavirus</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->influenza;  ?></h3>
                        <p>Anak sudah diimunisasi <b> Influenza</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->campak;  ?></h3>

                        <p>Anak sudah diimunisasi <b> Campak</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->mmr;  ?></h3>

                        <p>Anak sudah diimunisasi <b> MMR</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->tifoid;  ?></h3>

                        <p>Anak sudah diimunisasi <b> Tifoid</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->hepatitis_a;  ?></h3>

                        <p>Anak sudah diimunisasi <b> Hepatitis A</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->varisela;  ?></h3>

                        <p>Anak sudah diimunisasi <b> Varisela</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->hpv;  ?></h3>

                        <p>Anak sudah diimunisasi <b> HPV</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->japanese_encephalitis;  ?></h3>

                        <p>Anak sudah diimunisasi <b> Japanese Encephalitis</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php foreach($statistic as $row); echo $row->dangue;  ?></h3>

                        <p>Anak sudah diimunisasi <b> Dangue</b></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"></a>
                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>