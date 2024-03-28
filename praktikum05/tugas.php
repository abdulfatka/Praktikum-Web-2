<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Form Nilai Ujian</h1>
        <form method="post">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="mk" class="col-4 col-form-label">Pilih MK</label> 
                <div class="col-8">
                    <select id="mk" name="mk" class="custom-select">
                        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                    <input id="nilai" name="nilai" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai dari input
            $nim = $_POST["nim"];
            $mk = $_POST["mk"];
            $nilai = $_POST["nilai"];

            // Memeriksa nilai
            if (is_numeric($nilai)) {
                // Menentukan hasil berdasarkan nilai
                if ($nilai >= 0 && $nilai <= 35) {
                    $hasil = "E";
                } elseif ($nilai >= 36 && $nilai <= 55) {
                    $hasil = "D";
                } elseif ($nilai >= 56 && $nilai <= 69) {
                    $hasil = "C";
                } elseif ($nilai >= 70 && $nilai <= 84) {
                    $hasil = "B";
                } elseif($nilai >= 85 && $nilai <= 100) {
                    $hasil = "A";
                }

                // Menentukan grade
                $grade = ($nilai >= 56) ? "LULUS" : "TIDAK LULUS";

                // Menampilkan hasil
                echo "<div class='alert alert-info' role='alert'>";
                echo "NIM: $nim<br>";
                echo "Mata Kuliah: $mk<br>";
                echo "Nilai: $nilai<br>";
                echo "Hasil Ujian: $hasil<br>";
                echo "Grade: $grade";
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Masukkan nilai yang valid!</div>";
            }
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4