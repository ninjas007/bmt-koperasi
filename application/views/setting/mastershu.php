<?php $this->load->view('setting/template/header') ?>
<div id="body">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">		
				<h3 class="page-title">
					Setting
				</h3>
				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="..">Home</a> 
						<i class="icon-angle-right"></i>
					</li>
					<li><a href="#">Setting</a></li>
				</ul>
			</div>
		</div>
		<?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
		</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('error')): ?>
		<div class="alert alert-danger" role="alert">
			<?php echo $this->session->flashdata('error'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
		</div>
		<?php endif; ?>
		<div id="page" class="dashboard">
            <div class="row-fluid">
                <div class="span12">
                     <div class="tab-content">
                         <div class="widget box blue">
                             <div class="widget-title">
                                <h4><i class="icon-cogs"></i>Setting Master SHU</h4>
                             </div>
                             <br>
                             <div class="row-fluid">
                                 <form class="form-horizontal" id="formshu" method="post" action="setting/mastershu/simpan">
                                     <table class="table" style="width: 50% !important;">
                                     	<tr>
                                     		<td align="right">Pajak Pph</td>
                                     		<td colspan="2">
                                     			<?php if (!empty($master_suku_bunga)): ?>
	                                 				<input type="number" class="form-control" name="pajak_pph" value="<?php echo $master_suku_bunga->pajak_pph ?>"> %
                                     			<?php else : ?>
                                     				<input type="number" class="form-control" name="pajak_pph" value="<?php echo $master_suku_bunga->pajak_pph ?>"> %
                                     			<?php endif ?>
                                     		</td>
                                     	</tr>
                                     	<tr>
                                     		<td colspan="3"><button type="button" class="btn btn-sm btn-primary" id="tambah_dana">Tambah SHU</button></td>
                                     	</tr>
                                     	<?php if (!empty($master_suku_bunga)): ?>
                                     		<tbody class="tbody">
                                     			<?php 
                                     				$msk_nama_value = json_decode($master_suku_bunga->nama_dan_value_suku_bunga); 
                                     				foreach ($msk_nama_value as $key => $value): 
                                     			?>
                                     				<tr>
						                         		<td>
						                         			<input type="text" class="form-control" name="nama_suku_bunga[]" placeholder="Nama Cth: Dana Hibah" value="<?php echo $value->nama_suku_bunga ?>" required>
						                         		</td>
						                         		<td>
						                         			<input type="number" class="form-control valsk" name="nilai_suku_bunga[]" placeholder="Value (%)" required value="<?php echo $value->nilai_suku_bunga ?>">
						                         		</td>
						                         		<td>
						                         			<button class="btn btn-sm remove btn-danger">Hapus</button>
						                         		</td>
						                         	</tr>
                                     			<?php endforeach ?>
                                     		</tbody>
                                     	<?php else: ?>
                                     		<tbody class="tbody"></tbody>
                                     	<?php endif ?>
                                     	<tfoot>
                                     		<tr>
                                     			<td colspan="3">
                                     				<button  type="button" class="btn btn-primary" id="submitshu"><i class="icon-ok"></i> Save</button>
                                     			</td>
                                     		</tr>
                                     	</tfoot>
                                     </table>
                                 </form>
                             </div>
                         </div>  
                    </div>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php $this->load->view('setting/template/footer') ?>