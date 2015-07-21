
<!DOCTYPE html>
<html> 
	<head>
		<link rel ="stylesheet" href="includes/style.css">
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Fontdiner+Swanky' rel='stylesheet' type='text/css'>
		<script src="includes/jquery-1.11.2.min.js"></script>
		<script src="includes/scripts.js"></script>
		<title> POKERFACE </title>
	</head> 	
	<body>		       
		<div id="wrapper">			
			<header>
			<a href="playersList.html" class="headerLogo"></a>
				<section class="user"><img src="images/tomer60.png" </section>
				<section class="points">0</section>
				<section class="dollars"><img src="images/dollars.png"> </section>
			</header>			
			<main id="appMain">
				<h1 id="reportTitle">Report Friend</h1>				
				<section>					
					<p id="goodR">2/4 reported Reut is playing good </p>
					<p id = "goodR1">Reut wins:</p>
					<section id="pointsR">200</section>
					<section id="dollarsR"><img src="images/dollars.png" alt="dollars"></section>
						<section id="share">
							<a id = "facebookB" href="#"><img src="images/facebook.png" alt="facebook"></a>
							<a id = "twitterB" href="#"><img src="images/twitter.png" alt="twitter"></a>
							<a id = "gB" href="#"><img src="images/gplus.png" alt="gplus"></a>
						</section>
				</section>				
			</main>
			<nav id="navMenu">
					<ul>
						<li><a class="myProfile" href="#"><img src="images/profile.png" alt="icon"></a></li>
						<li><a class="cam" href="#"><img src="images/cam.png" alt="icon"></a></li>
						<li><a class="add" href="#"><img src="images/add.png" alt="icon"></a></li>
						<li><a class="request" href="playersList.html"><img src="images/request.png" alt="icon"></a></li>
						<li><a class="loc" href="#"><img src="images/location.png" alt="icon"></a></li>
					</ul>
					<div class="clear"></div>
		 	</nav>
		</div>
	</body> 
</html>  

<?PHP

	include('db.php');
	
	$changed = date("d.m.y");
	
		if(isset($_GET['point']))
		$point = $_GET['point'];
	
			mysqli_query( $connection, "INSERT INTO tbl_users_104 (score, name, date, status_player) VALUE ('0', 'Natalie', '$changed','1')");
	
?>
