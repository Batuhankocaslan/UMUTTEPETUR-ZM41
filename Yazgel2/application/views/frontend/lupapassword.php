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
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body class="">
    		<?php $this->load->view('frontend/include/base_nav'); ?>
		<section class="generic-banner">
			<div class="container">
				<div class="row height align-items-center justify-content-center">
					<div class="col-lg-5">
						<div class="card card-login mx-auto mt-10">
							<div class="card-header">Şifremi Unuttum</div>
							<div class="card-body" align="left">
								<?php echo $this->session->flashdata('pesan'); ?>
								 <form action="<?php echo base_url('login/lupapassword') ?>" method="post" >
				                    <div class="form-group">
				                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder="Bir e-mail adresi girin...">
				                    </div>
				                    <?php echo form_error('email'),'<small class="text-danger pl-3">','</small>'; ?>
				                    <button class="btn btn-primary btn-user btn-block">
				                      Şifreyi Sıfırla
				                    </button>
				                  </form>
								<div class="text-center">
									<p><a class="d-block small mt-3" href="<?php echo base_url() ?>login/daftar">Üye Ol</a>
									<a class="d-block small" href="<?php echo base_url() ?>login">Giriş Yap</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- start footer Area -->
		<?php $this->load->view('frontend/include/base_footer'); ?>
		<!-- js -->
		<?php $this->load->view('frontend/include/base_js'); ?>
	</body>
</html>