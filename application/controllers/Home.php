<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        //ambil data modul 
        $data['terbaru'] = $this->m_modul->getTerbaru(4)->result_array();
        $data['expert'] = $this->m_modul->getExpert()->result_array();
        $data['bisnis'] = $this->m_modul->getKategori('bisnis')->result_array();
        $data['pemasaran'] = $this->m_modul->getKategori('pemasaran')->result_array();
        $data['manajemen_operasional'] = $this->m_modul->getKategori_2('manajemen', 'operasional')->result_array();
        $data['LID_modul_1'] = $this->m_modul->getModul_StartLimit('LatihID Modul', 3, 0)->result_array();
        $data['LID_modul_2'] = $this->m_modul->getModul_StartLimit('LatihID Modul', 3, 3)->result_array();
        $data['LID_talks_1'] = $this->m_modul->getModul_StartLimit('LatihID Talks', 3, 0)->result_array();
        $data['LID_talks_2'] = $this->m_modul->getModul_StartLimit('LatihID Talks', 3, 3)->result_array();
        // var_dump($this->m_modul->getKategori('Bisnis')->result_array());
        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }
}
