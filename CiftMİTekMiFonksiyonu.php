<?php
    function CiftTek($sayi)
    {
        if($sayi%2==0)
        {
            return "Cift Sayi";
        }
        else
        {
            return "Tek Sayi";
        }
    }
    $sayi=rand(1,100);
    CiftTek($sayi);
    echo "$sayi:".CiftTek($sayi);

?>

