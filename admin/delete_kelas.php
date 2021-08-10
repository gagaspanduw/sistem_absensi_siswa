<?php
include "../koneksi.php";

   $row1 = $_GET['id_kelas'];
   $sql1 = "DELETE FROM tbl_kelas WHERE id_kelas='$row1'";
   $query1 = mysql_query($sql1);

   $sql2 = "DELETE FROM tbl_jadwal WHERE id_kelas='$row1'";
   $query2 = mysql_query($sql2);

   $sql3 = "DELETE FROM tbl_detail_pelajaran WHERE id_kelas='$row1'";
   $query3 = mysql_query($sql3);

   $sql4 = "DELETE FROM tbl_detail_jadwal WHERE id_kelas='$row1'";
   $query4 = mysql_query($sql4);
   if($query1){
		echo "<script>alert('Data berhasil dihapus');document.location='kelas.php'</script>";
   }
   elseif($query2){
      echo "<script>alert('Data berhasil dihapus');document.location='kelas.php'</script>";
   }
   elseif($query3){
      echo "<script>alert('Data berhasil dihapus');document.location='kelas.php'</script>";
   }
   elseif($query4){
      echo "<script>alert('Data berhasil dihapus');document.location='kelas.php'</script>";
   }
   else
   {
		echo "<script>alert('Data gagal dihapus');document.location='kelas.php'</script>";
   }
?>