<?php
class Admin extends CI_Controller
{

    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost/ci-restserver-master/";
    }

    // menampilkan data kontak
    function index()
    {
        if (isset($_POST['submit'])) {
            $data = [
                'id_admin' => $this->input->post('id_admin'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
            ];
            $insert =  $this->curl->simple_post($this->API . '/user', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            redirect('admin');
        } else {
            $data['dataadmin'] = json_decode($this->curl->simple_get($this->API . '/user'));
            $this->load->view('admin/list', $data);
        }
    }

    // insert data kontak
    function create()
    {
        if (isset($_POST['submit'])) {
            $data = [
                'id_admin' => $this->input->post('id_admin'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
            ];
            $insert =  $this->curl->simple_post($this->API . '/user', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            redirect('admin');
        } else {
            $this->load->view('admin/create');
        }
    }

    // edit data kontak
    function edit()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id_admin'       =>  $this->input->post('id_admin'),
                'username'       =>  $this->input->post('username'),
                'email'       =>  $this->input->post('email'),

            );
            $update =  $this->curl->simple_put($this->API . '/user', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                $this->session->set_flashdata('hasil', 'Update Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Update Data Gagal');
            }
            redirect('admin');
        } else {
            $params = array('id_admin' =>  $this->uri->segment(3));
            $data['dataadmin'] = json_decode($this->curl->simple_get($this->API . '/user', $params));
            $this->load->view('admin/edit', $data);
        }
    }

    // delete data kontak
    function delete($id)
    {
        if (empty($id)) {
            redirect('admin');
        } else {
            $delete =  $this->curl->simple_delete($this->API . '/user', ['id_admin' => $id], [CURLOPT_BUFFERSIZE => 10]);
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Delete Data Gagal');
            }
            redirect('admin');
        }
    }
}
