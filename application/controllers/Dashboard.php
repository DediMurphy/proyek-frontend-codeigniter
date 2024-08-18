<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('curl'); // Library CURL untuk mengambil data dari API
    }

    public function index() {
        // URL API untuk Proyek dan Lokasi
        $apiUrlProyek = "http://localhost:8080/api/v1/proyek";
        $apiUrlLokasi = "http://localhost:8080/api/v1/lokasi";
        
        // Mengambil data Proyek dari API
        $proyekData = json_decode($this->curl->simple_get($apiUrlProyek));
        
        // Mengambil data Lokasi dari API
        $lokasiData = json_decode($this->curl->simple_get($apiUrlLokasi));

        // Mengirim data ke view
        $data['proyek'] = $proyekData;
        $data['lokasi'] = $lokasiData;
        $this->load->view('dashboard', $data);
    }
}
