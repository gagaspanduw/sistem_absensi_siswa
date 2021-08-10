<?php
date_default_timezone_set ("Asia/Jakarta");
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
where tbl_detail_jadwal.detail_jadwal='$param' and tbl_detail_jadwal.id_jadwal='$param3' ";
$query=mysql_query($sql);
$r = mysql_fetch_array($query);
$date = date('Y-m-d');
$time = date('H:i:sa');

if ($r['p19'] != '00:00:00')
{
$sql="UPDATE tbl_detail_jadwal
			SET p19='00:00:00',total_masuk=total_masuk-1
			WHERE detail_jadwal='$param' ";
	$query = mysql_query($sql);
	if ($query)
	
	{
	include 'detail_presensi_admin.php' ;
	}
}
else if ($r['status'] != 'Y' )
{
echo ("<script>alert('Presensi belum dibuka');document.location='detail_presensi_admin.php?id_jadwal=$param2'</script>");
}
else
{
$sql="UPDATE tbl_detail_jadwal
			SET p19='$time',total_masuk=total_masuk+1
			WHERE detail_jadwal='$param'";
	$query = mysql_query($sql);
	if ($query)
	
	{
	include 'detail_presensi_admin.php' ;
	}

}	
?>   