<?php 

    $connect = mysqli_connect("localhost", "root", "", "vote"); ;

    function query($query) {
        global $connect;
        $result = mysqli_query($connect, $query);
        $row = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function regis($data) {
        global $connect;
        
        //mengambil data dari user yg menginputkan
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($connect, $data["password"]) ;
        $confirm_password = mysqli_real_escape_string($connect, $data["confirm_password"]) ;

        //cek password sama tidak dengan confirmnya
        if ($password !== $confirm_password) {
            echo "<script>
                    alert('Password tidak sesuai')
                    </script>";
                    return false;
        }

        //cek username sudah ada atau belum
        $result = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username'");
        
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
            alert('Username sudah terdaftar')
            </script>";
            return false;
        }

        //enskripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);


        //tambahkan user baru 
        mysqli_query($connect, "INSERT INTO user VALUES ('', '$username', '$password', '')");

        return mysqli_affected_rows($connect);

    }


    // function tambah($data) {
    //     global $connect;

    //     $id_kandidat = $data["id_kandidat"];
    //     $nama_kandidat = $data["nama_kandidat"];
    //     $npm = $data["npm"];
    //     $jabatan = $data["jabatan"];
    //     $visi_misi = $data["visi_misi"];
    //     $prodi = $data["prodi"];
    //     $img = $data["img"];

    //     // query insert 
    //     $query = "INSERT INTO kandidat VALUES ('$id_kandidat','$nama_kandidat','$npm','$jabatan','$visi_misi','$prodi','$img')";
    //     mysqli_query($connect,$query);

    //     return mysqli_affected_rows($connect);
    // }


    function vote($data) {
        global $connect;

        $nama_pemilih = $data["nama_pemilih"];
        $pilihan = $data["pilihan"];
        $tanggal = $data["tanggal"];

        // query insert 
        $query = "INSERT INTO hasil VALUES ('','$nama_pemilih','$pilihan','$tanggal')";
        mysqli_query($connect,$query);

        return mysqli_affected_rows($connect);
    }

    function ubah($data) {
        global $connect;
    
        $id      = $data["id"];
        $nama_pemilih = $data["nama_pemilih"];
        $pilihan = $data["pilihan"];
        $tanggal = $data["tanggal"];
    
        //query insert
        $query = "UPDATE hasil SET 
                    nama_pemilih     = '$nama_pemilih',
                    pilihan    = '$pilihan',
                    tanggal  = '$tanggal'
    
                  WHERE id = $id  
        
                ";
        mysqli_query($connect, $query);
    
        return mysqli_affected_rows($connect);
    }


    function hapus($id) {
        global $connect;
        mysqli_query($connect, "DELETE FROM hasil WHERE id = $id");
    
        return mysqli_affected_rows($connect);
    }

?>