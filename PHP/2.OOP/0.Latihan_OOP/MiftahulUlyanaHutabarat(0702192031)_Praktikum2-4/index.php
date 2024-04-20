<?php 
require_once("app/functions.php");

// instantion 
$tampilUser = new TampilDatabase("SELECT * FROM tb_user ORDER BY user_id");
$user = $tampilUser->rows;

//instantion 
$tampilOrder = new TampilDatabase("SELECT * FROM tb_order ORDER BY order_id");
$order = $tampilOrder->rows;

//instantion 
$tampilOrderDetail = new TampilDatabase("SELECT * FROM tb_order_detail ORDER BY detail_id_order");
$detailOrder = $tampilOrderDetail->rows;

//instantion 
$tampilProduk = new TampilDatabase("SELECT * FROM tb_produk ORDER BY produk_id");
$produk = $tampilProduk->rows;

//instantion 
$tampilKeranjang = new TampilDatabase("SELECT * FROM tb_keranjang ORDER BY ker_id");
$keranjang = $tampilKeranjang->rows;

//instantion 
$tampilKategori = new TampilDatabase("SELECT * FROM tb_kategori ORDER BY kat_id");
$kategori = $tampilKategori->rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil User</title>
</head>
<body>
    <h1>TABLE USER</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id User</th>
            <th>Email</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>HP</th>
            <th>Pos</th>
            <th>Role</th>
            <th>Aktif</th>
            <th>Created_at</th>
            <th>Update_at</th>
        </tr>
        <?php foreach($user as $user_data):?>
        <tr>
            <td><?= $user_data["user_id"]; ?></td>
            <td><?= $user_data["user_email"]; ?></td>
            <td><?= $user_data["user_password"]; ?></td>
            <td><?= $user_data["user_nama"]; ?></td>
            <td><?= $user_data["user_alamat"]; ?></td>
            <td><?= $user_data["user_hp"]; ?></td>
            <td><?= $user_data["user_pos"]; ?></td>
            <td><?= $user_data["user_role"]; ?></td>
            <td><?= $user_data["user_aktif"]; ?></td>
            <td><?= $user_data["created_at"]; ?></td>
            <td><?= $user_data["updated_at"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br><hr>

    <h1>TABLE ORDER</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id Order</th>
            <th>Id User</th>
            <th>Tanggal</th>
            <th>Kode</th>
            <th>TTL</th>
            <th>Kurir</th>
            <th>Ongkir</th>
            <th>Bayar Deadline</th>
            <th>Batal</th>
            <th>Update at</th>
        </tr>
        <?php foreach($order as $order_data):?>
        <tr>
            <td><?= $order_data["order_id"]; ?></td>
            <td><?= $order_data["order_id_user"]; ?></td>
            <td><?= $order_data["order_tgl"]; ?></td>
            <td><?= $order_data["order_kode"]; ?></td>
            <td><?= $order_data["order_ttl"]; ?></td>
            <td><?= $order_data["order_kurir"]; ?></td>
            <td><?= $order_data["order_ongkir"]; ?></td>
            <td><?= $order_data["order_byr_deadline"]; ?></td>
            <td><?= $order_data["order_batal"]; ?></td>
            <td><?= $order_data["update_at"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <br><hr>

    <h1>TABLE ORDER DETAIL</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id Order Detail</th>
            <th>Id Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php foreach($detailOrder as $detailOrder_data):?>
        <tr>
            <td><?= $detailOrder_data["detail_id_order"]; ?></td>
            <td><?= $detailOrder_data["detail_id_produk"]; ?></td>
            <td><?= $detailOrder_data["detail_harga"]; ?></td>
            <td><?= $detailOrder_data["detail_jml"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br><hr>

    <h1>TABLE PRODUK</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id Produk</th>
            <th>Id kategori</th>
            <th>Id User</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Keterangan</th>
            <th>Stock</th>
            <th>Foto Produk</th>
            <th>Create at</th>
            <th>Update at</th>

        </tr>
        <?php foreach($produk as $produk_data):?>
        <tr>
            <td><?= $produk_data["produk_id"]; ?></td>
            <td><?= $produk_data["produk_id_kat"]; ?></td>
            <td><?= $produk_data["produk_id_user"]; ?></td>
            <td><?= $produk_data["produk_kode"]; ?></td>
            <td><?= $produk_data["produk_nama"]; ?></td>
            <td><?= $produk_data["produk_hrg"]; ?></td>
            <td><?= $produk_data["produk_keterangan"]; ?></td>
            <td><?= $produk_data["produk_stock"]; ?></td>
            <td><?= $produk_data["produk_photo"]; ?></td>
            <td><?= $produk_data["create_at"]; ?></td>
            <td><?= $produk_data["update_at"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
        
    <br><hr>

    <h1>TABLE KERANJANG</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id Keranjang</th>
            <th>Id User</th>
            <th>ID Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php foreach($keranjang as $keranjang_data):?>
        <tr>
            <td><?= $keranjang_data["ker_id"]; ?></td>
            <td><?= $keranjang_data["ker_id_user"]; ?></td>
            <td><?= $keranjang_data["ker_id_produk"]; ?></td>
            <td><?= $keranjang_data["ker_harga"]; ?></td>
            <td><?= $keranjang_data["ker_jml"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
            
    <br><hr>

    <h1>TABLE KATEGORI</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id Kategori</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Created at</th>
            <th>Update at</th>
        </tr>
        <?php foreach($kategori as $kategori_data):?>
        <tr>
            <td><?= $kategori_data["kat_id"]; ?></td>
            <td><?= $kategori_data["kat_nama"]; ?></td>
            <td><?= $kategori_data["kat_keterangan"]; ?></td>
            <td><?= $kategori_data["created_at"]; ?></td>
            <td><?= $kategori_data["updated_at"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>