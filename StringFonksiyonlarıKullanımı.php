<?php
    function uzunluk($metin)
    {
       return strlen($metin);
    }

    function kelimeSayisi($metin)
    {
        return str_word_count($metin);
    }

    function tersCevirme($metin)
    {
        return strrev($metin);
    }
    $metin="DENIZLI";
    echo "Orıjınal Metin:$metin<br>";
    echo "Uzunluk:".uzunluk($metin)."<br>";
    echo "Kelime Sayisi:".kelimeSayisi($metin)."<br>";
    echo "Ters Cevrilmis Hali:".tersCevirme($metin);




?>
