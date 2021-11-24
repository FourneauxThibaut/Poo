<?php

class Form {
    public $action;
    public $method;

            //      ┌─────────────────────────────────────────────────────────┐
            //      │                       Class Form                        │
            //      │                                                         │
            //      │                  Use "$action", "$method"               │
            //      ├─────────────────────────────────────────────────────────┤
            //      │ exemple: $form = new Form('form-validation', 'POST');   │
            //      └─────────────────────────────────────────────────────────┘
      public function __construct($action, $method) {
            $this->action = $action;
            $this->method = $method;
      }

            //      ┌─────────────────────────────────────────────────────────┐
            //      │                     Method Create                       │
            //      │                                                         │
            //      │                                                         │
            //      ├─────────────────────────────────────────────────────────┤
            //      │ exemple: $form->create();                               │
            //      └─────────────────────────────────────────────────────────┘
      public function create() {
            echo "<form action=".$this->action." method=".$this->method.">";
      }

            //      ┌─────────────────────────────────────────────────────────┐
            //      │                     Method Text                         │
            //      │                                                         │
            //      │                     Use "$name"                         │
            //      ├─────────────────────────────────────────────────────────┤
            //      │ exemple: $form->text('name');                           │
            //      └─────────────────────────────────────────────────────────┘
      public function text($name) {
            echo "<div class='input-text-section'>";
            echo "<label for=".$name.">Enter your ".$name.": </label>";
            echo "<input type='text' name=".$name." id=".$name." required>";
            echo "</div>";
      }

            //      ┌─────────────────────────────────────────────────────────┐
            //      │                     Method Email                        │
            //      │                                                         │
            //      │                     Use "$name"                         │
            //      ├─────────────────────────────────────────────────────────┤
            //      │ exemple: $form->email('email adress');                  │
            //      └─────────────────────────────────────────────────────────┘
      public function email($name) {
            echo "<div class='input-email-section'>";
            echo "<label for=".$name.">Enter your ".$name.": </label>";
            echo "<input type='email' name=".$name." id=".$name." required>";
            echo "</div>";
      }

            //      ┌─────────────────────────────────────────────────────────┐
            //      │                    Method Password                      │
            //      │                                                         │
            //      │                     Use "$name"                         │
            //      ├─────────────────────────────────────────────────────────┤
            //      │ exemple: $form->password('password');                   │
            //      └─────────────────────────────────────────────────────────┘
      public function password($name) {
            echo "<div class='input-password-section'>";
            echo "<label for=".$name.">Enter your ".$name.": </label>";
            echo "<input type='password' name=".$name." id=".$name." required>";
            echo "</div>";
      }

            //      ┌─────────────────────────────────────────────────────────┐
            //      │                     Method Textarea                     │
            //      │                                                         │
            //      │                   Use "$title", "$name"                 │
            //      ├─────────────────────────────────────────────────────────┤
            //      │ exemple: $form->textarea('Your message:', 'message');   │
            //      └─────────────────────────────────────────────────────────┘
      public function textarea($title, $name){
            echo "<label for=".$name.">$title</label>";
            echo "<textarea id='$name' name='$name' rows='5' cols='33'></textarea>";
      }

            //      ┌─────────────────────────────────────────────────────────────────────────────────────┐
            //      │                                     Method Select                                   │
            //      │                                                                                     │
            //      │                              Use "$title", "...$strings"                            │
            //      ├─────────────────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $form->select('Orientation', 'frontend', 'backend', 'fullstack');          │
            //      └─────────────────────────────────────────────────────────────────────────────────────┘
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

            //      ┌──────────────────────────────────────────────────────────────────────┐
            //      │                                 Method Radio                         │
            //      │                                                                      │
            //      │                     Use "$title", "...$strings"                      │
            //      ├──────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $form->radio('Gender', 'male', 'female', 'other');          │
            //      └──────────────────────────────────────────────────────────────────────┘
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
      
            //      ┌─────────────────────────────────────────────────────────┐
            //      │                          Method Submit                  │
            //      │                                                         │
            //      │                            Use "$name"                  │
            //      ├─────────────────────────────────────────────────────────┤
            //      │ exemple: $form->submit('Continue');                     │
            //      └─────────────────────────────────────────────────────────┘
      public function submit($name) {
            echo "<input type='submit' value='$name'>";
      }

