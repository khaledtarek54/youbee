<?php
require_once 'V_feesupdate.php';
require_once 'M_updatefees.php';
require_once ("My_DB.php");
session_start();

if(isset($_POST["search"]))
{
    
    $con=DbConnection::getInstance();
        $db=$con->getConnection();
    $id= mysqli_real_escape_string($db, $_POST["id"]);
    $_SESSION["idd"] = $id;
    $feesobject = new updatefees($id);

    require_once ('V_feesupdate.php');
   
    $feesinfo = new feesupdate($feesobject);
}
if(isset($_POST["update"]))
{
    $con=DbConnection::getInstance();
        $db=$con->getConnection();
    
    $feesobject=new updatefees($idd);
    $feesobject->id=  $_SESSION["idd"];
    $feesobject->month= mysqli_real_escape_string($db, $_POST["monthly"]);
    $feesobject->hmonth= mysqli_real_escape_string($db, $_POST["halfmonthly"]);
    $feesobject->busfees= mysqli_real_escape_string($db, $_POST["busfees"]);
    $feesobject->eventfees = mysqli_real_escape_string($db, $_POST["event"]);
    $feesobject->updatefeesinfo($feesobject->id,$feesobject->month,$feesobject->busfees, $feesobject->hmonth,$feesobject->eventfees);
    
    
}