<?php  require __DIR__ . '/Classes.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="form">
        <?php
            $form = new Form('#', 'POST');
            $form->create(); 
            $form->text('name'); 
            $form->select('Orientation', 'frontend', 'backend', 'fullstack'); 
            $form->radio('Gender', 'male', 'female', 'other'); 
            $form->textarea('Your message:', 'message');
            $form->submit('Submit');
            $form->end();
        ?>
    </section>
</body>
</html>