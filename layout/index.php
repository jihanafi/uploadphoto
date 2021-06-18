<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem upload foto dan Video">
    <meta name="author" content="Jihan Afifah">
    <meta name="keywords" content="sistem, category, post, photos, album">
    <title>SUFCOGRAM</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    <main>
        <head>
           <img src="<?php echo ASSET; ?>image/header.png" alt="[IMG]">
        </head>

        <nav>

            <ul>
                <li>
                    <a href="index.php" class="active">HOME</a>
                </li>
                <li>
                    <a href="index.php?page=login_form">LOGIN</a>
                </li>
            
            </ul>
        </nav>

        <section>
        <?php
              if (isset($_GET['page'])) {
                  include $_GET['page'] . ".php";
              } else {
                  include"main_index.php";
              }
         ?>  
        </section>

        <footer>
            Copyright &copy; 2021
        </footer>

    </main>
</body>
</html>