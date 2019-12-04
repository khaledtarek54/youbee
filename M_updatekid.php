<?php 
require_once ("My_DB.php");
class updatekid
{
	
	    public $id;
        public $firstname;
	    public $lastname;
	    public $parentsnumber;
        public $registrationdate;
        public $dateofbirth;
        public $gender;
        public $monthlyfees;
        public $address;
        public $bus;
	function __construct($id)
	
	{
        $sql="select * from kid where ID=$id";
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
			$kidDataSet = mysqli_query($db,$sql);
            if (mysqli_num_rows($kidDataSet)>0)
			{
                $row = mysqli_fetch_assoc($kidDataSet);
				$this->firstname=$row["firstname"];
                $this->lastname=$row["lastname"];
                $this->parentsnumber=$row["parentsnumber"];
                $this->registrationdate=$row["registrationdate"];
                $this->dateofbirth=$row["dateofbirth"];
                $this->gender=$row["gender"];
                $this->monthlyfees=$row["monthlyfees"];
                $this->address=$row["address"];
                $this->bus=$row["busstatus"];

            }
            
    }
    public function updatekidinfo($id,$firstname,$lastname,$registrationdate,$parentsnumber,$monthlyfees, $dateofbirth,$address,$gender,$bus)
    {
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
	
        $sql="UPDATE kid
        set firstname='$firstname',lastname='$lastname',parentsnumber='$parentsnumber',registrationdate='$registrationdate',dateofbirth='$dateofbirth',gender='$gender',monthlyfees='$monthlyfees',address='$address',busstatus='$bus' where ID=$id";
        
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