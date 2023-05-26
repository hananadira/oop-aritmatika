<?php 
include "proses-kalku.php";

$kalkulator = new Kalkulator();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><b>Oprasi Aritmatika</b></p>
    <form action="#" method="post">
        <input type="number" name="x">
        <select name="oprasi">
            <option value="tambah"> + </option>
            <option value="kurang"> - </option>
            <option value="kali"> x </option>
            <option value="bagi"> / </option>
        </select>

        <input type="number" name="y">
        <select name="oprasi">
            <option value="tambah"> + </option>
            <option value="kurang"> - </option>
            <option value="kali"> x </option>
            <option value="bagi"> / </option>
        </select>

        <input type="number" name="z">
        <label> = </label>
        <input type="submit" value="hitung">
    </form>
</body>
</html>

<?php
if ($_POST) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
    if ($_POST['oprasi'] == "tambah") {
        echo "Hasil :" .$x." + ".$y." + ".$z." = ".$kalkulator->setTambah($x, $y, $z). "<br / br/>";
    } elseif ($_POST['oprasi'] == "kurang") {
        echo "Hasil :" .$x." - ".$y." - ".$z." = ".$kalkulator->setKurang($x, $y, $z). "<br / br/>";
    } elseif ($_POST['oprasi'] == "kali") {
        echo "Hasil :" .$x." x ".$y." x ".$z." = ".$kalkulator->setKali($x, $y, $z). "<br / br/>";
    } elseif ($_POST['oprasi'] == "bagi") {
        echo "Hasil :" .$x." / ".$y." / ".$z." = ".$kalkulator->setBagi($x, $y, $z). "<br / br/>";
    }
}
?>