<?php
    function login($email, $pass){
        if($email == 'test@gmail.com' && $pass == 'pass'){
            $hasil = true;
        }
        else{
            $hasil = false;
        }
        return $hasil;
    }

    $harga = 9000;
    $diskon = 0.05;

    function total($jml_beli){
        global $harga;
        $jml_total = $harga * $jml_beli;
        return $jml_total;
    }

    function diskon($initotal, $inijml_beli){
        global $diskon;
        if($inijml_beli > 30) {
            $jml_diskon = $initotal * $diskon;
        }
        else{
            $jml_diskon = $initotal * 0;
        }
        return $jml_diskon;
    }
    

    function bayar($total_loh, $diskon_loh)
    {
        $jml_bayar = $total_loh - $diskon_loh;
        return $jml_bayar;
    }

?>