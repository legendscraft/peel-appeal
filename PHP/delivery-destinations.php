<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Welcome to Peel Appeal</title>
		<meta charset = "utf-8">
		<!-- Link to the External Style Sheet Inside the CSS Folder : styles.css -->
		<link rel="stylesheet" href="../CSS/styles.css">
	</head>
	
	<body>
		<header>
			<div id="headerParent">
				<div id="child1">
					<!-- <img src="../Images/CompanyLogo.jpg" alt="Logo" width="110" height="130"> -->
					<img src="../Images/CompanyLogo.jpg" alt="Logo" id="Logo">
				</div>
				<div id="child2">
					<div id="child2sChild1">
						<h1 id="indexHeaderText">PEEL APPEAL</h1>
						<p id="indexSloganText"><i>A Banana Bonanza!</i></p>
					</div>
				</div>
			</div>
			<nav id="nav">
				<ul>
				  <li><a href="../HTML/index.html">Home</a></li>
		          <li><a href="../HTML/contact.html">Contact</a></li>
		          <li><a href="../HTML/about.html">About</a></li>
		          <li><a href="delivery-destinations.php">Delivery Destinations</a></li>
		          <li><a href="clientele.php">Our Clientele</a></li> 
				</ul>
			</nav>
		</header>
		
		<section>
			<div id="sectionDiv1">
				<!-- Inline CSS (not encouraged - it is only placed here for demo purposes) -->
				<h3 style="color: #848B79;">Peel Appeal is a vibrant and energetic banana-selling company dedicated to providing the freshest and most delicious bananas to our customers.</h3>
			</div>
			<div id="sectionDiv2">
				<blockquote>
					<!-- Inline CSS (not encouraged - it is only placed here for demo purposes) -->
					<h2 style="color: #C7A317;">Delivery Destinations Page:</h2>
					<dl id="dlIndexPage">
						<dt>
							<b>Peel Appeal proudly serves a wide range of delivery destinations to ensure our fresh, high-quality bananas reach as many customers as possible. We currently deliver to the following regions:</b>
						</dt>
						<br>
						<table id="table">
							<thead>
								<th>ID</th>
								<th>Destination</th>
								<th>Number of Dedicated Clients</th>
							</thead>
							<tbody>
								<!-- Fetching the regions from the database -->
								<?php

									// Code reuse
			        				$conn = require 'connect_to_db.php';
			        				if($conn){
							          $sqlquery = 'SELECT * FROM delivery_destinations';
							          $results = $conn->query($sqlquery);
							          
							          foreach($results as $result){
							          	echo '<tr>';
							          		echo '<td>'.$result['id'].'</td>';
							          		echo '<td>'.$result['destination'].'</td>';
							          		echo '<td>'.$result['no_of_dedicated_clients'].'</td>';
							          	echo '</tr>';
							          }
							        }
							        $conn->close();

		        				?>
		        			</tbody>
		        		</table>
					</dl>
					<!-- This anchor tag has been styled using css to look like a button on a browser, use the id 'addMoreDestinations' to find the styling in 'styles.css' -->
					<a id="addMoreDestinations" href="../HTML/add-delivery-destinations.html">Click to add more regions</a>
				</blockquote>
			</div>
		</section>
		
		<footer>
			<div id="footerParent">
				<div id="footerChild1">
					<p>&copy; 2024 Peel Appeal. All Rights Reserved</p>
				</div>
			</div>
		</footer>
	</body>
</html>