<?php 
include_once('../_header.php');
?>

    <div class="box">
            <h1>Siswa</h1>
            <h4>
            <small>Edit Data Siswa</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
        
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php 
                        $id = $_GET['id'];
                        $sql_siswa = mysqli_query($con, "SELECT * FROM tb_siswa WHERE id_siswa = '$id'") or die (mysqli_error($con));
                        $data = mysqli_fetch_array($sql_siswa);
                    ?>
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="ket"> Keterangan </label>
                            
                            <h4>
                                <select name="agama" style="width: 400px; height: 45px; position: absolute;">
                                <option value="#">...</option>
                                <option value="masuk">Masuk</option>
                                <option value="ijin">Ijin</option>
                                <option value="sakit">Sakit</option>
                                <option value="alpha">Alpha</option>
                                </select>
                            </h4>
                            
                            <!--<textarea name="ket" id="ket" class="form-control"><?=$data['ket_siswa']?></textarea>-->
                            
                            
                            <input type="hidden" name="id" value="<?php echo $data['id_siswa'];?>" />
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                        </div>
                    </form>
                </div>  
            </div>
    </div>

<?php 
include_once('../_footer.php');
?>