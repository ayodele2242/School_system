<?php 
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebook https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="http://www.thesoftwareguy.in/favicon.ico" type="image/x-icon" />
<title>ADMIN AREA : www.thesoftwareguy.in</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="container">
    <div id="body">
        <header>
            <div class="mainTitle" ><?php echo $pageTitle; ?></div>
        </header>
        <nav>
        <a href="home.php" class="menus">Home</a>
        <a href="<?php echo SITE_URL; ?>" class="menus">Visit Site</a>
        <a href="manage_subscribers.php" class="menus">Manage Subscribers</a>
        <a href="manage_cards.php" class="menus">Manage Ecards</a>
        </nav>
        <article>
