<?php

class pesertadidik extends CI_Controller
{

    public function index()
    {
        $this->load->view("header");
        $this->load->view("index");
        $this->load->view("footer");
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            "nis",
            "NIS",
            "required|min_length[5]",
            [
                "required" => "NIS Harus diisi!",
                "min_length" => "Kode Terlalu Pendek!"
            ]
        );
        $this->form_validation->set_rules(
            "nama",
            "Nama",
            "required",
            ["required" => "Nama Harus diisi!"]
        );
        $this->form_validation->set_rules(
            "kelas",
            "Kelas",
            "required",
            ["required" => "Kelas Harus diisi!"]
        );
        $this->form_validation->set_rules(
            "tmpt_lahir",
            "Tempat Lahir",
            "required",
            ["required" => "Tempat Lahir Harus diisi!"]
        );
        $this->form_validation->set_rules(
            "tgl_lahir",
            "Tanggal Lahir",
            "required",
            ["required" => "Tanggal Lahir Harus diisi!"]
        );
        $this->form_validation->set_rules(
            "alamat",
            "Alamat",
            "required",
            ["required" => "Alamat Harus diisi!"]
        );
        $this->form_validation->set_rules(
            "jk",
            "Jenis Kelamin",
            "required",
            ["required" => "Jenis Kelamin Harus diisi!"]
        );
        $this->form_validation->set_rules(
            "agama",
            "Agama",
            "required",
            ["required" => "Agama Harus diisi!"]
        );

        if ($this->form_validation->run() != true) {
            $this->load->view("header");
            $this->load->view("index");
            $this->load->view("footer");
        } else {
            $this->load->view("header");
            $data = [
                "nama" => $this->input->post("nama"),
                "nis" => $this->input->post("nis"),
                "kelas" => $this->input->post("kelas"),
                "tmpt_lahir" => $this->input->post("tmpt_lahir"),
                "tgl_lahir" => $this->input->post("tgl_lahir"),
                "alamat" => $this->input->post("alamat"),
                "jk" => $this->input->post("jk"),
                "agama" => $this->input->post("agama"),
            ];
            $this->load->view('v-datasiswa', $data);
            $this->load->view("footer");
        }
    }
}
