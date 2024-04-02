<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		    
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
		<link rel="shortcut icon" href="img/elements/fav.png">
    
		<meta name="author" content="colorlib">
    		<meta name="description" content="">
    		<meta name="keywords" content="">
    		<meta charset="UTF-8">
		     
		    
		<title>UMUTTEPE TURİZM</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<style type="text/css">
		.combined {
		-webkit-text-stroke: 1px black;
		color: white;
		text-shadow:
		2px  2px 0 #000,
		-1px -1px 0 #000,
		1px -1px 0 #000,
		-1px  1px 0 #000,
		1px  1px 0 #000;
		}
		.border-black{
		  color: blue;
		  /*border white with light shadow*/
		  text-shadow: 
		     2px   0  0   #000, 
		    -2px   0  0   #000, 
		     0    2px 0   #000, 
		     0   -2px 0   #000, 
		     1px  1px 0   #000, 
		    -1px -1px 0   #000, 
		     1px -1px 0   #000, 
		    -1px  1px 0   #000,
		     1px  1px 5px #000;
		}
		</style>
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body>
    		<?php $this->load->view('frontend/include/base_nav'); ?>
		<!-- start banner Area -->
		<section class="banner-area relative section-gap relative" id="home">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-end">
					<div class="banner-content col-lg-7 col-md-12">
						<!-- <h4  class="combined">Official Ticket Guarantee</h4> -->
							<h2 class="text-white" >
							Otobüs Bileti Rezervasyon Sistemi		
							</h2>
						<p class="text-white" >
						Otobüs bileti bulmak artık daha kolay, BTBS üzerinden online sipariş verebilirsiniz. Terminale veya acente ofisine gitmenize gerek yok, artık kolayca bilet satın alabilirsiniz. Hızlı ve Kolay Rezervasyon. Koltuk Seçmekte Ücretsiz. Her Gün En Ucuz. 7/24 Müşteri Hizmetleri. Tüm Sınıflar ve Rotalar.						</p>
						<a href="<?php echo base_url() ?>tiket" class="btn btn-danger text-uppercase">Bilet Ara</a>
					</div>
				</div>
			</div>
		</section>
		<section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 pb-40 header-text">
						<h1>OTOBÜS BİLETİ REZERVASYONU İÇİN ADIMLAR</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/b1.png" width="150" height="150" alt="">
							<h4>Yolculuk detaylarını seçin
							</h4>
							<p>
							Kalkış yerini, varış yerini, seyahat tarihini girin ve ardından <b>Ara</b>ya tıklayın
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/b2.png" width="150" height="150" alt="">
							<h4>Otobüs ve koltuk seçimi yapın</h4>
							<p>
							Otobüs, koltuk, kalkış yeri ve varış noktasını seçin, yolcu bilgilerini girin ve 'Ödeme'ye tıklayın
							</p>
						</div>
					</div>
					     
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/b3.png" width="150" height="150" alt="">
							<h4>Kolay Ödeme Yöntemi</h4>
							<p>
							Ödeme ATM transferi, internet bankacılığı yoluyla yapılabilir.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End service Area -->
		<!-- End feature Area -->
		     
		<!-- End Generic Start -->
		<!-- start footer Area -->
		<?php $this->load->view('frontend/include/base_footer'); ?>
		<!-- js -->
		<?php $this->load->view('frontend/include/base_js'); ?>
	</body>
</html>