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
    $param = $_GET['id_kelas'];
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
                        <label class="form-label">Nama Siswa</label>
                        <select class="form-control" name="namasiswa" id="namasiswa">
                                    <option value ="">Select</option>
                                    <?php $sql=mysql_query("select * from tbl_siswa");
                                    while ($data=mysql_fetch_array($sql))
                                    {
                                    ?>
                                    <option value="<?php echo $data['nis'];?> "> 
                                    <?php echo $data['nama'] ; ?></option> 
                                    <?php 
                                    } 
                                    ?> 
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
$sqlsenin="SELECT * FROM tbl_jadwal where id_kelas='$param' and hari='senin'";
$querysenin=mysql_query($sqlsenin);
$rowsenin=mysql_fetch_array($querysenin);
$rowsenins=$rowsenin['id_jadwal'];

$sqlselasa="SELECT * FROM tbl_jadwal where id_kelas='$param' and hari='selasa'";
$queryselasa=mysql_query($sqlselasa);
$rowselasa=mysql_fetch_array($queryselasa);
$rowselasas=$rowselasa['id_jadwal'];

$sqlrabu="SELECT * FROM tbl_jadwal where id_kelas='$param' and hari='rabu'";
$queryrabu=mysql_query($sqlrabu);
$rowrabu=mysql_fetch_array($queryrabu);
$rowrabus=$rowrabu['id_jadwal'];

$sqlkamis="SELECT * FROM tbl_jadwal where id_kelas='$param' and hari='kamis'";
$querykamis=mysql_query($sqlkamis);
$rowkamis=mysql_fetch_array($querykamis);
$rowkamiss=$rowkamis['id_jadwal'];

$sqljumat="SELECT * FROM tbl_jadwal where id_kelas='$param' and hari='jumat'";
$queryjumat=mysql_query($sqljumat);
$rowjumat=mysql_fetch_array($queryjumat);
$rowjumats=$rowjumat['id_jadwal'];

$sqlsabtu="SELECT * FROM tbl_jadwal where id_kelas='$param' and hari='sabtu'";
$querysabtu=mysql_query($sqlsabtu);
$rowsabtu=mysql_fetch_array($querysabtu);
$rowsabtus=$rowsabtu['id_jadwal'];

if(isset($_POST['submit'])){
$namasiswa = $_POST['namasiswa'];
$insert = mysql_query("INSERT INTO tbl_detail_jadwal VALUES('','$namasiswa','$rowsenins','$param','','','','','','','','','','','','','','','','','','','','','','','','','0')");
$insert1 = mysql_query("INSERT INTO tbl_detail_jadwal VALUES('','$namasiswa','$rowselasas','$param','','','','','','','','','','','','','','','','','','','','','','','','','0')");
$insert2 = mysql_query("INSERT INTO tbl_detail_jadwal VALUES('','$namasiswa','$rowrabus','$param','','','','','','','','','','','','','','','','','','','','','','','','','0')");
$insert3 = mysql_query("INSERT INTO tbl_detail_jadwal VALUES('','$namasiswa','$rowkamiss','$param','','','','','','','','','','','','','','','','','','','','','','','','','0')");
$insert4 = mysql_query("INSERT INTO tbl_detail_jadwal VALUES('','$namasiswa','$rowjumats','$param','','','','','','','','','','','','','','','','','','','','','','','','','0')");
$insert5 = mysql_query("INSERT INTO tbl_detail_jadwal VALUES('','$namasiswa','$rowsabtus','$param','','','','','','','','','','','','','','','','','','','','','','','','','0')");
if($insert && $insert1 && $insert2 && $insert3 && $insert4 && $insert5){
{echo "<script>alert('Berhasil menyimpan data'); window.location='detail_jadwal.php?id_kelas=$param'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='detail_jadwal.php?id_kelas=$param'</script>";
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
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $conn = new mysqli("localhost", "root", "", "absensi2");
                                            if ($conn->connect_errno) {
                                                echo "Failed to connect to MySQL: " . $conn->connect_error;
                                            }
                                            $posisi=0;
                                            $no=$posisi+0;
                                            
                                            $res = $conn->query("SELECT tbl_siswa.nama,
                                                                tbl_jadwal.id_jadwal,
                                                                tbl_jadwal.hari,
                                                                tbl_jadwal.id_kelas,
                                                                tbl_detail_jadwal.nis,
                                                                tbl_detail_jadwal.detail_jadwal,
                                                                tbl_detail_jadwal.id_jadwal
                                                                FROM
                                                                tbl_detail_jadwal
                                                                Inner Join tbl_siswa ON tbl_detail_jadwal.nis = tbl_siswa.nis inner join tbl_jadwal on tbl_detail_jadwal.id_jadwal = tbl_jadwal.id_jadwal
                                                                where tbl_jadwal.id_kelas=$param and tbl_jadwal.hari='senin'");
                                            while($row = $res->fetch_assoc()){
                                                $no++;
                                                echo '
                                                <tr>
                                                    <td>'.$no.'</td>
                                                    <td>'.$row['nis'].'</td>
                                                    <td>'.$row['nama'].'</td>
                                                    <td align="center">
                                                    <a class="btn btn-danger btn-circle" href="delete_detail_jadwal.php?nis='.$row['nis'].'&&id_kelas='.$row['id_kelas'].'" onclick="return warn()" title="Hapus"><i class="fa fa-trash-o "></i></a></button>
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
