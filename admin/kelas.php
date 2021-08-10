<?php
         include "../koneksi.php"; 
         include "include/autonumber.php";
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
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Kelas</h1>
                    </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input data kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post">
                        <div class="form-group">
                        <label class="form-label">Kelas</label>
                        <select class="form-control" name="kelas" id="kelas" onchange="javascript:get(this)" required="required"> 
                            <option value="">Option</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama Kelas</label>
                        <select class="form-control" name="namakelas" id="namakelas" onchange="javascript:get(this)" required="required">
                            <option value="">Option</option>
                            <option value="Kelas A">Kelas A</option>
                            <option value="Kelas B">Kelas B</option>
                            <option value="Kelas C">Kelas C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Walikelas</label>
                        <select class="form-control" name="namaguru" id="namaguru">
                                    <option value ="">Select</option>
                                    <?php $sql=mysql_query("select * from tbl_user where level = 'Guru' order by nama");
                                    while ($data=mysql_fetch_array($sql))
                                    {
                                    ?>
                                    <option value="<?php echo $data['nip'];?> "> 
                                    <?php echo $data['nama'] ; ?></option> 
                                    <?php 
                                    } 
                                    ?> 
                                    </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tahun Ajaran</label>
                        <select class="form-control" name="tahun_ajaran" id="tahun_ajaran" onchange="javascript:get(this)" required="required"> 
                        <option value="">Option</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2019">2020</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan" onchange="javascript:get(this)" required="required"> 
                            <option value="">Option</option>
                            <option value="IPS">IPS</option>
                            <option value="IPA">IPA</option>
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
$kelas = $_POST['kelas'];
$namakelas = $_POST['namakelas'];
$namaguru = $_POST['namaguru'];
$tahun_ajaran = $_POST['tahun_ajaran'];
$jurusan = $_POST['jurusan'];
$cek = mysql_query ("SELECT * FROM tbl_kelas WHERE kelas='$kelas' and nama_kelas='$namakelas' and tahun_ajaran='$tahun_ajaran' and jurusan='$jurusan'");
$ceks = mysql_num_rows($cek);
if($ceks > 0){
{echo "<script>alert('Jadwal sudah ada'); window.location='kelas.php'</script>";
  }
    }else{
    $insert = mysql_query("INSERT INTO tbl_kelas VALUES('$newId', '$kelas', '$namakelas', '$namaguru', '$tahun_ajaran', '$jurusan')");
    $insert1 = mysql_query("INSERT INTO tbl_jadwal VALUES('', '$newId', 'senin', '', 'N', '0')");
    $insert2 = mysql_query("INSERT INTO tbl_jadwal VALUES('', '$newId', 'selasa', '', 'N', '0')");
    $insert3 = mysql_query("INSERT INTO tbl_jadwal VALUES('', '$newId', 'rabu', '', 'N', '0')");
    $insert4 = mysql_query("INSERT INTO tbl_jadwal VALUES('', '$newId', 'kamis', '', 'N', '0')");
    $insert5 = mysql_query("INSERT INTO tbl_jadwal VALUES('', '$newId', 'jumat', '', 'N', '0')");
    $insert6 = mysql_query("INSERT INTO tbl_jadwal VALUES('', '$newId', 'sabtu', '', 'N', '0')");
    if($insert && $insert1 && $insert2 && $insert3 && $insert4 && $insert5 && $insert6){
    {echo "<script>alert('Berhasil menyimpan data'); window.location='kelas.php'</script>";
      }
        }else{
    {echo "<script>alert('Gagal menyimpan data'); window.location='kelas.php'</script>";
      }
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
                                                <th>Kelas</th>
                                                <th>Nama Kelas</th>
                                                <th>Walikelas</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Jurusan</th>
                                                <th>Detail</th>
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
                                                                    tbl_kelas
                                                                    Inner Join tbl_user ON tbl_kelas.nip = tbl_user.nip");
                                            while($row = $res->fetch_assoc()){
                                                echo '
                                                <tr>
                                                    <td>'.$row['kelas'].'</td>
                                                    <td>'.$row['nama_kelas'].'</td>
                                                    <td>'.$row['nama'].'</td>
                                                    <td>'.$row['tahun_ajaran'].'</td>
                                                    <td>'.$row['jurusan'].'</td>
                                                    <td align="center">
                                                    <a class="btn btn-success btn-circle" href="detail_jadwal.php?id_kelas='.$row['id_kelas'].'" onclick="return warn()" title="Detail siswa"><i class="fa fa-book "></i></a>
                                                    <a class="btn btn-success btn-circle" href="detail_pelajaran.php?id_kelas='.$row['id_kelas'].'" onclick="return warn()" title="Detail pelajaran"><i class="fa fa-book "></i></a>
                                                    </td>
                                                    <td align="center">
                                                    <a class="btn btn-primary btn-circle" href="edit_kelas.php?id_kelas='.$row['id_kelas'].'" onclick="return warn()" title="Edit"><i class="fa fa-edit "></i></a>
                                                    <a class="btn btn-danger btn-circle" href="delete_kelas.php?id_kelas='.$row['id_kelas'].'" onclick="return warn()" title="Hapus"><i class="fa fa-trash-o "></i></a></button>
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
