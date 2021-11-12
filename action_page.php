<html>
<head>
<link rel="stylesheet" href="styles.css" >
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<body>
<div class="container">
<div class="navbar">
		<div class="logo">
			<img src="images\logo1.jpg" alt="logo" class="logoimage" onclick="location.href='index.html'">
		</div>
		<div class="navbar_links">
			<a href="index.html">Home</a>
			<a href="aboutus.html">About Us</a>
			<a href="menu.html">Menu</a>
			<a href="specials.html">Specials</a>
			<a href="contactus.html">Contact Us</a>
		</div>
	</div> 
<div class="details">
<h1>Hi <?php echo $_POST["fname"];?>, thank you for signing up with Sun and Moon weekly newsletter...!! </h1>
<h2>Your confirmed details are as follow</h2>
<ul>
<li> Full Name: <?php echo $_POST["fname"]." ".$_POST["lname"];?></li>
<li>Email address : <?php echo $_POST["email"]; ?></li>
<li>Date of Birth:<?php echo $_POST["dob"];?></li>
<?php
if(!empty($_POST['menu'])) {
$checked_count = count($_POST['menu']);
echo "You selected ".$checked_count." menu(s): <br/>";
foreach($_POST['menu'] as $selected) {
echo "<p>".$selected ."</p>";
}
}
?>
</ul>
</div>
<div class="footer">
		<a href="index.html">Home</a>
		<a href="aboutus.html">About Us</a>
		<a href="menu.html">Menu</a>
		<a href="specials.html">Specials</a>
		<a href="contactus.html">Contact Us</a>
		<a href="tel:0455 9999 555"> Contact: 0455 9999 555</a>
		<a href="tel:0433 3333 999">Catering: 0433 3333 999</a>
		<a href="http://maps.google.com/maps?q=223+Powell+St,+Bowen,+Queensland">Adress:223 Powell St,Bowen, Queensland</a>
</div>
</div>
</body>
</html>
