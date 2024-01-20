<?php

require_once ('../header.php');
session_start();

if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='doctor'){


}
else{
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <style>
        ul {
            list-style-type: none;
            margin: 10;
            padding: 2;
            overflow: hidden;
            background-color: #332;
        }



        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
        .active {
            background-color: #4CAF50;
        }

    </style>

</head>

<body>
<br>
<ul>
    <li ><a style="float:left" ><font color="white" ><?php echo "Welcome " . $_SESSION['login_user_name']; ?> </font></a></li>
    <li><a href="../index.php" class="active" style="float:left">Home</a></li>
     <li><a href="../logout.php" style="float:right">Logout</a></li>

</ul>
<br>
<br>
<div class="doctorstitle" align="center">

    <h1> Patient History </h1>

</div>
<br>

<?php
session_start();
$id= $_SESSION['login_userid'];
$con=mysqli_connect('localhost','root','root','sih');
//$sql="SELECT medical.*,medical_update.* FROM `medical`,`medical_update` WHERE medical.regid_user=medical_update.regid_user and medical.date=medical_update.date";

//$sql="select * from (select Date,organ,symptoms,duration,intensity from medical where regid_user='$id' and date=)a join ()b on a.regid_user=b.regid_user and a.date=b.date ";

$sql="select * from medical where regid_user='$id'";

$run=mysqli_query($con,$sql);

echo mysqli_num_rows($run);
if(mysqli_num_rows($run)>0)
{
    ?>
    <table align="center" border="1" width="80%">
    <tr>
        <td align="center"><?php echo "<h3>Date</h3>" ;?></td> <td align="center"><?php echo "<h3>organ</h3>" ;?></td><<td align="center"><?php echo "<h3>symptoms</h3>" ;?></td><td align="center"><?php echo "<h2>duration</h2>" ;?></td><td align="center"><?php echo "<h2>intensity</h2>" ;?></td><td align="center"><?php echo "<h2>Disease</h2>" ;?></td>

    </tr>
    <?php
    while($data=mysqli_fetch_assoc($run))
    {  ?>

        <tr>
            <td align="center"><?php echo $data['Date'] ;?></td> <td align="center"><?php echo $data['organ'] ;?></td><td align="center"><?php echo$data['symptoms'] ;?></td><td align="center"><?php echo $data['duration'] ;?></td><td align="center"><?php echo $data['intensity'] ;?></td><td align="center"><?php echo "Migrane" ;?></td>
        </tr>

        <?php
    }?>
    </table><?php
}
else{

    echo "<h1> NO PATIENT found</h1>";
}


?>
