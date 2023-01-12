<?php 

    require '../config.php';

    //cek tombol sudah di tekan atau belum
    if (isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1 ) {

    //cek password 
    $row = mysqli_fetch_assoc($result);
    $verify = password_verify($password, $row["password"]);

    if ($verify) {
    // header("location: ../Mahasiswa/dashboard/dashboard");
     echo "<script>
             window.location.href = '../Mahasiswa/vote.php'  
             alert('Login sebagai Mahasiswa berhasil');                  
           </script>" ;
                exit;
            }

        }
    // $error = true;
    $result2 = mysqli_query($connect,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $cek = mysqli_num_rows($result2);

    if ($cek > 0) {
    global $result2;
    
    $data = mysqli_fetch_assoc($result2);
    
    if ($data["level"] === "admin") {
    
        echo "<script>
                 window.location.href = '../Admin/profile-admin/profile.php'
                alert('Login sebagai Admin berhasil');
              </script>"; 
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    </script>
</head>

<body>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    
    <h1>
        <marquee behavior="smooth" direction="row">Login Untuk Vote</marquee>
    </h1>

    <div class="kotak_login">
        <center>
            <img src="../assets/images/logo-ulbi.png" alt="" width="200" height="80">
        </center>
        <p class="tulisan_login">Login Here</p>

        <?php if(isset($error)): ?>
        <p class="text-danger">Username atau password salah</p>
        <?php endif; ?>

        <form action="" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="enter your username..." required="required">

            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="enter you password..." required="required">

            <input type="submit" class="tombol_login" name="login" value="LOGIN">


            <p align="center">Dont have an account? <a href="register.php">Register</a> here</p>
            <hr>
            <center>
                <a class="link" href="../index.php">Back</a>
            </center>
        </form>

    </div>

</body>

</html>
