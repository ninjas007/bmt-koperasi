</div>
	<!-- <div id="footer">
		<br>BMT (Aplikasi Keuangan Mikro Masyarakat Ekonomi Syariah) ver. 1.0 ini dipersembahkan oleh <img src="assets/img/pegadaianc.png" alt="pegadaian" class="center" />
		<div class="span pull-right">
			<span class="go-top"><i class="icon-arrow-up"></i></span>
		</div>
	</div> -->
    <!-- Dialog Area -->
<?php 
	if (isset($scripts)) {
		foreach ($scripts as $script) {
			$this->load->view($script) . PHP_EOL;
		}
	}
 ?>
</body>
</html>