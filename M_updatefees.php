<?php 
require_once ("My_DB.php");
class updatefees
{
	
        public $month;
        public $hmonth;
	    public $eventfees;
	    public $busfees;
       
	function __construct($id)	
	{
        $sql="select * from fees where feesid=$id";
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
			$kidDataSet = mysqli_query($db,$sql);
            if (mysqli_num_rows($kidDataSet)>0)
			{
                $row = mysqli_fetch_assoc($kidDataSet);
                $this->month=$row["monthly"];
                $this->hmonth=$row["halfmonth"];
                $this->eventfees=$row["event"];
                $this->busfees=$row["busfees"];  
            }
            
    }
    public function updatefeesinfo($id,$monthly,$bus,$event,$half)
    {
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
	
        $sql="UPDATE fees
        set monthly='$monthly',halfmonth ='$half', busfees='$bus', event='$event' where feesid=$id";
        

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