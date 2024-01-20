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
    </head>
<body>
<br>
<br>
<h1 align="center">Patient Symptomps Registration</h1>

<div id="demo">
    <form class="form-horizontal" id="form_members" role="form" action="submit.php" method="POST">
    <div class="field-wrap">
        <label>Patient ID<span class="req">*</span>
        </label>
        <input type="text" id="user_id" name="user_id" required autocomplete="off" />
    </div>

        <div class="conditional" data-cond-option="head" data-cond-value="headache">
        <label> <? echo getMessage("pq1")?> </label>

            <br><input type="date" class="form-control" name="dob" id="dob" placeholder="mm/dd/yyyy">
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
            <p>
        <label><? echo getMessage("pq2")?></label>

                <input type="number" id="additional" name="additional">
            </p>
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
            <label>  Any Additional Information</label>
            <input type="text" id="additional" name="additional">
            </p>
        </div>






<div class="conditional" data-cond-option="head" data-cond-value="dizziness">
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Vertigo"><span></span><? echo getMessage("v1")?>  </label>
        <label><input type="checkbox" name="q1[]" value="Anxiety "><span></span><? echo getMessage("a")?> </label>
        <label><input type="checkbox" name="q1[]" value="Vomiting"><span></span><? echo getMessage("v")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Disequilibrium(Feeling unsteady)"><span></span><? echo getMessage("di")?></label>
        <label><input type="checkbox" name="q1[]" value="Ringing or buzzing in ears"><span></span><? echo getMessage("r")?></label>
        <label><input type="checkbox" name="q1[]" value="Nose bleeding"><span></span> <? echo getMessage("nb")?></label>
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
        <label>  Any Additional Information</label>
        <input type="text" id="additional" name="additional">
    </p>
</div>



<div class="conditional" data-cond-option="head" data-cond-value="headinjury">
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Persistent headache"><span></span><? echo getMessage("ph")?> </label>
        <label><input type="checkbox" name="q1[]" value="Repeated vomiting"><span></span><? echo getMessage("rv")?> </label>
        <label><input type="checkbox" name="q1[]" value="Dilation of one or both pupils of the eyes"><span></span> <? echo getMessage("do")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Clear fluids draining from the nose or ears"><span></span><? echo getMessage("cf")?></label>
        <label><input type="checkbox" name="q1[]" value="Difficulty  in sleeping"><span></span><? echo getMessage("ds")?></label>
        <label><input type="checkbox" name="q1[]" value="No loss of consciousness "><span></span> <? echo getMessage("nl")?></label>
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
        <label>  Any Additional Information</label>
        <input type="text" id="additional" name="additional">
    </p>
</div>


<div class="conditional" data-cond-option="head" data-cond-value="feelingsick">
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Abdominal pain"><span></span><? echo getMessage("ap")?> </label>
        <label><input type="checkbox" name="q1[]" value="Headache"><span></span><? echo getMessage("h")?> </label>
        <label><input type="checkbox" name="q1[]" value="Feeling weak and tired"><span></span> <? echo getMessage("fwt")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Vomiting"><span></span><? echo getMessage("v")?></label>
        <label><input type="checkbox" name="q1[]" value="Sore throat"><span></span><? echo getMessage("st")?></label>
        <label><input type="checkbox" name="q1[]" value="Cough "><span></span> <? echo getMessage("c1")?></label>
        <label><input type="checkbox" name="q1[]" value=" stuffy nose "><span></span> <? echo getMessage("sn")?></label>
        <label><input type="checkbox" name="q1[]" value="body aches "><span></span> <? echo getMessage("ba")?></label>
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
        <label>  Any Additional Information</label>
        <input type="text" id="additional" name="additional">
    </p>
</div>






      <div class="conditional" data-cond-option="head" data-cond-value="migrane">
        <label> <? echo getMessage("q1")?> </label>
        <br>
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
          <p>
              <label>  Any Additional Information</label>
              <input type="text" id="additional" name="additional">
          </p>
</div>



<div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="button button2" name="submit" id="submit">Submit</button>
            </div>
        </div>


    </form>
</body>
</html>