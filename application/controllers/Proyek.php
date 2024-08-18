<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {
    // CRUD untuk Proyek
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('curl');
        $this->load->library('session');
    }

    public function createProyek() {
        $this->load->view('input_proyek');
    }

    public function storeProyek() {
        $data = array(
            'namaProyek' => $this->input->post('namaProyek'),
            'client' => $this->input->post('client'),
            'tglMulai' => $this->input->post('tglMulai'),
            'tglSelesai' => $this->input->post('tglSelesai'),
            'pimpinanProyek' => $this->input->post('pimpinanProyek'),
            'keterangan' => $this->input->post('keterangan')
        );

        $apiUrl = "http://localhost:8080/api/v1/proyek";
        $response = $this->curl->simple_post(
            $apiUrl,
            json_encode($data),
            array(CURLOPT_HTTPHEADER => array('Content-Type: application/json'))
        );

        if ($response === FALSE) {
            $error = $this->curl->error_string;
            $this->session->set_flashdata('error', 'Gagal menyimpan data proyek. Error: ' . $error);
        } else {
            $this->session->set_flashdata('message', 'Data proyek berhasil disimpan.');
        }

        redirect('Dashboard/index');
    }

    public function updateProyek($id) {
        $data = array(
            'namaProyek' => $this->input->post('namaProyek'),
            'client' => $this->input->post('client'),
            'tglMulai' => $this->input->post('tglMulai'),
            'tglSelesai' => $this->input->post('tglSelesai'),
            'pimpinanProyek' => $this->input->post('pimpinanProyek'),
            'keterangan' => $this->input->post('keterangan'),
            'lokasiList' => $this->input->post('lokasiList') // Jika diperlukan
        );
    
        $apiUrl = "http://localhost:8080/api/v1/proyek/$id";
        $response = $this->curl->simple_put(
            $apiUrl,
            json_encode($data),
            array(CURLOPT_HTTPHEADER => array('Content-Type: application/json'), CURLOPT_RETURNTRANSFER => true)
        );
    
        if ($response === FALSE) {
            $error = $this->curl->error_string;
            $errorCode = $this->curl->error_code; // Jika tersedia
            $this->session->set_flashdata('error', 'Gagal memperbarui data proyek. Error: ' . $error . ' Code: ' . $errorCode);
            echo 'CURL Error: ' . $error . ' Code: ' . $errorCode;
        } else {
            $this->session->set_flashdata('message', 'Data proyek berhasil diperbarui.');
        }
    
        redirect('Dashboard/index');
    }

    public function editProyek($id) {
        $apiUrl = "http://localhost:8080/api/v1/proyek/$id";
        $response = $this->curl->simple_get($apiUrl, array(), array(CURLOPT_HTTPHEADER => array('Content-Type: application/json')));
    
        if ($response === FALSE) {
            $error = $this->curl->error_string;
            $this->session->set_flashdata('error', 'Gagal mengambil data proyek. Error: ' . $error);
            redirect('ProyekLokasiController/index');
        } else {
            $data['proyek'] = json_decode($response, true);
            $this->load->view('edit_proyek', $data);
        }
    }

    public function deleteProyek($id) {
        $apiUrl = "http://localhost:8080/api/v1/proyek/$id";
        $response = $this->curl->simple_delete($apiUrl);

        if ($response) {
            $this->session->set_flashdata('error', 'Gagal menghapus data proyek.');
        } else {
            $this->session->set_flashdata('message', 'Data proyek berhasil dihapus.');
        }

        redirect('Dashboard/index');
    }

}
