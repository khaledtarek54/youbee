<?php
require_once ('M_fullreport.php');
require_once ('V_fullreport.php');
require_once ("My_DB.php");
$reportobj = new fullreport();
$reportview = new fullreportview();
$reportview->Showfullreport($reportobj);

?>