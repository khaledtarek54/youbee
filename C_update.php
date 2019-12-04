<?php
require_once 'V_addkid.php';
require_once 'M_updatekid.php';
require_once ("My_DB.php");
session_start();
if(isset($_POST["search"]))
{
    $_SESSION["flag"]=0;
    $con=DbConnection::getInstance();
    $db=$con->getConnection();
    $id= mysqli_real_escape_string($db, $_POST["id"]);
    $_SESSION["idd"] = $id;
    if(empty($id))
    {
        $_SESSION["flag"]=1;
        echo "<script type='text/javascript'>alert('Enter ID');</script>";
    }
    if(!is_numeric($id) && $_SESSION["flag"]!=1)
    {
        $_SESSION["flag"]=1;
        echo "<script type='text/javascript'>alert('ID should be a number');</script>";
    }
    if( $_SESSION["flag"]==0)
    {
         $kidopject = new updatekid($id); 
         require_once('V_addkid.php');
         $kidviewinfo = new update($kidopject);
    }
}
if(isset($_POST["update"]))
{
    $con=DbConnection::getInstance();
    $db=$con->getConnection();
    
    $kidopject=new updatekid($idd);
    $kidopject->id=  $_SESSION["idd"];
    $kidopject->firstname= mysqli_real_escape_string($db, $_POST["firstname"]);
    $kidopject->lastname= mysqli_real_escape_string($db, $_POST["lastname"]);
    $kidopject->registrationdate= mysqli_real_escape_string($db, $_POST["registrationdate"]);
    $kidopject->parentsnumber= mysqli_real_escape_string($db, $_POST["parentsnumber"]);
    $kidopject->monthlyfees= mysqli_real_escape_string($db, $_POST["monthlyfees"]);
    $kidopject->dateofbirth= mysqli_real_escape_string($db, $_POST["dateofbirth"]);
    $kidopject->address= mysqli_real_escape_string($db, $_POST["address"]);
    $kidopject->gender= mysqli_real_escape_string($db, $_POST["gender"]);
    $kidopject->bus= mysqli_real_escape_string($db, $_POST["bus"]);
    $kidopject->updatekidinfo($kidopject->id,$kidopject->firstname,$kidopject->lastname,$kidopject->registrationdate,$kidopject->parentsnumber,$kidopject->monthlyfees, $kidopject->dateofbirth,$kidopject->address, $kidopject->gender,$kidopject->bus);
    
    
}