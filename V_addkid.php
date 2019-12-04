<?php require_once('C_update.php');
require_once ("My_DB.php");
class update
{
    
    function __construct($kidopject)
	{
        
    }
}


?>
<!DOCTYPE HTML>
<html>
<head>
<style>

body {font-family: Arial, Helvetica, sans-serif;color: azure}
     {box-sizing: border-box}
.error {color: #59ffe6;}

   form
    {
       padding-left:100px;
       margin-left: 320px;
       padding-bottom: 100px;
       border-style: outset;
        width: 600px;
       height:800px;
       border: 1px #393939;


    }
    div3
    {
        padding-left:auto ;
    }
    div2
    {

    padding-left:243px ;
    }
    div4
{

    padding-left:135px ;
}
    .cancel1 {
        padding: 14px 20px;
        background-color: #f44336;
        width: 74.5%;;
        border: none;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 74.5%;;
        opacity: 0.9;
    }
    input[type=text]
    {
        height: 25px;
        border-style: outset;
        border-radius: 8px;
    }
input[type=date]
{

    width: 74.5%;
    height: 25px;
    border-style: outset;
    border-radius: 8px;

}


input[type=number]
{

    width: 74.5%;
    height: 25px;
    border-radius: 8px;
    border-style: outset;

}
input[name="email"]
{

    width: 74.5%;
    height: 25px;
    border-style: outset;
    border-radius: 8px;
}

input[name="password"]
{

    width: 74.5%;
    height: 25px;
    border-style: outset;
    border-radius: 8px;
}

    body
    {
        background-image: url("cart.jpg");
        background-size: 100%
        background-repeat: no-repeat;
    }

</style>
</head>



<body>
 
<div id="kaka">
<form method="post">
ID
<br><br>
<input type="text" placeholder="Enter ID" name="id">
<input type="submit" name="search" value="search">
<br><br>
    First Name

    <div2>Last Name</div2>
    <br><br>
    <input type="text"  name="firstname" <?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){echo "value=";echo $kidopject->firstname;}?>>
    <span class="error">
    <div4> <input type="text"   cols="45" name="lastname" <?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){echo "value=";echo $kidopject->lastname;}?>></div4>
    
    <br><br><br>

       Date of Birth
    <br><br>
     <input type="date" name="dateofbirth" <?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){echo "value=";echo $kidopject->dateofbirth;}?>>
    <br><br>

        Registration date
    <br><br>
     <input type="date" name="registrationdate"<?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){echo "value=";echo $kidopject->registrationdate;}?>>
    <br><br>
         monthly fees
    <br><br>
    <input type="radio" name="monthlyfees" value="m"<?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){if($kidopject->monthlyfees=="m"){echo "checked";}}?>>monthly
  <input type="radio" name="monthlyfees" value="h"<?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){if($kidopject->monthlyfees=="h"){echo "checked";}}?>>half month
    <br><br>
        
     parent number
    <br><br>
    <input type="text"  name="parentsnumber"<?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){echo "value=";echo $kidopject->parentsnumber;}?> >
    
        <br><br>

        Address
    <br><br>
    <input type="text"  name="address" width="200px;"<?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){echo "value=";echo $kidopject->address;}?>>
    
        <br><br>

    Gender
    <br><br>
  <input type="radio" name="gender" value="f"<?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){if($kidopject->gender=="f"){echo "checked";}}?>>Female
  <input type="radio" name="gender" value="m"<?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){if($kidopject->gender=="m"){echo "checked";}}?>>Male
  
 
    <br><br>
    BUS
    <br><br>
  <input type="radio" name="bus" value="y"<?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){if($kidopject->bus=="y"){echo "checked";}}?>>IN bus
  <input type="radio" name="bus" value="n"<?php if(isset($_POST["search"])&&$_SESSION["flag"]!=1){if($kidopject->bus=="n"){echo "checked";}}?>>NOT
  
 
    <br><br>
        
        <br><br>


        <input type="submit" name="submit" value="register">
  
        <input type="submit" name="update" value="update">
    <br><br>


        <button type="button" class="cancel1" onclick="location.href='V_home.php'">Cancel</button>
    <br><br><br><br>
</form>
</div>
</body>
</html>
<?php

if(isset($_POST["submit"]))
{
    require_once('C_addkid.php');
}
if(isset($_POST["search"]))
{
    require_once('C_update.php');
}
if(isset($_POST["update"]))
{
    require_once('C_update.php');
}


?>