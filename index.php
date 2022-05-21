<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ENDTERM</title>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Public+Sans:wght@100;300&family=Source+Sans+Pro:wght@200;300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="navigation">
            <div class="logo">
                <i class="fas fa-cloud"></i>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=About">Profile & Contacts</a></li>
                <li><a href="index.php?page=Works">Works</a></li>
            </ul>
        </div>
        <?php
            switch($page){
                case "About":
                    include "About.php";
                break;
                case "Works":
                    include "Works.php";
                break;
                default:
                    include "default.php";
                }
            ?>
    </body>
</html>
