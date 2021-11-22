<?php
class Form {
    public $action;
    public $method;

    public function __construct($action, $method) {
        $this->action = $action;
        $this->method = $method;
    }

    public function create() {
        echo "<form action=".$this->action." method=".$this->method.">";
    }

    public function text($name) {
        echo "<div class='input-text-section'>";
        echo "<label for=".$name.">Enter your ".$name.": </label>";
        echo "<input type='text' name=".$name." id=".$name." required>";
        echo "</div>";
    }

    public function email($name) {
        echo "<div class='input-email-section'>";
        echo "<label for=".$name.">Enter your ".$name.": </label>";
        echo "<input type='email' name=".$name." id=".$name." required>";
        echo "</div>";
    }

    public function password($name) {
        echo "<div class='input-password-section'>";
        echo "<label for=".$name.">Enter your ".$name.": </label>";
        echo "<input type='password' name=".$name." id=".$name." required>";
        echo "</div>";
    }

    public function textarea($title, $name){
        echo "<label for=".$name.">$title</label>";
        echo "<textarea id='$name' name='$name' rows='5' cols='33'></textarea>";
    }

    public function select($title, ...$strings) {
        echo "<div class='input-select-section'>";

        echo "<label for='".$title."-select'>Choose a $title:</label>";
        echo "<select name=".$title." id='".$title."-select'>";

        foreach ($strings as $string) 
        {
            echo "<option value=".$string.">$string</option>";
        }

        echo "</select>";
        echo "</div>";
    }

    public function radio($title, ...$strings) {
        echo "<div class='input-radio-section'>";
        echo "<p>Select a ".$title.":</p>";

        foreach ($strings as $string) 
        {
            echo "<div>";
            echo "<input type='radio' id='.$string.' name='.$string.' value='.$string.'>";
            echo "<label for=".$string.">".$string."</label>";
            echo "</div>";
        }

        echo "</div>";
    }
    public function submit($name) {
        echo "<input type='submit' value='$name'>";
    }

    public function end() {
        echo "</form>";
    }
}
?>

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
            $form = new Form(' ', 'GET');
            $form->create($action); 
            $form->text('name'); 
            $form->select('Orientation', 'frontend', 'backend', 'fullstack'); 
            $form->radio('Gender', 'male', 'female', 'other'); 
            $form->textarea('Your message:', 'message');
            $form->submit('Submit');
            $form->end();
        ?>


<!--    // Le début d'un formulaire <form ...>
        // Un input text <input type="text"...>
        // Un select <select ...> ...</select>
        // Un bouton submit <button type="submit"></button>
        // Un textarea <textarea ...> ...</textarea>
        // Un radio button <input type="radio"...>
        // Une checkbox <input type="checkbox"> -->
    </section>
</body>
</html>