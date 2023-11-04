<?php 
defined("BASEPATH") OR exit("No direct script access allowed");
class pesertadidik extends CI_Controller {
    public function index(){
        $data['judul'] = "";
        $this->load->view("header",$data);
        $this->load->view("index",$data);
        $this->load->view("footer",$data);
    }
    public function datasiswa(){
        $data['judul'] = "";
        $this->load->view("header",$data);
        $this->load->view("index",$data);
        $this->load->view("footer",$data);
    }
    public function cetak(){
        $data['judul'] = "";
        $this->form_validation->set_rules(
            "nama",
            "Nama Siswa",
            [
                "required" => "Nama Wajib diisi",
            ]
        );
        $this->form_validation->set_rules(
            "nis",
            "Nomor Induk Siswa",
            "required|min_length[8]",
            [
                "required" => "NIS Wajib diisi",
                "min_length" => "NIS Terlalu Pendek!"
            ]
        );
        $this->form_validation->set_rules(
            "kelas",
            "Kelas",
            [
                "required" => "Kelas Wajib diisi",
            ]
        );
        $this->form_validation->set_rules(
            "tmpt_lahir",
            "Tempat Lahir",
            [
                "required" => "Tempat Lahir Wajib diisi",
            ]
        );
        $this->form_validation->set_rules(
            "tgl_lahir",
            "Tanggal Lahir",
            [
                "required" => "Tanggal Lahir Wajib diisi",
            ]
        );
        $this->form_validation->set_rules(
            "alamat",
            "Alamat",
            [
                "required" => "Alamat Wajib diisi",
            ]
        );
        $this->form_validation->set_rules(
            "jk",
            "Jenis Kelamin",
            [
                "required" => "Jenis Kelamin Wajib diisi",
            ]
        );
        $this->form_validation->set_rules(
            "agama",
            "Agama",
            [
                "required" => "Agama Wajib diisi",
            ]
        );
        if($this->form_validation->run() != true){
            $this->load->view("index");
        }else{
            $data2 = [
                "nama" => $this->input->post("nama"),
                "nis"=> $this->input->post("nis"),
                "kelas"=> $this->input->post("kelas"),
                "tmpt_lahir"=> $this->input->post("tmpt_lahir"),
                "tgl_lahir"=> $this->input->post("tgl_lahir"),
                "alamat"=> $this->input->post("alamat"),
                "jk"=> $this->input->post("jk"),
                "agama"=> $this->input->post("agama"),
            ];
            $this->load->view("header",$data);
            $this->load->view("index",$data);
            $this->load->view("v-datasiswa",$data2);
            $this->load->view("footer",$data);
        }
    }
}
