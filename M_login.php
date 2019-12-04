<?php
require_once ("My_DB.php");
class login
{
    function verify_login($firstname1,$password1)
    {
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
       
          
        $query = " SELECT * FROM users WHERE username='$firstname1'and password='$password1' ";
        $result = mysqli_query($db,$query);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_assoc($result);
            header('location:V_home.php');
        }
        else
        {
            
            
            echo "<script type='text/javascript'>alert('Wronge username or password');</script>";
        }
    }

}
?>