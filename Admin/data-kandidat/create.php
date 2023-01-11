<?php 
// require '../../config.php';

// if(isset($_POST["submit"])) {

//     if (tambah($_POST) > 0) {
//         echo "<script>
// 			alert('Data berhasil ditambahkan');
//             window.location.href = 'kandidat.php';
// 			</script>";

//     } else{
//         echo "<script>
// 			alert('Data gagal ditambahkan');
// 			</script>";
//     }
// }

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
      <h3><i class="fa-solid fa-clipboard"></i> TAMBAH DATA KANDIDAT </h3><br>

      <div class="col-md-10 p-1 pt-3 text-secondary">
                 <h6> Tambah Data Kandidat</h6>   
             </div>
             <form action="" method="post">
                <fieldset disabled></fieldset>
                 <div class="mb-3">    
                     <label for="id_kandidat" class="form-label text-dark">ID Kandidat</label>
                     <input type="number" name="id_kandidat" id="id_kandidat" required class="form-control" placeholder="Masukkan id kandidat">
                 </div>
                 <div class="mb-3">    
                     <label for="TextInput" class="form-label text-dark">Nama Kandidat</label>
                     <input type="text" name="nama_kandidat" id="nama_kandidat" class="form-control" placeholder="Masukkan nama kandidat">
                    </div>
                    <div class="mb-3">    
                        <label for="inputpassword5" class="form-label text-dark">NPM</label>
                        <input type="text" name="npm" id="npm" class="form-control" placeholder="Masukkan NPM">
                       </div>
                       <div class="mb-3">    
                           <label for="img" class="form-label text-dark">Program Studi</label>
                           <br>
                           <select id="disabledSelect" class="form-label form-control text-dark" name="prodi">
                               <option hidden aria-disabled="">Pilih Program Studi</option>
                               <option>D3 Teknik Informatika</option>
                               <option>D3 Akuntansi</option>
                               <option>D3 Manajemen Bisnis</option>
                               <option>D3 Logistik Bisnis</option>
                               <option>D3 Manajemen Informatika</option>
                               <option>D4 Teknik Informatika</option>
                               <option>D4 Akuntansi</option>
                               <option>D4 Manajemen Bisnis</option>
                               <option>D4 Logistik Bisnis</option>
                               <option>D4 E-Commerce Logistik</option>
                               <option>S1 Sains Data</option>
                               <option>S1 Manajemen Transportasi</option>
                               <option>S1 Bisnis Digital</option>
                               <option>S1 Manajemen Rekayasa</option>
                               <option>S1 Manajemen Logistik</option>
                            </select>
                       </div>
                       <div class="mb-3">    
                           <label for="inputpassword5" name="jabatan" id="prodi" class="form-label text-dark">Jabatan</label>
                           <br>
                           <select id="disabledSelect" class="form-label form-control text-dark" name="jabatan">
                               <option hidden aria-disabled="">Pilih Jabatan</option>
                               <option>Ketua</option>
                               <option>Wakil</option>
                            </select>
                            <div class="mb-3">    
                                <label for="inputpassword5" class="form-label text-dark">Visi & Misi</label>
                                <input type="text" name="visi_misi" id="visi_misi" class="form-control" placeholder="Masukkan visi dan misi">
                            </div>
                        </div>
                        <div class="mb-3">    
                             <label for="img" class="form-label text-dark">Foto</label>
                             <div class="input-group mb-3">
                             <input type="file" class="form-control" id="inputGroupFile02">
                             <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                    </div>
                 <div class="mb-3">
                 <button type="submit" name="submit" class="btn btn-info text-light">Submit</button>
                 <a href="../data-kandidat/kandidat.php" class="btn btn-success">Kembali</a> 
             </form>
      
      
  
    </div>
  </div>


</body>
</html>