<?php
#fungsi/fungsional #tidak memliki parameter
    cetaktext("");
#untuk funsion tambah
    #echo tambah(4,7);


    function cetakteks(){
       echo "Menampilkan Text";
    } 
#parameter dan default 
#penamaan tidak boleh sama jika sama akan menampilkan yang awal (cth : cetakteks dan cetaktext)
function cetaktext($tx="0"){
    if($tx==""){
        echo "Menampilkan Text";
    }else{
        echo $tx;
    }

}
#funsion tambah
function tambah ($bill1,$bill2){
#return untuk mengembalikan fungsi tambah 
    return $bill1+$bill2; 

}