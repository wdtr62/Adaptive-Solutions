<?php
// Get the current page filename to set active link
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaptive Solutions - <?php
        // Dynamically set title based on page
        switch ($current_page) {
            case 'index.php': echo 'Home'; break;
            case 'services.php': echo 'Our Services'; break;
            case 'portfolio.php': echo 'Portfolio'; break;
            case 'about.php': echo 'About Us'; break;
            case 'contact.php': echo 'Contact Us'; break;
            default: echo 'Professional Services';
        }
    ?></title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Favicon (optional) -->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>

    <header class="main-header">
        <div class="container">
            <a href="index.php" class="logo">
                <img src="img/logo.png" alt="Adaptive Solutions Logo">
                Adaptive Solutions
            </a>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="services.php" class="<?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a></li>
                    <li><a href="portfolio.php" class="<?php echo ($current_page == 'portfolio.php') ? 'active' : ''; ?>">Portfolio</a></li>
                    <li><a href="about.php" class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About</a></li>
                    <li><a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>