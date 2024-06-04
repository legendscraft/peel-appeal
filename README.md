COMPANY & REQUIREMENTS DESCRIPTION
========================================================================

About PEEL APPEAL (A Banana Bonanza!)
------------------------------------------------------------------------
Peel Appeal is a vibrant and energetic banana-selling company dedicated to providing the freshest and most delicious bananas to their customers. 

As their business continues to grow, they recognize the need to have a professional web presence that will not only showcase their delightful products but also streamline their operations and enhance their customer experience.

Consequently, they are looking for a straightforward yet effective web application that should be built using:
<ul>
	<li>HTML,</li>
	<li>CSS,</li>
	<li>JavaScript,</li>
	<li>and Vanilla (Plain) PHP,</li>
</ul>

This will ensure that it remains lightweight, easy to maintain, and accessible.

Here are the key features they would like the web application to have:
------------------------------------------------------------------------
1. Product Listing: A section to display the different types of bananas they sell.
2. Delivery Destinations: A page that lists the various delivery destinations they serve
	- This should include an option to add extra delivery destinations.
3. Company Description: A dedicated page describing Peel Appeal, their mission, values, and what sets them apart from other banana sellers.
4. Contact Details: An easy-to-find section that provides their contact details.
5. Clientele Distribution: A page that will show the number of our dedicated clients per delivery destination.
6. Logo: Additionally, they would also like you to design a logo for their company.
7. Theme: They have requested that the color theme on the website should match or be close to the actual banana color.
8. Feel free to be more creative with other parts of the website
9. For now the website must not have the sign-up and sign-in implementation (this will be in version 2)
	- Note that for your class project you MUST implememnt these features


DATABASE IMPLEMENTATION DESCRIPTION <br>(Run the queries below):
========================================================================

Create a database and the database user. <br>
If you are using the command line you can use the commands below:
------------------------------------------------------------------------
<code>
create database peel_appeal;

CREATE USER 'peel_appeal_user'@'localhost' IDENTIFIED BY 'password';

GRANT ALL ON peel_appeal.* TO 'peel_appeal_user'@'localhost' WITH GRANT OPTION;

FLUSH PRIVILEGES;
</code>

Create a table inside the database as follows:
------------------------------------------------------------------------
<code>
CREATE TABLE `peel_appeal`.`delivery_destinations` (
	`id` INT(11) NOT NULL AUTO_INCREMENT , 
	`destination` VARCHAR(255) NOT NULL , 
	`no_of_dedicated_clients` INT(11) NOT NULL , 
	`description` TEXT NULL DEFAULT NULL , 
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`id`)
);
</code>

Insert some dummy data in the table:
------------------------------------------------------------------------
<code>
INSERT INTO `delivery_destinations` (`id`, `destination`, `no_of_dedicated_clients`, `description`, `created_at`) VALUES
(1, 'Nairobi', 10, 'Nairobi delivery destination', NOW()),
(2, 'Kisumu', 15, 'Kisumu delivery destination', NOW()),
(3, 'Mombasa', 7, 'Mombasa delivery destination', NOW()),
(4, 'Nakuru', 6, 'Nakuru delivery destination', NOW()),
(5, 'Kisii', 13, 'Kisii delivery destination', NOW()),
(6, 'Kericho', 3, 'Kericho delivery destination', NOW());

ALTER TABLE `delivery_destinations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `delivery_destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
</code>

APPLICATION IMPLEMENTATION DESCRIPTION
========================================================================

File Structure
------------------------------------------------------------------------
The file structure is as follows:

<dl>
	<b>Parent Folder (Name: PeelAppeal)</b>
	<dd><b>Child Folders and files:</b></dd>
		<dt>
			<ul>
				<li>HTML</li>
				<li>PHP</li>
				<li>JS</li>
				<li>CSS</li>
				<li>README.md (Contains instructions and details about this application - this file)</li>
			</ul>
		</dt>
</dl>
HTML files should be inside the HTML folder, PHP files inside the PHP folder and so on

Widnows: XAMPP
	If you are using XAMPP on a Windows machine it should be in a directory similar to the one below:<br>
	C:\xampp\htdocs 

	Follow this link for further guidance
	https://medium.com/@adityasinghw84it/how-to-run-your-project-using-xampp-3a1c16a1fe0f


Windows WAMP:
	Your webserver root directory should be in a directory similar to the one below:<br>
	C:\wamp\www


Linux:
	Place the project folder inside your webserver root directory 


Access the Project in a Browser
------------------------------------------------------------------------
Open a web browser and enter "http://localhost/application-folder-name" in the address bar. 
Remember to replace "application-folder-name" with the actual name of the folder where the application's files are.
This will load the application's homepage or the default entry point, in this case it is the "index.html".
In this case it should be "http://localhost/PeelAppeal"


GIT
========================================================================

Clone the application from GitHub, the URL's are as below:
	git@github.com:legendscraft/peel-appeal.git
or this:
	https://github.com/legendscraft/peel-appeal.git

Refer to the links below to learn more about Git (In addition to the class notes)
	https://product.hubspot.com/blog/git-and-github-tutorial-for-beginners

Windows users who would like a Linux terminal experience can use the BASH emulation engine: Git Bash
Below are Installation Guides:
	https://gitforwindows.org/
	https://www.youtube.com/watch?v=zM9Mb-otqww


NOTE: In your assigned projects, remember to commit and push any changes that you make to GitHub.


Copyright © 2024 Lawrence Kasera. All rights reserved.