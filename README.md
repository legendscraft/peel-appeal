COMPANY & REQUIREMENTS DESCRIPTION
========================================================================

About PEEL APPEAL (A Banana Bonanza!)
------------------------------------------------------------------------
Peel Appeal is a vibrant and energetic banana-selling company dedicated to providing the freshest and most delicious bananas to their customers. 

As their business continues to grow, they recognize the need to have a professional web presence that will not only showcase their delightful products but also streamline their operations and enhance their customer experience.

Consequently, they are looking for a straightforward yet effective web application that should be built using:

	HTML, 
	CSS, 
	JavaScript, 
	and Vanilla PHP, 

ensuring it remains lightweight, easy to maintain, and accessible.

Here are the key features they would like the web application to have:
------------------------------------------------------------------------
> Product Listing: A section to display the different types of bananas they sell.
> Delivery Destinations: A page that lists the various delivery destinations they serve
	- This should include an option to add extra delivery destinations.
> Company Description: A dedicated page describing Peel Appeal, their mission, values, and what sets them apart from other banana sellers.
> Contact Details: An easy-to-find section that provides their contact details.
> Clientele Distribution: A page that will show the number of our dedicated clients per delivery destination.
> Logo: Additionally, they would also like you to design a logo for their company.
> Theme: They have requested that the color theme on the website should match or be close to the actual banana color.
> Feel free to be more creative with other parts of the website
> For now the website must not have the sign-up and sign-in implementation (this will be in version 2)
	- Note that for your class project you MUST implememnt these features


APPLICATION IMPLEMENTATION DESCRIPTION
========================================================================

File Structure
------------------------------------------------------------------------
The file structure is as follows:

> Parent Folder (Name: PeelAppeal)
	> Child Folders and files:
		> HTML
		> PHP
		> JS
		> CSS
		> README.md

HTML files should be inside the HTML folder, PHP files inside the PHP folder and so on

Widnows: XAMPP
	If you are using XAMPP on a Windows machine it should be in a directory similar to the one below:
	C:\xampp\htdocs 

	Follow this link for furtehr guidance
	https://medium.com/@adityasinghw84it/how-to-run-your-project-using-xampp-3a1c16a1fe0f


Windows WAMP:
	Your webserver root directory should be in a directory similar to the one below:
	C:\wamp\www


Linux:
	Place the project folder inside your webserver root directory 


DATABASE IMPLEMENTATION DESCRIPTION
========================================================================

Create a database and the database user
If you are using the command line you can use the commands below
------------------------------------------------------------------------
create database peel_appeal;

CREATE USER 'peel_appeal_user'@'localhost' IDENTIFIED BY 'password';

GRANT ALL ON peel_appeal.* TO 'peel_appeal_user'@'localhost' WITH GRANT OPTION;

FLUSH PRIVILEGES;


Create a table inside the database as follows (Run the queries below):
------------------------------------------------------------------------
CREATE TABLE `peel_appeal`.`delivery_destinations` (
	`id` INT(11) NOT NULL AUTO_INCREMENT , 
	`destination` VARCHAR(255) NOT NULL , 
	`no_of_dedicated_clients` INT(11) NOT NULL , 
	`description` TEXT NULL DEFAULT NULL , 
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`id`)
);

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


GIT
========================================================================


Refer to the links below to learn more about Git (In addition to the class notes)
https://product.hubspot.com/blog/git-and-github-tutorial-for-beginners



Windows users who would like a Linux terminal experience can use the BASH emulation engine: Git Bash
https://gitforwindows.org/




Copyright © 2024 Lawrence Kasera. All rights reserved.