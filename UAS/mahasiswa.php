<?php

class Mahasiswa
{
    private $connection;

    public function __construct($servername, $username, $password, $database)
    {
        $this->connection = new mysqli($servername, $username, $password, $database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getAllMahasiswa()
    {
        $sql = "SELECT * FROM identitas";
        $result = $this->connection->query($sql);

        if (!$result) {
            die("Invalid Query: " . $this->connection->error);
        }

        $mahasiswaData = [];

        while ($row = $result->fetch_assoc()) {
            $mahasiswaData[] = $row;
        }

        return $mahasiswaData;
    }

}

?>
