<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title ?></title>
    <!-- css -->
    <?php $this->load->view('backend/include/base_css'); ?>
  </head>
  <body id="page-top">
    <!-- navbar -->
    <?php $this->load->view('backend/include/base_nav'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      
      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Bilet Kodu[<?= $tiket['kd_tiket']; ?>]  </h6>
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
             
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                   <p>Rezervasyon Kodu : <b><?= $tiket['kd_order']; ?></b></p>
                   <p>Yolcunun Adı : <b><?= $tiket['nama_tiket']; ?></b></p>
                   <p>Yolcunun Yaşı : <b><?= $tiket['umur_tiket']; ?></b></p>
                   <p>Koltuk Numarası : <b><?= $tiket['kursi_tiket'] ?></b></p>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
            <hr>
                        <a class="btn btn-danger" href="javascript:history.back()"> Geri Git</a>

          </div>
        </form>
      </div>
    </div>
  </div></div>
             
  <!-- Footer -->
  <?php $this->load->view('backend/include/base_footer'); ?>
         <?php $this->load->view('backend/include/base_js'); ?>
</body>
</html>