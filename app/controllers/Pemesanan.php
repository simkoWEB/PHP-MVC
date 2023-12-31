<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Pemesanan extends Controller
{
    public function index()
    {
        $id_user = $_SESSION['id_user'];
        $data['judul'] = 'Pemesanan';
        $model = $this->model('Pemesanan_Model');

        $data['pemesananMasuk'] = $model->getPemesananMasuk($id_user);
        $data['pemesananTerkonfirmasi'] = $model->getPemesananTerkonfirmasi($id_user);

        $this->view('templates/header', $data);
        $this->view('pemilik_kost/pemesanan/index', $data);
        $this->view('templates/footer');
    }

    public function terima($id_pemesanan)
    {
        $model = $this->model('Pemesanan_Model');
        $model->terimaPesanan($id_pemesanan);

        header("Location: /PHP-MVC/public/pemesanan/index");
        exit();
    }

    public function tolak($id_pemesanan)
    {
        $model = $this->model('Pemesanan_Model');
        $model->tolakPesanan($id_pemesanan);

        header("Location: /PHP-MVC/public/pemesanan/index");
        exit();
    }
}
