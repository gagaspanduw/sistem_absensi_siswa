<?php
include "include/koneksi.php"; 


   $row = $_GET['detail_pelajaran'];
   $row1 = $_GET['id_kelas'];
   $sql = "DELETE FROM tbl_detail_pelajaran WHERE detail_pelajaran='$row'";
   $query = mysql_query($sql);
   if($query){
		echo "<script>alert('Data berhasil dihapus');document.location='detail_pelajaran.php?id_kelas=$row1'</script>";
   } 
   else
   {
		echo "<script>alert('Data gagal dihapus');document.location='detail_pelajaran.php?id_kelas=$row1'</script>";
   }
?>