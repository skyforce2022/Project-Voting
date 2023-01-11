<?php
require '../config.php';

if (isset($_POST["submit"])) {

    if (vote($_POST) > 0) {
        echo "<script>
			alert('Vote berhasil');
            window.location.href = 'vote.php';
			</script>";
    } else {
        echo "<script>
			alert('Vote gagal');
			</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- link fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="col-md-10 p-5 pt-2"><br>
        <h3><i class="fa-solid fa-clipboard"></i> VOTE PRESMA DAN WAPRESMA </h3><br>

        <div class="col-md-10 p-1 pt-3 text-secondary">
            <h6> Tambah Vote</h6>
        </div>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_pemilih" class="form-label text-dark">Nama Pemilih</label>
                <input type="text" name="nama_pemilih" id="nama_pemilih" required class="form-control" placeholder="masukkan nama anda...">
            </div>
            <div class="mb-3">
                <label for="pilihan" class="form-label text-dark">Ketua dan Wakil Presma</label>
                <select class="form-select" name="pilihan" id="pilihan" required>
                    <option selected disabled value=""> Pilih Presma</option>
                    <option>Pilihan 1 - Devi Wulandari (Ketua) & Ariadiva Putri Bintang Maharani (Wakil) </option>
                    <option>Pilihan 2 - Ghaida Fasya Yuthika Afifah (Ketua) & Serli Pariela (Wakil) </option>
                    <option>Pilihan 3 - M Fachriza Farhan (Ketua) & Daffy Raisan Naufhal Kustiman (Wakil) </option>
                    <option>Pilihan 4 - Gilang Andhika Buwana (Ketua) & Aditya Firmansyah Diasmara (Wakil) </option>
                    <option>Pilihan 5 - Dzulkifli Faiz Nurmufid (Ketua) & Aliffathur Muhammad Revan (Wakil) </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label text-dark">Tanggal Memilih</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control">
            </div>


            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-info text-light">Submit</button>
                <a href="vote.php" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</body>

</html>