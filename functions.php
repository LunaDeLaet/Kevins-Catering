<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}


// Template header, feel free to customize this
function template_header($title) {
    // Get the amount of items in the shopping cart, this will be displayed in the header.
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="dist/css/main.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        
	</head>
	<body>
    <header>
        <div class="menu-btn">
        <span class="menu-btn__burger"></span>
        </div>
        <nav class="nav navbar">
        <ul class="menu-nav">
            <li class="manu-nav__item">
                <a href="index.php" class="menu-nav__link menu-nav__title active">KEVINS CATERING</a>
            </li>
            <li class="menu-nav__item">
                <a href="bestel.php" class="menu-nav__link">CATALOGUS</a>
            </li>
            <li class="menu-nav__item">
                <a href="about.php" class="menu-nav__link">OVER</a>
            </li>
            <li class="menu-nav__item">
                <a href="contact.php" class="menu-nav__link">CONTACT</a>
            </li>
            <li class="menu-nav__item">
                <a href="index.php?page=cart" class="menu-nav__link">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
        </ul>
        </nav>
    </header>
    <main>
EOT;
}


// Template footer
function template_footer() {
echo <<<EOT
        </main>
        <footer>
            &copy; Copyright 2022 Luna De Laet
        </footer>
        <script src="https://kit.fontawesome.com/ccff2b561d.js" crossorigin="anonymous"></script>
        <script src="dist/js/main.js"></script>
    </body>
</html>
EOT;
}
?>



