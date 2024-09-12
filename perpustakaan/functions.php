<?php 
// koneksi ke DB
$conn = mysqli_connect("localhost", "root", "", "db_perpustakaan");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data) {
    global $conn;

    // ambil data dari tiap elemen dalam form
    $nrb = htmlspecialchars($data["nrb"]);
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $stok = htmlspecialchars($data["stok"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO buku
                VALUES
                ('', '$nrb', '$judul', '$penulis', '$penerbit', '$tahun_terbit', '$gambar', '$stok')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if( $error === 5 ) {
        echo "
            <script>
                alert('Pilih gambar terlebih dahulu.');
            </script>;
        return false;
        ";
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "
            <script>
                alert('yang anda upload bukan gambar');
            </script>;
            return false;
        ";
    }

    if( $ukuranFile > 1000000 ) {
        echo "
            <script>
                alert('Ukuran gambar terlalu besar');
            </script>;    
        return false;
        ";
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

    return $namaFileBaru;

}

function hapus($id_buku) {
    global $conn;

    // query hapus data berdasarkan id
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id_buku");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    // ambil data dari tiap elemen dalam form
    $id_buku = $data["id_buku"];
    $nrb = htmlspecialchars($data["nrb"]);
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

        if($_FILES['gambar']['error'] === 5 ) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

    $stok = htmlspecialchars($data["stok"]);

    $query = "UPDATE buku SET
                nrb = '$nrb',
                judul = '$judul',
                penulis = '$penulis',
                penerbit = '$penerbit',
                tahun_terbit = '$tahun_terbit',
                gambar = '$gambar',
                stok = '$stok'
            WHERE id_buku = $id_buku";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM buku
                WHERE
                nrb LIKE '%$keyword%' OR
                judul LIKE '%$keyword%' OR
                penulis LIKE '%$keyword%' OR
                penerbit LIKE '%$keyword%' OR
                tahun_terbit LIKE '%$keyword%'
                ";
        
    return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "
            <script>
                alert('Username sudah terdaftar!');
            </script>
        ";
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "
            <script>
                alert('Konfirmasi password tidak sesuai');
            </script>
        ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

?>
