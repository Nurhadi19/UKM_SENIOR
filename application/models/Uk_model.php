<?php

class Uk_model extends CI_Model {

    public function getUKVoli(){
        $this->load->database();

        $sql = $this->db->query("SELECT * FROM anggota WHERE uk='Voli' AND status_anggota='Aktif'");
        $hasil = $sql->num_rows();

        return $hasil;
    }

    public function getUKBasket(){
        $this->load->database();

        $sql = $this->db->query("SELECT * FROM anggota WHERE uk='Basket' AND status_anggota='Aktif'");
        $hasil = $sql->num_rows();

        return $hasil;
    }

    public function getUKMusik(){
        $this->load->database();

        $sql = $this->db->query("SELECT * FROM anggota WHERE uk='Musik' AND status_anggota='Aktif'");
        $hasil = $sql->num_rows();

        return $hasil;
    }

    public function getUKTari(){
        $this->load->database();

        $sql = $this->db->query("SELECT * FROM anggota WHERE uk='Tari' AND status_anggota='Aktif'");
        $hasil = $sql->num_rows();

        return $hasil;
    }

    public function getUKBulutangkis(){
        $this->load->database();

        $sql = $this->db->query("SELECT * FROM anggota WHERE uk='Bulu Tangkis' AND status_anggota='Aktif'");
        $hasil = $sql->num_rows();

        return $hasil;
    }

    public function getUKTenismeja(){
        $this->load->database();

        $sql = $this->db->query("SELECT * FROM anggota WHERE uk='Tenis Meja' AND status_anggota='Aktif'");
        $hasil = $sql->num_rows();

        return $hasil;
    }

    public function getAnggota(){
        $this->load->database();

        $sql = $this->db->query('SELECT * FROM anggota');
        $hasil = $sql->result();

        return $hasil;
    }
}