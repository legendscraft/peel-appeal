<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Welcome to Peel Appeal</title>
		<meta charset = "utf-8">
		<!-- Link to the External Style Sheet Inside the CSS Folder : styles.css -->
		<link rel="stylesheet" href="../CSS/styles.css">
		<!-- Referencing External Javascript Code -->
		<script type="text/javascript" src="../JS/jquery.min.js"></script>
		<script type="text/javascript" src="../JS/Chart.min.js"></script>
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
				<h3 style="color: #848B79;">Peel Appeal proudly serves a wide range of dedicated clients across our different delivery destinations. Check out the summary below:</h3>
			</div>
			<div id="sectionDiv2">
				<blockquote>
					<!-- Inline CSS (not encouraged - it is only placed here for demo purposes) -->
					<h2 style="color: #C7A317;">Our Clientele Page:</h2>
					<!-- Fetching the regions from the database -->
						<?php

	        				// Code reuse
	        				$conn = require 'connect_to_db.php';
	        				if($conn){
					          $sqlquery = 'SELECT destination, no_of_dedicated_clients FROM delivery_destinations ORDER BY no_of_dedicated_clients';
					          $results = $conn->query($sqlquery);
					          
					          $myData = array();
					          foreach($results as $result){
					          	$myData[] = $result;
					          }
					          $data = json_encode($myData);
					        }
					        $conn->close();
					        // echo var_dump($data);

        				?>
					<div id="chartContainer">
				        <canvas id="graphCanvas"></canvas>
				    </div>
					
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
	<!-- Inline Javascript Code -->
	<script>
    $(document).ready(function() {
        var labels = [];
        var data = [];
        var backgroundColor = [];
        var backgroundColorDeclaration = [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)'
        ];
        const deliveryDestinations = JSON.parse('<?php print_r($data);?>');
        for (const [key, value] of Object.entries(deliveryDestinations)) {
            // labels.push(key.split('_').join(' '));
            // labels.push(key);
            // data.push(value);
            labels.push(value.destination);
            data.push(value.no_of_dedicated_clients);
            // backgroundColor.push('#00c0ef');
            // The lines below select a random background color from the array
            const random = Math.floor(Math.random() * backgroundColorDeclaration.length);
            backgroundColor.push(backgroundColorDeclaration[random]);
        }
        //-------------
        //- BAR CHART FOR Delivery Destinations
        // console.log(labels);
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#graphCanvas').get(0).getContext('2d')
        var donutData = {
            labels: labels,
            datasets: [
                {
                    label: 'Number of dedicated clients',
                    data: data,
                    backgroundColor : backgroundColor,
                }
            ]
        }
        var donutOptions = {
            maintainAspectRatio : true,
            responsive : true,
            locale: 'en-US'
        }
        // Create pie, bar or donut chart
        // You can switch between pie, bar and donut using the method below.
        new Chart(donutChartCanvas, {
            type: 'bar',
            data: donutData,
            options: donutOptions
        })
    });
    </script>
</html>