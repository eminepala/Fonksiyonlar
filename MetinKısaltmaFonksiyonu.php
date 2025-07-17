<?php
    function kisalt($metin,$uzunluk)
    {
        if($uzunluk<strlen($metin))
         {
          for($i=0;$i<$uzunluk;$i++)
          {
              $yeniMetin=substr($metin,0,$uzunluk);

          }
               return $yeniMetin."...";
         }
        else
        {
            return "$metin";
        }

    }
    $metin="Merhaba, Ben Emine:)";
    $uzunluk=7;
    echo kisalt($metin,$uzunluk);

?>