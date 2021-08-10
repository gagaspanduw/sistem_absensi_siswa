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
                            Input data detail pelajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post">
                                        <div class="form-group">
                        <label class="form-label">Mata Pelajaran</label>
                        <select class="form-control" name="matapelajaran" id="namasiswa">
                                    <option value ="">Select</option>
                                    <?php $sql=mysql_query("select * from tbl_pelajaran");
                                    while ($data=mysql_fetch_array($sql))
                                    {
                                    ?>
                                    <option value="<?php echo $data['id_pelajaran'];?> "> 
                                    <?php echo $data['nama_pelajaran']; ?></option> 
                                    <?php 
                                    } 
                                    ?> 
                                    </select>
                        </div>
                        <div class="form-group">
                        <label class="form-label">Hari</label>
                        <select class="form-control" name="hari" id="kelas" onchange="javascript:get(this)" required="required"> 
                            <option value ="">Select</option>
                                    <?php $sql=mysql_query("select * from tbl_jadwal where id_kelas=$param");
                                    while ($data=mysql_fetch_array($sql))
                                    {
                                    ?>
                                    <option value="<?php echo $data['id_jadwal'];?> "> 
                                    <?php echo $data['hari'] ; ?></option> 
                                    <?php 
                                    } 
                                    ?>
                        </select>
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
$matapelajaran = $_POST['matapelajaran'];
$hari = $_POST['hari'];
$insert = mysql_query("INSERT INTO tbl_detail_pelajaran VALUES('','$param','$matapelajaran','$hari')");
if($insert){
{echo "<script>alert('Berhasil menyimpan data'); window.location='detail_pelajaran.php?id_kelas=$param'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='detail_pelajaran.php?id_kelas=$param'</script>";
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
                                                <th>Pelajaran</th>
                                                <th>Hari</th>
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
                                            
                                            $res = $conn->query("SELECT *, tbl_jadwal.hari as harii
                                                                FROM
                                                                tbl_detail_pelajaran
                                                                Inner Join tbl_pelajaran ON tbl_detail_pelajaran.id_pelajaran = tbl_pelajaran.id_pelajaran
                                                                inner join tbl_jadwal on tbl_detail_pelajaran.hari = tbl_jadwal.id_jadwal
                                                                where tbl_detail_pelajaran.id_kelas=$param");
                                            while($row = $res->fetch_assoc()){
                                                $no++;
                                                echo '
                                                <tr>
                                                    <td>'.$no.'</td>
                                                    <td>'.$row['nama_pelajaran'].'</td>
                                                    <td>'.$row['harii'].'</td>
                                                    <td align="center">
                                                    <a class="btn btn-danger btn-circle" href="delete_detail_pelajaran.php?detail_pelajaran='.$row['detail_pelajaran'].'&&id_kelas='.$row['id_kelas'].'" onclick="return warn()" title="Hapus"><i class="fa fa-trash-o "></i></a></button>
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
