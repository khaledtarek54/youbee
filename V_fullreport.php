<?php
require_once 'M_fullreport.php';
require_once ("My_DB.php");

class fullreportview
{

    public function Showfullreport($reportobj)
    {
    echo "<table border=2><tr><td>Total fees</td><td>".$reportobj->fees."</td></tr>";
    echo "<tr><td>Total bus fees</td><td>".$reportobj->totalbusfees."</td></tr>";
    echo "</table>";
    }

}
?>