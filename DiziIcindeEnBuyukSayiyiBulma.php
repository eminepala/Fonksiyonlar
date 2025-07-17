<?php
    function MaxDeger($dizi)
    {;
        $max=$dizi[0];
        for($i=0;$i<count($dizi);$i++)
        {
            if($dizi[$i]>$max)
            {
                $max=$dizi[$i];
            }
        }
        return $max;


    }
    $dizi=[1,3,6,2,8,4,6,9,13];
    echo "Dizinin Max Degeri:".MaxDeger($dizi);
?>
