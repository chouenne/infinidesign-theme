<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=family=Raleway:ital,wght@0,100..900;1,100..900&Bodoni+Moda:opsz,wght@6..96,600;6..96,700;6..96,800&family=Parisienne&family=Fredoka:wght@300..700&family=Roboto:wght@100;300;400;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- for the AOS animation-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <title>Infini Design header </title>


  <?php wp_head(); ?>

</head>

<body>
  <header>
    <div class="container">
      <div class="content">
        <div class="menu-flex">
        <div class="logo">
          <?php the_custom_logo(); ?>
        </div>
        <div id="burger"><i class="fa-solid fa-bars"></i></div>
        <div class="menu-holder">
          <ul class="menu-list">
            <?php
            $args = array(
              'theme_location' => 'headernav'
            );
            ?>
            <?php wp_nav_menu($args); ?>
          </ul>
        </div>
        </div>
       
      </div>
    </div>
  </header>
