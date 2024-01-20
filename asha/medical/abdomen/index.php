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
        <div >
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="pain around the bellybutton"><span></span><? echo getMessage("pab")?>  </label>
        <label><input type="checkbox" name="q1[]" value="lower right side abdominal pain"><span></span><? echo getMessage("lr")?></label>
        <br><label><input type="checkbox" name="q1[]" value="loss of appetite "><span></span><? echo getMessage("ap")?> </label>
        <label><input type="checkbox" name="q1[]" value="Vomiting"><span></span><? echo getMessage("v")?></label>
        <br><label><input type="checkbox" name="q1[]" value="diarrhea"><span></span><? echo getMessage("dr")?></label>
        <label><input type="checkbox" name="q1[]" value="Feeling sick"><span></span><? echo getMessage("fs")?></label>
        <label><input type="checkbox" name="q1[]" value="Fatigue"><span></span><? echo getMessage("f")?></label>
            <br><label><input type="checkbox" name="q1[]" value="Heartburn "><span></span><? echo getMessage("hb")?>  </label>
            <br><br><label><input type="checkbox" name="q1[]" value="sour taste in the back of your throat"><span></span><? echo getMessage("stb")?> </label>
            <br><br><label><input type="checkbox" name="q1[]" value="Frequent belching (burping)"><span></span><? echo getMessage("fb")?></label>
            <label><input type="checkbox" name="q1[]" value="Discomfort or pain in your stomach "><span></span><? echo getMessage("dpy")?></label>
            <br><label><input type="checkbox" name="q1[]" value="Food Poisoning"><span></span><? echo getMessage("fp")?> </label>
            <br><br><label><input type="checkbox" name="q1[]" value="Viral Gastroenteritis (Stomach Flu)"><span></span><? echo getMessage("vg")?> </label>
            <label><input type="checkbox" name="q1[]" value="Urinary Tract Infection"><span></span> <? echo getMessage("ut")?></label>
            <br><br><label><input type="checkbox" name="q1[]" value=" Acid Reflux and GERD"><span></span><? echo getMessage("arg")?></label>
            <label><input type="checkbox" name="q1[]" value="Premenstrual Syndrome"><span></span><? echo getMessage("ps1")?></label>
            <br><label><input type="checkbox" name="q1[]" value="belching"><span></span><? echo getMessage("be")?> </label>
            <br><br><label><input type="checkbox" name="q1[]" value="nausea"><span></span><? echo getMessage("na")?> </label>
            <label><input type="checkbox" name="q1[]" value="vomiting"><span></span> <? echo getMessage("v")?></label>
            <br><br><label><input type="checkbox" name="q1[]" value="diarrhea"><span></span><? echo getMessage("dr")?></label>
            <label><input type="checkbox" name="q1[]" value="fever"><span></span><? echo getMessage("fv")?></label>
            <br><label><input type="checkbox" name="q1[]" value="Poor appetite"><span></span><? echo getMessage("pap")?> </label>
            <br><br><label><input type="checkbox" name="q1[]" value="Weight loss"><span></span><? echo getMessage("wl")?> </label>
            <label><input type="checkbox" name="q1[]" value="Vague discomfort in the abdomen"><span></span> <? echo getMessage("vda")?></label>
            <br><br><label><input type="checkbox" name="q1[]" value="Heartburn"><span></span><? echo getMessage("hb")?></label>
            <label><input type="checkbox" name="q1[]" value="Vomiting, with or without blood"><span></span><? echo getMessage("vww")?></label>
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
            <p>
                <label> <? echo getMessage("aai")?></label>
                <input type="text" id="additional" name="additional">
            </p>
</div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="button button2" name="submit" id="submit"><? echo getMessage("submit")?></button>
            </div>
        </div>




    </form>
</body>
</html>