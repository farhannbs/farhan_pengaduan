<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_farhan_admin extends CI_Controller
{
    // Dashboard Admin
    public function admin()
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
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_nabil_dashadmin', $data);
        $this->load->view('template_admin/footer', $data);
    }


    // controller petugas
    public function petugas()
    {
        $this->load->model('M_nabil_Admin');
        $data['lihat_petugas'] = $this->M_nabil_Admin->getPetugas();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Petugas';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_nabil_petugas', $data);
        $this->load->view('template_admin/footer', $data);
    }
    public function editPetugas($id)
    {

        $this->load->model('M_nabil_Admin');
        $nama_petugas = $this->input->post('nama_petugas');
        $username = $this->input->post('username');
        $telpon = $this->input->post('telpon');
        $level = $this->input->post('level');

        $update = array(
            'nama_petugas' => $nama_petugas,
            'username' => $username,
            'telpon' => $telpon,
            'level' => $level
        );

        $this->M_nabil_Admin->editPetugas($id, $update);
        redirect('petugas_admin');
    }
    public function hapusPetugas($id)
    {
        $this->load->model('M_nabil_Admin');
        $this->M_nabil_Admin->hapusPetugas($id);
        $this->session->set_flashdata('petugas', '<div class="alert alert-success" role="alert">
        Petugas berhasil dihapus!
          </div>');
        redirect('petugas_admin');
    }


    // Controller kategori dan subkategori
    public function kategori()
    {
        $this->load->model('M_nabil_Admin');
        $data['kategori'] = $this->M_nabil_Admin->getKategori();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['subkategori'] = $this->M_nabil_Admin->joinSubKategori();
        $data['title'] = 'Data Kategori';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_nabil_kategori', $data);
        $this->load->view('template_admin/footer', $data);
    }
    public function tambahKategori()
    {
        $this->load->model('M_nabil_Admin');

        $kategori = $this->input->post('kategori');

        $tambahKategori = array(
            'kategori' => $kategori,
        );

        $this->M_nabil_Admin->insertKategori($tambahKategori);
        redirect('kategori_admin');
    }
    public function editKategori($id)
    {

        $this->load->model('M_nabil_Admin');
        $kategori = $this->input->post('kategori');

        $update = array(
            'kategori' => $kategori
        );

        $this->M_nabil_Admin->editKategori($id, $update);
        redirect('kategori_admin');
    }
    public function hapusKategori($id)
    {
        $this->load->model('M_nabil_Admin');
        $this->M_nabil_Admin->hapusKategori($id);
        redirect('kategori_admin');
    }
    public function tambahSubKategori()
    {
        $this->load->model('M_nabil_Admin');

        $kategori = $this->input->post('kategori');
        $subkategori = $this->input->post('subkategori');

        $tambahSubKategori = array(
            'id_kategori' => $kategori,
            'subkategori' => $subkategori,
        );

        $this->M_nabil_Admin->joinSubKategori();
        $this->M_nabil_Admin->insertSubKategori($tambahSubKategori);
        redirect('kategori_admin');
    }
    public function editSubkategori($id)
    {

        $this->load->model('M_nabil_Admin');
        $subkategori = $this->input->post('subkategori');

        $update = array(
            'subkategori' => $subkategori
        );

        $this->M_nabil_Admin->editSubkategori($id, $update);
        redirect('kategori_admin');
    }

    public function hapusSubKategori($id)
    {
        $this->load->model('M_nabil_Admin');
        $this->M_nabil_Admin->hapusSubKategori($id);
        redirect('kategori_admin');
    }


    // Controller Masyarakat
    public function masyarakat()
    {
        $this->load->model('M_nabil_Admin');
        $data['masyarakat'] = $this->M_nabil_Admin->getMasyarakat();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['subkategori'] = $this->M_nabil_Admin->joinSubKategori();
        $data['title'] = 'Data Masyarakat';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_nabil_masyarakat', $data);
        $this->load->view('template_admin/footer', $data);
    }
    public function banMasyarakat($id)
    {

        $this->load->model('M_nabil_User');

        $update = array(
            'is_active' => 'not_active'
        );

        $this->M_nabil_User->banMasyarakat($id, $update);
        $this->session->set_flashdata('is_active', '<div class="alert alert-danger" role="alert">
    Masyarakat berhasil dibanned!
      </div>');
        redirect('masyarakat_admin');
    }
    public function aktifMasyarakat($id)
    {

        $this->load->model('M_nabil_User');

        $update = array(
            'is_active' => 'active'
        );

        $this->M_nabil_User->aktifMasyarakat($id, $update);
        $this->session->set_flashdata('is_active', '<div class="alert alert-success" role="alert">
    Masyarakat berhasil diaktifkan!
      </div>');
        redirect('masyarakat_admin');
    }


    // controller riwayat
    public function riwayat_admin()
    {
        $this->load->model('M_nabil_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['riwayatadmin'] = $this->M_nabil_Admin->getRiwayatAdmin();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Pengaduan';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_nabil_riwayat', $data);
        $this->load->view('template_admin/footer', $data);
    }


    // controller proses
    public function proses_admin($id)
    {
        $this->load->model('M_nabil_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['p'] = $this->M_nabil_Admin->proses($id);
        $data['prosestanggapan'] = $this->M_nabil_Admin->prosesTanggapan($id);
        $data['title'] = 'Laporan Proses';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_nabil_proses', $data);
        $this->load->view('template_admin/footer', $data);
    }
    public function upload_tanggapan($id_pengaduan)
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

        redirect('riwayat_admin');
    }


    // controller selesai
    public function selesai_admin($id)
    {
        $this->load->model('M_nabil_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['p'] = $this->M_nabil_Admin->proses($id);
        $data['prosestanggapan'] = $this->M_nabil_Admin->prosesTanggapan($id);
        $data['title'] = 'Laporan Selesai';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_nabil_selesai', $data);
        $this->load->view('template_admin/footer', $data);
    }
    public function update_status_selesai($id_pengaduan)
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
        redirect('C_farhan_admin/selesai_admin/' . $id_pengaduan);
    }


    // controller laporan
    public function laporan_pdf()
    {

        $this->load->model('M_nabil_Admin');
        $this->load->model('M_nabil_User');

        $data['user'] = $this->M_nabil_Admin->userData($this->session->userData('username'))->row_array();
        $data['masyarakat'] = $this->M_nabil_Admin->getMasyarakat();
        $data['petugas'] = $this->M_nabil_Admin->getPetugas();
        $pengaduan = $this->M_nabil_User->join_laporan();

        $data = array(
            "dataku" => array(
                "nama" => "Petani Kode",
                "url" => "http://petanikode.com"
            ),

            'pengaduan' => $pengaduan,
        );



        $this->load->library('Pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('admin/laporanpdf', $data);
    }


    public function profile()
    {
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Profile';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('template_admin/topbar', $data);
        $this->load->view('admin/v_nabil_profile', $data);
        $this->load->view('template_admin/footer', $data);
    }
}
