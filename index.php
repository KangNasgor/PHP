<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Mari Berhitung</h1>
    <form method="POST" action="index.php">
        <div class="form-group container mt-5">
            <div class="row d-flex">
                <label class="col-3">Masukkan Subyek</label>
                <input type="text" class="col-9 form-control" name="subyek">
            </div>
            <div class="row d-flex mt-4">
                <label class="col-3">Masukkan Predikat</label>
                <input type="text" class="col-9 form-control" name="predikat">
            </div>
            <div class="row d-flex mt-4">
                <label class="col-3">Masukkan Angka Awal</label>
                <input type="text" class="col-9 form-control" name="angkaAwal">
            </div>

            <div class="row d-flex mt-4">
                <label class="col-3">Pilih Angka Awal</label>
                <select class="col-9 form-control" name="AngkaKedua">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <div class="dropdown-divider"></div>
                    <option>8</option>
                    <option>30</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
            <input type="submit" class="btn btn-info mt-3" value="Reset" name="reset">
        </div>
    </form>

</body>

</html>

<?php
// include "koneksi.php";

if (isset($_POST['submit'])) {
    $subject = $_POST['subyek'];
    $predikat = $_POST['predikat'];
    $angkaFirst = $_POST['angkaAwal'];
    $angkaSecond = $_POST['AngkaKedua'];
    if($angkaFirst < $angkaSecond){
            echo "yang bener dong, angka awal harus lebih besar";
    }
    else{
        $output = $angkaFirst;
        while($angkaFirst > $angkaSecond){
            $output = $angkaFirst - $angkaSecond;
            echo "ada " . $angkaFirst . " " . $subject . " sedang " . $predikat . " berhenti dan pergi " . $angkaSecond . " tinggal " . $output . nl2br("\n");
            $angkaFirst = $output;
        }
        if($angkaFirst <= $angkaSecond){
        $angkaSecond = $angkaFirst;
        echo "ada " . $angkaFirst . " " . $subject . " sedang " . $predikat . " berhenti dan pergi " . $angkaSecond . " sepilah sudah" . nl2br("\n");
        }
    }
}
/*

*/

?>