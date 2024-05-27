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

        <!-- The PHP code below has been wrapped inside the HTML code so as to maintain the display formatting on the browser -->

        <!-- Begin Wrapping PHP Code inside HTML -->
        <?php /*PHP Opening Tag*/

        /*The PHP code resides inside the tags as shown below:

        	<?php 
        		#Code here 
        	?>
        	
        */

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $destination = htmlspecialchars($_POST['destination']);
          if (empty($destination)) {
            echo "Please provide the destination";
          } else {
            // Display what the user entered
            // A . is used for concatenation in PHP
            echo 'You entered destination as: '.$destination;
          }
        }

        // It is possible to display this HTML tag as below in PHP
        echo '<br>';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $clients = htmlspecialchars($_POST['clients']);
          if (empty($clients)) {
            echo "Please provide the number of clients";
          } else {
            // Display what the user entered
            // A . is used for concatenation in PHP
            echo 'You entered the number of clients as: '.$clients;
          }
        }

        // It is possible to display this HTML tag as below in PHP
        echo '<br>';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $description = htmlspecialchars($_POST['description']);
          if (empty($description)) {
            echo "You did not provide a description";
          } else {
            // Display what the user entered
            // A . is used for concatenation in PHP
            echo 'You entered the description as: '.$description;
          }
        }

        // It is possible to display this HTML tag as below in PHP
        echo '<br>';

        // If the destination and the number of clients fields are not empty add the new record to the database.
        // This is because they are the only mandatory fields, the description field is optional
        if(!empty($destination) && !empty($clients)){
          
          // Code reuse
          $conn = require 'connect_to_db.php';

          if($conn){

            // Prepare the SQL statement
            $stmt = $conn->prepare('INSERT INTO delivery_destinations (destination, no_of_dedicated_clients, description) VALUES (?, ?, ?)');

            if ($stmt) {
                // Bind the parameters
                $stmt->bind_param('sis', $destination, $clients, $description);  // 's' for string, 'i' for integer

                // Execute the statement
                if ($stmt->execute()) {
                    // HTML code inside a PHP echo statement
                    // Inline CSS has been used, take note of the single quotes and the double quotes (used to avoid syntax errors)
                    echo "<h2 style='color: #54C571;'><b>Record inserted successfully</b></h2>";
                } else {
                    die("An error occurred: " . $stmt->error);
                }

                // Close the statement
                $stmt->close();
            } else {
                die("Failed to prepare the SQL statement: " . $conn->error);
            }

            // Close the connection
            $conn->close();

          }
          else{
            die("Database connection failed: " . mysqli_connect_error());
          }
          $conn->close();

        }

        /*PHP Closing Tag*/ 
        ?> 
        <!-- End Wrapping PHP Code inside HTML -->
        <br>
        <a id="clickToGoBack" href="delivery-destinations.php">Click to go back</a>
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