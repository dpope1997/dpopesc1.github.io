<html>

<h1> test </h1>

<?php
$q = $_REQUEST["q"];
$f = fopen("fence.txt", "r");
while (($line = fgets($f)) !== FALSE) {
   if (strstr($line, $q)) {
       $res = explode(',', $line);
       echo "Your Card Number:". $res[0] ."<br> Expiration Date:". $res[1]
   }   // outputs card+expiration date if either one is found in the line
}


?>

</html>