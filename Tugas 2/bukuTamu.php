<?php
session_start();
if(!isset($_SESSION["username"])){ 
    header("location:index.php"); 
}
?>

<!DOCTYPE HTML>   
<html> 
<head> 
    <title>Tamu</title>
    <link rel="stylesheet" href="asset/style.css">
</head> 
<body>
    <div class="naviga">
        <ul>
            <li><a href="informasi.php">Informasi</a></li>
            <li><a href="informasi.php">Kembali</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <?php 
    // Mendefinisikan variabel dan mengembalikan ke isi kosong 
    $nameErr = $emailErr = ""; 
    $name = $email =  $comment = ""; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        if (empty($_POST["name"])) { 
            $nameErr = "Name is required"; 
        } else { 
        $name = test_input($_POST["name"]); 
            // periksa apakah nama hanya huruf dan spasi 
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) { 
                $nameErr = "Only letters and white space allowed";  
            } 
        } 
        if (empty($_POST["email"])) { 
            $emailErr = "Email is required"; 
        } else { 
            $email = test_input($_POST["email"]); 
            // Periksa format email 
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
                $emailErr = "Invalid email format";  
            } 
        } 
        if (empty($_POST["comment"])) { 
            $comment = ""; 
        } else { 
            $comment = test_input($_POST["comment"]); 
        } 
    } 
    function test_input($data) { 
        $data = trim($data); 
        $data = stripslashes($data); 
        $data = htmlspecialchars($data); 
        return $data; 
    } 
    ?>
    <div class="from_Tamu">
        <h2>Form Buku Tamu</h2> 
        <p><span class="error">* required field.</span></p> 
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
            Name: <input type="text" name="name" placeholder="Nama" value="<?php echo $name;?>"> 
            <span class="error">* <?php echo $nameErr;?></span> 
            <br><br> 
            E-mail: <input type="text" name="email" placeholder="E-mail" value="<?php echo $email;?>"> 
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br> 
            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea> 
            <br><br>
            <div class="button_submit">
                <input type="submit" class="button-submit" name="submit" value="Submit"> 
            </div>
            <br><br>
        </form>


    <?php 
    echo "<h2>Your Input:</h2>"; 
    if (empty($emailErr)) {
        echo "Name : $name";
        echo "<br>";
        echo "Email : $email";
        echo "<br>";
        echo "Comment : $comment";
    }
    ?>
    </div>
</body> 
</html> 