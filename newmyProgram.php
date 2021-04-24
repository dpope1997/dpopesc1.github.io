<?php
$q = $_REQUEST["q"];
$f = fopen("fence.txt", "r");
while (($line = fgets($f)) !== FALSE) {
   if (strstr($line, $q)) {
       echo "<li>Your Card Number and Expiration Date: $line"; 
   }   // outputs card+expiration date if either one is found in the line
}


?>