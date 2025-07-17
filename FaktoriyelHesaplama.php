<?php
    function faktoriyel($sayi)
    {
        $sonuc=1;
        for($i=1 ; $i <= $sayi ; $i++)
        {
            $sonuc = $sonuc * $i;
        }
        return $sonuc;
    }
    $sayi=5;
    echo "5!=".faktoriyel($sayi);
?>