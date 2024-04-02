<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	    
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/elements/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	     
	    
	<title><?php echo $title ?></title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
	<?php $this->load->view('frontend/include/base_css'); ?>
</head>

<body>
	<!-- navbar -->
	<?php $this->load->view('frontend/include/base_nav'); ?>
	<section class="service-area section-gap relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!-- Default Card Example -->
					<div class="card mb-5">
						<div class="card-header">
							<i class="fas fa-search"></i> Bilet Ara
						</div>
						<div class="card-body">
							<div class="alert alert-warning" role="alert">
								<p><b>ÖNEMLİ!!</b></p>
								<P>Bilet Almadan Önce Lütfen Bir Göz Atın>> <b><i data-toggle="modal"
											data-target="#exampleModal">Nasıl rezerve edilir?</i></b></P>
							</div>
							<form action="<?php echo base_url() ?>tiket/cekjadwal?>" method="get">
								<div class="form-group">
									<label for="exampleInputEmail1">Tarih Seçin</label>
									<input placeholder="Tarih Seçin" type="text" class="form-control datepicker"
										name="tanggal" required="">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Nereden</label>
									<select name="asal" class="form-control js-example-basic-single" required>
										<option value="" selected disabled="">Kalkış Noktası Seçin</option>
										<?php foreach ($asal as $row ) { ?>
										<option value="<?php echo $row['kd_tujuan'] ?>">
											<?php echo strtoupper($row['kota_tujuan']) ?>
											- <br><?php echo $row['terminal_tujuan']; ?> </option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Nereye</label>
									<select name="tujuan" class="form-control js-example-basic-single">
										<option value="" selected disabled="">Varış Noktası Seçin</option>
										<?php foreach ($tujuan as $row ) { ?>
										<option value="<?php echo $row['kota_tujuan'] ?>">
											<?php echo strtoupper($row['kota_tujuan']); ?></option>
										<?php } ?>
									</select>
								</div>
								<a href="<?php echo base_url() ?>tiket" class="btn btn-danger pull-left">Geri Git </a>
								<button type="submit" class="btn btn-primary pull-right">Ara </button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card mb-10">
						<div class="card-header">
							<i class="fas fa-info"></i> Terminal Bilgileri
						</div>
						<div class="card-body">
							<table class="table table-bordered table-condensed" style="font-size:12px;" id="mydata">
								<thead>
									<tr>
										<th style="text-align:center;">Şehir</th>
										<th>Terminal</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($list as $value) { ?>
									<tr>
										<td style="text-align:center;vertical-align:middle">
											<?php echo strtoupper($value['kota_tujuan']) ?></td>
										<td style="vertical-align:middle;"><?php echo $value['terminal_tujuan'] ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End banner Area -->
	     
	<!-- start footer Area -->
	<?php $this->load->view('frontend/include/base_footer'); ?>
	<!-- js -->

	<?php $this->load->view('frontend/include/base_js'); ?>
	<script type="text/javascript">
		$(function () {
			var date = new Date();
			date.setDate(date.getDate());

			$(".datepicker").datepicker({
				startDate: date,
				format: 'yyyy-mm-dd',
				autoclose: true,
				todayHighlight: true,
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.js-example-basic-single').select2();
		});
	</script>
</body>

</html>
              
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">How to book tickets?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<ol class="ordered-list" align="justify"><span class="center_content2">
					<li>Mevcut programları aramak için tarihi seçin ve kalkış ve varış terminalinizi/şehirinizi seçin.
							<li>Bilet arayın ve ardından rezervasyon yapmak istediğiniz biletin üzerindeki <b>Seç </b> düğmesini tıklayın.
							</li>
							<li>Sistem sizi, <b>herhangi bir koltuğu seçmeniz</b> gereken koltuk seçim sayfasına yönlendirecektir [bir seferde maksimum 4 koltuk]</li>
							<li>Koltuk seçiminden sonra, devam etmek için <b>İleri </b>düğmesini tıklayın. </li>
							<li>Yolcunun Adı, Yaşı ve diğer gerekli <b>Müşteri Kimliği</b> gibi müşteri bilgilerini sağlayarak bilet ayrıntılarınızı doldurun. Bilet rezervasyonu yapmak için mevcut bankalardan herhangi birini [Ödeme Yöntemi olarak] seçin.</li>
							<li>Form gönderildikten sonra rezervasyonlar <b>[geçici olarak]</b> yapılır. Sistem size bir <b>QR Kodu</b> sağlayacak ve ödeme yapmanız gerekecek.</li>
							<li>Tüm ödeme talimatları bilet sayfasında verilmiştir.</li>
							<li>Bunun ardından <b>Ödeme Onayı</b> düğmesini tıklayarak ödeme ayrıntılarınızı <b>kanıt resmi</b> ekiyle birlikte gönderin.</li>
							<li>Sonunda ödeme isteğiniz <b>doğrulama</b> için gönderilecek. </li>
							<li>Ödeme doğrulandıktan sonra da bir kez <b>E-Bilet</b> alacaksınız. </li>
							<li>Ödeme yaptıysanız, ayrılırken ödeme belgesini getirin ve ayrılmadan bir saat önce bozdurun. </li>
							</span></ol>
					<w:worddocument></w:worddocument>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
			</div>
		</div>
	</div>
</div>