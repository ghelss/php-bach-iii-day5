<?php 



//membuat variabel koneksi
$server = 'localhost';
$username ='root';
$password = '';
$database = 'sacode_2023';

// memebuat koneksi ke database
$koneksi = new mysqli( 
                        $sever,
                        $username,
                        $password,
                        $database

)
// cek koneksi
if ($koneksi->connect_error) {
    echo 'koneksi gagal';
} else{
    echo 'koneksi BERHASIL';
}