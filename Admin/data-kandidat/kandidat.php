<?php 
 require '../../config.php';

 $kandidat = query("SELECT * FROM kandidat");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Voting ULBI</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- link fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/dashboard.css">


</head>

<body>

    <!-- content navbar -->
    <nav>
        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars"></i></button>
        

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <a class="offcanvas-title" href="" ><img src="../../assets/images/logo-ulbi.png" alt="" width="140" height="50"></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- content sidebar -->
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="navbar-item"><a href="../profile-admin/profile.php" class="nav-link active"> <i class="fa-solid fa-user"></i> Profile</a></li>
                    <hr>
                    <li class="navbar-item"><a href="../dashboard/dashboard.php" class="nav-link active"> <i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a></li>
                    <hr>
                    <li class="navbar-item"><a href="../data-kandidat/kandidat.php" class="nav-link active"> <i class="fa-solid fa-clipboard"></i> Data Kandidat</a></li>
                    <hr>
                    <li class="navbar-item"><a href="../data-mahasiswa/mahasiswa.php" class="nav-link active"><i class="fa-solid fa-users"></i> Data Mahasiswa</a></li>
                    <hr>
                    <li class="navbar-item"><a href="../laporan-voting/laporan.php" class="nav-link active"> <i class="fa-solid fa-envelope-open-text"></i> Laporan Hasil Vote</a></li>
                    <hr>
                    <li class="navbar-item"><a href="../../views/login.php" class="nav-link active"> <i class="fa-solid fa-right-from-bracket"></i> Log out</a></li>
                </ul>
            </div>
            <!-- sidebar end  -->
        </div>
        <div class="judul">
            <h2>E-VOTING PRESIDEN MAHASISWA ULBI</h>
        </div>
        <div class="menu">
            <!-- <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#profile">Profile</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul> -->
            <img src="../../assets/images/logo-ulbi.png" alt="" width="80" height="50">
        </div>
    </nav>
    <!-- navbar end -->

    <div class="col-md-10 p-5 pt-2"><br>
      <h3><i class="fa-solid fa-users"></i> DATA KANDIDAT </h3><br>
      
      <a href="create.php" class="btn btn-primary mb-3"><i class="fas fa-user-plus mr-3"></i> INPUT DATA KANDIDAT</a>
      <table class="table table-striped table-bordered">
      
        
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                  <th scope="col">NO</th> 
                  <th scope="col">ID KANDIDAT</th>
                <th scope="col">FOTO</th>
                <th scope="col">NAMA KANDIDAT</th>
                <th scope="col">JABATAN</th>
                <th scope="col">NPM</th>
                <th scope="col">VISI & MISI</th> 
                <th scope="col">PRODI</th> 
                <th scope="col">AKSI</th>
              </tr> 
            </thead>
      
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($kandidat as $row) : ?>
              <tr>   
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $row["id_kandidat"]; ?></td>
                  <td><img src="../../assets/images/profile.png" alt="" width="100" height="100"></td>
                  <td><?= $row["nama_kandidat"]; ?></td>
                  <td><?= $row["jabatan"]; ?></td>
                  <td><?= $row["npm"]; ?></td>
                  <td><?= $row["visi_misi"]; ?></td>
                  <td><?= $row["prodi"]; ?></td>
                  <td><a href="../data-kandidat/detail.php" class="btn btn-primary">Detail</a></td>
              <td><a href="../data-kandidat/update.php"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a></td>
              <td><a href="#"><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></a></td>
              </tr>
              <?php $i++ ?>
              <?php endforeach; ?>
            </tbody>
            </table>
  
  
    </div>
  </div>


</body>
</html>