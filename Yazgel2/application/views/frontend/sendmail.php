<!DOCTYPE html>
<html>
	<head>
		<title>Thank you</title>
		<meta NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		
	</head>
	<body style="font-family: tahoma; font-size: 12px;">
		<center>
		<table class="wrapper" width="600px" style="padding: 0; margin: 0; border-collapse: collapse; border: solid 1px #fd7521;">
			<tr class="header" style="background-color:#484B51;">
				<td style="padding-right:10px;" align="left">
					<a href="<?= base_url() ?>" target="_blank">
						<h4>UMUTTEPE TURİZM</h4>
					</a>
				</td>
				<td style="padding-right:10px;" align="right">
					<a href="<?= base_url() ?>" target="_blank">
						<img height="45" src="https://cdn4.iconfinder.com/data/icons/dot/256/bus.png" alt="">
					</a>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p style="text-align: justify; padding: 10px;">
					Sayın Müşterimiz,<br>
					Umuttepe Turizm'i kullandığınız için teşekkür ederiz.
					</p>
					<p style="text-align: justify; padding: 10px;">
					İşte Satın Alımlarınızın Özeti:
						<table width="100%" style="font-size: 14px; margin: 10px;">
								<tr>
								<td>
								Hesap Numarası Transferi Kılavuzu
									</td><td>:</td>
									<td>
										<strong><?= $sendmail['nomrek_bank']; ?></strong>
									</td>
								</tr>
								<tr>
								<td>
								On behalf of
									</td><td>:</td>
									<td>
										<strong><?= $sendmail['nasabah_bank']; ?></strong>
									</td>
								</tr>
								<tr>
									<td>
									Alıcı Banka
									</td>
									<td>:</td>
									<td>
										<strong><?= $sendmail['nama_bank']; ?></strong>
									</td>
								</tr>
								<tr>
									<td>
									Ödenen miktar
									</td>
									<td>:</td>
									<td>
										<?php $total = $count * $sendmail['harga_jadwal'] ?>
										<strong>₺ <?= number_format((float)($total),0,",","."); ?></strong>
									</td>
								</tr>
								<tr>
									<td>
									Rezervasyon Kodu
									</td>
									<td>:</td>
									<td>
										<strong><?= $sendmail['kd_order']; ?></strong>
									</td>
								</tr>
								<tr>
									<td>
									Satın Alma Açıklaması
									</td>
									<td>:</td>
									<td>
										<strong>Program Kodu <?= $sendmail['kd_jadwal'] ?></strong><br>
										<strong>Kalkış <?= hari_indo(date('N',strtotime($sendmail['tgl_berangkat_order']))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$sendmail['tgl_berangkat_order'].''))).', '.date('H:i',strtotime($sendmail['jam_berangkat_jadwal'])); ?></strong><br>
										<strong><?= $count; ?> Koltuk</strong>
									</td>
								</tr>
								<tr>
									<td>
									Satınalma tarihi
									</td>
									<td>:</td>
									<td>
										<strong><?= $sendmail['tgl_beli_order']; ?></strong>
									</td>
								</tr>
								<tr>
									<td>
									Şu tarihe kadar geçerlidir:
									</td>
									<td>:</td>
									<td>
										<strong><?php $expired = hari_indo(date('N',strtotime($sendmail['expired_order']))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$sendmail['expired_order'].''))).', '.date('H:i',strtotime($sendmail['expired_order'])); echo $expired;?></strong>
									</td>
								</tr>
									</table>
								</p>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<table width="100%" >
									<tr>
										<td>
											<div class="col-md-12 col-xs-12">
												<h4>Nasıl Transfer Edilir</h4>
												<div class="hr hr8 hr-double hr-dotted"></div>
												<div class="row">
													<div class="col-md-4">
														<div style="border:1px solid #fd7521;margin:2px;padding:5px;">
															<center><h4>ATM</h4></center>
															<div class="hr hr8 hr-double hr-dotted"></div>
															<ol style="padding:0;">
															<li>Ödeme Kılavuzu</li>
															<li>Menü <span class="label">Diğer İşlemler</span></li>'i seçin
															<li><span class="label">Aktar</span></li>'ı seçin
															<li>Seçin <span class="label">Hesaba <?= $sendmail['nama_bank'];; ?> </span></li>
															<li>Hesap Numarasını Girin <span class="label"><?= $sendmail['nomrek_bank']; ?></span></li>
															<li><span class="label">Sağ</span></li>'ı seçin
															<li><span class="label">Evet</span></li>'i seçin
															<li>Ödeme belgenizi alın</li>
															<li>Bitti</li>
															</ol>
														</div>
													</div>
													<div class="col-md-4">
														<div style="border:1px solid #fd7521;margin:2px;padding:5px;">
															<center><h4>MOBILE BANKING</h4></center>
															<div class="hr hr8 hr-double hr-dotted"></div>
															<ol style = "dolgu:0;">
															<li>Mobil Bankacılık'a Giriş Yapın</li>
															<li><span class="label">m-Transfer</span></li>'i seçin
															<li><span class="label">BCA Hesabı</span></li>'nı seçin
															<li>Hesap Numarasını Girin<span class="label"><?= $sendmail['nomrek_bank'] ?></span></li>
															<li><span class="label">Gönder</span></li>'i tıklayın
															<li>VA bilgileri görüntülenecek</li>
															<li><span class="label">Tamam</span></li>'ı tıklayın
															<li><span class="label">PIN</span></li> girin
															<li>Mobil Bankacılık</li>
															<li>Ödeme kanıtı görüntüleniyor</li>
															<li>Bitti</li>
															</ol>
														</div>
													</div>
													<div class="col-md-4">
														<div style="border:1px solid #fd7521;margin:2px;padding:5px;">
															<center><h4>INTERNET BANKING</h4></center>
															<div class="hr hr8 hr-double hr-dotted"></div>
															<ol style = "dolgu:0;">
															<li><span class="label">Fon İşlemleri</span></li>'ni seçin
															<li><span class="label">BCA Hesabına Aktar</span></li>'ı seçin
															<li>Hesap Numarasını Girin <span class="label"><?= $sendmail['nomrek_bank'] ?></span></li>
															<li></li>
															<li><span class="label">Devam</span></li>'ı tıklayın
															<li>Giriş Yanıtı <span class="label">KeyBCA Uygulaması 1</span></li>
															<li><span class="label">Gönder</span></li>'i tıklayın
															<li>Ödeme kanıtı görüntüleniyor</li>
															<li>Bitti</li>
															</ol>
														</div>
													</div>
												</div>
											</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p style="padding:10px;">
										<br>
										Saygılarımla<br>
										<span style="color:#fd7521;"><strong>Bus Ticket Booking System</strong></span>
										<br>
										<br>
									</p>
								</td>
							</tr>
							<tr>
								
							</tr>
							<tr class="footer" style="font-size: 10px; background-color: #484B51;color:#ffffff;">
								<td style="padding-left:10px; padding-right:10px;">
									<?= date("Y"); ?> &copy; BTBS
								</td>
								<td align="right" style="padding-left:10px; padding-right:10px;">
									<img height="30" src="https://cdn4.iconfinder.com/data/icons/dot/256/bus.png" border="0">
								</td>
							</tr>
						</table>
						</center>
					</body>
				</html>