<?php

    //integrasi file koneksi databse 
    include('koneksi.pdp');

    //membuat perintah sql
    $sql='SELECT * FROM kelas';
    $hasil = $koneksi->query($sql);

    $jumlah_ROWS = $hasil->num_rows;
    
    echo $jumlah_rows;
if($jumlah_rows > 0){

    while($row = $hasil->fetch_assoc){
        echo'
        <div class="p-4 bg-gray-600 my-1 cursor-ponter hover:bg-gray-500 transition> 
        <h1> </h1>

        </div>
        ';
    }
}

    var_dump($hasil);

