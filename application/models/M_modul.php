<?php

class M_modul extends CI_Model
{
    public function getTerbaru($limit)
    {
        $this->db->from('modul');
        $this->db->order_by('id_modul', 'DESC');
        $this->db->limit($limit);
        return $this->db->get();
    }
    public function getExpert()
    {
        $this->db->from('modul');
        $this->db->where('harga_modul >', 0);
        $this->db->order_by('id_modul', 'DESC');
        $this->db->limit(4);
        return $this->db->get();
    }
    public function getKategori($kategori)
    {
        $this->db->from('modul m');
        $this->db->join('modul_kategori mk', 'm.id_modul=mk.id_modul');
        $this->db->join('kategori k', 'k.id_kategori=mk.id_kategori');
        $this->db->where('nama_kategori', $kategori);
        $this->db->order_by('m.id_modul', 'DESC');
        $this->db->limit(4);
        return $this->db->get();
    }
    public function getKategori_2($kategori1, $kategori2)
    {
        $this->db->from('modul m');
        $this->db->join('modul_kategori mk', 'm.id_modul=mk.id_modul');
        $this->db->join('kategori k', 'k.id_kategori=mk.id_kategori');
        $this->db->where('nama_kategori', $kategori1);
        $this->db->or_where('nama_kategori', $kategori2);
        $this->db->order_by('m.id_modul', 'DESC');
        $this->db->limit(4);
        return $this->db->get();
    }
    public function getModul_StartLimit($kategori, $limit, $start)
    {
        $this->db->from('modul m');
        $this->db->join('modul_kategori mk', 'm.id_modul=mk.id_modul');
        $this->db->join('kategori k', 'k.id_kategori=mk.id_kategori');
        $this->db->where('nama_kategori', $kategori);
        $this->db->order_by('m.id_modul', 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get();
    }
}
