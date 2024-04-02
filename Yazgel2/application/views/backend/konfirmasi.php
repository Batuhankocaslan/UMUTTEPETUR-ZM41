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
      
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h1 class="h5 text-gray-800">Ödeme Listesi</h1>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                   <th>#</th>
                   <th>Kod</th>
                   <th>Rezervasyon Kodu</th>
                   <th>Gönderen </th>
                   <th>Banka </th>
                   <th>Hesap No.</th>
                   <th>Fiyat</th>
                   <th>Dekont</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1;foreach ($konfirmasi as $row) { ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['kd_konfirmasi']; ?></td>
                    <td><?= $row['kd_order']; ?></td>
                    <td><?= $row['nama_konfirmasi']; ?></td>
                    <td><?= $row['nama_bank_konfirmasi']; ?></td>
                    <td><?= $row['norek_konfirmasi']; ?></td>
                    <td>$<?= $row['total_konfirmasi']; ?></td>
                    <td><a href="<?= base_url('backend/konfirmasi/viewkonfirmasi/'.$row['kd_order']) ?>" class="btn btn btn-info">Görüntüle</a></td>
                  </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
            
  </div>
          
</div>
         <!-- Footer -->
<?php $this->load->view('backend/include/base_footer'); ?>
         </div>
         </div>     
                  
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<!-- js -->
<?php $this->load->view('backend/include/base_js'); ?>
</body>
</html>