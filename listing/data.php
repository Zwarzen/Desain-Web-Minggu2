<?php 
include_once("../_header.php");
?>


    <div class="box">
        <h1>Siswa</h1>
        <h4>
            <small>Data Siswa</small>
            
        </h4>
        <div style="margin-bottom: 20px;">
            <form class="form-inline" action="" method="post"> 
                <div class="form-group"> 
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                </div>
                <div class="form-group">
                </div>
                <div class="form-group"> 
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
                
                
                <div class="form-group pull-right">
                    <button type="btn btn-primary"><a href="../cetak.php">Cetak Hasil</a></button>
                </div>
            </form>    
        </div>

        <!---Menampilkan Tanggal--->
        <div class="date" style="position: absolute; margin-left: 17%; margin-top: -55px; font-size: 25px;">
        <?php
        $tgl=date('d M Y');
        echo $tgl;
        ?>
        </div>
        <!---Menampilkan Tanggal--->
            
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Keterangan</th>         
                    </tr>
                </thead>
                <tbody>

                <?php 
                //looping mengambil data dan membuat pagination
                /*
                - $batas untuk mengambil batas data yang ditampilkan
                - $hal untuk menampilkan halaman yang dibuka
                */
                $batas = 50;
                $hal = $_GET['hal'];
                if (empty($hal)){
                    $posisi = 0;
                    $hal = 1;
                } else {
                    $posisi = ($hal - 1) * $batas;
                }
                $no = 1;
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                    if($pencarian != ''){ 
                        $sql = "SELECT * FROM tb_siswa WHERE nama_siswa LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM tb_siswa LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM tb_siswa";
                        $no = $posisi + 1;
                    }
                    } else {
                        $query = "SELECT * FROM tb_siswa LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM tb_siswa";
                        $no = $posisi + 1;
                }
                $sql_siswa = mysqli_query($con, $query) or die (mysqli_error($con));
                if(mysqli_num_rows($sql_siswa) > 0) {
                    while($data = mysqli_fetch_array($sql_siswa)) { ?>
                        <tr>
                            <td><?=$no++ ?></td>
                            <td><?=$data['nama_siswa'] ?></td>
                            
                            <td><select name="absensi" style="width: 100px; height: 20px; position: absolute; border: 0px;">
                                <option value="masuk">Masuk</option>
                                <option value="ijin">Ijin</option>
                                <option value="sakit">Sakit</option>
                                <option value="alpha">Alpha</option>
                                </select></td>
                            
                        </tr>
                    <?php
                    }
                } else {
                    echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <?php
        //looping pencarian
        /*
        - untuk mencari seluruh data yang sesuai dengan pencarian hingga looping selesai
        */
        if($_POST['pencarian'] == ''){ ?>
        <div style="float: left;">
                <?php 
                $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                
                echo "  Jumlah Data : <b>$jml</b>";

                ?>
            </div>
            <div style="float:right">
                <ul class="pagination pagination-sm" style="margin:0">
                    <?php 
                    $jml_hal = ceil($jml / $batas);
                    for ($i=1; $i <= $jml_hal; $i++){
                        if($i != $hal) {
                            echo "<li><a href=\"?hal=$i\">$i</a></li>"; 
                        } else {
                            echo "<li class=\"active\"><a>$i</a></li>"; 
                        }
                
                    }
                    ?>
                </ul>
            </div>
            <?php  
            //looping pagination
            /*
            melakukan looping hingga data habis dan membuat laman pagination
            */
            } else {
                echo "<div style=\"float:left;\">";
                $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                echo "Data Hasil Pencarian : <b>$jml</b>";
                echo "</div>";    
            }
            ?>
        
        
<?php include_once("../_footer.php");?>