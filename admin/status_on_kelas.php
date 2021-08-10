<?php
include "include/koneksi.php"; 
date_default_timezone_set ("Asia/Jakarta");
$table="tbl_jadwal";
$param=$_GET['id_jadwal'];
$param1=$_GET['id_kelas'];
$sql = "SELECT * FROM $table WHERE id_jadwal='$param'";
$query=mysql_query($sql);
$r = mysql_fetch_array($query);
$date = date('Y-m-d H:i:sa');

$sql2 = "SELECT * from tbl_jadwal where hari < curtime() and id_jadwal='$param'";
$query2=mysql_query($sql2);
$r2 = mysql_fetch_array($query2);
$hari = date('D');

switch($hari){
		case 'Sun':
			$hari_ini = "minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "senin";
		break;
 
		case 'Tue':
			$hari_ini = "selasa";
		break;
 
		case 'Wed':
			$hari_ini = "rabu";
		break;
 
		case 'Thu':
			$hari_ini = "kamis";
		break;
 
		case 'Fri':
			$hari_ini = "jumat";
		break;
 
		case 'Sat':
			$hari_ini = "sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}

date_default_timezone_set ("Asia/Jakarta");



	
if ($r['status'] == 'Y')
{
$sql="UPDATE $table
			SET status='N'
			WHERE id_jadwal='$param'";
	$query = mysql_query($sql);
	if ($query)
	
	{
		echo ("<script>alert('Kelas Berhasil Ditutup');document.location='presensi_detail_admin.php?id_kelas=$param1''</script>");
	}
	else
	{
		echo "<script>alert('Data gagal disimpan')</script>";
				echo mysql_error();
				echo "<script>'document.location='presensi_detail_admin.php?id_kelas=$param1''</script>";
	}
}
else if ($hari_ini != $r2['hari']) 
{
echo ("<script>alert('Kelas Tidak Bisa Dibuka');document.location='presensi_detail_admin.php?id_kelas=$param1'</script>");
}
else
{
$sql="UPDATE $table
			SET buka_kelas='$date',status='Y',pertemuan=pertemuan+1
			WHERE id_jadwal='$param'";
	$query = mysql_query($sql);
	if ($query)
	
	{
		echo ("<script>alert('Kelas Berhasil Dibuka');document.location='presensi_detail_admin.php?id_kelas=$param1''</script>");
	}
	else
	{
		echo "<script>alert('Data gagal disimpan')</script>";
				echo mysql_error();
				echo "<script>'document.location='presensi_detail_admin.php?id_kelas=$param1''</script>";
	}
	}
	

?>