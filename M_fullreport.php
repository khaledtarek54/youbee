<?php
require_once ("My_DB.php");
class fullreport
{
    public $Id;
    public $atttype;
    public $attfees;
    public $busstat;
    public $busfees;
    public $fees;
    public $countmonth=0;
    public $counthalf=0;
    public $countbus=0;
    public $bustype;
    
   public $totalbusfees;
    function __construct()
    {
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
        $sql = "select monthlyfees from kid";
        $kidDataSet = mysqli_query($db,$sql);
			
                //////get attendance status
                
                while($row = mysqli_fetch_assoc($kidDataSet))
                {
                $this->atttype=$row["monthlyfees"];
                ////if he attends monthly
                 if($this->atttype =="m")
                 {
                     $this->countmonth++;
                    
                }
                ////if he attends half month
                if($this->atttype =="h")
                {
                    $this->counthalf++;
                }
                }
                   /////// get total monthly fees
                    $sql="select monthly from fees";
                    $kidDataSet = mysqli_query($db,$sql);
                    if (mysqli_num_rows($kidDataSet)>0)
                    {
                        $row = mysqli_fetch_assoc($kidDataSet);
                        $this->attfees = $row["monthly"];
                        $this->feesmon = $this->countmonth * $this->attfees;
                    }
                    /////// get total half month fees
                    $sql="select halfmonth from fees";
                    $kidDataSet = mysqli_query($db,$sql);
                    if (mysqli_num_rows($kidDataSet)>0)
                    {
                         $row = mysqli_fetch_assoc($kidDataSet);
                         $this->attfees = $row["halfmonth"];
                         $this->feeshalf = $this->counthalf * $this->attfees;

                    }
                    $this->fees = $this->feesmon + $this->feeshalf;
                    
                  ///////// get number of students in bus
                    $sql="select busstatus from kid";
                    $kidDataSet = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_assoc($kidDataSet))
                    {
                        $this->bustype=$row["busstatus"];
                        if($this->bustype =="y")
                        {
                            $this->countbus++;
                    
                        }
                    }
                    ///////get total bus fees
                    $sql="select busfees from fees";
                    $kidDataSet = mysqli_query($db,$sql);
                    if (mysqli_num_rows($kidDataSet)>0)
                    {
                        $row = mysqli_fetch_assoc($kidDataSet);
                        $this->busfees = $row["busfees"];
                        $this->totalbusfees = $this->countbus * $this->busfees;
                    }

    }
   
}
?>