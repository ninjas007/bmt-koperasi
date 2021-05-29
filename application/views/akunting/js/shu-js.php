<script type="text/javascript">
	$('#searchLaporan').click(function(){
		let isitglawal =  revDate($('#tgllap1').val(),"-");
		let isitglakhir =  revDate($('#tgllap2').val(),"-");

		if (isitglawal == "" || isitglakhir == "") {
			alert('Tanggal tidak boleh kosong');
			return false;
		}

		if (Date.parse(isitglawal) > Date.parse(isitglakhir)) {
		    alert("Tanggal Awal Harus lebih kecil dari Tanggal Akhir");
		    return false;
		}
		if(($('#tgllap2').val().substr(6, 4) - $('#tgllap1').val().substr(6, 4)) > 0) {
		    selisihx = (($('#tgllap2').val().substr(3, 2)*1) + 12) - ($('#tgllap1').val().substr(3, 2)*1)
		    if(selisihx > 11) {
		        alert("Selisih Bulan Periode max 12 bulan");
		        return false;
		    }
		}
		isitglperiode = ($('#tgllap1').val() == $('#tgllap2').val()) ? cbulan($('#tgllap1').val()) : cbulan($('#tgllap1').val()) + "&nbsp;&nbsp;s/d&nbsp;&nbsp;" + cbulan($('#tgllap2').val());

		$.ajax({
			url: 'akunting/shu/filterTanggal',
			dataType: 'json',
			data: {
				tgl1: isitglawal,
				tgl2: isitglakhir
			},
			success: function(res) {
				$('.laporan-text').html(isitglperiode);
				// $('#tlaplaba').show();
				$('.shusebelumpajak').text(res.shu_sebelum_pajak);
			},
			error: function(err) {
				console.log(err);
			}
		})
	});

	$('#cetak').click(function(){
		$('#wrap-top',ctkframe.document).html($('#tlaplaba').html());
		$('table',ctkframe.document).css({ "width":"99%", "font-size":"12", "margin":"0" });
		window.ctkframe.print();
		return false;
	});
</script>