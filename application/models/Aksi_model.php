<?php

class Aksi_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertAnggota(){
        
       

        // helper form
        $this->load->helper('form');

        //tangkap data
        $nama = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');
        $status_anggota = $this->input->post('status_anggota');
        $hp = $this->input->post('hp');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
        $uk = $this->input->post('uk');
        $periode = $this->input->post('periode');
        $pentas = $this->input->post('pentas');

        $sql = $this->db->query("INSERT INTO anggota(nama_lengkap, keterangan, status_anggota, no_hp, jenis_kelamin, agama, uk, periode, pentas) 
                                VALUES('$nama','$keterangan','$status_anggota','$hp','$jk','$agama','$uk','$periode','$pentas')");

        return ;
    }

    public function detail($id_anggota){

        $sql = $this->db->query("SELECT * FROM anggota WHERE id_anggota='$id_anggota'");
        $hasil = $sql->result_array();

        return $hasil;
    }

    public function updateAnggota(){
        // helper form
        $this->load->helper('form');

        //tangkap data
        $id_anggota = $this->input->post('id_anggota');
        $nama = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');
        $status_anggota = $this->input->post('status_anggota');
        $hp = $this->input->post('hp');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
        $uk = $this->input->post('uk');
        $periode = $this->input->post('periode');
        $pentas = $this->input->post('pentas');
        
        $sql =  $this->db->query("UPDATE anggota SET nama_lengkap='$nama', keterangan='$keterangan', status_anggota='$status_anggota', no_hp='$hp', jenis_kelamin='$jk', agama='$agama', uk='$uk', periode='$periode', pentas='$pentas' WHERE id_anggota='$id_anggota'");

        return;
    }

    public function deleteAnggota(){
        // bikin koneksi
        $this->load->database();

        // helper form
        $this->load->helper('form');

        // tangkap data
        $id_anggota = $_GET['id_anggota'];

        $sql = $this->db->query("DELETE FROM anggota WHERE id_anggota='$id_anggota'");

        return;
    }
}