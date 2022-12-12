<!DOCTYPE html>
<html>

<head>
    <title>Halaman Update</title>
</head>
<body>
    <h3>Halaman Update Data</h3>
    <form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama" value="<?php echo $querydata->Nama ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="Alamat" value="<?php echo $querydata->Alamat ?>"></td>
            </tr>
            <tr>
                <td>Kategori Sampah</td>
                <td>:</td>
                <td><input type="text" name="Kategori" value="<?php echo $querydata->Kategori ?>"></td>
            </tr>
            <tr>
                <td>Jenis Sampah</td>
                <td>:</td>
                <td><input type="text" name="Jenis" value="<?php echo $querydata->Jenis ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Pemesanan</td>
                <td>:</td>
                <td><input type="text" name="Tanggal" value="<?php echo $querydata->Tanggal ?>"></td>
            </tr>
            <tr>
                <td>Total Sampah</td>
                <td>:</td>
                <td><input type="text" name="Total" value="<?php echo $querydata->Total ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="Harga" value="<?php echo $querydata->Harga ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit">Update Data</button></td>
            </tr>
        </table>
    </form>
</body>

</html>