<?php
require_once('../model/Biaya.php');
require_once('../model/Waktu.php');
require_once('../model/Jarak.php');
require_once('../model/TempatWisata.php');

$biaya = new Biaya;
$biaya->mtr = $_POST['b_mtr'];
$biaya->klu = $_POST['b_klu'];;
$biaya->lobar = $_POST['b_lobar'];;
$biaya->lotim = $_POST['b_lotim'];;
$biaya->loteng = $_POST['b_loteng'];;
$biaya->save();
$idBiaya = $biaya->lastId();

$waktu = new Waktu;
$waktu->mtr = $_POST['w_mtr'];
$waktu->klu = $_POST['w_klu'];;
$waktu->lobar = $_POST['w_lobar'];;
$waktu->lotim = $_POST['w_lotim'];;
$waktu->loteng = $_POST['w_loteng'];;
$waktu->save();
$idWaktu = $waktu->lastId();

$jarak = new Jarak;
$jarak->mtr = $_POST['j_mtr'];
$jarak->klu = $_POST['j_klu'];;
$jarak->lobar = $_POST['j_lobar'];;
$jarak->lotim = $_POST['j_lotim'];;
$jarak->loteng = $_POST['j_loteng'];;
$jarak->save();
$idJarak = $jarak->lastId();

$tmp_file = $_FILES['foto']['tmp_name'];
$path = "img/" . $_FILES['foto']['name'];
$upload = move_uploaded_file($tmp_file, "../" . $path);

$tempat = new TempatWisata;
$tempat->nama_tempat = $_POST['nama_tempat'];
$tempat->id_user = $_POST['user'];
$tempat->id_jarak = $idJarak;
$tempat->id_biaya = $idBiaya;
$tempat->id_waktu = $idWaktu;
$tempat->foto = $path;
$tempat->save();

echo "jarak: " . $idJarak . "</br>";
echo "waktu: " . $idWaktu . "</br>";
echo "biaya: " . $idBiaya . "</br>";
