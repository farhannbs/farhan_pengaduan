<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_farhan_Masyarakat extends CI_Controller
{
    // Dashboard Masyarakat
    public function index()
    {

        $pengaduan = $this->db->get('pengaduan')->num_rows();
        $proses = $this->db->get_where('pengaduan', ['status' => 'proses'])->num_rows();
        $selesai = $this->db->get_where('pengaduan', ['status' => 'selesai'])->num_rows();

        $data = array(
            'pengaduan' => $pengaduan,
            'proses' => $proses,
            'selesai' => $selesai
        );

        $data['title'] = 'Dashboard';
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template_masyarakat/header', $data);
        $this->load->view('template_masyarakat/sidebar', $data);
        $this->load->view('template_masyarakat/topbar', $data);
        $this->load->view('masyarakat/v_nabil_dash', $data);
        $this->load->view('template_masyarakat/footer', $data);
    }


    // controller profile
    public function profile()
    {
        $data['title'] = 'Profile';
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template_masyarakat/header', $data);
        $this->load->view('template_masyarakat/sidebar', $data);
        $this->load->view('template_masyarakat/topbar', $data);
        $this->load->view('masyarakat/v_nabil_profile', $data);
        $this->load->view('template_masyarakat/footer', $data);
    }
    public function editProfile($nik)
    {
        $this->load->model('M_nabil_Admin');

        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $telepon = $this->input->post('telepon');

        $update = array(
            'nama_lengkap' => $nama_lengkap,
            'username' => $username,
            'telepon' => $telepon
        );
        $this->M_nabil_Admin->editProfile($nik, $update);
        redirect('profile_masyarakat');
    }


    // Controller Pengaduan Masyarakat
    public function pengaduan()
    {
        $data['title'] = 'Pangaduan';
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $this->load->view('template_masyarakat/header', $data);
        $this->load->view('template_masyarakat/sidebar', $data);
        $this->load->view('template_masyarakat/topbar', $data);
        $this->load->view('masyarakat/v_nabil_pengaduan', $data);
        $this->load->view('template_masyarakat/footer', $data);
    }
    public function tambahPengaduan()
    {
        $this->load->model('M_nabil_User');

        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            echo "Gagal Nambah";
        } else {
            $foto = $this->upload->data();
            $foto = $foto['file_name'];
            $user = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
            $subkategori = $this->input->post('subkategori');
            $kategori = $this->input->post('kategori');
            $laporan = $this->input->post('isi_laporan');

            $tambahPengaduan = array(

                'nik' => $user['nik'],
                'id_subkategori' => $subkategori,
                'id_kategori' => $kategori,
                'tgl_pengaduan' => date('Y-m-d'),
                'isi_laporan' => $laporan,
                'foto' => $foto,
            );

            $this->M_nabil_User->insertPengaduan($tambahPengaduan);
            $this->M_nabil_User->join_pengaduan();
            $this->session->set_flashdata('pengaduan', '<div class="alert alert-success" role="alert">Laporan berhasil di Tambahkan!</div>');
            redirect('riwayat_masyarakat');
        }
    }
    public function get_sub_kategori()
    {
        $id_kategori = $this->input->post('id');
        $sub_kategori = $this->db->get_where('subkategori', ['id_kategori' => $id_kategori])->result();
        echo json_encode($sub_kategori);
    }


    // controller riwayat
    public function riwayat()
    {
        $this->load->model('M_nabil_User');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['riwayat'] = $this->M_nabil_User->getRiwayat($masyarakat['nik']);
        $data['title'] = 'Riwayat';
        $this->load->view('template_masyarakat/header', $data);
        $this->load->view('template_masyarakat/sidebar', $data);
        $this->load->view('template_masyarakat/topbar', $data);
        $this->load->view('masyarakat/v_nabil_riwayat', $data);
        $this->load->view('template_masyarakat/footer', $data);
    }


    // controller proses
    public function proses_masyarakat($id)
    {
        $this->load->model('M_nabil_Admin');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['p'] = $this->M_nabil_Admin->proses($id);
        $data['prosestanggapan'] = $this->M_nabil_Admin->MasyarakatprosesTanggapan($id);
        $data['title'] = 'Laporan Proses';
        $this->load->view('template_masyarakat/header', $data);
        $this->load->view('template_masyarakat/sidebar', $data);
        $this->load->view('template_masyarakat/topbar', $data);
        $this->load->view('masyarakat/v_nabil_prosesmasyarakat', $data);
        $this->load->view('template_masyarakat/footer', $data);
    }
}