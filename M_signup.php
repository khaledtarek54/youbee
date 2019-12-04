<?php 
require_once ("My_DB.php");
class signup
{
        public $firstname;
        public $lastname;
        public $username;
	    public $password;
        public $phonenumber;
        public $dateofbirth;
        public $address;
        public $gender;

	function __construct()
	{
        
    }
	
    public static function insertuserinfo($signobj)
	{
	
        $con=DbConnection::getInstance();
        $db=$con->getConnection();
	
			$sql="INSERT INTO users (username,password,firstname,lastname,phonenumber,dateofbirth,address,gender) VALUES ('$signobj->username','$signobj->password','$signobj->firstname','$signobj->lastname','$signobj->phonenumber','$signobj->dateofbirth','$signobj->address','$signobj->gender')";
            
           
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