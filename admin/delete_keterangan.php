<?php
include "../koneksi.php";

   $row1 = $_GET['id_keterangan'];
   $row2 = $_GET['id_kelas'];
   $row3 = $_GET['pertemuan'];
   $sql1 = "DELETE FROM tbl_keterangan WHERE id_keterangan='$row1'";
   $query1 = mysql_query($sql1);
   if($query1){
		echo "<script>alert('Data berhasil dihapus');document.location='keterangan_admin.php?id_kelas=$row2&&pertemuan=$row3'</script>";
   } 
   else
   {
		echo "<script>alert('Data gagal dihapus');document.location='keterangan_admin.php?id_kelas=$row2&&pertemuan=$row3'</script>";
   }
?>