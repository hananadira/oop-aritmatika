<?php 
class Kalkulator {
    public    $x;
    private   $y;
    protected $z;

    public function setTambah($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $hasil = $this->x + $this->y + $this->z;
        return $hasil;
    }
    public function setKurang($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $hasil = $this->x - $this->y - $this->z;
        return $hasil;
    }
    public function setKali($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $hasil = $this->x * $this->y * $this->z;
        return $hasil;
    }
    public function setBagi($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $hasil = $this->x / $this->y / $this->z;
        return $hasil;
    }


}

