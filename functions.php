<?php

function hitungTotalStok($products) {
    $total = 0;

    foreach ($products as $product) {
        $total += $product["stok"];
    }

    return $total;
}

function cekStokKritis($products) {
    $stokKritis = [];

    foreach ($products as $product) {
        if ($product["stok"] < 3) {
            $stokKritis[] = $product;
        }
    }

    return $stokKritis;
}

?>
