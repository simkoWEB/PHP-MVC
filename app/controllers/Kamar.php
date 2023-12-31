<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Kamar extends Controller
{
    public function index()
    {
        $id_kost = $this->model('dataKost_model')->getKostByUserId($_SESSION['id_user'])['id_kost'];
        $data['judul'] = 'Kamar';
        $data['kamar'] = $this->model('Kamar_model')->getAllKamar($id_kost);
        $data['id_lama'] = $this->model('Kamar_model')->getIDOtomatis();
        $data['id_sementara'] = substr($data['id_lama']['id_kamar'], -2);
        $data['id_baru'] = "KMR0" . $data['id_sementara'] + 1;
        $this->view('templates/header', $data);
        $this->view('pemilik_kost/kamar/index3', $data);
        $this->view('templates/footer');
    }
   
    public function addKamar()
    {
        $id_kost = $this->model('dataKost_model')->getKostByUserId($_SESSION['id_user'])['id_kost'];

        $dataKamar = [
            'id_kamar' => $_POST['id_kamar'],
            'nama_kamar' => $_POST['nama_kamar'],
            'fasilitas' => $_POST['fasilitas_kamar'],
            'ukuran' => $_POST['panjang_kamar'] . "x" . $_POST['lebar_kamar'],
            'harga_harian' => $_POST['harga_harian'],
            'harga_bulanan' => $_POST['harga_bulanan'],
            'harga_3bulan' => $_POST['harga_3bulanan'],
            'harga_tahunan' => $_POST['harga_tahunan']
        ];
        if ($this->model('Kamar_model')->addKamar($dataKamar, $id_kost) >= 0) {
            header('Location: http://localhost/PHP-MVC/public/kamar');
        } else {
            header('Location: http://localhost/PHP-MVC/public/kamar');
        }
    }

    public function hapusKamar($id_kamar)
    {
        if (isset($id_kamar)) {
            $deleted = $this->model('Kamar_model')->deleteKamar($id_kamar);
    
            if (!$deleted) {
                echo "Failed to delete record.";
            }
        } else {
            echo "Parameter not found.";
        }
        $this->index();
    }

    public function editKamar($id_kamar)
    {
        $kamar = $this->model('Kamar_model')->getKamarById($id_kamar);
        echo json_encode($kamar);
    }
    
    public function updateKamar()
    {
        $dataKamar = [
            'id_kamar' => $_POST['id_kamar_edit'],
            'nama_kamar' => $_POST['nama_kamar_edit'],
            'fasilitas' => $_POST['fasilitas_kamar_edit'],
            'ukuran' => $_POST['ukuran_kamar_panjang_edit'] . "x" . $_POST['ukuran_kamar_panjang_edit'],
            'harga_harian' => $_POST['harga_harian_edit'],
            'harga_bulanan' => $_POST['harga_bulanan_edit'],
            'harga_3bulanan' => $_POST['harga_3bulanan_edit'],
            'harga_tahunan' => $_POST['harga_tahunan_edit']
        ];

        if ($this->model('Kamar_model')->updateKamarById($dataKamar) >= 0) {
            header('Location: http://localhost/PHP-MVC/public/kamar');
        } else {
            header('Location: http://localhost/PHP-MVC/public/dashboard');
        }
    }


    public function testKamar()
    {
       echo "<script>";
       echo " alert('woi')";
       echo "</script>";
      
    }

}