<?php
    require_once("dbh.inc.php");
    $ID = $_GET['id'];
    $sql =	"SELECT * FROM `projects` WHERE `Id` = '$ID'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $Title = $row['Title'];
            $Subtitle = $row['Subtitle'];
            $background = $row['Heading Image'];
            $Detail1 = $row['Details Text 1'];
            $Detail2 = $row['Details Text 2'];
            $Detail3 = $row['Details Text 3'];
            $Detail4 = $row['Details Text 4'];
            $Detail5 = $row['Details Text 5'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects - Growth Foundation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="styles2.css" rel="stylesheet" type="text/css"/>
    <link rel="apple-touch-icon" sizes="180x180" href="Web-Icon files\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Web-Icon files\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Web-Icon files\favicon-16x16.png">
    <link rel="manifest" href="Web-Icon files\site.webmanifest">
</head>
<body class="body"> 
    <nav class="navbar">
        <div>
            <img class="growth-image" src="Growth_Logo1.png" loading="eager" width="64" height="59" alt=""/> 
        </div>
        <h1 class="growth-text">G.R.O.W.T.H</h1>
        <div id="menu-toggle" class="menu-icon">
            <img src="burger-menu.svg" loading="lazy" width="35" height="40" alt="" class="menu-svg">
        </div>
        <div class="navbar-buttons">
            <h1 class="donate-button">Donate</h1>
            <h1 class="contact-us-button">Contact Us</h1>
            <h1 class="projects-button">Projects</h1>
        </div>
    </nav>
    <section class="project-header-section">
        <div class="project-header-block">
            <h1 class="project-header"><?php echo $Title ?></h1>
            <p class="project-subtitle">
                <?php echo $Subtitle ?>
            </p>
        </div>
        <div class="project-heading-image">
            <img src= <?php echo $background ?> loading="lazy" width="1281px" height="650px" alt="" class="heading-image"/>
        </div>
    </section>
    <section class="details-section">
        <div class="details-text-block">
            <p class="details-text">
                <?php echo $Detail1 ?>
            </p>
            <p class="details-text">
                <?php echo $Detail2 ?>
            </p>
            <p class="details-text">
                <?php echo $Detail3 ?>
            </p>
            <p class="details-text">
                <?php echo $Detail4 ?>
            </p>
            <p class="details-text">
                <?php echo $Detail5 ?>
            </p>
        </div>
    </section>
    <section class="related-images-section">
        <div class="related-text-block">
            <h2 class="related-text">Related Images</h2>
        </div>
        <div class="related-images-block">
            <?php 
                $sql =	"SELECT * FROM `images` WHERE `ID` = '$ID'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?> 
            <img src= <?php echo $row['Related Images'] ?> loading="lazy" width="404px" height="365px" alt="" class="related-image"/>
            <?php 
                }}
            ?>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-image-block">
            <img src="tree.png" loading="lazy" width="250" height="276" alt="" class="growth-tree"/>
            <h3 class="tree-heading">G.R.O.W.T.H</h3>
        </div>
        <div class="footer-links-block">
            <div class="links-block">
                <h3 class="footer-header">Learn More</h3>
                <div class="projects-block">
                    <p class="footer-caption">Projects</p>
                    <img src="Arrow-Icon.svg"
                        loading="lazy" alt="" class="arrow-vector"/>
                </div>
                <div class="about-us-block">
                    <p class="footer-caption">About Us</p><img
                        src="Arrow-Icon.svg"
                        loading="lazy" alt="" class="arrow-vector"/>
                </div>
            </div>
            <div class="links-block">
                <h3 class="footer-header">Partners</h3>
                <p class="footer-caption">G Industries</p>
                <p class="footer-caption">CLLR. Edwards</p>
            </div>
            <div class="links-block">
                <h3 class="footer-header">Contact Us</h3>
                <p class="footer-caption">Flow (876) 999-9999</p>
                <p class="footer-caption">Digicel (876) 999-9999</p>
            </div>
            <div class="links-block">
                <h3 class="footer-header">Socials</h3>
                <div class="socials-block">
                    <img src="Twitter-Icon.svg" loading="lazy" width="21" height="17" alt="" class="twitter-svg"/>
                    <img src="Facebook-Icon.svg"loading="lazy" width="18" height="17" alt="" class="facebook-svg"/>
                    <img src="Instagram-Icon.svg" loading="lazy" width="18" height="17" alt="" class="instagram-svg"/>
                    <img src="Email-Icon.svg" loading="lazy" alt="" class="email-svg"/>
                </div>
                <p class="footer-caption">growthfoundation@gmail.com</p>
            </div>
        </div>
        <div class="footer-credits-block">
            <p class="credits-text">© 2024 - G.R.O.W.T.H Powered By </p>
            <img src="G-Credit.png" loading="lazy" alt="" class="g-logo"/>
        </div>
    </footer>
</body>