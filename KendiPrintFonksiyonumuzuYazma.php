<?php
    function diziYazdir($dizi)
    {
        foreach ($dizi as $key => $value)
        {
            echo $key . "=>" . $value . "<br>";
        }
    }
    $dizi=["AD"=>"Emine","SOYAD"=>"PALA","YAS"=>20,"BOLUM"=>"Bilgisayar Mühendisligi"];
    diziYazdir($dizi);

?>