<?php
class Pengguna {
    public function tampilkanPeran() {
        echo "Peran: Pengguna Sistem Informasi";
    }
}

class Mahasiswa extends Pengguna {
    public function tampilkanPeran() {
        echo "Peran: Mahasiswa";
    }
}

class Dosen extends Pengguna {
    public function tampilkanPeran() {
        echo "Peran: Dosen";
    }
}

class Admin extends Pengguna {
    public function tampilkanPeran() {
        echo "Peran: Tenaga Administrasi / Admin";
    }
}

$mhs = new Mahasiswa();
$dosen = new Dosen();
$admin = new Admin();

$mhs->tampilkanPeran();
echo "<br>";

$dosen->tampilkanPeran();
echo "<br>";

$admin->tampilkanPeran();
?>