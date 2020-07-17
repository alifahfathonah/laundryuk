<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Laundryuk</title>

  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url()?>assets/home/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="<?php echo base_url()?>assets/home/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<?php echo base_url()?>assets/home/css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">LAUNDRYUK</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#select">Toko</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#status">Status</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('index.php/login/logout'); ?>">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">LAUNDRYUK</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
        <p class="text-white-55 "> <h3>CUCI PAKAIANMU</h3></p>
          <p class="text-white-75 font-weight-light mb-5"> Bersama kami selesaikan semua cucian Anda <br> hanya dengan klik tanpa harus keluar rumah </p>
          
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <!-- <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">We've got what you need!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">At Your Service</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2">Cuci Seru</h3>
            <p class="text-muted mb-0">Cuci Pakaian Anda dengan harga super murah</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2">Termonitor</h3>
            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">Area Malang</h3>
            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Dengan sepenuh hati</h3>
            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section" id="select">
  <h2 class="text-center">PILIH KECAMATAN</h2><br>
    <div class="container" >
      
      <div class="row" >
        <div class="col-lg-3 text-center" >
     

          <h3 class="h4 mb-2 btn btn-light btn-xl js-scroll-trigger"style="box-shadow: 2px 2px 4px rgba(0,0,0,0.8); " ><a href="<?=base_url('index.php/pawon/kedungkandang')?>#select" class="text-muted mb-0">Kedungkandang</a></h3>
        </div> 
        <div class="col-lg-2 text-center" >
          <h3 class="h4 mb-2 btn btn-light btn-xl js-scroll-trigger"style="box-shadow: 2px 2px 4px rgba(0,0,0,0.8); "><a href="<?=base_url('index.php/pawon/blimbing')?>#select" class="text-muted mb-0">Blimbing</a></h3>
        </div> 
        <div class="col-lg-2 text-center" >
          <h3 class="h4 mb-2 btn btn-light btn-xl js-scroll-trigger"style="box-shadow: 2px 2px 4px rgba(0,0,0,0.8); "><a href="<?=base_url('index.php/pawon/sukun')?>#select" class="text-muted mb-0">Sukun</a></h3>
        </div> 
        <div class="col-lg-3 text-center" >
          <h3 class="h4 mb-2 btn btn-light btn-xl js-scroll-trigger"style="box-shadow: 2px 2px 4px rgba(0,0,0,0.8); "><a href="<?=base_url('index.php/pawon/lowokwaru')?>#select" class="text-muted mb-0">Lowokwaru</a></h3>
        </div>
        <div class="col-lg-2 text-center">
          <h3 class="h4 mb-2 btn btn-light btn-xl js-scroll-trigger"style="box-shadow: 2px 2px 4px rgba(0,0,0,0.8); "><a href="<?=base_url('index.php/pawon/klojen')?>#select" class="text-muted mb-0">Klojen</a></h3>
        </div> 
      </div> 
    </div>
  </section>    

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">

       <?php $this->load->view($konten);?>
       
    </div>
  </section>
  
  

  <!-- Call to Action Section -->
 

  
  <!-- Contact Section -->
  <section class="page-section" id="status">
    <div class="container">
      <h2 class="text-center mt-0">Your Laundry Status</h2>
      <hr class="divider my-4">
      <div class="row justify-content-center">
      <div class="row">
        <table border="1">
          <tr>
            <th width="35">No</th>
            <th width="150">Nama Laundry</th>
            <th width="220">Alamat pengambilan</th>
            <th width="300">Note</th>
            <th width="150">Status</th>
            <th width="125">Tanggal order</th>
            <th width="125">Tanggal selesai</th>
            <th>Lapor</th>
          </tr>
          <?php foreach ($data_order as $list){ ?>
          <tr>
            <td><?php echo $list->id; ?></td>
            <td><?php echo $list->nama_laundry; ?></td>
            <td><?php echo $list->alt_pelanggan; ?></td>
            <td><?php echo $list->note; ?></td>
            <td><?php echo $list->status; ?></td>
            <td><?php echo $list->tgl_order; ?></td>
            <td><?php echo $list->tgl_selesai; ?></td>
            <td><a href="#lapor" class="btn btn-danger" data-toggle="modal" onclick="data_detail(<?php echo $list->id; ?>)" >!</a></td>
          </tr>
          <?php } ?>
        </table>
      </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="lapor">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Laporkan</h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <form action="<?=base_url('index.php/laporan/tambah_laporan')?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="pelanggan_id" id="pelanggan_id" class="form-control">
              <input type="hidden" name="laundry_id" id="laundry_id" class="form-control">
              <input type="hidden" name="id" id="id" class="form-control">
              <br>
              <textarea type="text" name="laporan" class="form-control" placeholder="Alasan"></textarea>
              <br>              
              <input type="submit" name="simpan" value="simpan" class="btn btn-info">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - LAUNDRYUK</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url()?>assets/home/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url()?>assets/home/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url()?>assets/home/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url()?>assets/home/js/creative.min.js"></script>

  <script>
    function data_detail(id){
      $.getJSON("<?=base_url()?>index.php/pawon/detail_order/"+id,function(data){
      $("#pelanggan_id").val(data['pelanggan_id']);
      $("#laundry_id").val(data['laundry_id']);
      $("#laundry_id").val(data['laundry_id']);
      $("#id").val(data['id']);
      });
    }
  </script>

</body>

</html>
