<?php
class Tugasuts extends CI_controller
{
    public function index()

    {
        $this->load->view('view-form-tugasuts');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'nama mahasiswa',
        'required|min_length[3]', [
            'required' => 'Nama Mahasiswa Harus Diisi',
            'min_length' => 'Nama Terlalu Pendek'
        ]);

        $this->form_validation->set_rules('nis', 'Nis Mahasiswa',
        'required|min_length[3]', [
            'required' => 'Nis Mahasiswa Harus Diisi',
            'min_length' => 'Nis Terlalu Pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas Mahasiswa',
        'required|min_length[3]', [
            'required' => 'Kelas Mahasiswa Harus Diisi',
            'min_length' => 'Kelas Terlalu Pendek'
        ]);

        $this->form_validation->set_rules('tgl', 'Tanggal lahir Mahasiswa',
        'required|min_length[3]', [
            'required' => 'Tanggal lahir Mahasiswa Harus Diisi',
            'min_length' => 'Tanggal lahir Terlalu Pendek'
        ]);

        $this->form_validation->set_rules('tpl', 'Tempat lahir Mahasiswa',
        'required|min_length[3]', [
            'required' => 'Tempat lahir Mahasiswa Harus Diisi',
            'min_length' => 'Tempat lahirTerlalu Pendek'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat Mahasiswa',
        'required|min_length[3]', [
            'required' => 'Alamat Mahasiswa Harus Diisi',
            'min_length' => 'Alamat Terlalu Pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-tugasuts');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this-> input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tgl' => $this->input->post('tgl'),
                'tpl' => $this-> input->post('tpl'),
                'alamat' => $this->input->post('alamat'),
                'gender' => $this->input->post('gender'),
                'agama' => $this->input->post('agama')
            ];

            $this->load->view('view-data-tugasuts', $data);
        }
            
    }
}