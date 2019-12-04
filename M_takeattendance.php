<?php 
require_once ("My_DB.php");
class attendance
{
   public $attendence;

    function __construct($idd)
	{
        echo"khara";
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
        $query = " SELECT * FROM kid WHERE id=$idd";
        $kiddataset = mysqli_query($db,$query);
        if(mysqli_num_rows($kiddataset)>0)
        {
            $row = mysqli_fetch_assoc($kiddataset);
            $this->attendance = $row["attendancecount"];
            $this->attendance = $this->attendance+1;
            mysqli_query($db,"UPDATE kid set attendancecount = '$this->attendance' where id =$idd");
            header('location:V_home.php');
        }
           
    }
}  
?>