            //      ┌──────────────────────────────────────────────────────────┐
            //      │                         Method End                       │
            //      │                                                          │
            //      │               Use it to close the form tag               │
            //      ├──────────────────────────────────────────────────────────┤
            //      │ exemple: $form->end();                                   │
            //      └──────────────────────────────────────────────────────────┘
      public function end() {
            echo "</form>";
      }

      /* 
      public function message($input){
            // ne fonctionne pas :( 
            if (count($_SESSION) > 0){
                  if(!isset($_SESSION['error_'.$input])){
                  if ( substr($_SESSION[$input], 0, 5) == 'error' ){
                        echo "<p class='error_message'> ".$input, $_SESSION[$input]." </p>";
                  }
                  } 
                  if(!isset($_SESSION['success_'.$input])){
                  if ( substr($_SESSION[$input], 0, 6) == 'success' ){
                        echo "<p class='success_message'> ".$input, $_SESSION[$input]." </p>";
                  }
                  } 
            } 
      }
       */
}

class Html {

            //      ┌────────────────────────────────────────────────────────────────┐
            //      │                         Method Link                            │
            //      │                                                                │
            //      │               Use "$name", "rel & type necessary"              │
            //      ├────────────────────────────────────────────────────────────────┤
            //      │ exemple: $html->link('./style.css', 'icon', 'image/x-icon');   │
            //      └────────────────────────────────────────────────────────────────┘
      public function link($url, $rel = 'stylesheet', $type = 'none') {
            if ($type == 'none'){
                  echo"<link href=".$url." rel=".$rel.">";
            }
            if ($type != 'none'){
                  echo"<link href=".$url." rel=".$rel." type=".$type.">";
            }
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                         Method Href                                    │
            //      │                                                                        │
            //      │    Use "$class if necessary", "$url", "$name", "$target"               │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $html->link('https://google.com');                            │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function href($url, $name, $class = 'none', $target = 'none') {
            if ($class == 'none'){
                  if($target == 'none'){
                        echo "<a href=".$url.">".$name."</a>";
                  }
                  if($target != 'none'){
                        echo "<a href=".$url." target=".$target.">".$name."</a>";
                  }
            }
            if ($class != 'none'){
                  if($target == 'none'){
                        echo "<a class=".$class." href=".$url.">".$name."</a>";
                  }
                  if($target != 'none'){
                        echo "<a class=".$class." href=".$url." target=".$target.">".$name."</a>";
                  }
            }
      }

            //      ┌────────────────────────────────────────────────────────────────────────────────────────────┐
            //      │                                        Method Meta                                         │
            //      │                                                                                            │
            //      │               Use "$type, if necessary", "$typeContent", "$content"                        │
            //      ├────────────────────────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $html->meta('keywords', 'péniche, écluses, paquebot, crise, décroissance')        │
            //      └────────────────────────────────────────────────────────────────────────────────────────────┘
      public function meta($typeContent, $content, $type = 'name') {
            if($type === 'http'){
                  $type = 'http-equiv';
            }
            echo "<meta $type=".$typeContent." content=".$content." />";
      }

            //      ┌──────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
            //      │                         Method Img                                                                                                                                                                                           │
            //      │                                                                                                                                                                                                                              │
            //      │           Use "url", "$name", "$class if necessary"                                                                                                                                                                          │
            //      ├──────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $html->img('https://images.unsplash.com/photo-1637424808031-85c07608132f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80', 'fauteuil & neon', 'img-heading');     │
            //      └──────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
      public function img($url, $alt, $class = 'none') {
            if ($class == 'none'){
                  echo "<img src=".$url." alt=".$alt.">";
            }
            if ($class != 'none'){
                  echo "<img class=".$class." src=".$url." alt=".$alt.">";
            }
      }

            //      ┌──────────────────────────────────────────────────────────┐
            //      │                         Method script                    │
            //      │                                                          │
            //      │          Use "url", "$module & $loading if necessary"    │
            //      ├──────────────────────────────────────────────────────────┤
            //      │ exemple: $html->script('./main.js', 'none', 'async') ;   │
            //      └──────────────────────────────────────────────────────────┘
      public function script($url, $module = 'none', $loading = 'none') {
            if ($module == 'none'){
                  if ($loading = 'none') {
                        echo "<script src=".$url."></script>";
                  }
                  if ($loading != 'none') {
                        echo "<script $loading src=".$url."></script>";
                  }
            }
            if ($module != 'none'){
                  if ($module == 'nomodule'){
                        echo "<script $module src=".$url."></script>";
                  }
                  if ($module != 'nomodule'){
                        echo "<script type=".$module." src=".$url."></script>";
                  }
            }
      }
}

