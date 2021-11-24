<?php  require __DIR__ . '/Classes.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php
            $html = new Html();
            $html->link('./style.css');
            $html->meta('description', 'site pour les frites et le developpement web');
      ?>
      <title>Document</title>
</head>
<body>
      <section id="html">
            <?php
                  $html->img('https://images.unsplash.com/photo-1637424808031-85c07608132f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80', 'fauteuil & neon', 'img-heading');
                  $html->href('https://thibaut-fourneaux.be/', 'My_Portfolio', 'mylink', '_blank');
            ?>
      </section>
      <?php
            $html->script('./main.js', 'none', 'async');
      ?>
</body>
</html>