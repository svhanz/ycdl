<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head();?>
  <title>YCDL</title>
  <meta name="description" content="david lin film director and his films." />
  <meta name="keywords"
    content="david lin,lin david,ycdl,director,imagefilm,image film,music video,musicvideo,musik video,musikvideo,creative producer,promotional video,promotional film,commercial video,commercial film" />
  <!--<link rel="stylesheet" href="css/normalize.css" /> -->
</head>

<body>
  <!--==START HEADER==-->
  <header>
    <div class="headerInside">
      <div class="logo">
        <a href="front-page.php">
          <?php
          if (has_custom_logo()) {
            // если логотип есть выводим его
            echo get_custom_logo();
          }
          ?>
        </a>
      </div>
      <div class="navWrap">
        <?php wp_nav_menu();?>
        <!--<a href="#">films</a>-->
        <!--<a href="#">contact</a>-->
        <!--<a href="#">about</a>-->
      </div>
    </div>
  </header>