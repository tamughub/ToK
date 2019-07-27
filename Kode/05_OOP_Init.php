<?php
// buat class
class IHT {
   private $instruktur = "YHT";
   public function __construct() {
      echo "Construct!";
   }
   public function pengajar() {
      return "IHT oleh $this->intsruktur";
   }
   public function __destruct() {
      echo "Destruct!";
   }
}

// buat obyek dari class
$iht = new IHT();

echo "<br />";
echo $iht->pengajar();
echo "<br />";
?>