<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
    }

    public function index()
    {
        $data['datas'] = $this->db->get_where('sekolah', ['id' => 43])->row_array();
        $data['title'] = 'Cetak | Data';

        $this->load->view('cetak', $data);
    }

    public function lihat($id)
    {
        $data['datas'] = $this->db->get_where('sekolah', ['id' => $id])->row_array();
        $data['title'] = 'Cetak | Data';
        $dompdf = new Dompdf();

        $html = $this->load->view('cetak', $data, true);

        $dompdf->load_html($html);

        // Setting ukuran dan orientasi kertas
        $dompdf->set_paper('A4', 'potrait');
        // Rendering dari HTML Ke PDF
        $dompdf->render();
        $pdf = $dompdf->output();
        $dompdf->stream('laporan.pdf', array('Attachment' => 0));
    }

    public function cetak_pdf($id)
    {
        $data['datas'] = $this->db->get_where('sekolah', ['id' => $id])->row_array();
        $data['title'] = 'Cetak | Data';
        $dompdf = new Dompdf();

        $html = $this->load->view('cetak', $data, true);

        $dompdf->load_html($html);
        // Setting ukuran dan orientasi kertas
        $dompdf->set_paper('A4', 'potrait');
        // Rendering dari HTML Ke PDF
        $dompdf->render();
        $dompdf->stream('Uwuw_' . $id . '.pdf');
    }
}
