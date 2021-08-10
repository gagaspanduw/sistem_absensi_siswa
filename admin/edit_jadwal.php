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

    $param1=$_GET['id_jadwal'];
    $sql1 = "SELECT *, tbl_user.nama FROM tbl_jadwal inner join tbl_user on tbl_jadwal.nip = tbl_user.nip WHERE id_jadwal='$param1'";
    $query1=mysql_query($sql1);
    $r1 = mysql_fetch_array($query1);
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Jadwal</h1>
                    </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input data jadwal
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post">
                    <table class="table table-bordered" border="8">                
                    <td>
                    <div class="form-group">
                        <label class="form-label">Nama Guru</label>
                        <select class="form-control" name="namaguru" id="namaguru">
                                    <option value="<?php echo $r1['nip'] ?>"><?php echo $r1['nama'] ?></option>
                                    <?php $sql=mysql_query("select * from tbl_user where username != 'admin' order by nama");
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
                        <label class="form-label">Kelas</label>
                        <select class="form-control" name="kelas" id="kelas" onchange="javascript:get(this)" required="required"> 
                            <option value="<?php echo $r1['kelas'] ?>"><?php echo $r1['kelas'] ?></option>
                            <option value="1 AP 1">1 AP 1</option>
                            <option value="1 AP 2">1 AP 2</option>
                            <option value="1 AP 3">1 AP 3</option>
                            <option value="2 AP 1">2 AP 1</option>
                            <option value="2 AP 2">2 AP 2</option>
                            <option value="2 AP 3">2 AP 3</option>
                            <option value="3 AP 1">3 AP 1</option>
                            <option value="3 AP 2">3 AP 2</option>
                            <option value="3 AP 3">3 AP 3</option>
                            <option value="1 AK 1">1 AK 1</option>
                            <option value="1 AK 2">1 AP 2</option>
                            <option value="1 AK 3">1 AK 3</option>
                            <option value="2 AK 1">2 AK 1</option>
                            <option value="2 AK 2">2 AK 2</option>
                            <option value="2 AK 3">2 AK 3</option>
                            <option value="3 AK 1">3 AK 1</option>
                            <option value="3 AK 2">3 AK 2</option>
                            <option value="3 AK 3">3 AK 3</option>
                            <option value="1 ATPH 1">1 ATPH 1</option>
                            <option value="1 ATPH 2">1 ATPH 2</option>
                            <option value="1 ATPH 3">1 ATPH 3</option>
                            <option value="2 ATPH 1">2 ATPH 1</option>
                            <option value="2 ATPH 2">2 ATPH 2</option>
                            <option value="2 ATPH 3">2 ATPH 3</option>
                            <option value="3 ATPH 1">3 ATPH 1</option>
                            <option value="3 ATPH 2">3 ATPH 2</option>
                            <option value="3 ATPH 3">3 ATPH 3</option>
                            <option value="1 TKJ 1">1 TKJ 1</option>
                            <option value="1 TKJ 2">1 TKJ 2</option>
                            <option value="1 TKJ 3">1 TKJ 3</option>
                            <option value="2 TKJ 1">2 TKJ 1</option>
                            <option value="2 TKJ 2">2 TKJ 2</option>
                            <option value="2 TKJ 3">2 TKJ 3</option>
                            <option value="3 TKJ 1">3 TKJ 1</option>
                            <option value="3 TKJ 2">3 TKJ 2</option>
                            <option value="3 TKJ 3">3 TKJ 3</option>
                            <option value="1 TKR 1">1 TKR 1</option>
                            <option value="1 TKR 2">1 TKR 2</option>
                            <option value="1 TKR 3">1 TKR 3</option>
                            <option value="2 TKR 1">2 TKR 1</option>
                            <option value="2 TKR 2">2 TKR 2</option>
                            <option value="2 TKR 3">2 TKR 3</option>
                            <option value="3 TKR 1">3 TKR 1</option>
                            <option value="3 TKR 2">3 TKR 2</option>
                            <option value="3 TKR 3">3 TKR 3</option>
                            <option value="1 TKL 1">1 TKL 1</option>
                            <option value="1 TKL 2">1 TKL 2</option>
                            <option value="1 TKL 3">1 TKL 3</option>
                            <option value="2 TKL 1">2 TKL 1</option>
                            <option value="2 TKL 2">2 TKL 2</option>
                            <option value="2 TKL 3">2 TKL 3</option>
                            <option value="3 TKL 1">3 TKL 1</option>
                            <option value="3 TKL 2">3 TKL 2</option>
                            <option value="3 TKL 3">3 TKL 3</option>
                            <option value="1 TSM 1">1 TSM 1</option>
                            <option value="1 TSM 2">1 TSM 2</option>
                            <option value="1 TSM 3">1 TSM 3</option>
                            <option value="2 TSM 1">2 TSM 1</option>
                            <option value="2 TSM 2">2 TSM 2</option>
                            <option value="2 TSM 3">2 TSM 3</option>
                            <option value="3 TSM 1">3 TSM 1</option>
                            <option value="3 TSM 2">3 TSM 2</option>
                            <option value="3 TSM 3">3 TSM 3</option>
                            <option value="1 TPM 1">1 TPM 1</option>
                            <option value="1 TPM 2">1 TPM 2</option>
                            <option value="1 TPM 3">1 TPM 3</option>
                            <option value="2 TPM 1">2 TPM 1</option>
                            <option value="2 TPM 2">2 TPM 2</option>
                            <option value="2 TPM 3">2 TPM 3</option>
                            <option value="3 TPM 1">3 TPM 1</option>
                            <option value="3 TPM 2">3 TPM 2</option>
                            <option value="3 TPM 3">3 TPM 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan" onchange="javascript:get(this)" required="required"> 
                            <option value="<?php echo $r1['jurusan'] ?>"><?php echo $r1['jurusan'] ?></option>
                            <option value="Agribisnis Tanaman Pangan dan Holtikultura">Agribisnis Tanaman Pangan dan Holtikultura</option>
                            <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                            <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                            <option value="Teknik Pemesinan">Teknik Permesinan</option>
                            <option value="Teknik Instalasi Tenaga Listrik">Teknik Ketenaga Listrik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Mata Pelajaran</label>
                        <select class="form-control" name="mata_pelajaran" id="mata_pelajaran" onchange="javascript:get(this)" required="required"> 
                            <option value="<?php echo $r1['mata_pelajaran'] ?>"><?php echo $r1['mata_pelajaran'] ?></option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Agama">Agama</option>
                            <option value="Penjaskes">Penjaskes</option>
                            <option value="Bahas Jepang">Bahasa Jepang</option>
                            <option value="Ipa">Ipa</option>
                            <option value="Kewarganegaraan">Kewarganegaraan</option>
                        </select>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                        <label class="form-label">Hari</label>
                        <select class="form-control" name="hari" id="hari" onchange="javascript:get(this)" required="required"> 
                            <option value="<?php echo $r1['hari'] ?>"><?php echo $r1['hari'] ?></option>
                            <option value="senin">Senin</option>
                            <option value="selasa">Selasa</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jum'at">Jum'at</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jam Mulai</label>
                        <select class="form-control" name="jam_mulai" id="jam_mulai" onchange="javascript:get(this)" required="required"> 
                            <option value="<?php echo $r1['jam_mulai'] ?>"><?php echo $r1['jam_mulai'] ?></option>
                            <option value="08:00">08:00</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">13:00</option>
                            <option value="14:00">14:00</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jam Selesai</label>
                         <select class="form-control" name="jam_selesai" id="jam_selesai" onchange="javascript:get(this)" required="required"> 
                            <option value="<?php echo $r1['jam_selesai'] ?>"><?php echo $r1['jam_selesai'] ?></option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tahun Ajaran</label>
                        <select class="form-control" name="tahun_ajaran" id="tahun_ajaran" onchange="javascript:get(this)" required="required"> 
                        <option value="<?php echo $r1['tahun_ajaran'] ?>"><?php echo $r1['tahun_ajaran'] ?></option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2019">2020</option>
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
$namaguru = $_POST['namaguru'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$hari = $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$tahun_ajaran = $_POST['tahun_ajaran'];
$insert = mysql_query("UPDATE tbl_jadwal
      SET nip='$namaguru',kelas='$kelas',jurusan='$jurusan',mata_pelajaran='$mata_pelajaran',hari='$hari',jam_mulai='$jam_mulai',jam_selesai='$jam_selesai',tahun_ajaran='$tahun_ajaran'
      WHERE id_jadwal='$param1'");
if($insert){
{echo "<script>alert('Berhasil menyimpan data'); window.location='jadwal.php'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='jadwal.php'</script>";
  }
}
}
?>
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
