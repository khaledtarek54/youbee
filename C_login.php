 <?php
require_once 'M_login.php';
require_once 'V_login.php';

$firstname1="";
$password1 ="";
$flag = "0";
if(isset($_POST["submit"]))
{
    $con=DbConnection::getInstance();
    $db=$con->getConnection();
    $firstname1= mysqli_real_escape_string($db, $_POST["firstname"]);
    $password1 = mysqli_real_escape_string($db, $_POST["password"]);
    if(empty($firstname1))
    {
        $flag = "1";
        
    }
    if(empty($password1))
    {
        $flag = "1";
    }
    if($flag=="1")
    {
        echo "<script type='text/javascript'>alert('Enter Username and password');</script>";
    }
    else
    {
        $verify = new login();
        $verify->verify_login($firstname1,$password1);
    }
    
}

?>