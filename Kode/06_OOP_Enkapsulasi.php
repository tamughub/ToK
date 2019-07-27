<?php
// buat class
class Pension {
   private $_nama;
   private $_umur;
   public function __construct($nama, $umur=0) {
      if (!is_int($umur)) {
         throw new Exeption("\$umur bukan integer!");
      }
      $this->_umur = $umur;
      $this->_nama = $nama;
   }
   public function set_umur($umur) {
      if (!is_int($umur)) {
         throw new Exeption("\$umur bukan integer!");
      }
      $this->_umur = $umur;
   }
   public function pension() {
      return 70 - $this->_umur;
   }
   public function nama() {
      return $this->_nama;
   }
   public function umur() {
      return $this->_umur;
   }
   public function data() {
      return "Nama: " . $this->_nama . "<br>Umur: " . $this->_umur .
             "<br>Pensiun dalam " . $this->pension();
   }
}

// buat obyek dari class
$pegawai = new Pension("Saya");
echo "<p>" . $pegawai->data() . "</p>";

$pegawai->set_umur(30);
echo "<p>" . $pegawai->data() . "</p>";

$pegawai_baru = new Pension("Kamu", 25);
echo "<p>" . $pegawai->data() . "</p>";
?>