<?php
$kdv = 18;

function kdvHesapla($fiyat) {
    global $kdv;
    return $fiyat + $fiyat * $kdv / 100;
}

$fiyat = 100;
echo "Fiyat (KDV dahil): " . kdvHesapla($fiyat);
?>