class validator {

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                                  Method is_number                      │
            //      │                                                                        │
            //      │                         Use "$number"                                  │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $validation->is_number(2);                                    │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function is_number($number){
            return(is_nan($number) ?  'error' : $number);
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                                  Method is_int                         │
            //      │                                                                        │
            //      │                         Use "$number"                                  │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $validation->is_int(2);                                       │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function is_int($number){
            return(is_int($number) ? $number : 'error');
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                                  Method is_float                       │
            //      │                                                                        │
            //      │                         Use "$number"                                  │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $validation->is_int(2);                                       │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function is_float($number){
            return(is_float($number) ? $number : 'error');
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                                  Method is_string                      │
            //      │                                                                        │
            //      │                         Use "$string"                                  │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $validation->is_string('helloww');                            │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function is_string($string){
            return(is_nan($string) ? $string : 'error');
      }    

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                                  Method is_email                       │
            //      │                                                                        │
            //      │                         Use "$email"                                   │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $validation->is_email('fourneaux.thibaut@gmail.com');         │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function is_email($email){
            return(filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : 'error');
      }      
}

class storage {

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                       Method create_session                            │
            //      │                                                                        │
            //      │                 Use "$name, $content"                                  │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $storage->create_session('message', 'mail envoyer');          │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function create_session($name, $content){
            $_SESSION[$name]="$content";
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                       Method get_session                               │
            //      │                                                                        │
            //      │                           Use "$name                                   │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $storage->get_session('message');                             │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function get_session($name){
            if(isset($_SESSION[$name])) {
                  echo $_SESSION[$name] ;
            }
            else {
                  echo $name." session not found.";
            }
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                       Method delete_session                            │
            //      │                                                                        │
            //      │                           Use "$name                                   │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $storage->delete_session('message');                          │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function delete_session($name){
            unset($_SESSION["$name"]);
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                       Method clear_all_session                         │
            //      │                                                                        │
            //      │                           Use "$array                                  │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $storage->clear_all_session();                                │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function clear_all_session(){
            $helper = array_keys($_SESSION);
            foreach ($helper as $key){
                unset($_SESSION[$key]);
            }
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                    Method create_success_session                       │
            //      │                                                                        │
            //      │                 Use "$name, $content"                                  │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $storage->create_session('message', 'mail envoyer');          │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function create_success_session($name, $content){
            $successName = 'success'.$name;
            $_SESSION[$successName]="$content";
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                     Method get_success_session                         │
            //      │                                                                        │
            //      │                 Use "$name, $content"                                  │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $storage->get_success_session('message', 'mail envoyer');     │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function get_success_session($name){
            if(isset($_SESSION['success'.$name])) {
                  echo $_SESSION['success'.$name] ;
            }
            else {
                  echo $name." session not found.";
            }
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                     Method delete_success_session                      │
            //      │                                                                        │
            //      │                 Use "$name                                             │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $storage->delete_success_session('message');                  │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function delete_success_session($name){
            unset($_SESSION['success'.$name]);
      }

            //      ┌─────────────────────────────────────────────────────────────────────────────┐
            //      │                     Method create_error_session                             │
            //      │                                                                             │
            //      │                 Use "$name                                                  │
            //      ├─────────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $storage->create_error_session('message', 'the field is empty');   │
            //      └─────────────────────────────────────────────────────────────────────────────┘
      public function create_error_session($name, $content){
            $errorName = 'error'.$name;
            $_SESSION[$errorName]="$content";
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                     Method get_error_session                           │
            //      │                                                                        │
            //      │                     Use "$name                                         │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $storage->get_error_session('message');                       │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function get_error_session($name){
            if(isset($_SESSION['error'.$name])) {
                  echo $_SESSION['error'.$name] ;
            }
            else {
                  echo $name." session not found.";
            }
      }

            //      ┌────────────────────────────────────────────────────────────────────────┐
            //      │                     Method delete_error_session                        │
            //      │                                                                        │
            //      │                     Use "$name                                         │
            //      ├────────────────────────────────────────────────────────────────────────┤
            //      │ exemple: $storage->delete_error_session('message');                    │
            //      └────────────────────────────────────────────────────────────────────────┘
      public function delete_error_session($name){
            unset($_SESSION['error'.$name]);
      }
}