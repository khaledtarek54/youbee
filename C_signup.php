<?php
//Controller

require_once 'M_signup.php';
require_once 'V_signup.php';
require_once ("My_DB.php");
$flag=0;
if(isset($_POST["submit"]))
{
        
        $signobj=new signup();
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
        $signobj->firstname= mysqli_real_escape_string($db, $_POST["firstname"]);
        $signobj->lastname= mysqli_real_escape_string($db, $_POST["lastname"]);
        $signobj->username= mysqli_real_escape_string($db, $_POST["username"]);
        $signobj->password= mysqli_real_escape_string($db, $_POST["password"]);
        $signobj->phonenumber= mysqli_real_escape_string($db, $_POST["phonenumber"]);
        $signobj->dateofbirth= mysqli_real_escape_string($db, $_POST["dateofbirth"]);
        $signobj->address= mysqli_real_escape_string($db, $_POST["address"]);
        $signobj->gender= mysqli_real_escape_string($db, $_POST["gender"]);
    
        $flag = "1";
       
    if(empty($signobj->firstname))
    {
        $flag = "0";
        
    }
    if(empty($signobj->lastname))
    {
        $flag = "0";
    }
    if(empty($signobj->username))
    {
        $flag = "0"; 
    }
    if(empty($signobj->password))
    {
        $flag = "0";
    }
    if(empty($signobj->phonenumber))
    {
        $flag = "0";
    }
    if(empty($signobj->dateofbirth))
    {
        $flag = "0";
    }
    if(empty($signobj->address))
    {
        $flag = "0";
    }
    if(empty($signobj->gender))
    {
        $flag = "0";
    }
    
    if($flag=="1")
    {
        echo "khara";
        signup::insertuserinfo($signobj);
    }
    else
    {
        echo "<script type='text/javascript'>alert('Enter all the form');</script>";
    }
}



?>