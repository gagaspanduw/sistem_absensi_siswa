<?php
include "include/koneksi.php"; 

   $row = $_GET['nis'];
   $row1 = $_GET['id_kelas'];
   $sql = "DELETE FROM tbl_detail_jadwal WHERE nis='$row' and id_kelas='$row1'";
   $query = mysql_query($sql);
   if($query){
		echo "<script>alert('Data berhasil dihapus');document.location='detail_jadwal.php?id_kelas=$row1'</script>";
   } 
   else
   {
		echo "<script>alert('Data gagal dihapus');document.location='detail_jadwal.php?id_kelas=$row1'</script>";
   }
?>