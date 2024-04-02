<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		    
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
		<link rel="shortcut icon" href="img/elements/fav.png">
    
		<meta name="author" content="colorlib">
    		<meta name="description" content="">
    		<meta name="keywords" content="">
    		<meta charset="UTF-8">
		     
		    
		<title>Get Tickets</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body>
    		<?php $this->load->view('frontend/include/base_nav'); ?>
		<section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-6">
   						<div class="card wobble animated">
					  <div class="card-header">
					  Ödeme onaylama
					  </div>
					  <div class="card-body">
					    <form action="<?= base_url() ?>tiket/insertkonfirmasi" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="exampleInputEmail1">Rezervasyon Kodu</label>
										<input type="text" id="" class="form-control" id="" name="kd_order" value="<?= $id ?>" placeholder="Bilet Kodu">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Bankanız</label>
										<select class="form-control" name="bank_km">
											<option value="" selected disabled="">Banka Seçiniz</option>
											<option value="New Leaf Bank" >Türkiye İş Bankası</option>
											<option value="Zenith Bank">Yapı Kredi Bankası</option>
											<option value="WestView Bank">ING Bank</option>
											<option value="Aurora">DenizBank</option>
											<option value="RoyalCrown Bank">Akbank</option>
										</select>
										     
										<!-- <select class="form-control" name="bank" required>
											<option value="" selected disabled="">Select Bank</option>
											<?php foreach ($bank as $row) { ?>
											<option value="<?php echo $row['kd_bank'] ?>"><?php echo $row['nama_bank']; ?></option>
											<?php } ?>
										</select> -->
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Account number</label>
										<input type="number" class="form-control" name="nomrek" value="" placeholder="Hesap Numarası">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Name of the sender</label>
										<input type="text" class="form-control" name="nama" value="" placeholder="Göndericinin Adı">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Payment Amount</label>
										<input type="number" class="form-control" name="total" value="<?= $total ?>" placeholder="Toplam Fiyat" readonly>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">İşlem Fotoğrafını Yükle</label>
										<input type="file" class="form-control" name="userfile" required="">
									</div>
									<button type="submit" class="btn btn-success pull-right">Gönder </button>
								</form>
					  </div>
					</div>
					</div>
			</section>
			<!-- End banner Area -->
			<!-- start footer Area -->
			<?php $this->load->view('frontend/include/base_footer'); ?>
			<!-- js -->
			<?php $this->load->view('frontend/include/base_js'); ?>
		</body>
	</html>