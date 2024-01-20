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
    <title>Doctor's Portal</title>
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
    <li><a href="history.php"  style="float:left">Patient History</a></li>
     <li><a href="../logout.php" style="float:right">Logout</a></li>

</ul>
<br>
<br>
<div class="doctorstitle" align="center">

    <h1> Welcome To Doctors Portal </h1>

</div>
<br>
<?php
session_start();

$con=mysqli_connect('localhost','root','root','sih');
if(isset($_POST['submit'])) {
    $id = $_POST['userid'];
    $_SESSION['login_userid']=$id;
    $query = "SELECT * FROM `userinfo` WHERE regid_user='$id'";

    $run = mysqli_query($con, $query);
    if($run==true)
    {
        $data=  mysqli_fetch_assoc($run);
        $bmi=($data['weight']*10000)/($data['height']*$data['height']);
?>
        <H4 align="center"><b>Patient general Information</b></H4>

        <br>
<table border="2" width="30%" align="center">


    <tr>
        <td align="center"><b>UserId</b></td> <td align="center"><b><?php echo $data['regid_user']?></b></td>
    </tr>

    <tr>
        <td align="center"><b>Name</b></td> <td align="center"><b><?php echo $data['firstname']." ".$data['lastname']?></b></td>
    </tr>

    <tr>
        <td align="center"><b>Blood Group</b></td> <td align="center"><b><?php echo $data['blg']?></b></td>
    </tr>

    <tr>
        <td align="center"><b>Gender</b></td> <td align="center"><b><?php echo $data['gender']?></b></td>
    </tr>

    <tr>
        <td align="center"><b>Height</b></td> <td align="center"><b><?php echo $data['height']."cm"?></b></td>
    </tr>

    <tr>
        <td align="center"><b>Weight</b></td> <td align="center"><b><?php echo $data['weight']."kg"?></b></td>
    </tr>

    <tr>
        <td align="center"><b>BMI</b></td> <td align="center"><b><?php echo "$bmi" ?></b></td>
    </tr>


</table>
<?php
    }

    else {
        echo "Error";
    }
}

$con=mysqli_connect('localhost','root','root','sih');

$sql="SELECT * FROM `medical` WHERE regid_user='$id' AND date=(SELECT date from log where regid_user='$id')";

$run=mysqli_query($con,$sql);

if(mysqli_num_rows($run)>0)
{
    ?>
<br>
<br>
<H4 align="center"><b>Patient Symtomps & Health Info</b></H4>
<br>
    <table align="center" border="1" width="80%">
    <tr>
        <td align="center"><?php echo "<h4>Date</h4>" ;?></td> <td align="center"><?php echo "<h4>organ</h4>" ;?></td> <td align="center"><?php echo "<h4>symptoms</h4>" ;?></td><td align="center"><?php echo "<h4>duration</h4>" ;?></td><td align="center"><?php echo "<h4>intensity</h4>" ;?></td>

</tr>
        <?php

    while($data=mysqli_fetch_assoc($run))
    {
    ?>


<tr>
    <td align="center"><?php echo $data['Date'] ;?></td>  <td align="center"><?php echo $data['organ'] ;?></td> <td align="center"><?php echo$data['symptoms'] ;?></td><td align="center"><?php echo $data['duration'] ;?></td><td align="center"><?php echo $data['intensity'] ;?></td>
</tr>
    <?php


    }

}
else{

    echo "<h1> NO Symptoms found</h1>";
}

?>



</table>
<br>


<div style="margin-left: 450px">
<form class="form-inline" action="submit.php" method="POST" >
    <?php
session_start();
    $con=mysqli_connect('localhost','root','root','sih');

    $sql="SELECT * FROM `medical` WHERE regid_user='$id' AND date=(SELECT date from log where regid_user='$id')";

    $run=mysqli_query($con,$sql);

    $data=mysqli_fetch_assoc($run);

    $date=$data['Date'];

    $_SESSION['date']=$date;

     $_SESSION['uid']=$id;

    ?>

    <div class="form-group">
        <label for="disease">Disease</label>
        <input type="text" class="form-control" id="disease" name="disease">
    </div>
    <div class="form-group">
        <label for="remark">Remarks</label>
        <input type="text" class="form-control" id="remark" name="remark">
    </div>
    <br>
    <div style="margin-left: 100px">

    <div class="checkbox">
        <label>Laboratory Testing Recomended ?</label>
        <label><input type="radio" name="chbk" value="yes" id="yes"><b>Yes</b></label>
        <label><input type="radio" name="chbk" value="no" id="no"><b>NO</b></label>
    </div>
    </div>
    <br>
        <br>
    <div style="margin-left: 250px">
    <button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
    </div>
</form>
    <br>

</div>