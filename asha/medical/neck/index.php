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
<body>
<br>
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
        <label> <? echo getMessage("userid")?> <span class="req">*</span></label>
        <input type="text" id="user_id" name="user_id" required autocomplete="off" />
    </div>




    <hr style="border-top: 2px dotted black"/>
         <div >
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Fatigue"><span></span><? echo getMessage("f")?>  </label>
        <label><input type="checkbox" name="q1[]" value="Dry skin"><span></span><? echo getMessage("ds1")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Puffy face "><span></span><? echo getMessage("pc")?> </label>
        <label><input type="checkbox" name="q1[]" value="Muscle weakness"><span></span><? echo getMessage("mw")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Depression"><span></span><? echo getMessage("dd")?></label>
        <label><input type="checkbox" name="q1[]" value="Slowed heart rate"><span></span><? echo getMessage("sh")?></label>
            <br><label><input type="checkbox" name="q1[]" value="Coughing"><span></span><? echo getMessage("c3")?>  </label>
            <br><br><label><input type="checkbox" name="q1[]" value="Difficulty swallowing"><span></span><? echo getMessage("ds2")?> </label>
            <label><input type="checkbox" name="q1[]" value="Difficulty breathing"><span></span><? echo getMessage("db")?></label>
            <br><br><label><input type="checkbox" name="q1[]" value=" tight feeling in your throat"><span></span><? echo getMessage("tf")?></label>
            <label><input type="checkbox" name="q1[]" value="Hoarseness"><span></span><? echo getMessage("ho")?></label>
             <br><label><input type="checkbox" name="q1[]" value="Muscle tightness"><span></span><? echo getMessage("mti")?> </label>
             <label><input type="checkbox" name="q1[]" value="Decreased ability to move your head"><span></span><? echo getMessage("dam")?> </label>
             <br><label><input type="checkbox" name="q1[]" value="Headache"><span></span> <? echo getMessage("h")?></label>
             <label><input type="checkbox" name="q1[]" value="spasms"><span></span><? echo getMessage("sp")?></label>
             <br><label><input type="checkbox" name="q1[]" value="lump in the nose"><span></span><? echo getMessage("ln")?> </label>
             <br><br><label><input type="checkbox" name="q1[]" value="Trouble swallowing (dysphagia)"><span></span><? echo getMessage("tw")?> </label>
             <label><input type="checkbox" name="q1[]" value="red or white patch in the mouth"><span></span> <? echo getMessage("rw")?></label>
             <br><br><label><input type="checkbox" name="q1[]" value="Nasal obstruction"><span></span><? echo getMessage("no")?></label>
             <br><br><label><input type="checkbox" name="q1[]" value="'Frequent nose bleeds"><span></span><? echo getMessage("fn")?></label>
             <br><br><label><input type="checkbox" name="q1[]" value="Change in voice"><span></span><? echo getMessage("cv")?></label>


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
                <label><? echo getMessage("aai")?></label>
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