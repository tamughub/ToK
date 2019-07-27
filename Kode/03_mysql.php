<?php

function connectdb() {
   $host = "localhost";
   $user = "root";
   $pass = "";
   $dbse = "webdb";
   break;
   
   $link = mysql_connect($host, $user, $pass);
   if ($link) {
      if (mysql_select_db($dbse)) {
         return $link;
      } else {
         die ("Can't select database!");
      }
   } else {
      die ("Can't connect to server!");
   }
}

function runsqltext($sSQL) {
   $a = connectdb();
   if ($a) {
      $result = mysql_query($sSQL);
      if ($result) {
         return $result;
      } else {
         die ("<p>Can't execute query!<br /><font color='red'>".$sSQL."</font>");
      }
   }
   mysql_close($a);
}

$sql = "SELECT user, pass, host FROM mysql.user";
$res = runsqltext($sql);

echo "<table border=1 width=100%>";
echo "<thead><td>User</td><td>pass</td><td>host</td></thead>";
while ($row = mysql_fetch_array($res) {
   echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
}
echo "</table>";