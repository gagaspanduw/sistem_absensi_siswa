<?php
include "include/koneksi.php";  
$param=$_GET['detail_jadwal'];
$param2=$_GET['id_kelas'];
$param3=$_GET['id_jadwal'];
$sql = "SELECT
tbl_detail_jadwal.detail_jadwal,
tbl_detail_jadwal.nis,
tbl_detail_jadwal.p1,
tbl_detail_jadwal.p2,
tbl_detail_jadwal.p3,
tbl_detail_jadwal.p4,
tbl_detail_jadwal.p5,
tbl_detail_jadwal.p6,
tbl_detail_jadwal.p7,
tbl_detail_jadwal.p8,
tbl_detail_jadwal.p9,
tbl_detail_jadwal.p10,
tbl_detail_jadwal.p11,
tbl_detail_jadwal.p12,
tbl_detail_jadwal.p13,
tbl_detail_jadwal.p14,
tbl_detail_jadwal.p15,
tbl_detail_jadwal.p16,
tbl_detail_jadwal.p17,
tbl_detail_jadwal.p18,
tbl_detail_jadwal.p19,
tbl_detail_jadwal.p20,
tbl_detail_jadwal.p21,
tbl_detail_jadwal.p22,
tbl_detail_jadwal.p23,
tbl_detail_jadwal.p24,
tbl_detail_jadwal.id_jadwal,
tbl_jadwal.id_jadwal,
tbl_jadwal.id_kelas,
tbl_jadwal.hari,
tbl_jadwal.buka_kelas,
tbl_jadwal.`status`,
tbl_jadwal.pertemuan
FROM
tbl_detail_jadwal
Inner Join tbl_jadwal ON tbl_detail_jadwal.id_jadwal = tbl_jadwal.id_jadwal
where tbl_detail_jadwal.detail_jadwal='$param' and tbl_detail_jadwal.id_jadwal='$param3'";
$query=mysql_query($sql);
$r = mysql_fetch_array($query);

if ($r['pertemuan'] == '1')
{
include 'klik_presensi_1.php';
}
else if ($r['pertemuan'] == '2')
{
include 'klik_presensi_2.php';
}
else if ($r['pertemuan'] == '3')
{
include 'klik_presensi_3.php';
}
else if ($r['pertemuan'] == '4')
{
include 'klik_presensi_4.php';
}
else if ($r['pertemuan'] == '5')
{
include 'klik_presensi_5.php';
}
else if ($r['pertemuan'] == '6')
{
include 'klik_presensi_6.php';
}
else if ($r['pertemuan'] == '7')
{
include 'klik_presensi_7.php';
}
else if ($r['pertemuan'] == '8')
{
include 'klik_presensi_8.php';
}
else if ($r['pertemuan'] == '9')
{
include 'klik_presensi_9.php';
}
else if ($r['pertemuan'] == '10')
{
include 'klik_presensi_10.php';
}
else if ($r['pertemuan'] == '11')
{
include 'klik_presensi_11.php';
}
else if ($r['pertemuan'] == '12')
{
include 'klik_presensi_12.php';
}
else if ($r['pertemuan'] == '13')
{
include 'klik_presensi_13.php';
}
else if ($r['pertemuan'] == '14')
{
include 'klik_presensi_14.php';
}
else if ($r['pertemuan'] == '15')
{
include 'klik_presensi_15.php';
}
else if ($r['pertemuan'] == '16')
{
include 'klik_presensi_16.php';
}
else if ($r['pertemuan'] == '17')
{
include 'klik_presensi_17.php';
}
else if ($r['pertemuan'] == '18')
{
include 'klik_presensi_18.php';
}
else if ($r['pertemuan'] == '19')
{
include 'klik_presensi_19.php';
}
else if ($r['pertemuan'] == '20')
{
include 'klik_presensi_20.php';
}
else if ($r['pertemuan'] == '21')
{
include 'klik_presensi_21.php';
}
else if ($r['pertemuan'] == '22')
{
include 'klik_presensi_22.php';
}
else if ($r['pertemuan'] == '23')
{
include 'klik_presensi_23.php';
}
else if ($r['pertemuan'] == '24')
{
include 'klik_presensi_24.php';
}
else
{
echo ("<script>alert('Pertemuan Tidak Ada');document.location=''</script>");
}

?>   