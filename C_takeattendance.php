<?php
require_once ("My_DB.php");

if(isset($_POST["submit"]))
{
    require_once ('M_takeattendance.php');
    if(isset($_POST["attend"]))
    {    
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
        $id= mysqli_real_escape_string($db, $_POST["kidid2"]);
        $attenobj = new attendance($id);
    }
    else
    {
        echo "<script type='text/javascript'>alert('please select attended');</script>";
    }
        
}
?>