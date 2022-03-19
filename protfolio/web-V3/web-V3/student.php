<!DOCTYPE php>
<?php session_start();
$studentId=$_SESSION["SId"];
 ?>
<php lang="en">
<head>
<title>Pre-Registration Website For Information Technology and Systems Faculty | Home ::</title>

<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="keywords" content="Tenements Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<style>
body {
  background-image: url('back.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #99F0F2;
}
tr:nth-child(odd) {
  background-color: #FFFFFF;
}
</style>
<style>
h1{
fontStyle: "italic"
}
</style>
</head>
	
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3_agile_logo">
				<h1><a href="home.php"><span>&nbsp; &nbsp; &nbsp;</span>Pre-Registration</a></h1>
			</div>
			<div class="agile_header_social">
				<ul class="agileits_social_list">
					<li><a href="https://web.facebook.com/%D8%A7%D9%84%D8%AC%D8%A7%D9%85%D8%B9%D8%A9-%D8%A7%D9%84%D8%A7%D8%B1%D8%AF%D9%86%D9%8A%D8%A9-%D8%A7%D9%84%D8%B9%D9%82%D8%A8%D8%A9-University-of-Jordan-Aqaba-351519852118651/?ref=bookmarks" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/juaqaba" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="http://reg.ju.edu.jo/qindexpage.php" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<!--<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>-->
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header_address_mail">
		<div class="container">
			<div class="agileits_w3layouts_header_address_grid">
				<ul>	
					<!--<li><a href="mailto:info@example.com">info@example.com</a></li>-->
					<li><i class="fa fa-phone" aria-hidden="true"></i></li>
					<li>&nbsp;  032090450  &nbsp;</li>
				</ul>
			</div>
			</div>
			</div>
			
			
			
		<div class="container"> 
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<!nav class="link-effect-12">
						<ul class="nav navbar-nav w3_agile_nav">
							<li class="#"><a href="home.php"><span>Home</span></a></li>
							
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Study Plan</span> <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="CIS.php">CIS Study Plan</a></li>
									<li><a href="BIT.php">BIT Study Plan</a></li>
								</ul>
							</li>
							<li><a href="index.php"><span>Students</span></a></li>
							<li><a href="mail.php"><span>Mail Us</span></a></li>
						</ul>
					</nav>
				</div>
		</div>
<!-- header -->

	</div>
<?php 
$link = mysqli_connect("localhost", "admin", "123", "preregistration_db");
	    mysqli_set_charset($link, "utf8");
		
// Check connection
    if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
                       }
    $sql = "SELECT course_name_in_arabic, courses.courseID FROM courses, register WHERE register.courseID= courses.courseID and register.studentID = $studentId";
	
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table align=center>";
		    echo "<tr><br><br><h1 align=center>المواد المنجزة</h1></tr>";
            echo "<tr>"; 
                echo "<th>اسم المادة</th>";
				echo "<th>رقم المادة</th>";
				echo "<th>الرقم الجامعي</th>";
		
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['course_name_in_arabic'] . "</td>";
				echo "<td>" . $row['courseID'] . "</td>";
				echo "<td>" . 'studentID' . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 $sql2 = "SELECT * FROM courses c
	INNER JOIN register r ON c.courseID != r.courseID";
 if($result2 = mysqli_query($link, $sql2)){
	
		echo "<br> . <br> . <br>";
		
		echo "<table align=center>";
		echo "<tr><br><br><h1 align=center>المواد المقترحة</h1></tr>";
		echo "<tr>"; 
		echo "<th>اسم المادة</th>";
		echo "<th>رقم المادة</th>"; 
		echo "</tr>";
		while($row = mysqli_fetch_array($result2)){
			echo "<tr>";
			echo "<td>" . $row['course_name_in_arabic'] . "</td>";
			echo "<td>" . $row['courseID'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		 mysqli_free_result($result2);
    } else{
        echo "No records matching your query were found.";
    }

 
 /*$sql2 = "SELECT * FROM courses c
	INNER JOIN register r ON c.courseID != r.courseID";
 if($result2 = mysqli_query($link, $sql2)){
	
		echo "<br> . <br> . <br>";
		echo "<h1 align=center>المواد المقترحة</h1>";
        echo ' <form action="checkbox.php" method="post"> ';
       while($row = mysqli_fetch_array($result2)){ 
           echo "<input type='checkbox' name='chkl[courses]' value=$row['course_name_in_arabic']> . <br />  ";
           echo "<br>"; 
	}
		 
         echo '<input type="submit" value="Submit"> '; 
         echo '</form> '; 
		 
         mysqli_free_result($result2);
    } else{
        echo "No records matching your query were found.";
    }*/
// Close connection
mysqli_close($link);
?>




<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('php,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>