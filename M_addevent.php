<?php 
require_once ("My_DB.php");
class event
{
	public $Eventname;
	public $Eventtype;
	public $Startdate;
    public $Enddate;
    public $Eventlocation;
    public $Eventfees;



function __construct()
	{
    }   
        
    
        
        static function inserteventinfo($eventobject)
	    {
	
		    $con=DbConnection::getInstance();
            $db=$con->getConnection();
	
			$sql="INSERT INTO events(eventname,eventtype,startdate,enddate,eventlocation,eventfees)
             VALUES ('$eventobject->Eventname','$eventobject->Eventtype','$eventobject->Startdate','$eventobject->Enddate','$eventobject->Eventlocation','$eventobject->Eventfees')";
			
			if(!mysqli_query($db,$sql))
            {
                
            }
            else
            {
                header('location:V_home.php');
            }
	    }
}
    ?>