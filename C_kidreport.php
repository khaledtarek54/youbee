<?php
require_once ('M_kidreport.php');
require_once ("My_DB.php");
$con=DbConnection::getInstance();
        $db=$con->getConnection();
$id= mysqli_real_escape_string($db, $_POST["kidid3"]);
$kidreport = new kidreport($id);
$kidrep = new kidrepview();
$kidrep->ShowkidDetails($kidreport);

?>