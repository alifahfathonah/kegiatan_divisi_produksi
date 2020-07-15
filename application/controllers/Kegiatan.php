
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kegiatan extends CI_Controller{

 
    public function data_kegiatan()
    {
    $this->load->view('kegiatan/v_kegiatan_filter');
    }

    public function tambah_kegiatan()
    {
    $this->load->view('kegiatan/v_tambah_kegiatan');
    }
    public function insert_kegiatan(){
        $kegiatan=$this->input->post("kegiatan");
        $waktu_kegiatan=$this->input->post("waktu_kegiatan");
        $output=$this->input->post("output");
        $uraian_kegiatan=$this->input->post("uraian_kegiatan");
        $kendala=$this->input->post("kendala");
        $tindak_lanjut=$this->input->post("tindak_lanjut");
        $indikators=$this->input->post("indikator");
        $penanggung_jawab=$this->input->post("penanggung_jawab");
        $penanggung_jawab2=$this->input->post("penanggung_jawab2");
        $penanggung_jawab3=$this->input->post("penanggung_jawab3");
        $penanggung_jawab4=$this->input->post("penanggung_jawab4");
        $penanggung_jawab5=$this->input->post("penanggung_jawab5");
        $penanggung_jawab6=$this->input->post("penanggung_jawab6");
        $keterangan=$this->input->post("keterangan");
        $this->m_kegiatan->tambah_kegiatan($kegiatan, $waktu_kegiatan, $output, $uraian_kegiatan, $kendala, $tindak_lanjut, $penanggung_jawab, $penanggung_jawab2,$penanggung_jawab3, $penanggung_jawab4, $penanggung_jawab5, $penanggung_jawab6,$indikators, $keterangan);
    }
}