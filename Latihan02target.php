<?php
    if(isset($_POST["NAMA"])){
        $NM = $_POST["NAMA"];
        $nim = $_POST["NIM"];
        $tgllahir = $_POST["TGLLAHIR"];

        echo "Isi dari nama: ".$NM." nim: ".$nim." dan tgl lahir: ".$tgllahir;
    }else{
        header("location : latihan02target");
    }