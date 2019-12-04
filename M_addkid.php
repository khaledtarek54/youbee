<?php 
require_once ("My_DB.php");
class kid
{
	
	
        public $firstname;
	    public $lastname;
	    public $parentsnumber;
        public $registrationdate;
        public $dateofbirth;
        public $gender;
        public $monthlyfees;
        public $address;
        public $bus;
	function __construct()
	
	{
       
    }
	
    public static function insertkidinfo($firstname,$lastname,$registrationdate,$parentsnumber,$monthlyfees,$dateofbirth,$address,$gender,$bus)
	{
	
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
	
			$sql="INSERT INTO kid(firstname,lastname,parentsnumber,registrationdate,dateofbirth,gender,monthlyfees,address,busstatus) VALUES ('$firstname','$lastname','$parentsnumber','$registrationdate','$dateofbirth','$gender','$monthlyfees','$address','$bus')";
			
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