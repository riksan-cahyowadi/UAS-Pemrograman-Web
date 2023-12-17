<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Profil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Daftar nama mahasiswa:</h2>
        <a class="btn btn-primary" href="/UAS/create.php" role="button">Profil baru</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Prodi</th>
                    <th>Semester</th>
                    <th>Waktu dibuat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "daftar_profil";

                //Koneksi ke database 
                $connection = new mysqli($servername, $username, $password, $database);

                //Eksekusi koneksi jika terjadi kegagalan
                if ($connection->connect_error){
                    die("Connection failed: ".$connection->connect_error);
                }

                //Membaca semua kolom yang ada di database
                $sql = "SELECT * FROM identitas";
                $result = $connection->query($sql);

                //Menampilkan pesan Error jika terjadi kesalahan
                if (!$result){
                    die("Invalid Query: ".$connection->error);
                }

                //Membaca data disetiap kolom
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr id='baris-$row[id]'>
                        <td>$row[id]</td>
                        <td>$row[nama]</td>
                        <td>$row[email]</td>
                        <td>$row[prodi]</td>
                        <td>$row[semester]</td>
                        <td>$row[created_at]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='/UAS/editdata.php?id=$row[id]'>Edit</a>
                            <button class='btn btn-danger btn-sm' onclick='konfirmasiHapus($row[id])'>Delete</button>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        // Fungsi untuk menampilkan konfirmasi sebelum menghapus
        function konfirmasiHapus(id) {
            // Tampilkan konfirmasi dengan sweetalert atau fungsi lainnya
            if (confirm("Anda yakin ingin menghapus data ini?")) {
                hapusBaris(id);
            }
        }

        // Fungsi untuk menghapus baris dari tabel
        function hapusBaris(id) {
            // Hapus baris tabel berdasarkan id
            document.getElementById("baris-" + id).remove();

            // Tampilkan pesan sukses
            alert("Data berhasil dihapus!");
        }
    </script>
</body>
</html>
