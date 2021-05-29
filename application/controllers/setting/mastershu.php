<?php
/*
* Aplikasi AKSIOMA (Aplikasi Keuangan Mikro Masyarakat Ekonomi Syariah) ver. 1.0
* Copyright (c) 2014
*
* file   : setting/mastershu.php
* author : Edi Suwoto S.Komp
* email  : edi.suwoto@gmail.com
*/
/*----------------------------------------------------------*/
class Mastershu extends Controller {
        
    function __construct()
    {
        parent::__construct();
        $this->authlib->cekcontr();
        $this->tema = $this->allfunct->getSetupapp('tema');
        $this->load->model('master_model','master');
        $this->load->model('admin_model','modelku');
        $this->nama_group = $this->authlib->getGroup($this->encrypt->decode($this->session->userdata('id_group')));
        $this->menuact = "setting";
        $this->menuactsub = "mastershu";
    }
    //---- Admin
    function index()
    {
        $data['idpeg'] = $this->session->userdata('username');
        $data['menunya'] = $this->authlib->loadMenu('0',$this->nama_group,$this->menuact,$this->menuactsub);
        $data['tema'] = $this->tema;
        $data['logo'] = $this->authlib->getLogo();
        $data['imgsrc'] = $this->authlib->getLogo();
        $data['master_suku_bunga'] = $this->db->get('master_suku_bunga')->result()[0];
        $data['scripts'] = [
            'setting/js/mastershu-js'
        ];
        $this->load->view('setting/mastershu',$data);
    }

    public function simpan()
    {
        $nama_suku_bunga = $this->input->post('nama_suku_bunga');
        $data = [];
        foreach ($nama_suku_bunga as $key => $nama_sk) {
            $data[] = [
                'nama_suku_bunga' => $nama_sk,
                'nilai_suku_bunga' => $this->input->post('nilai_suku_bunga')[$key]
            ];
        }
        $input = [
            'pajak_pph' => $this->input->post('pajak_pph'),
            'nama_dan_value_suku_bunga' => json_encode($data)
        ];

        // kosongkan dulu datanya
        $this->db->truncate('master_suku_bunga');

        // input datanya
        $this->db->insert('master_suku_bunga', $input);
        $result = $this->db->affected_rows();  

        if ($result) {
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            return redirect('setting/mastershu');
        } else {
            $this->session->set_flashdata('gagal', 'Gagal disimpan');
            return redirect('setting/mastershu');
        }
    }

}
/* End of file */