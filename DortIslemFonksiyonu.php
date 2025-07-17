<?php
    function hesapla($sayi1, $sayi2,$islem)
    {
        if($islem=='+')
        {
            return $sayi1+$sayi2;
        }
        elseif ($islem=='-')
        {
            return $sayi1-$sayi2;
        }
        elseif ($islem=='*')
        {
            return $sayi1*$sayi2;
        }
        else
        {
            return $sayi1/$sayi2;
        }

    }
    $sayi1=15;
    $sayi2=13;
    $islem='-';
    echo "Sonuc=".hesapla($sayi1,$sayi2,$islem);
