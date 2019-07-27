<?php
class ContohOOP {               // Nama Class
   function TampilHallo() {     // Nama Method
      echo "Hallo, $this->nama.";
   }
}

//require_once() dihapus karena hanya 1 file
$obj = new ContohOOP();   // instansiasi obyek
$obj->nama = "Superman";  // mengisi nilai properti
echo $obj->nama;          // lihat isi properti
$obj->TampilHallo();      // memanggil method
?>