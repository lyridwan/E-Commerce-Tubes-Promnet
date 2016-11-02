<div class="container">
	<hr class="hidden-xs" width="68%" align="left">
	<br class="visible-xs">
	<fieldset class="bingkai visible-xs">
		<legend align="center" class="jd-bingkai" style="font-size:20px"><strong>Belanja Berdasarkan Harga</strong></legend>
		<select class="form-control" id="cari-harga" onChange="window.location.href=this.value">
			<option selected disabled > -- Harga --</option>
			<option value="<?php echo site_url(); ?>/produk/belanja/-2000000">Kurang dari &le; Rp 2.000.000</option>
			<option value="<?php echo site_url(); ?>/produk/belanja/2000000-4000000" >Rp 2.000.000 - Rp 4.000.000</option>
			<option value="<?php echo site_url(); ?>/produk/belanja/4000000-6000000" >Rp 4.000.000 - Rp 6.000.000</option>
			<option value="<?php echo site_url(); ?>/produk/belanja/6000000-8000000" >Rp 6.000.000 - Rp 8.000.000</option>
			<option value="<?php echo site_url(); ?>/produk/belanja/8000000-10000000">Rp 8.000.000 - Rp 10.000.000</option>
			<option value="<?php echo site_url(); ?>/produk/belanja/10000000-">Lebih dari &ge; Rp 10.000.000</option>
		</select>
	</fieldset>
	<div class="row clearfix">
		<div class="col-md-4 column">
			
			<fieldset class="bingkai hidden-xs">
				<legend align="center" class="jd-bingkai"><strong>Keranjang Belanja Anda</strong></legend>
				<img src="<?php echo base_url(); ?>assets/img/beli.png" class="img-right" />
				<strong><?php echo $this->cart->total_items(); ?> item produk</strong>
				<div style="border-bottom:1px solid #264A5F; width:80%"></div>
				Total: <strong>Rp. <?php echo number_format($this->cart->total(),2,',','.'); ?></strong>
				<?php
				if($this->cart->total_items()>0)
				{
				?>
				<a class='btn btn-success btn-xs' href="<?php echo site_url(); ?>/keranjang"><div class="lihat-keranjang-kiri">Lihat Keranjang <span class='glyphicon glyphicon-shopping-cart'></span></div></a>
				<a class='btn btn-primary btn-xs' href="<?php echo site_url(); ?>/checkout"><div class="selesai-belanja-kanan">Selesai Belanja <span class='glyphicon glyphicon-check'></span></div></a>
				<?php
				} else { }
				?>
			</fieldset>
			<br>
			<fieldset class="bingkai hidden-xs">
				<legend align="center" class="jd-bingkai" style="font-size:20px"><strong>Belanja Berdasarkan Harga</strong></legend>
				<ul class="bds-hr" style="list-style:square">
					<li><a href="<?php echo site_url(); ?>/produk/belanja/-2000000">Kurang dari <strong>&le; Rp 2.000.000</strong></a></li>
					<li><a href="<?php echo site_url(); ?>/produk/belanja/2000000-4000000"><strong>Rp 2.000.000 - Rp 4.000.000</strong></a></li>
					<li><a href="<?php echo site_url(); ?>/produk/belanja/4000000-6000000"><strong>Rp 4.000.000 - Rp 6.000.000</strong></a></li>
					<li><a href="<?php echo site_url(); ?>/produk/belanja/6000000-8000000"><strong>Rp 6.000.000 - Rp 8.000.000</strong></a></li>
					<li><a href="<?php echo site_url(); ?>/produk/belanja/8000000-10000000"><strong>Rp 8.000.000 - Rp 10.000.000</strong></a></li>
					<li><a href="<?php echo site_url(); ?>/produk/belanja/10000000-">Lebih dari <strong>&ge; Rp 10.000.000</strong></a></li>
				</ul>
			</fieldset>
			<br>
			<fieldset class="bingkai">
				<legend align="center" class="jd-bingkai"><strong>Jasa Pengiriman Barang</strong></legend>
				
				<p align="center" style="margin:0px auto; padding:3px;"><a href="http://www.tiki-online.com/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/tiki.png" border="0" /></a></p>
				<p align="center" style="margin:0px auto; padding:3px;"><a href="http://www.esl-express.com/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/sl.png" border="0" /></a></p>
				<p align="center" style="margin:0px auto; padding:3px;"><a href="http://www.jne.co.id/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/jne.png" border="0" /></a></p>
				
			</fieldset><br><br>
		</div>
	</div>
	</div>