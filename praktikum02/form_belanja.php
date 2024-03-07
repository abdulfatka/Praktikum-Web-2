<?php
$customer = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];
$totalHarga = 0;

if ($produk == "tv") {
    $totalHarga = 4200000;
} elseif ($produk == "kulkas") {
    $totalHarga = 3100000;
} elseif ($produk == "mesincuci") {
    $totalHarga = 3800000;
} else {
    $totalHarga = 0;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Form Belanja Online</title>
</head>

<body>

    <div class="container mt-5 border border-2 rounded border-primary ">
        <h1 class="text-center">Belanja Online</h1>
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row mb-2">
                        <label for="customer" class="col-2 col-form-label text-end">Customer</label>
                        <div class="col-4">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-2 text-end">Pilih Produk</label>
                        <div class="col-8">

                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                            <label for="produk_0" class="custom-control-label">TV</label>


                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                            <label for="produk_1" class="custom-control-label">KULKAS</label>


                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci">
                            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>

                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="jumlah" class="col-2 col-form-label text-end">Jumlah</label>
                        <div class="col-4">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-2 col-10">
                            <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <table class="table border">
                    <tr class="table-primary ">
                        <td>Daftar Harga</td>
                    </tr>
                    <tr>
                        <td>TV : 4.200.000</td>
                    </tr>
                    <tr>
                        <td>KULKAS : 3.100.000</td>
                    </tr>
                    <tr>
                        <td>MESIN CUCI : 3.800.000</td>
                    </tr>
                    <tr class="table-primary">
                        <td>Harga Dapat Berubah Setiap Saat</td>
                    </tr>
                </table>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8">
                <?php
                echo "Nama Customer : " . $customer;
                echo "<br>";
                echo "Produk Pilihan : " . $produk;
                echo "<br>";
                echo "Jumlah Beli : " . $jumlah;
                echo "<br>";
                echo "Total Belanja : Rp. " . number_format($totalHarga * $jumlah, 0, '.');
                ?>
            </div>

        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>