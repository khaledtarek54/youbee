<html>


<head>
    <title>Youbee offical website</title>

    <style>
        body
        {
            background-image:url("nursery.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }
        #div1{
            background-color:black;
            height: 35px;
            width: 100%;
            color:white;
            border-radius: 25px;
        }
        .btn button
        {

            font-family:monospace;
            color:white;
            font-size:20px;
            background-color: black;
            border: none;
            text-align: center;
            padding: 20px ;
            cursor: pointer;
            width:240px;
            opacity: 0.6;
            transition: 0.3s;

        }
        .btn{
            padding-top:20px;
        }
        .button:hover {opacity: 1}
        #button
        {
            margin-left:100px;
            padding-top:30px;
            float:right
        }
       
        #box
        {
            font-size:30px;
            margin-left:30px;
            font-family:monospace;
        }

        #logout {
            color:White;
        }

    </style>

</head>

<body>

<div id="div1">
    <span id="box" >Youbee</span>
    <a  style="margin-left:1100px; color:pink; font-size:28px" id="logout" href="HOMEpage.php" >Logout</a>
</div>

<div class="btn">
    <button  class="button" onclick="location.href='V_addkid.php'">Add kid</button>
    <br><br>
    <button  class="button" onclick="location.href='V_takeattendance.php'">Take Attendance</button>
    <br><br>
    <button  class="button" onclick="location.href='C_fullreport.php'">Nursery report</button>
    <br><br>
    <button  class="button" onclick="location.href='V_kidreport.php'">kid Report</button>
    <br><br>
    <button  class="button" onclick="location.href='V_addevent.php'">Add Event</button>
    <br><br>
    <button  class="button" onclick="location.href='V_feesupdate.php'">update fees</button>
    <br><br>
</div>

</body>
</html>
<?php

?>