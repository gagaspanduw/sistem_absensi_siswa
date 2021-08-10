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

    $param1=$_GET['nip'];
    $sql1 = "SELECT *, tbl_user.nama FROM tbl_user WHERE nip='$param1'";
    $query1=mysql_query($sql1);
    $r1 = mysql_fetch_array($query1);
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
                                    <form method="post">
                    <table class="table table-bordered" border="8">                
                    <td>
                    <div class="form-group">                    
                      <label class="control-label" for="nip">NIP</label>
                        <input class="form-control" name="nip" type="text" id="nip" value="<?php echo $r1['nip'] ?>">
                    </div>
                             
                    <div class="form-group">            
                      <label class="control-label" for="nama">Nama</label>
                        <input class="form-control" name="nama" type="text" id="nama" value="<?php echo $r1['nama'] ?>">
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label" for="alamat">Alamat</label>
                        <input class="form-control" name="alamat" type="text" id="alamat" value="<?php echo $r1['alamat'] ?>">
                    </div>
                   
                    <div class="form-group">
                      <label class="control-label" for="tempatlahir">Tempat Lahir</label>
                        <input class="form-control" name="tempat_lhr" type="text" id="tempatlahir" value="<?php echo $r1['tempat_lhr'] ?>">
                    </div>
                    
                    <div class="form-group">               
                      <label class="control-label" for="tanggallahir">Tanggal Lahir</label>
                        <input class="form-control" name="tgl_lhr" type="date" id="tanggallahir" value="<?php echo $r1['tgl_lhr'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Jenis Kelamin</label>
                    <select class="form-control" name="jk" required="" onchange="javascript:get(this)">
                        <option value="<?php echo $r1['jk'] ?>"><?php echo $r1['jk'] ?></option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Mulai Ngajar</label>
                        <input type="date" name="mulai_ngajar" class="form-control" value="<?php echo $r1['mulai_ngajar'] ?>" />
                      </div>
                  </td>
                  <td>

                    <div class="form-group">
                        <label class="control-label">Riwayat Pendidikan</label>
                        <input class="form-control" type="text" name="riwayat_pendidikan" value="<?php echo $r1['riwayat_pendidikan'] ?>" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Telp</label>
                        <input class="form-control" type="number" name="telp" value="<?php echo $r1['telp'] ?>" />
                      </div>

                    <div class="form-group">
                        <label class="control-label">Username</label>
                        <input class="form-control" type="text" name="usern" value="<?php echo $r1['username'] ?>" />
                      </div>

                    <div class="form-group">
                        <label class="control-label">Password<span class="text-danger">*</span></label>
                        <input class="form-control" type="password" name="pass" value="<?php echo $r1['password'] ?>" />
                      </div>

                    <div class="form-group">
                    <label for="level" class="control-label">Level<span class="text-danger">*</span></label>
                    <select class="form-control" name="level" onchange="javascript:get(this)">
                        <option value="<?php echo $r1['level'] ?>"><?php echo $r1['level'] ?></option>
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
$insert = mysql_query("UPDATE tbl_user
      SET nip='$nip', nama='$nama',alamat='$alamat',tempat_lhr='$tempat_lhr',tgl_lhr='$tgl_lhr',jk='$jk',mulai_ngajar='$mulai_ngajar',riwayat_pendidikan='$riwayat_pendidikan',telp='$telp',username='$usern',password='$pass',level='$level'
      WHERE nip='$param1'");
if($insert){
{echo "<script>alert('Berhasil menyimpan data'); window.location='user.php'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='user.php'</script>";
  }
}
}
?>                
                <!-- /#page-wrapper -->
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
