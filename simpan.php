<?php
//panggil koneksi database
include "koneksi.php";

//tampilkan data tikm
$tampil = mysqli_query($koneksi, "SELECT * from tikm limit 1");
$data = mysqli_fetch_array($tampil);
//tampung data ke dalam variable

$id_ikm = $data['id_ikm'];
$puas = $data['puas'];
$cukup = $data['cukup'];
$kurang = $data['kurang'];

//ambil nilai keterangan
$keterangan = $_GET['ket'];

//uji jika keterangan tidak kosong
if(isset($keterangan))
{
	//uji jika keterangan = simpan
	if($keterangan == "puas")
	{
		//nilai puas di tambah 1
		$puas = $puas + 1;
		//query update nilai puas ke dalam table ikm
		$query = "UPDATE tikm SET puas = '$puas' where id_ikm = '$id_ikm' ";
	}
	elseif($keterangan == "cukup") 
	{
		//nilai puas di tambah 1
		$cukup = $cukup + 1;
		//query updat nilai paus ke dalam table ikm
		$query = "UPDATE tikm SET cukup = '$cukup' where id_ikm = '$id_ikm' ";
	}
	elseif($keterangan == "kurang") 
	{
		//nilai puas di tambah 1
		$kurang = $kurang + 1;
		//query updat nilai paus ke dalam table ikm
		$query = "UPDATE tikm SET kurang = '$kurang' where id_ikm = '$id_ikm' ";
	}

	//update data sesuai query
	mysqli_query($koneksi, $query);
	echo "<script>alert('Terima kasih, anda berhasil memberikan penilaian');
	document.location='index.php';
	</script>";
}

?>