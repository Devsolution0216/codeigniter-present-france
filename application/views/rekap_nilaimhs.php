<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rekapitulasi Nilai Mata Kuliah - SIA Mercu Buana</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?=base_url('favicon.ico');?>" type="image/x-icon" />
  <link rel="stylesheet" href="<?=base_url('assets/plugins/');?>font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/dist/');?>css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  

  
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <a href="<?=base_url('/');?>" class="brand-link">
      <img src="<?=base_url('assets/images/logo.png');?>" alt="logo" class="ml-3 img-size-32 mr-2">
      <span class="brand-text font-weight-light">SIA Mercu Buana</span>
    </a>

    
    <div class="sidebar">

      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=base_url('/');?>" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="javascript:;" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Data Master
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/data_master/mahasiswa');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/data_master/matakuliah');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/data_master/nilai');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Nilai</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('/rekap/nilai_mhs');?>" class="nav-link active">
              <i class="nav-icon fa fa-list"></i>
              <p>Rekap Nilai Mata Kuliah</p>
            </a>
          </li>
        </ul>
      </nav>
      
    </div>
    
  </aside>


  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Rekapitulasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="javascript:;">SIA Mercu Buana</a></li>
              <li class="breadcrumb-item">Data Master</li>
              <li class="breadcrumb-item active">Nilai</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <section class="content">
      <div class="container-fluid"> <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nilai Mata Kuliah</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>No.</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Nilai</th>
                    <th>Keterangan Lulus</th>
                  </tr>
                  <?php
                    $i=1;
                    foreach ($list_rekap as $d) {
                  ?>
                  <tr>
                    <td><?=$i++;?></td>
                    <td><?=$d->nama_mahasiswa;?></td>
                    <td><?=$d->nama_matakuliah;?></td>
                    <td><?=$d->nilai;?></td>
                    <td><?=(($d->nilai > 70) ? '<span class="badge bg-success">LULUS</span>' : '<span class="badge bg-danger">TIDAK LULUS</span>');?></td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
            </div>
          </div>
        </div>
	  </div>
    </section>
    
  </div>
  
  <footer class="main-footer">
    Copyright &copy; <?=date('Y');?> Muhammad Fadhiil Rachman
    <div class="float-right d-none d-sm-inline-block">
      <b>NIM</b> 41516010040
    </div>
  </footer>
  
</div>
<script src="<?=base_url('assets/plugins/');?>jquery/jquery.min.js"></script>

<script src="<?=base_url('assets/plugins/');?>bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="<?=base_url('assets/plugins/');?>slimScroll/jquery.slimscroll.min.js"></script>

<script src="<?=base_url('assets/plugins/');?>fastclick/fastclick.js"></script>

<script src="<?=base_url('assets/dist/');?>js/adminlte.js"></script>
</body>
</html>