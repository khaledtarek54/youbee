    <?php
//Controller

require_once 'M_addkid.php';
require_once 'V_addkid.php';
require_once ("My_DB.php");
$flag=0;
if(isset($_POST["submit"]))
{
    
        $kidopject=new kid();

        $con=DbConnection::getInstance();
        $db=$con->getConnection();
        $kidopject->firstname= mysqli_real_escape_string($db, $_POST["firstname"]);
        $kidopject->lastname= mysqli_real_escape_string($db, $_POST["lastname"]);
        $kidopject->registrationdate= mysqli_real_escape_string($db, $_POST["registrationdate"]);
        $kidopject->parentsnumber= mysqli_real_escape_string($db, $_POST["parentsnumber"]);
        $kidopject->monthlyfees= mysqli_real_escape_string($db, $_POST["monthlyfees"]);
        $kidopject->dateofbirth= mysqli_real_escape_string($db, $_POST["dateofbirth"]);
        $kidopject->address= mysqli_real_escape_string($db, $_POST["address"]);
        $kidopject->gender= mysqli_real_escape_string($db, $_POST["gender"]);
        $kidopject->bus= mysqli_real_escape_string($db, $_POST["bus"]);
    $flag = "1";
    
    
    
    if(empty($kidopject->firstname))
    {
        $flag = "0";
        
    }
    if(empty($kidopject->lastname))
    {
        $flag = "0";
    }
    if(empty($kidopject->parentsnumber))
    {
        $flag = "0"; 
    }
    if(!is_numeric($kidopject->parentsnumber))
    {
        $flag = "2"; 
    }
    if(empty($kidopject->dateofbirth))
    {
        $flag = "0";
    }
    if(empty($kidopject->registrationdate))
    {
        $flag = "0";
    }
    if(empty($kidopject->gender))
    {
        $flag = "0";
    }
    if(empty($kidopject->address))
    {
        $flag = "0";
    }
    if(empty($kidopject->monthlyfees))
    {
        $flag = "0";
    }
    

    if($flag=="1")
    {
        $kidopject->insertkidinfo($kidopject->firstname,$kidopject->lastname,$kidopject->registrationdate,$kidopject->parentsnumber,$kidopject->monthlyfees, $kidopject->dateofbirth,$kidopject->address, $kidopject->gender,$kidopject->bus);
    }
    if($flag=="0")
    {
        echo "<script type='text/javascript'>alert('Enter all the form');</script>";
    }
    if($flag=="2")
    {
        echo "<script type='text/javascript'>alert('parent number should be a number');</script>";
    }
}



?>