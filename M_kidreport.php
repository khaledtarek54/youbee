<?php
require_once ("My_DB.php");
class kidreport
{
    public $Id;
    public $atttype;
    public $attfees;
    public $busstat;
    public $busfees;
    function __construct($id)
    {
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
        if ($id !="")
		{	
			$sql="select * from kid where ID=$id";
			
			$kidDataSet = mysqli_query($db,$sql);
			if (mysqli_num_rows($kidDataSet)>0)
			{
                //////get attendance status
                $row = mysqli_fetch_assoc($kidDataSet);
				$this->atttype=$row["monthlyfees"];
                ////if he attends monthly
                if($this->atttype =="m")
                {
				    $sql="select monthly from fees";
                    $kidDataSet = mysqli_query($db,$sql);
                    if (mysqli_num_rows($kidDataSet)>0)
			        {
                        $row = mysqli_fetch_assoc($kidDataSet);
                        $this->attfees = $row["monthly"];

                    }
                }
                ////if he attends half month
                if($this->atttype =="h")
                {
				    $sql="select halfmonth from fees";
                    $kidDataSet = mysqli_query($db,$sql);
                    if (mysqli_num_rows($kidDataSet)>0)
			        {
                        $row = mysqli_fetch_assoc($kidDataSet);
                        $this->attfees = $row["halfmonth"];

                    }
                }
            }
            /////get attendance count 
            $sql="select attendancecount from kid where ID=$id";
            $kidDataSet = mysqli_query($db,$sql);
            if (mysqli_num_rows($kidDataSet)>0)
			{
                        $row = mysqli_fetch_assoc($kidDataSet);
                        $this->attcount = $row["attendancecount"];
            }


            //////get bus status
            $sql="select busstatus from kid where ID=$id";
            $kidDataSet = mysqli_query($db,$sql);
            if (mysqli_num_rows($kidDataSet)>0)
			{
                        $row = mysqli_fetch_assoc($kidDataSet);
                        $this->busstat = $row["busstatus"];
                        if($this->busstat =="y")
                        {
                            /////get bus fees
				            $sql="select busfees from fees";
                            $kidDataSet = mysqli_query($db,$sql);
                            if (mysqli_num_rows($kidDataSet)>0)
			                {
                                $row = mysqli_fetch_assoc($kidDataSet);
                                $this->busfees = $row["busfees"];
                            }
                        }
            }

		}
    }
   
}
?>