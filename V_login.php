<?php require_once ('M_login.php');
require_once ("My_DB.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        form
        {

            width: 500px;
            margin: auto;
            padding-right:30px;
            color:Black;
            font-family:monospace;
            font-size:20px;
        }
        input[type=text]
        {
            height: 25px;
            border-style: outset;
            border-radius: 8px;
            width: 100%;
        }
        input[type=password]
        {
            height: 25px;
            border-style: outset;
            border-radius: 8px;
            width: 100%;
        }

        button[type=submit]
        {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;;
            opacity: 0.9;
            text-decoration: none;
            transition: 0.3s;
        }

        input[type=button]
        {
            background-color:red;   
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;;
            opacity: 0.9;
            text-decoration: none;
            transition: 0.3s;
        }
        button:hover {opacity: 1}
        button:hover
        {
            text-decoration: underline;
        }
        body{

            background-image: url("sky.jpg");
            background-size: 101%;

            background-repeat: no-repeat;
            margin-top: 150px;
        }

    </style>
</head>
<body>

<form method="post" >
    <h1> Sign in</h1>


    <b>First name</b>
    <br><br>
    <input type="text" placeholder="Enter first name" name="firstname" required>
    <br><br>
    <b> Password</b>
    <br><br>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br><br>

    <br><br>
    <div>
        <button type="submit" name="submit">Login</button>
    </div>

    <input  type="button" value="Cancel" onclick="window.location.href='HOMEpage.php'" />
    


</form>

</body>
</html>


<?php

if(isset($_POST["submit"]))
{
require_once('C_login.php');
}
?>