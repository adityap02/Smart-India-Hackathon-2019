<?php
session_start();
require_once "messages.php";
$_SESSION['lang'] = $_POST['language'];
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Rural Health Care</title>
        
        <link rel="shortcut icon" href="images/logoacm.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<title>Title</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>



    <!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/wrk.jpg" alt="" />
					<div class="inner">
						<header>
							<p><? echo  getMessage("a1")?></p>
						    <h2><? echo  getMessage("g1")?></h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/emp.jpg" alt="" />
					<div class="inner">
						<header>
							<p><? echo  getMessage("awfwe")?></p>
							<h2><? echo  getMessage("we")?></h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/emp1.jpg"  alt="" />
					<div class="inner">
						<header>
							<p><? echo  getMessage("iawwg")?></p>
							<h2><? echo  getMessage("indep")?></h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/health1.jpg"  alt="" />
					<div class="inner">
						<header>
							<p><? echo  getMessage("aphrf")?></p>
							<h2><? echo  getMessage("health")?></h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/health02.jpg"  alt="" />
					<div class="inner">
						<header>
							<p><? echo  getMessage("apih")?></p>
							<h2><? echo  getMessage("cc")?></h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/prg.jpg"  alt="" />
					<div class="inner">
						<header>
							<p><? echo  getMessage("ahpw")?></p>
							<h2><? echo  getMessage("pw")?></h2>
						</header>
					</div>
				</article>
			</section>
<br>
<a href="asha"><h1 style="text-align:center";><? echo  getMessage("asha")?></h1></a>
                <br>
<a href="doctor"><h1 style="text-align:center";><? echo  getMessage("doctor")?></h1></a>
    <div class="container">
        <br>
        <br>
        <form action="index.php" method="post">
            <select class="form-control" name="language" id="language">
                <?php foreach ($language_options as $key => $name) {?>
                    <option value="<?php echo $key?>" <?php if (currentLanguage() == $key) echo "selected" ?>><?php echo $name ?> </option>
                <?php }?>
            </select>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>

<br>
<br>



<div class="card-deck">
	<div class="card">
	  <img src="images/asha4.jpg" class="card-img-top" alt="" />
	  <div class="card-body">
		<h5 class="card-title"><? echo  getMessage("g1")?></h5>
		<p class="card-text"><? echo getMessage("mp1")?></p>
		
	  </div>
	</div>
	<div class="card">
	  <img src="images/wrk.jpg" class="card-img-top" alt="" />
	  <div class="card-body">
		<h5 class="card-title"><? echo  getMessage("education")?></h5>
		<p class="card-text"><? echo getMessage("para1")?> </p>

	  </div>
	</div>
	<div class="card">
	  <img src="images/asha2.jpg" class="card-img-top" alt="" />
	  <div class="card-body">
		<h5 class="card-title"><? echo  getMessage("g3")?></h5>
		<p class="card-text"><? echo getMessage("mp3")?></p>

	  </div>
	</div>
  </div>
		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>