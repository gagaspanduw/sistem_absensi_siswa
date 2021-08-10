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
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User</h1>
                    </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input data user
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" role="form">
                    <table class="table table-bordered" border="8">                
                    <td>
                    <div class="form-group">                    
                      <label class="control-label" for="nip">NIP</label>
                        <input class="form-control" name="nip" type="text" id="nip" maxlength="15" onkeypress="return Angkasaja(event)">
                    </div>
                             
                    <div class="form-group">            
                      <label class="control-label" for="nama">Nama</label>
                        <input class="form-control" name="nama" type="text" maxlength="30" id="nama">
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label" for="alamat">Alamat</label>
                        <input class="form-control" name="alamat" type="text" id="alamat">
                    </div>
                   
                    <div class="form-group">
                      <label class="control-label" for="tempatlahir">Tempat Lahir</label>
                        <input class="form-control" name="tempat_lhr" type="text" maxlength="30" id="tempatlahir">
                    </div>
                    
                    <div class="form-group">               
                      <label class="control-label" for="tanggallahir">Tanggal Lahir</label>
                        <input class="form-control" name="tgl_lhr" type="date" id="tanggallahir">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Jenis Kelamin</label>
                    <select class="form-control" name="jk" required="" onchange="javascript:get(this)">
                        <option value="">Option</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Mulai Ngajar</label>
                        <input type="date" name="mulai_ngajar" class="form-control" />
                      </div>
                  </td>
                  <td>

                    <div class="form-group">
                        <label class="control-label">Riwayat Pendidikan</label>
                        <select class="form-control" name="riwayat_pendidikan" required="" onchange="javascript:get(this)">
                        <option value="">Option</option>
                        <option value="SLTA">SLTA</option>
                        <option value="Sarjana">Sarjana</option>
                        <option value="Magister">Magister</option>
                        <option value="Doktor">Doktor</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Telp</label>
                        <input class="form-control" type="text" name="telp" maxlength="20" onkeypress="return Angkasaja(event)" />
                      </div>

                    <div class="form-group">
                        <label class="control-label">Username</label>
                        <input class="form-control" type="text" name="usern" maxlength="15" />
                      </div>

                    <div class="form-group">
                        <label class="control-label">Password<span class="text-danger">*</span></label>
                        <input class="form-control" type="password" required="" maxlength="10" name="pass" />
                      </div>

                    <div class="form-group">
                    <label for="level" class="control-label">Level<span class="text-danger">*</span></label>
                    <select class="form-control" name="level" required="" onchange="javascript:get(this)">
                        <option value="">Option</option>
                        <option value="admin">Admin</option>
                        <option value="Guru">Guru</option>
                    </select>
                    </div>
                </td>
            </table>
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
$nip  = $_POST['nip'];
$nama  = $_POST['nama'];
$alamat  = $_POST['alamat'];
$tempat_lhr  = $_POST['tempat_lhr'];
$tgl_lhr  = $_POST['tgl_lhr'];
$jk  = $_POST['jk'];
$mulai_ngajar  = $_POST['mulai_ngajar'];
$riwayat_pendidikan  = $_POST['riwayat_pendidikan'];
$telp  = $_POST['telp'];
$usern = $_POST['usern'];
$pass  = $_POST['pass'];
$level = $_POST['level'];
$insert = mysql_query("INSERT INTO tbl_user VALUES('$nip', '$nama', '$alamat', '$tempat_lhr', '$tgl_lhr', '$jk', '$mulai_ngajar', '$riwayat_pendidikan', '$telp', '$usern', '$pass', '$level')");
if($insert){
{echo "<script>alert('Berhasil menyimpan data'); window.location='user.php'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='user.php'</script>";
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
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Telp</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Level</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $conn = new mysqli("localhost", "root", "", "absensi2");
                                            if ($conn->connect_errno) {
                                                echo "Failed to connect to MySQL: " . $conn->connect_error;
                                            }
                                            
                                            $res = $conn->query("SELECT * FROM tbl_user where level !='siswa'");
                                            while($row = $res->fetch_assoc()){
                                                echo '
                                                <tr>
                                                    <td>'.$row['nip'].'</td>
                                                    <td>'.$row['nama'].'</td>
                                                    <td>'.$row['alamat'].'</td>
                                                    <td>'.$row['telp'].'</td>
                                                    <td>'.$row['jk'].'</td>
                                                    <td>'.$row['username'].'</td>
                                                    <td>'.$row['password'].'</td>
                                                    <td>'.$row['level'].'</td>
                                                    <td align="center">
                                                    <a class="btn btn-primary btn-circle" href="edit_user.php?nip='.$row['nip'].'" onclick="return warn()" title="Edit"><i class="fa fa-edit "></i></a>
                                                    <a class="btn btn-danger btn-circle" href="delete_user.php?nip='.$row['nip'].'" onclick="return warn()" title="Hapus"><i class="fa fa-trash-o "></i></a></button>
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

    <script type="text/javascript">
    function Angkasaja(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
    return true;
    }
    </script>
</body>

</html>
