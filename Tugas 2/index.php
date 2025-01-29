<?php
    session_start();
    if(isset($_SESSION["username"])){ 
        header("location:informasi.php"); 
    }
?>

<!DOCTYPE html> 
<html> 
<head> 
    <title>Login</title> 
    <link rel="stylesheet" type="text/css" href="asset/style.css"> 
</head> 
<body> 
    <div align="center" class="container">
        <?php  
            if(isset($_GET["login_gagal"])){ 
                ?> 
                <div class="notifikasi">login gagal! <br> Username atau Password salah</div> 
                <?php 
        } 
        ?>
        <div class="login-form">
            <div class="header">
                <h2>Login</h2>
            </div>
            <form method="post" action="proses_login.php"> 
                <div class="input"> 
                    <div>
                        <input type="text" name="username" placeholder="Username" required>
                    </div> 
                </div> 
                <div class="input"> 
                    <div> 
                        <input type="password" name="password" placeholder="Password" required>
                    </div> 
                </div> 
                <div class="button_login"> 
                    <button type="submit" name="login" class="button button-login">Login</button>
                </div> 
            </form> 
        </div> 
        <br> 
    </div> 
</body> 
</html>