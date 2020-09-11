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
                        <th><a href="backgroundCSS.html"> Background </a></th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th><a href="div.html"> Div </a></th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th><a href="floatCSS.html"> Float </a></th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th><a href="fontCSS.html"> Font </a></th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th><a href="linkCSS.html"> Link </a></th>
                    </tr>
                    <tr>
                        <th>6</th>
                        <th><a href="marginCSS.html"> Margins </a></th>
                    </tr>
                    <tr>
                        <th>7</th>
                        <th><a href="paddingCSS.html"> Paddings </a></th>
                    </tr>
                    <tr>
                        <th>8</th>
                        <th><a href="positionCSS.html"> Positions </a></th>
                    </tr>
                </tbody>
        
<?php include_once("../_footer.php");?>