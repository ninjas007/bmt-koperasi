<?php $this->load->view('akunting/template/header') ?>

<div id="body">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <h3 class="page-title">
                Akunting
                </h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="..">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="#">Akunting</a><i class="icon-angle-right"></i></li>
                    <li><a href="#">SHU</a></li>
                </ul>
            </div>
        </div>
        <div id="page" class="dashboard">
            <div class="row-fluid">
                <div class="span12">
                    <div class="tabbable tabbable-custom boxless">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tabs-1" data-toggle="tab">Laporan SHU</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1">
                                <div id="table_laplaba" class="ui-grid ui-widget ui-widget-content ui-corner-all">
                                    <div class="filter ui-grid-header ui-widget-header ui-corner-top">
                                        Tanggal :  <input class="tgl m-wrap m-ctrl-medium date-picker" size="10" id="tgllap1"/>  s/d  <input class="tgl m-wrap m-ctrl-medium date-picker" size="10" id="tgllap2"/>
                                        <button class="ui-state-default ui-corner-all" id="searchLaporan">Buat Report</button>
                                        <p class="infonya"></p>
                                    </div>
                                    <div style="width:100%;background:#fff">
                                        <div id="tlaplaba">
                                            <table style="margin-left:5px;width:99%;color:#000">
                                                <thead>
                                                <tr>
                                                    <td colspan="4" align="center" style="font-size: 18px;"><b>Laporan SHU <br><span id="bmttitle" style="font-size: 18px;"></b></span></td>
                                                </tr>
                                                </thead>
                                                <?php 

                                                    $shu_setelah_pajak = $shu_sebelum_pajak * ($master_suku_bunga->pajak_pph / 100);

                                                 ?>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center laporan-text" colspan="3" style="font-size: 16px; font-weight: bold;"><?php echo "Laporan SHU Periode ".date('d-m-Y')." - ". date('d-m-Y'); ?></td>
                                                    </tr>
                                                    <tr style="background-color: #ccc; font-weight: bold;">
                                                        <td colspan="2">SHU Sebelum Pajak</td>
                                                        <td class="shusebelumpajak"><?php echo $shu_sebelum_pajak ?></td>
                                                    </tr>
                                                    <tr style="background-color: #ccc; font-weight: bold;">
                                                        <td colspan="2">Pajak PPh (<?php echo $master_suku_bunga->pajak_pph ?> %)</td>
                                                        <td><?php echo $shu_sebelum_pajak * ($master_suku_bunga->pajak_pph / 100) ?></td>
                                                    </tr>
                                                    <tr style="background-color: #ccc; font-weight: bold;">
                                                        <td colspan="2">SHU Setelah Pajak</td>
                                                        <td><?php echo $shu_setelah_pajak ; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><br></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" style="font-weight: bold;">PEMBAGIAN SHU UNTUK DANA-DANA</td>
                                                    </tr>
                                                    <?php 
                                                        $sk_dana = json_decode($master_suku_bunga->nama_dan_value_suku_bunga);
                                                        foreach ($sk_dana as $key => $dana):
                                                     ?>
                                                        <tr>
                                                            <td><?php echo $dana->nama_suku_bunga ?></td>
                                                            <td width="80"><?php echo $dana->nilai_suku_bunga ?>%</td>
                                                            <td width="30"><?php echo $shu_setelah_pajak * ($dana->nilai_suku_bunga / 100) ?></td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br/><br/>
                                        <div class="ui-grid-footer ui-widget-header ui-corner-bottom" align="right"><button class="ui-state-default ui-corner-all" id="cetak"><img src="assets/images/printer.png"> Cetak</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<iframe name="ctkframe" id="ctkframe" style="width:0px;height:0px;border:0" src="akunting/shu/cetak"></iframe>
<?php $this->load->view('akunting/template/footer') ?>