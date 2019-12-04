<?php ?>
<!DOCTYPE HTML>
<html>
<head>
<style>

body {font-family: Arial, Helvetica, sans-serif;color:black }
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
        color: black;
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
        background-image: url("sky.jpg");
        background-size: 100%
        background-repeat: no-repeat;
    }

</style>
</head>



<body>

<div id="kaka">
<form method="post" >
<h1> Sign up</h1>

    First Name

    <div2>Last Name</div2>
    <br><br>
    <input type="text" placeholder="Enter first name" name="firstname">
    <span class="error">
    <div4> <input type="text" placeholder="Enter last name"  cols="45" name="lastname"></div4>
    
    <br><br><br>

    Username
    <br><br>
     <input type="text" name="username"  placeholder="Enter username">
    <br><br>

       Date of Birth
    <br><br>
     <input type="date" name="dateofbirth">
    <br><br>
    
        
     phone number
    <br><br>
    <input type="text"  name="phonenumber" >
    
        <br><br>
     Password
    <br><br>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br><br>

        Address
    <br><br>
    <input type="text"  name="address" width="200px;">
    
        <br><br>

    Gender
    <br><br>
  <input type="radio" name="gender" value="f">Female
  <input type="radio" name="gender" value="m">Male
  
 
    <br><br>


  <input type="submit" name="submit" onclick="location.href='V_signin.php'"  value="register">
    <br><br>


        <button type="button" class="cancel1"  onclick="location.href='HOMEpage.php'">Cancel</button>
    <br><br><br><br>
</form>
</div>
</body>
</html>
<?php

if(isset($_POST["submit"]))
{
    require_once('C_signup.php');
}


?>