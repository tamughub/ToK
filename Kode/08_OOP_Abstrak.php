<?php
// buat abstract class
abstract class pegawai {
   // buat abstract method
   abstract public function detail();
}

// buat class anak dari induk yang abstrak
class gaji_peg extends pegawai {
   // penerapan method yang abstrak
   public function detail() {
      return "<p>Detail gaji pegawai.<p>";
   }
   // method biasa
   public function text() {
      return "<p>Text.<p>";
   }
}

// buat obyek dari class anak
$gaji_peg_1 = new gaji_peg();
echo $gaji_peg_1->detail();
echo $gaji_peg_1->text();

// buat obyek dari class abstrak
$peg_1 = new pegawai();
?>