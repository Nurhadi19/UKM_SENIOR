<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index(){
        //load base url
        $this->load->helper('url');

        //model
        $this->load->model('Uk_model');
        $data['anggota_voli'] = $this->Uk_model->getUKVoli();
        $data['anggota_basket'] = $this->Uk_model->getUKBasket();
        $data['anggota_musik'] = $this->Uk_model->getUKMusik();
        $data['anggota_tari'] = $this->Uk_model->getUKTari();
        $data['anggota_bulutangkis'] = $this->Uk_model->getUKBulutangkis();
        $data['anggota_tenismeja'] = $this->Uk_model->getUKTenismeja();

        $this->load->view('admin/home', $data);
    }

    public function kta(){
        //load base url
        $this->load->helper('url');

        $this->load->view('admin/kta');
    }

    public function sop(){
        //load base url
        $this->load->helper('url');

        $this->load->view('admin/sop');
    }

    public function ad_art(){
        //load base url
        $this->load->helper('url');

        $this->load->view('admin/ad_art');
    }

    public function add_art(){
        $this->load->helper();

        $this->load->view('admin/add_file_art', array('error' => ' '));
    }

    public function art_aksi(){
        //model
        $this->load->model('File_model');

        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'pdf';
        $config['max_size']         = 0;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('filename'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/add_file_art', $error);
        }
        else
        {
            $upload_data = $this->upload->data();
            $data = array(
                'file' => $upload_data['file_name']
            );

            $this->File_model->insert($data);
            redirect('admin/ad_art');
        }
    }

    public function add_ad(){
        $this->load->helper();

        $this->load->view('admin/add_file_ad', array('error' => ' '));
    }

    public function ad_aksi(){
        //model
        $this->load->model('File_model');

        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'pdf';
        $config['max_size']         = 0;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('filename'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/add_file_ad', $error);
        }
        else
        {
            $upload_data = $this->upload->data();
            $data = array(
                'file' => $upload_data['file_name']
            );

            $this->File_model->insert($data);
            redirect('admin/ad_art');
        }
    }

    public function rekap(){
        //load base url
        $this->load->helper('url');

        $this->load->view('admin/rekap_absen');
    }

    public function anggota(){
        //load base url
        $this->load->helper('url');

        //model
        $this->load->model('Uk_model');
        $data['db'] = $this->Uk_model->getAnggota();

        $this->load->view('admin/anggota', $data);
    }

    public function profile(){
        //load base url
        $this->load->helper('url');

        $this->load->view('admin/profile');
    }

    public function add_anggota(){
        //load base url
        $this->load->helper('url');

        $this->load->view('admin/add_anggota');
    }

    public function anggota_aksi(){
        // perintah jalan model
        $this->load->model('Aksi_model');

        // perintah fungsi model jalan
        $this->Aksi_model->insertAnggota();

        // load helper url
        $this->load->helper('url');
        redirect('/admin/anggota');
    }

    public function edit_anggota($id_anggota){
        // load base url
        $this->load->helper('url');

        $this->load->model('Aksi_model');
        $data['anggota'] = $this->Aksi_model->detail($id_anggota);

        $this->load->view('admin/edit_anggota', $data);
    }

    public function delete_anggota(){
        // perintah jalan model
        $this->load->model('Aksi_model');

        // perintah fungsi model jalan
        $this->Aksi_model->deleteAnggota();

        // load helper url
        $this->load->helper('url');
        redirect('/admin/anggota');
    }

    public function editAnggota_aksi(){
        // perintah jalan model
        $this->load->model('Aksi_model');

        // perintah fungsi model jalan
        $this->Aksi_model->updateAnggota();

        // load helper url
        $this->load->helper('url');
        redirect('/admin/anggota');
    }

}