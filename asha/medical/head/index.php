<?php
session_start();

if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='asha'){

    require_once "../../../messages.php";
}
else{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="test.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>

    <script src="conditionize.jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.conditional').conditionize();
        });
    </script>

    <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button2:hover {
            background-color: #008CBA;
            color: white;

        }
    </style>
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

        .active {
            background-color: #4CAF50;
        }
    </style>

</head>
<body><br>
<ul>
    <li ><a style="float:left"><?php echo "Welcome " . $_SESSION['login_user_name']; ?> </a></li>
    <li><a href="../../index.php"style="float:left"><? echo getMessage("nav1")?></a></li>
    <li><a class="active" href="../organs.php"style="float:left"><? echo getMessage("nav2")?></a></li>
    <li><a href="../../logout.php" style="float:right"><? echo getMessage("nav3")?></a></li>
    <li><a href="../../userlist/userreg.php"style="float:left"><? echo getMessage("nav4")?></a></li>
</ul>

<br>
<br>
<h1 align="center"><? echo getMessage("nav31")?></h1>

<div id="demo">
    <form class="form-horizontal" id="form_members" role="form" action="submit.php" method="POST">
    <div class="field-wrap">
        <label>
            <? echo getMessage("userid")?> <span class="req">*</span>
        </label>
        <input type="text" id="user_id" name="user_id" required autocomplete="off" />
    </div>

    <hr style="border-top: 2px dotted black"/>
           <div>
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Oversensitivity to light,sound,or smells"><span></span><? echo getMessage("osm")?>  </label>
        <label><input type="checkbox" name="q1[]" value="Blurred Vision"><span></span><? echo getMessage("bv")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Illusion of surrounding being bigger or smaller they actually are "><span></span><? echo getMessage("is")?> </label>
        <label><input type="checkbox" name="q1[]" value="Vomiting"><span></span><? echo getMessage("v")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Feeling weak and tired"><span></span><? echo getMessage("fw")?></label>
        <label><input type="checkbox" name="q1[]" value="Feeling sick"><span></span><? echo getMessage("fs")?></label>
        <label><input type="checkbox" name="q1[]" value="Fatigue"><span></span><? echo getMessage("f")?></label>
               <br><label><input type="checkbox" name="q1[]" value="Vertigo"><span></span><? echo getMessage("v1")?>  </label>
               <label><input type="checkbox" name="q1[]" value="Anxiety "><span></span><? echo getMessage("a")?> </label>
               <label><input type="checkbox" name="q1[]" value="Vomiting"><span></span><? echo getMessage("v")?></label>
               <br><br><label><input type="checkbox" name="q1[]" value="Disequilibrium(Feeling unsteady)"><span></span><? echo getMessage("di")?></label>
               <label><input type="checkbox" name="q1[]" value="Ringing or buzzing in ears"><span></span><? echo getMessage("r")?></label>
               <label><input type="checkbox" name="q1[]" value="Nose bleeding"><span></span> <? echo getMessage("nb")?></label>
               <br><label><input type="checkbox" name="q1[]" value="Persistent headache"><span></span><? echo getMessage("ph")?> </label>
               <label><input type="checkbox" name="q1[]" value="Repeated vomiting"><span></span><? echo getMessage("rv")?> </label>
               <label><input type="checkbox" name="q1[]" value="Dilation of one or both pupils of the eyes"><span></span> <? echo getMessage("do")?></label>
               <br><br><label><input type="checkbox" name="q1[]" value="Clear fluids draining from the nose or ears"><span></span><? echo getMessage("cf")?></label>
               <label><input type="checkbox" name="q1[]" value="Difficulty  in sleeping"><span></span><? echo getMessage("ds")?></label>
               <label><input type="checkbox" name="q1[]" value="No loss of consciousness "><span></span> <? echo getMessage("nl")?></label>
               <br><label><input type="checkbox" name="q1[]" value="Abdominal pain"><span></span><? echo getMessage("ap")?> </label>
               <label><input type="checkbox" name="q1[]" value="Headache"><span></span><? echo getMessage("h")?> </label>
               <label><input type="checkbox" name="q1[]" value="Feeling weak and tired"><span></span> <? echo getMessage("fwt")?></label>
               <br><br><label><input type="checkbox" name="q1[]" value="Vomiting"><span></span><? echo getMessage("v")?></label>
               <label><input type="checkbox" name="q1[]" value="Sore throat"><span></span><? echo getMessage("st")?></label>
               <label><input type="checkbox" name="q1[]" value="Cough "><span></span> <? echo getMessage("c1")?></label>
               <label><input type="checkbox" name="q1[]" value=" stuffy nose "><span></span> <? echo getMessage("sn")?></label>
               <label><input type="checkbox" name="q1[]" value="body aches "><span></span> <? echo getMessage("ba")?></label>
               <br><label><input type="checkbox" name="q1[]" value="Constipation"><span></span><? echo getMessage("c2")?> </label>
               <label><input type="checkbox" name="q1[]" value="Mood changes, from depression to euphoria"><span></span><? echo getMessage("mc")?> </label>
               <label><input type="checkbox" name="q1[]" value="Food cravings"><span></span> <? echo getMessage("fc")?></label>
               <br><br><label><input type="checkbox" name="q1[]" value="Neck stiffness"><span></span><? echo getMessage("ns")?></label>
               <label><input type="checkbox" name="q1[]" value="Increased thirst and urinationt"><span></span><? echo getMessage("it")?></label>
               <label><input type="checkbox" name="q1[]" value="Frequent yawning "><span></span> <? echo getMessage("fy")?></label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label><? echo getMessage("q2")?></label>
        <br>
        <br><label><input type="radio" name="q2" value=" Less than 1 day"><span></span> <? echo getMessage("lt")?>&ensp;</label>
        <label><input type="radio" name="q2" value="2-3 days "><span></span> <? echo getMessage("d")?></label>
        <br><label><input type="radio" name="q2" value="A Week"><span></span> <? echo getMessage("aw")?></label>
        <label><input type="radio" name="q2" value="More than a Week "><span></span><? echo getMessage("mt")?></label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label><? echo getMessage("q3")?></label>
        <br>
            <br><label><input type="radio" name="q3" value="Mild "><span></span><? echo getMessage("m")?> &ensp;</label>
        <label><input type="radio" name="q3" value="Moderate"><span></span><? echo getMessage("m1")?></label>
        <label><input type="radio" name="q3" value="Severe"><span></span><? echo getMessage("s")?></label>

        <hr style="border-top: 2px dotted black"/>
        <br>
        <br>
            <label> <? echo getMessage("aai")?></label>
            <input type="text" id="additional" name="additional">

        </div>


<div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="button button2" name="submit" id="submit"><? echo getMessage("submit")?></button>
            </div>
        </div>


    </form>
</body>
</html>