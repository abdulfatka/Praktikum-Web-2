<?php
class bmiPasien
{
    public $nama, $berat, $tinggi, $umur, $jk;

    function __construct($nama, $berat, $tinggi, $umur, $jk) {
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }

    public function hasilBMI() {
        $tinggi_m = $this->tinggi / 100;
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi, 2);

    }

    public function statusBMI() {

    $bmi = $this->hasilBMI();
    if ($bmi < 18.5) {
        return "Kekurangan Berat Badan";
    } elseif ($bmi >= 18.5 && $bmi <= 24.9 ) {
        return "Berat Badan Normal";
    } elseif ($bmi >= 25 && $bmi <= 29.9 ) {
        return "Kelebihan Berat Badan";
    } else {
        return "Kegemukan (Obesitas)";
    }
}
}
