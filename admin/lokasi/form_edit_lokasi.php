EDIT LOKASI
<?php
    include "../koneksi.php";
    $id_lokasi = $_GET['id_lokasi'];
    //-- ambil data dari tabel lokasi--
    $sql = mysqli_query($koneksi, "SELECT * FROM lokasi WHERE id_lokasi='".$id_lokasi."'");
    $data = mysqli_fetch_array($sql);
    $data_nama_lokasi = $data['nama_lokasi'];
    $data_alamat_lokasi = $data['alamat_lokasi'];
?>

<form action="aksi_lokasi.php" method="POST">
    <input type="hidden" name="act" value="update">
    <input type="hidden" name="id_lokasi" value="<?php echo $id_lokasi;?>"><br>
    Nama Lokasi <input type="text" name="nama_lokasi" value="<?php echo $data_nama_lokasi;?>"><br>
    Alamat Lokasi <textarea name="alamat_lokasi" id="" cols="30" rows="2"><?php echo $data_alamat_lokasi;?></textarea><br>
    <input type="submit" value="Simpan">
</form>