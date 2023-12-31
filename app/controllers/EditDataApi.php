
<?php
class EditDataApi extends Controller
{
    public function editUser($idUser)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama_lengkap'];
            $fotoBase64 = $_POST['foto_user']; // Terima gambar dalam bentuk base64
            $noHp = $_POST['no_hp'];
            $alamat = $_POST['alamat'];
            $jk = $_POST['jenis_kelamin'];
            $tglLahir = $_POST['tggl_lahir'];
            $edit_user_model = $this->model('EditDataApi_model');

            // Panggil fungsi updateUser dengan data yang diterima
            $success = $edit_user_model->updateUser($nama, $fotoBase64, $noHp, $alamat, $jk, $tglLahir, $idUser);

            if ($success) {
                $response = array(
                    'code' => 200,
                    'status' => 'Update User Sukses',
                );
            } else {
                $response = array(
                    'code' => 400,
                    'status' => 'Gagal mengubah data user',
                );
            }
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Data tidak ditemukan',
            );
        }
        echo json_encode($response);
    }


    public function checkEmail()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Pastikan untuk melakukan sanitasi dan validasi terhadap data input
            if (isset($_POST['email'])) {
                $email = $_POST['email'];

                // Lakukan validasi terhadap format email jika diperlukan

                $edit_user_model = $this->model('EditDataApi_model');

                $storedUserData = $edit_user_model->getStoredUserData($email);

                if ($storedUserData !== null) {
                    $response = array(
                        'code' => 200,
                        'status' => 'Email Tersedia',
                        'user_data' => $storedUserData,
                    );
                } else {
                    $response = array(
                        'code' => 400,
                        'status' => 'Email tidak tersedia',
                    );
                }

                echo json_encode($response);
            } else {
                $response = array(
                    'code' => 400,
                    'status' => 'Email tidak tersedia dalam request',
                );
                echo json_encode($response);
            }
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Metode request tidak diizinkan',
            );
            echo json_encode($response);
        }
    }



    public function checkPassword($idUser)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $password = $_POST['password'];
            $edit_user_model = $this->model('EditDataApi_model');

            $storedPassword = $edit_user_model->getStoredPassword($idUser);

            if (password_verify($password, $storedPassword)) {
                $response = array(
                    'code' => 200,
                    'status' => 'Password benar',
                );
            } else {
                $response = array(
                    'code' => 400,
                    'status' => 'Password salah',
                );
            }

            echo json_encode($response);
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Metode request tidak diizinkan',
            );
            echo json_encode($response);
        }
    }


    public function editPass($idUser)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['password']) && !empty($_POST['password'])) {

                $password = $_POST['password'];
                $edit_user_model = $this->model('EditDataApi_model');

                $success = $edit_user_model->updatePassword($password, $idUser);

                if ($success) {
                    $response = array(
                        'code' => 200,
                        'status' => 'Update Kata Sandi Sukses',
                    );
                } else {
                    $response = array(
                        'code' => 400,
                        'status' => 'Gagal mengubah kata sandi',
                    );
                }
            } else {
                $response = array(
                    'code' => 400,
                    'status' => 'Data password tidak ditemukan atau kosong',
                );
            }
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Metode request tidak diizinkan',
            );
        }
        echo json_encode($response);
    }

    public function editTransaction($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $bayar = $_POST['bayar'];
            $metode = $_POST['metode_pembayaran'];
            $fotoBase64 = $_POST['foto_bukti_bayar']; // Ini harus berisi base64 gambar

            $transaction_model = $this->model('EditDataApi_model');
            $success = $transaction_model->transaction($id, $bayar, $metode, $fotoBase64);

            if ($success) {
                $response = array(
                    'code' => 200,
                    'status' => 'Update User Sukses',
                );
            } else {
                $response = array(
                    'code' => 400,
                    'status' => 'Gagal mengubah data user',
                );
            }
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Data tidak ditemukan',
            );
        }
        echo json_encode($response);
    }
}
