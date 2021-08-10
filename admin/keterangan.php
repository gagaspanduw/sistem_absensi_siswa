<?php
         include "../koneksi.php"; 
         ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php 
        include "include/title.php";
        ?>

    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    
    <!-- DataTables Responsive CSS -->
    <link href="assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php 
    include "include/headerup.php"; 
    include "include/header.php";
    $param=$_GET['id_kelas'];
    $param2=$_GET['pertemuan'];
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Detail jadwal</h1>
                    </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input data detail jadwal
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post">
                    <div class="form-group">
                        <label class="form-label">Pertemuan</label>
                        <input type="text" name="pertemuan" id="pertemuan" readonly="readonly" value="<?php echo $param2 ;?>"  maxlength="2" required="required" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama Siswa</label>
                        <select class="form-control" name="namasiswa" id="namasiswa">
                                    <option value ="">Select</option>
                                    <?php $sql=mysql_query("SELECT DISTINCT tbl_siswa.nama, tbl_siswa.nis as niss FROM tbl_detail_jadwal inner join tbl_siswa on tbl_detail_jadwal.nis = tbl_siswa.nis where id_kelas='$param'");
                                    while ($data=mysql_fetch_array($sql))
                                    {
                                    ?>
                                    <option value="<?php echo $data['niss'];?> "> 
                                    <?php echo $data['nama']; ?></option> 
                                    <?php 
                                    } 
                                    ?> 
                                    </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Keterangan</label>
                        <select class="form-control" name="keterangan" id="keterangan" required="">
                                    <option value ="">Select</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="Ijin">Ijin</option>
                                    <option value="Alpa">Alpa</option>
                                    </select>
                    </div>
                                        <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
if(isset($_POST['submit'])){
$tanggal = date('Y-m-d');
$pertemuan = $_POST['pertemuan'];
$namasiswa = $_POST['namasiswa'];
$keterangan = $_POST['keterangan'];
$insert = mysql_query("INSERT INTO tbl_keterangan VALUES('','$tanggal','$param','$pertemuan','$namasiswa','$keterangan')");
if($insert){
{echo "<script>alert('Berhasil menyimpan data'); window.location='keterangan_admin.php?id_kelas=$param&&pertemuan=$param2'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='keterangan_admin.php?id_kelas=$param&&pertemuan=$param2'</script>";
  }
}
}
?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>NIS</th>
                                                <th>Nama Siswa</th>
                                                <th>Pertemuan</th>
                                                <th>Tanggal</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $conn = new mysqli("localhost", "root", "", "absensi2");
                                            if ($conn->connect_errno) {
                                                echo "Failed to connect to MySQL: " . $conn->connect_error;
                                            }
                                            
                                            $res = $conn->query("SELECT *
                                                                FROM
                                                                tbl_keterangan inner join tbl_siswa on tbl_keterangan.nis=tbl_siswa.nis
                                                                where tbl_keterangan.id_kelas='$param'");
                                            while($row = $res->fetch_assoc()){
                                                echo '
                                                <tr>
                                                    <td>'.$row['nis'].'</td>
                                                    <td>'.$row['nama'].'</td>
                                                    <td>'.$row['pertemuan'].'</td>
                                                    <td>'.$row['tanggal'].'</td>
                                                    <td>'.$row['keterangan'].'</td>
                                                    <td align="center">
                                                    <a class="btn btn-danger btn-circle" href="delete_keterangan.php?id_keterangan='.$row['id_keterangan'].'&&id_kelas='.$param.'&&pertemuan='.$param2.'" onclick="return warn()" title="Hapus"><i class="fa fa-trash "></i></a></button>
                                                    </td>
                                                </tr>
                                                ';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->
            </div>
        </div>
    </div>
</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
