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
<h1> Please fill this information</h1>

    Student id
    <br><br>
    <input type="text" placeholder="Enter student id" name="kidid2">
    <span class="error">
    
    <br><br><br>

    Attendance
    <br><br>
  <input type="radio" name="attend" value="at">Attended
 
    <br><br>

  <input type="submit" name="submit" href="V_home.php" value="Take attendnace">
  
    <br><br>


        <button type="button" class="cancel1"  onclick="location.href='V_home.php'">Cancel</button>
    <br><br><br><br>
</form>
</div>
</body>
</html>
<?php

if(isset($_POST["submit"]))
{
    require_once('C_takeattendance.php');
}


?>