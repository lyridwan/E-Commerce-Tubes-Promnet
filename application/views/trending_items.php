<!-- PRODUCT SLIDER -->
			<!--products-->
			<br>
			<div class="content-mid">
				<h3>Trending Items</h3>
				<label class="line"></label>
			</div>
			<br>
			<div class="row clearfix">
				<div class="col-md-10 col-md-offset-1">
					<div id='carousel-container' class="hidden-xs"> <!-- sebagai penampung / induk elemen -->
					<div id='nav-carousel-left'><a href='javascript:slide("left");'>&#171;</a></div> <!--navigasi kiri-->
					<div id='carousel'>
						<ul>
							<?php
							foreach($slide_atas->result_array() as $sa)
							{
							
							$c = array (' ');
							$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
							$s = strtolower(str_replace($d,"",$sa['nama_produk']));
							$link = strtolower(str_replace($c, '-', $s));
							echo '
							<li>
												<a href="'.site_url().'/produk/detail/'.strtolower($sa['id_produk']).'-'.$link.'" class="vtip" title="'.$sa['nama_produk'].' - Harga Rp.'.number_format($sa['harga'],2,',','.').'">
																	<div class="carousel-thumb">
																						<img src="'.base_url().'assets/produk/'.$sa['gbr_kecil'].'" alt="'.$sa['nama_produk'].'">
																						<p >'.$sa['nama_produk'].'
																						</div>
																	</a>
												</li> ';
												}
								?>
								<!-- tambahkan lagi item baru disini di antara tag <li> </li> -->
								
							</ul>
							</div><!--#carousel-->
							
							<div id='nav-carousel-right'>
								<a href='javascript:slide("right");'>&#187;</a></div><!--navigasi kanan-->
								<input type='hidden' id='hidden_auto_slide_seconds' value=0 />
								
								</div><!--#carousel-container-->
								
							</div>
						</div>