<?php
session_start();
//////////validation error
//Event Controller
require_once ('M_addevent.php');
require_once ('V_addevent.php');
require_once ("My_DB.php");
if(isset($_POST["submit"]))
{
$_SESSION["flag"]=0;
$eventobject = new event(); 
$con=DbConnection::getInstance();
        $db=$con->getConnection();
$eventobject->Eventname= mysqli_real_escape_string($db, $_POST["eventname"]);
$eventobject->Eventtype= mysqli_real_escape_string($db, $_POST["eventtype"]);
$eventobject->Startdate= mysqli_real_escape_string($db, $_POST["startdate"]);
$eventobject->Enddate= mysqli_real_escape_string($db, $_POST["enddate"]);
$eventobject->Eventlocation= mysqli_real_escape_string($db, $_POST["eventlocation"]);
$eventobject->Eventfees= mysqli_real_escape_string($db, $_POST["eventfees"]);  

        if (empty($eventobject->Enddate))
        {
            $_SESSION["flag"]=1;
            
        }
        if (empty($eventobject->Startdate))
        {
            $_SESSION["flag"]=1;
            
        }
        if (empty($eventobject->Eventtype))
        {
            $_SESSION["flag"]=1;
            
        }
        if(empty($eventobject->Eventlocation))
        {
            $_SESSION["flag"]=1;
            
        }
        if(empty($eventobject->Eventfees))
        {
            $_SESSION["flag"]=1;
            
        }
        if(!is_numeric($eventobject->Eventfees))
        {
            $_SESSION["flag"]=2;
        }
        if($_SESSION["flag"]==1)
        {
            echo "<script type='text/javascript'>alert('Enter missing fields');</script>";
        }
        if($_SESSION["flag"]==2)
        {
            echo "<script type='text/javascript'>alert('fees should be number');</script>";
        }
        if($_SESSION["flag"]==0)
        {
            $eventobject->inserteventinfo($eventobject);
        }
}

?>