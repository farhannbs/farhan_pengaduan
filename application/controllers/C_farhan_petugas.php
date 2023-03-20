<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_farhan_petugas extends CI_Controller
{
    // controller Dashboard Petugas
    public function admin_petugas()
    {
        $this->load->model('M_nabil_Admin');

        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $pengaduan = $this->db->get('pengaduan')->num_rows();
        $proses = $this->db->get_where('pengaduan', ['status' => 'proses'])->num_rows();
        $selesai = $this->db->get_where('pengaduan', ['status' => 'selesai'])->num_rows();

        $data = array(
            'pengaduan' => $pengaduan,
            'proses' => $proses,
            'selesai' => $selesai
        );
        $data['title'] = 'Dashboard';
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['riwayatadmin'] = $this->M_nabil_Admin->getRiwayatAdmin();
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_nabil_dashpetugas', $data);
        $this->load->view('template_petugas/footer', $data);
    }


    // controller petugas
    public function tabel_petugas()
    {
        $this->load->model('M_nabil_Admin');
        $data['lihat_petugas'] = $this->M_nabil_Admin->getPetugas();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Petugas';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_nabil_petugas', $data);
        $this->load->view('template_petugas/footer', $data);
    }


    // controller kategori
    public function tabel_kategori()
    {
        $this->load->model('M_nabil_Admin');
        $data['kategori'] = $this->M_nabil_Admin->getKategori();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['subkategori'] = $this->M_nabil_Admin->joinSubKategori();
        $data['title'] = 'Data Kategori';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_nabil_kategoripetugas', $data);
        $this->load->view('template_petugas/footer', $data);
    }


    // controller masyarakat
    public function tabel_masyarakat()
    {
        $this->load->model('M_nabil_Admin');
        $data['masyarakat'] = $this->M_nabil_Admin->getMasyarakat();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['subkategori'] = $this->M_nabil_Admin->joinSubKategori();
        $data['title'] = 'Data Masyarakat';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_nabil_masyarakat', $data);
        $this->load->view('template_petugas/footer', $data);
    }
    public function petugasbanMasyarakat($id)
    {

        $this->load->model('M_nabil_User');

        $update = array(
            'is_active' => 'not_active'
        );

        $this->M_nabil_User->banMasyarakat($id, $update);
        $this->session->set_flashdata('is_active', '<div class="alert alert-danger" role="alert">
			Masyarakat berhasil dibanned!
		  	</div>');
        redirect('masyarakat_petugas');
    }
    public function petugasaktifMasyarakat($id)
    {

        $this->load->model('M_nabil_User');

        $update = array(
            'is_active' => 'active'
        );

        $this->M_nabil_User->aktifMasyarakat($id, $update);
        $this->session->set_flashdata('is_active', '<div class="alert alert-success" role="alert">
			Masyarakat berhasil diaktifkan!
		  	</div>');
        redirect('masyarakat_petugas');
    }


    // controller petugas
    public function riwayat_petugas()
    {
        $this->load->model('M_nabil_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['riwayatadmin'] = $this->M_nabil_Admin->getRiwayatAdmin();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Pengaduan';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_nabil_riwayatpetugas', $data);
        $this->load->view('template_petugas/footer', $data);
    }


    // controller proses
    public function proses_petugas($id)
    {
        $this->load->model('M_nabil_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['p'] = $this->M_nabil_Admin->proses($id);
        $data['prosestanggapan'] = $this->M_nabil_Admin->prosesTanggapan($id);
        $data['title'] = 'Laporan Proses';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_nabil_proses', $data);
        $this->load->view('template_petugas/footer', $data);
    }
    public function petugas_upload_tanggapan($id_pengaduan)
    {

        $this->load->model('M_nabil_Admin');


        $data_petugas = $this->M_nabil_Admin->petugasData($this->session->userData('username'))->row_array();

        $upload_data = array(
            'id_pengaduan' => $id_pengaduan,
            'tgl_tanggapan' => date('Y-m-d'),
            'tanggapan' => $this->input->post('tanggapan'),
            'id_petugas' => $data_petugas['id_petugas'],
        );

        $this->db->insert('tanggapan', $upload_data);


        $update = array(
            'status' => $this->input->post('status'),
        );

        $this->db->where('id_pengaduan', $id_pengaduan);
        $this->db->update('pengaduan', $update);

        redirect('riwayat_petugas');
    }


    // controller selesai
    public function selesai_petugas($id)
    {
        $this->load->model('M_nabil_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['p'] = $this->M_nabil_Admin->proses($id);
        $data['prosestanggapan'] = $this->M_nabil_Admin->prosesTanggapan($id);
        $data['title'] = 'Laporan Selesai';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_nabil_selesai', $data);
        $this->load->view('template_petugas/footer', $data);
    }
    public function petugas_update_status_selesai($id_pengaduan)
    {
        $this->load->model('M_nabil_Admin');

        $data_petugas = $this->M_nabil_Admin->petugasData($this->session->userData('username'))->row_array();

        $upload_data = array(
            'id_pengaduan' => $id_pengaduan,
            'tgl_tanggapan' => date('Y-m-d'),
            'tanggapan' => $this->input->post('tanggapan'),
            'id_petugas' => $data_petugas['id_petugas'],
        );

        $this->db->insert('tanggapan', $upload_data);

        $update = [
            'status' => 'selesai'
        ];

        $this->M_nabil_Admin->updateSelesai($id_pengaduan, $update);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
		Berhasil Menyelesaikan laporan ! ');
        redirect('C_farhan_petugas/selesai_petugas/' . $id_pengaduan);
    }


    public function Profile_petugas()
    {
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Profile';
        $this->load->view('template_petugas/header', $data);
        $this->load->view('template_petugas/sidebar', $data);
        $this->load->view('template_petugas/topbar', $data);
        $this->load->view('petugas/v_nabil_profile', $data);
        $this->load->view('template_petugas/footer', $data);
    }
}
