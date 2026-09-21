<?php
require_once "products.php";
require_once "functions.php";

$totalStok = hitungTotalStok($products);
$stokKritis = cekStokKritis($products);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Information System</title>
</head>

<body>

    <h1>Product Information System</h1>

    <h2>Daftar Produk</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
        </tr>

        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product["id"] ?></td>
            <td><?= $product["nama"] ?></td>
            <td><?= $product["kategori"] ?></td>
            <td>Rp <?= number_format($product["harga"], 0, ',', '.') ?></td>
            <td><?= $product["stok"] ?></td>
            <td><?= $product["deskripsi"] ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

    <h2>Total Stok: <?= $totalStok ?></h2>

    <h2>Stok Kritis</h2>

    <?php if (count($stokKritis) > 0): ?>

        <ul>
            <?php foreach ($stokKritis as $product): ?>
                <li>
                    <?= $product["nama"] ?> —
                    Stok: <?= $product["stok"] ?>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php else: ?>

        <p>Tidak ada produk dengan stok kritis.</p>

    <?php endif; ?>

</body>
</html>
