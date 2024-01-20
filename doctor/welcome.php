<?php
session_start();

if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='doctor'){

}
else{
    header('location:index.php');
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
    <li><a href="index.php" class="active" style="float:left">Home</a></li>

    <li><a href="logout.php" style="float:right">Logout</a></li>

</ul>
<div class="container">


    <form class="form-horizontal" id="form_members" role="form" action="data/doctor.php" method="POST">
<br>
        <legend>Symptomps Data</legend>
        <div class="form-group">
            <label for="firstname" class="col-sm-2">Enter Patient ID</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="userid" id="userid">
            </div>
            <br><br>
        <div class="form-group">

            <div class="col-sm-offset-2 col-sm-10">
                <br><button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
            </div>
        </div>
    </form>

</div>
</body>
</html>


