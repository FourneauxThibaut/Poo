<?php

class Car{

    public $plate;
    public $reserved = false;
    public $released_date;
    public $mileage;
    public $brand;
    public $model;
    public $color;
    public $weight;

            //      ┌─────────────────────────────────────────────────────────┐
            //      │                       Class Car                        │
            //      │                                                         │
            //      │                  Use "$action", "$method"               │
            //      ├─────────────────────────────────────────────────────────┤
            //      │ exemple: $form = new Form('form-validation', 'POST');   │
            //      └─────────────────────────────────────────────────────────┘
    public function __construct($plateNumber, $releasedDate, $mileage, $brand, $model, $color, $weight) {
        $this->plate = $plateNumber;
        $this->released_date = $releasedDate;
        $this->mileage = $mileage;
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->weight =  $weight;

        switch($brand) {
            case "audi":
               $this->reserved = true;
               break;
         }
    }

    public function call(){
        echo $this->brand, $this->reserved;
        echo "<hr>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carpark</title>
</head>
<body>
    <?php
    $thibaut = new Car( 'mtk035', 1996, 150000, 'audi', 'sistrabel', 'darkorange', 2.5);
    $thibaut->call();
    
    $anthony = new Car( 'ogaMobile', 2019, 18990, 'skoda', 'Superb', 'black', 4);
    $anthony->call();

    echo $anthony->brand, $anthony->reserved;
    ?>
</body>
</html>