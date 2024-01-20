<?php
session_start();
session_destroy();
header("refresh:2;url=index.php");
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
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


    </style>
</head>
<body><br>
<ul>
    <li ><a style="float:left"><font color="white"> <?php echo "Welcome " . $_SESSION['login_user_name']; ?><font></font> </a></li>
    <li><a href="../../index.php"style="float:left">Home</a></li>
    <li><a class="" href="../logout.php"style="float:right">Logout</a></li>

</ul>
<br>
<h1 style="text-align: center";><font color="black">Logged Out</h1></font>
<?php  header("refresh:2;url=index.php"); ?>
</body>
</html>
