<?php
require_once "../_config/config.php";
/*
    - fungsi looping login adalah untuk menjaga keamanan laman agar tidak mudah dalam pengeditan oleh pihak yang tidak berwajib
    - fungsi lainnya adalah untuk menghubungkan user ke arah laman setelah login
    - author : risang daniswara
    - ver : 1.0
    - Date Mod : 24 September 2019
*/
/*if(isset($_SESSION['user'])){
    echo "<script>window.location='".base_url().";'</script>";
}
else {*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - Tugas Jobsheet 2</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('../8542713_f520.jpg');?>">

</head>

<style>
    body{
        
        background-size: cover;
    }
    
    .head {
        position: absolute;
        margin-top: 200px;
        margin-left: 530px;
        font-size: 30px;
    }
    
    span {
        color: #fff;   
    }
    .container a{
        position: absolute;
        padding-top: 10px;
        padding-left: 10px;
        border: none;
        outline: none;
        height: 10px;
        width: 30px;
        text-decoration: none;
        font-size: 20px;
        line-height: 20px;
        color: #ffffff;
    }
        
    .container a:hover{
        color: #999999;
    }
    
    
</style>

<body>
    <div class="img" style="position: absolute; filter: brightness(50%); ">
        <img src="../img/people-working-together-in-meeting.jpg" style="width: 100%; height: 100%;">
    </div>
    <div id="wrapper">
        <div class="head" style="margin-left: 33%">
            <span>Password dan Passwordnya bebas Bu</span>
        </div>
        <div class="container">
            <div style = "margin-top: 295px; padding-left: 390px;">
                <?php
                if(isset($_POST['login'])){
                    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                    $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
                    $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($con));
                    if (mysqli_num_rows($sql_login) > 0) {
                        $_SESSION['user'] = $user;
                        echo "<script>window.location='".base_url()."'</script>";
                    }
                    else { ?>
                        <!----------<div class = "row">
                            <div class="col-lg-5 col-lg-offset-1">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <a href="login.php" class="close" data-dismiss="alert" aria-label="close" >&times;</a>
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"> </span>
                                    <strong>Login Gagal </strong> Username/Password Salah
                                </div>
                            </div>
                        </div>------->
                    <?php    
                    }
                } 
                ?>
                <form action="" method="post" class="navbar-form" style="margin-top: 0px; margin-left: -40px;" >
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="user" class="form-control" placeholder="Username" required>
                    </div> 
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="input-group">
                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="<?base_url('_assets/js/jquerry.js')?>"></script>
    <script src="<?base_url('_assets/js/bootstrap.min.js')?>"></script>
</body>
</html>

<?php
//}
?>