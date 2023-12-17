<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "daftar_profil";

 //Koneksi ke database 
$connection = new mysqli($servername, $username, $password, $database);


$nama = "";
$email = "";
$prodi = "";
$semester = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $nama = $_POST ["nama"];
    $email = $_POST ["email"];
    $prodi = $_POST ["prodi"];
    $semester = $_POST ["semester"];

    do {
        if ( empty($nama) || empty($email) || empty($prodi) || empty($semester) ){
            $errorMessage = "Semua kolom harus diisi";
            break;
        }
        //Menambahkan data profil baru ke database
        $sql = "INSERT INTO identitas (nama, email, prodi, semester)".
                    "VALUES ('$nama', '$email', '$prodi', '$semester')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Query salah!" . $connection->error;
            break;
        }

        $nama = "";
        $email = "";
        $prodi = "";
        $semester = "";

        $successMessage = "Data baru telah ditambahkan!";
        
        header("location: /UAS/index.php");
        exit;

    } while (false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Profil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class = "container my-5">
        <h2>Profil baru</h2>

        <?php
        if ( !empty($errorMessage) ) {
            echo "
            <div class = 'alert alert-warning alert-dismissible fade show' role = 'alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>


        <form method="post">
            <div class = "row mb-3">
                <label class="col-sm-3 col-form-label">Nama</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                </div>
            </div>
            <div class = "row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class = "row mb-3">
                <label class="col-sm-3 col-form-label">Prodi</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="prodi" value="<?php echo $prodi; ?>">
                </div>
            </div>
            <div class = "row mb-3">
                <label class="col-sm-3 col-form-label">Semester</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="semester" value="<?php echo $semester; ?>">
                </div>
            </div>

            <?php
        if ( !empty($successMessage) ) {
            echo "
            <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6>
                        <div class = 'alert alert-success alert-dismissible fade show' role = 'alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div> 
                    </div>
                </div>
            ";
        }
        ?>

            <div class = "row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class = "col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/UAS/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>