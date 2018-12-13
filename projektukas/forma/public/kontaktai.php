<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
  <title>Responsive Side Menu &ndash; Layout Examples &ndash; Pure</title>
  <link rel="stylesheet" href="../app/css1/grid.css">
  <link rel="stylesheet" href="../app/css1/gallery-old-ie.css">
  <link rel="stylesheet" href="../app/css1/gallery.css">
  <link rel="stylesheet" href="../app/css1/side-menu-old-ie.css">
  <link rel="stylesheet" href="../app/css1/side-menu.css">


  <!-- <link rel="stylesheet" type="text/css" href="reset.css"> -->

  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">



  <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
        <![endif]-->
  <!--[if gt IE 8]><!-->
  <!-- <link rel="stylesheet" href="css/layouts/side-menu.css"> -->
  <!--<![endif]-->
</head>

<body>




  <div class="pure-menu pure-menu-horizontal">
    <a>MINIDEMINI</a>
    <ul class="pure-menu-list">
      <li class="pure-menu-item"><a href="../../index.php" class="pure-menu-link">Pagrindinis</a></li>
      <li class="pure-menu-item"><a href="../../galerija.php" class="pure-menu-link">Galerija</a></li>
      <li class="pure-menu-item"><a href="kontaktai.php" class="pure-menu-link">Kontaktai</a></li>
    </ul>
  </div>





    <?php
        include ('../app/views/header.php');
        include ('../app/views/content.php');
        include ('../app/views/footer.php');

        require __DIR__ . '/../app/src/app.php';

       ?>
  </body>
</html>
