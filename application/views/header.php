<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Shopin | Lyra Online shop</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/fv.png" />
		<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
		<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
		<!--script src="js/less-1.3.3.min.js"></script-->
		<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
		
		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/awesome.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/mediaqueries.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/css/carousel.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/css/datepicker.css" rel="stylesheet">
		
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
		
		<!-- css3-mediaqueries.js for IE8 or older -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->
		<script src="<?php echo base_url(); ?>assets/js/carousel.js"></script>
		
		<script type="text/javascript">
		$(function(){
		$("#tanggal").datepicker({
		format:'yyyy-mm-dd'
		});
		});
		</script>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<![endif]-->
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/img/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/img/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/img/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/img/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="img/favicon.png">
		<link href="<?php echo base_url();?>assets2/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!-- Custom Theme files -->
		<!--theme-style-->
		<link href="<?php echo base_url();?>assets2/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!--//theme-style-->
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--theme-style-->
		<link href="<?php echo base_url();?>assets2/css/style4.css" rel="stylesheet" type="text/css" media="all" />
		<!--//theme-style-->
		<script src="<?php echo base_url();?>assets2/js/jquery.min.js"></script>
		<!--- start-rate---->
		<script src="<?php echo base_url();?>assets2/js/jstarbox.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets2/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					}
				})
			});
		});
		</script>
		<!---//End-rate---->
	</head>
	<body>
		
		<!--header-->
		<div class="header">
			<div class="container">
				<div class="head">
					<div class=" logo">
						<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets2/images/logo.png" alt=""></a>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="head-top">
					<div class="col-sm-8 col-md-offset-2 h_menu4">
						<nav class="navbar nav_bottom" role="navigation">
							
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
								
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav nav_1">
									<li><a class="color" href="<?php echo base_url();?>">Home</a></li>
									<?php
									if(count($d_kategori->result())>0){
									foreach($d_kategori->result() as $kt){?>
									<li>
										<a href="<?php echo site_url()."/produk/kategori/".$kt->id_kategori.""?>">
											<?php echo $kt->nama_kategori;?>
										</a>
									</li>
									<?php
														}
													}
													else
									{?>
									<li>
										<a href="#">Belum Ada Kategori</a>
									</li>
									<?php
									}?>
									<li><a class="color3" href="product.html">How to Buy?</a></li>
								</ul>
								</div><!-- /.navbar-collapse -->
							</nav>
						</div>
						
						<div class="col-sm-2 search-right">
							<ul class="nav navbar-nav navbar-right">
								
								<?php
								if($this->auth->is_logged_in() == false)
								{
								?>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class='glyphicon glyphicon-log-in'></span> Login <strong class="caret"></strong></a>
									<div class="dropdown-menu" style="padding: 15px;">
										<h4 style="color:#999999"><span class='glyphicon glyphicon-user'></span> Login Anggota</h4>
										<hr>
										<form action="<?php echo site_url();?>/home/login" class = "form-signin" method = "post" role = "form">
											<input type="input" name="username" class="form-control" placeholder="Username" required autofocus>
											<input type="password" name="password" class="form-control" placeholder="Password" required>
											<button class="btn btn-info btn-block" type="submit"  >Login</button>
										</form><br>
										<small style="color:#999999" class="form-signin-heading">Pelanggan Baru ? <?php echo anchor('home/daftar', 'Daftar Disini');?></small>
									</div>
								</li>
								<?php
								}
								else
								{
								?>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-user'></span> <?php echo $this->session->userdata('username');?> <strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="<?php echo site_url();?>/home/set_profil"><span class='glyphicon glyphicon-user'></span> Ubah Data Profil</a>
										</li>
										<li>
											<a href="<?php echo site_url();?>/home/set_pass"><span class='glyphicon glyphicon-asterisk'></span> Ubah Password</a>
										</li>
										<li>
											<a href="<?php echo site_url();?>/home/history"><span class='glyphicon glyphicon-list-alt'></span> History Transaksi</a>
										</li>
										<li>
											<a href="<?php echo site_url();?>/konfirmasi"><span class='glyphicon glyphicon-earphone'></span> Konfirmasi Pembayaran</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="<?php echo base_url()."index.php/home/logout";?>"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
										</li>
									</ul>
								</li>
								
								<?php
								}
								?>
							</ul>
							<!-- CART SECTION -->
							<div class="cart box_1" style="margin-top: 15px;" >
								<a href="<?php echo site_url(); ?>/keranjang">
									<h3>
									<div class="total">
										<span class=""><STRONG>( <?php echo $this->cart->total_items(); ?> )</STRONG></span>
									</div>
									<img src="<?php echo base_url();?>assets2/images/cart.png" alt=""/>
									</h3>
								</a>
								<!-- <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p> -->
							</div>
							<div class="clearfix"> </div>
							
							<!----->
							<!---pop-up-box---->
							<link href="<?php echo base_url();?>assets2/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
							<script src="<?php echo base_url();?>assets2/js/jquery.magnific-popup.js" type="text/javascript"></script>
							<!---//pop-up-box---->
							<div id="small-dialog" class="mfp-hide">
								<div class="search-top">
									<div class="login-search">
										<input type="submit" value="">
										<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
									</div>
									<p>Shopin</p>
								</div>
							</div>
							<script>
								$(document).ready(function() {
								$('.popup-with-zoom-anim').magnificPopup({
								type: 'inline',
								fixedContentPos: false,
								fixedBgPos: true,
								overflowY: 'auto',
								closeBtnInside: true,
								preloader: false,
								midClick: true,
								removalDelay: 300,
								mainClass: 'my-mfp-zoom-in'
								});
																											
								});
							</script>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
			
			<!--banner-->
			<div class="banner img-responsive">
				<div class="container">
					<section class="rw-wrapper">
						<h1 class="rw-sentence">
						<span>Fashion &amp; Beauty</span>
						<div class="rw-words rw-words-1">
							<span>Beautiful Designs</span>
							<span>Sed ut perspiciatis</span>
							<span> Totam rem aperiam</span>
							<span>Nemo enim ipsam</span>
							<span>Temporibus autem</span>
							<span>intelligent systems</span>
						</div>
						<div class="rw-words rw-words-2">
							<span>We denounce with right</span>
							<span>But in certain circum</span>
							<span>Sed ut perspiciatis unde</span>
							<span>There are many variation</span>
							<span>The generated Lorem Ipsum</span>
							<span>Excepteur sint occaecat</span>
						</div>
						</h1>
					</section>
				</div>
			</div>
			