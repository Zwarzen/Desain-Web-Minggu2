<?php 
include_once("../_header.php");
?>


    <div class="box">
        <h1>Tugas</h1>
        <h4>
            <small>Data Tugas Jobsheet 1</small>
            
        </h4>

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
                        <th>Link</th>         
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th><a href="buatForm.html"> Buat Form </a></th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th><a href="buatTable.html"> Buat Table </a></th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th><a href="font.html"> Font </a></th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th><a href="gambar.html"> gambar </a></th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th><a href="garisHorizontal.html"> Garis Horizontal </a></th>
                    </tr>
                    <tr>
                        <th>6</th>
                        <th><a href="heading.html"> Heading </a></th>
                    </tr>
                    <tr>
                        <th>7</th>
                        <th><a href="hello.html"> Hello </a></th>
                    </tr>
                    <tr>
                        <th>8</th>
                        <th><a href="karakter.html"> Karakter </a></th>
                    </tr>
                    <tr>
                        <th>9</th>
                        <th><a href="list.html"> List </a></th>
                    </tr>
                    <tr>
                        <th>10</th>
                        <th><a href="macamLink.html"> Macam Link </a></th>
                    </tr>
                    <tr>
                        <th>11</th>
                        <th><a href="paragraf.html"> Paragraf </a></th>
                    </tr>
                    <tr>
                        <th>12</th>
                        <th><a href="paragrafAlign.html"> Paragraf Align </a></th>
                    </tr>
                    <tr>
                        <th>13</th>
                        <th><a href="warna.html"> Warna </a></th>
                    </tr>
                </tbody>
        
<?php include_once("../_footer.php");?>