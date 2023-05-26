<?php 
class Kalkulator {
    public    $x;
    private   $y;
    protected $z;


    public function setTambah($x, $y, $z) {
        $this->x = $x;
        $this->y= $y;
        $this->z= $z;
    }

    public function setKurang($x, $y, $z) {
        $this->x = $x;
        $this->y= $y;
        $this->z= $z;
    }

    public function setKali($x, $y, $z) {
        $this->x = $x;
        $this->y= $y;
        $this->z= $z;
    }

    public function setBagi($x, $y, $z) {
        $this->x = $x;
        $this->y= $y;
        $this->z= $z;
    }
    
    public function setModul($x, $y, $z) {
        $this->x = $x;
        $this->y= $y;
        $this->z= $z;
    }

    public function getTambah() {
        echo $this->x + $this->y + $this->z;
    }

    public function getKurang() {
        echo $this->x - $this->y - $this->z;
    }

    public function getKali() {
        echo $this->x * $this->y * $this->z;
    }

    public function getBagi() {
        echo $this->x / $this->y / $this->z;
    }

    public function getModul() {
        echo $this->x % $this->y % $this->z;
    }
}

$tambah = new Kalkulator();
$tambah->setTambah(1, 0, 3);

$kurang = new Kalkulator();
$kurang->setKurang(6, 3, 3);

$kali = new Kalkulator();
$kali->setKali(1, 3, 3);

$bagi = new Kalkulator();
$bagi->setBagi(10, 5, 2);

$modul = new Kalkulator();
$modul->setModul(10, 5, 2);

echo "jika 1 + 0 + 3 maka hasil akan ";
echo $tambah->getTambah();
echo "<br>";
echo "jika 6 - 3 - 3 maka hasil akan ";
echo $kurang->getKurang();
echo "<br>";
echo "jika 1 * 3 * 3 maka hasil akan ";
echo $kali->getKali();
echo "<br>";
echo "jika 10 / 5 / 2 maka hasil akan ";
echo $bagi->getBagi();
echo "<br>";
echo "jika 10 % 5 % 2 maka hasil akan ";
echo $modul->getModul();