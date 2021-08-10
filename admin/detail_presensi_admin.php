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
    $param1 = $_GET['id_jadwal'];

    $sql = "SELECT * from tbl_jadwal
    where id_jadwal='$param1'";
    $query=mysql_query($sql);
    $r = mysql_fetch_array($query);
    $date = date('Y-m-d');
    $time = date('H:i:sa');

    if ($r['status'] != 'Y' )
    {
    echo ("<script>alert('Presensi belum dibuka');document.location='presensi_detail_admin.php?id_kelas=$param'</script>");
    }
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
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>NIS</th>
                                                <th>Nama siswa</th>
                                                <th>Pertemuan 1</th>
                                                <th>Pertemuan 2</th>
                                                <th>Pertemuan 3</th>
                                                <th>Pertemuan 4</th>
                                                <th>Pertemuan 5</th>
                                                <th>Pertemuan 6</th>
                                                <th>Pertemuan 7</th>
                                                <th>Pertemuan 8</th>
                                                <th>Pertemuan 9</th>
                                                <th>Pertemuan 10</th>
                                                <th>Pertemuan 11</th>
                                                <th>Pertemuan 12</th>
                                                <th>Pertemuan 13</th>
                                                <th>Pertemuan 14</th>
                                                <th>Pertemuan 15</th>
                                                <th>Pertemuan 16</th>
                                                <th>Pertemuan 17</th>
                                                <th>Pertemuan 18</th>
                                                <th>Pertemuan 19</th>
                                                <th>Pertemuan 20</th>
                                                <th>Pertemuan 21</th>
                                                <th>Pertemuan 22</th>
                                                <th>Pertemuan 23</th>
                                                <th>Pertemuan 24</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $conn = new mysqli("localhost", "root", "", "absensi2");
                                            if ($conn->connect_errno) {
                                                echo "Failed to connect to MySQL: " . $conn->connect_error;
                                            }
                                            
                                            $res = $conn->query("SELECT tbl_detail_jadwal.detail_jadwal,
                                                                tbl_detail_jadwal.nis,
                                                                tbl_detail_jadwal.id_jadwal,
                                                                tbl_detail_jadwal.p1,
                                                                tbl_detail_jadwal.p2,
                                                                tbl_detail_jadwal.p3,
                                                                tbl_detail_jadwal.p4,
                                                                tbl_detail_jadwal.p5,
                                                                tbl_detail_jadwal.p6,
                                                                tbl_detail_jadwal.p7,
                                                                tbl_detail_jadwal.p8,
                                                                tbl_detail_jadwal.p9,
                                                                tbl_detail_jadwal.p10,
                                                                tbl_detail_jadwal.p11,
                                                                tbl_detail_jadwal.p12,
                                                                tbl_detail_jadwal.p13,
                                                                tbl_detail_jadwal.p14,
                                                                tbl_detail_jadwal.p15,
                                                                tbl_detail_jadwal.p16,
                                                                tbl_detail_jadwal.p17,
                                                                tbl_detail_jadwal.p18,
                                                                tbl_detail_jadwal.p19,
                                                                tbl_detail_jadwal.p20,
                                                                tbl_detail_jadwal.p21,
                                                                tbl_detail_jadwal.p22,
                                                                tbl_detail_jadwal.p23,
                                                                tbl_detail_jadwal.p24,
                                                                tbl_siswa.nama
                                                                FROM
                                                                tbl_detail_jadwal
                                                                Inner Join tbl_siswa ON tbl_detail_jadwal.nis = tbl_siswa.nis
                                                                where tbl_detail_jadwal.id_jadwal = '$param1'
                                                                order by tbl_siswa.nama asc");
                                            while($row = $res->fetch_assoc()){
                                                echo '
                                                <tr>
                                                    <td>'.$row['nis'].'</td>
                                                    <td>'.$row['nama'].'</td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p1'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p2'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p3'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p4'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p5'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p6'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p7'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p8'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p9'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p10'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p11'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p12'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p13'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p14'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p15'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p16'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p17'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p18'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p19'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p20'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p21'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p22'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p23'].'</a></td>
                                                    <td><a href="klik_presensi.php?detail_jadwal='.$row['detail_jadwal'].'&id_kelas='.$param.'&id_jadwal='.$param1.'">'.$row['p24'].'</a></td>
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
