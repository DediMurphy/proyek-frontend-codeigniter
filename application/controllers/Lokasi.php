<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('curl');
        $this->load->library('session');
    }

    public function createLokasi() {
        $this->load->view('input_lokasi');
    }

    public function storeLokasi() {
        $data = array(
            'namaLokasi' => $this->input->post('namaLokasi'),
            'negara' => $this->input->post('negara'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
        );
    
        $apiUrl = "http://localhost:8080/api/v1/lokasi";
        $response = $this->curl->simple_post(
            $apiUrl,
            json_encode($data),
            array(CURLOPT_HTTPHEADER => array('Content-Type: application/json'))
        );
    
        if ($response === FALSE) {
            $error = $this->curl->error_string;
            $this->session->set_flashdata('error', 'Gagal menyimpan data lokasi. Error: ' . $error);
        } else {
            $this->session->set_flashdata('message', 'Data lokasi berhasil disimpan.');
        }
    
        redirect('Dashboard/index');
    }

    public function updateLokasi($id) {
        $data = array(
            'namaLokasi' => $this->input->post('namaLokasi'),
            'negara' => $this->input->post('negara'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota')
        );
    
        $apiUrl = "http://localhost:8080/api/v1/lokasi/$id";
        $response = $this->curl->simple_put(
            $apiUrl,
            json_encode($data),
            array(CURLOPT_HTTPHEADER => array('Content-Type: application/json'), CURLOPT_RETURNTRANSFER => true)
        );
    
        if ($response === FALSE) {
            $error = $this->curl->error_string;
            $this->session->set_flashdata('error', 'Gagal memperbarui data lokasi. Error: ' . $error);
            echo 'CURL Error: ' . $error;
        } else {
            $this->session->set_flashdata('message', 'Data lokasi berhasil diperbarui.');
        }
    
        redirect('Dashboard/index');
    }

    public function editLokasi($id) {
        $apiUrl = "http://localhost:8080/api/v1/lokasi/$id";
        $response = $this->curl->simple_get($apiUrl, array(), array(CURLOPT_HTTPHEADER => array('Content-Type: application/json')));
    
        if ($response === FALSE) {
            $error = $this->curl->error_string;
            $this->session->set_flashdata('error', 'Gagal mengambil data lokasi. Error: ' . $error);
            redirect('ProyekLokasiController/index');
        } else {
            $data['lokasi'] = json_decode($response, true);
            $this->load->view('edit_lokasi', $data);
        }
    }

    public function deleteLokasi($id) {
        $apiUrl = "http://localhost:8080/api/v1/lokasi/$id";
        $response = $this->curl->simple_delete($apiUrl);
    
        if ($response) {
            $this->session->set_flashdata('error', 'Gagal menghapus data lokasi.');
        } else {
            $this->session->set_flashdata('message', 'Data lokasi berhasil dihapus.');
        } 
    
        redirect('Dashboard/index');
    }
}