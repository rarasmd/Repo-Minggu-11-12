<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Utama';

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Isi Nama Anda !'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Isi Alamat Anda !'
        ]);

        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('index', $data);
            $this->load->view('template/footer');
        } else {

            $upload_image = $_FILES['logo']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '6028';
                $config['upload_path'] = './assets/logo/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logo')) {

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('logo', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->db->insert('sekolah', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah ditambahkan.</div>');
            redirect('sekolah/awal');
        }
    }

    public function sekolah()
    {
        $data['title'] = 'Sekolah';
        $data['sekolah'] = $this->db->get('sekolah')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('sekolah', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal dihapus</div>');
            redirect('awal/sekolah');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('sekolah');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect('sekolah/awal/sekolah');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data';
        $data['sekolah'] = $this->db->get_where('sekolah', ['id' => $id])->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Isi Nama Anda !'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Isi Alamat Anda !'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('edit', $data);
            $this->load->view('template/footer');
        }
    }

    public function edit_upload()
    {
        $id = $this->input->post('id');
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat')
        ];
        $upload_image = $_FILES['logo']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '6028';
            $config['upload_path'] = './assets/logo/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('logo', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('sekolah');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah terupdate </div>');
        redirect('sekolah/awal/sekolah');
    }
}
