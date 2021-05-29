<script type="text/javascript">
	$('#tambah_dana').click(function(){
		$('.tbody').append(`<tr>
                         		<td>
                         			<input type="text" class="form-control" name="nama_suku_bunga[]" placeholder="Nama Cth: Dana Hibah" required>
                         		</td>
                         		<td>
                         			<input type="text" class="form-control valsk" name="nilai_suku_bunga[]" placeholder="Value (%)" required>
                         		</td>
                         		<td>
                         			<button class="btn btn-sm remove btn-danger">Hapus</button>
                         		</td>
                         	</tr>`);

		

		hapus();
		
		
	});

	function hapus()
	{
		$('.remove').click(function(){
			$(this).parent().parent().remove();
		});
	}

	function validasi_nsb()
	{
		total_persen = 0;
		$.each($('.valsk'), function(i, item) {
			total_persen += parseInt(item.value);
		})


		if (total_persen != 100) {
			alert('Total persen keseluruhan tidak boleh lebih atau kurang dari 100');
			$('.valsk').val(0);
			return false;
		}

		return true;
	}

	$('#submitshu').click(function(e){
		e.preventDefault();
		valid = validasi_nsb();

		if (valid) {
			$('#formshu').submit();
		}

	});

	hapus();
</script>