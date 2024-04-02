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
      <h1 class="h5 mb-2 text-gray-800">Sistem Yöneticilerinin Listesi</h1>
      <!-- DataTales Example -->
      
      <div class="card shadow mb-4">
        <div class="card-header py-3">
           <a href="<?= base_url('backend/admin/daftar') ?>" class="btn btn-success pull-right" >
           Erişim Hesabı Ekle
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                   <th>#</th>
                   <th>Yönetici Kodu</th>
                   <th>Ad</th>
                   <th>Kullanıcı adı</th>
                   <th>E-posta</th>
                   <th>Seviye</th>
                  <!-- <th>Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php $i=1;foreach ($admin as $row) { ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['kd_admin']; ?></td>
                    <td><?= $row['nama_admin']; ?></td>
                    <td><?= $row['username_admin']; ?></td>
                    <td><?= $row['email_admin']; ?></td>
                    <td><?php if ($row['level_admin'] == '1') { ?>
                      OWNER
                    <?php }else{ ?>
                      ADMİN
                    <?php } ?>
                    </td>
                    <!-- <td><a href="<?= base_url('backend/home/viewadmin/'.$row['kd_admin']) ?>" class="btn btn btn-info">View</a></td> -->
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
         <!-- Log on to   for more projects -->
         
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<!-- js -->
<?php $this->load->view('backend/include/base_js'); ?>
</body>
</html>