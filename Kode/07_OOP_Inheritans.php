<?php
// class induk
class pegawai {
   public $jabatan = "kosong";
   public $golongan = "-";
   public $gaji = "0";
   public function jabatan() {
      return $this->jabatan;
   }
}

// class anak
class staf_ahli extends pegawai {
   public function detail() {
      return "<p>jabatan: $this->jabatan, golongan: $this->golongan, " .
             "gaji: $this->gaji</p>";
   }
}

// buat obyek dari class anak
$staf_ahli_1 = new staf_ahli();

// panggil method
echo "<p>" . $staf_ahli_1->jabatan() . "</p>";
$staf_ahli_1->detail();

// isi properti
$staf_ahli_1->jabatan = "Sahli Bidang 1";
$staf_ahli_1->golongan = "IV / c";
$staf_ahli_1->gaji = "20.000.000";

// panggil method
echo "<p>" . $staf_ahli_1->jabatan() . "</p>";
$staf_ahli_1->detail();
?>