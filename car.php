<?php

class Car{

    private $plate;
    private $reserved = false;
    private $released_date;
    public $mileage;
    private $state;
    private $brand;
    private $model;
    public $color;
    public $weight;

            //      ┌─────────────────────────────────────────────────────────┐
            //      │                       Class Car                         │
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

        $brand == "audi" ? $this->reserved = true : "";

        $mileage < 100000 ? $this->state = "low" : "";
        $mileage >= 100000 AND $mileage <= 200000 ? $this->state = "middle" : "";
        $mileage > 200000 ? $this->state = "high" : "";
    }

            //      ┌─────────────────────────────────────────────────────────┐
            //      │                 Method update_state                     │
            //      │                                                         │
            //      │               Use "$newMiles" => private                │
            //      ├─────────────────────────────────────────────────────────┤
            //      │                                                         │
            //      └─────────────────────────────────────────────────────────┘
    private function update_state($mileage){
        
        $mileage < 100000 ? $this->state = "low" : "";
        $mileage >= 100000 AND $mileage <= 200000 ? $this->state = "middle" : "";
        $mileage > 200000 ? $this->state = "high" : "";
    }

            //      ┌─────────────────────────────────────────────────────────┐
            //      │                    Method drive                         │
            //      │                                                         │
            //      │              add 100'000 to the car object              │
            //      ├─────────────────────────────────────────────────────────┤
            //      │                                                         │
            //      └─────────────────────────────────────────────────────────┘
    public function drive() {
        $this->mileage += 100000;
        $this->update_state($this->mileage);
    }

    public function display() {
        return "<tr>
                    <td>".$this->brand."</td>
                    <td>".$this->model."</td>
                    <td>".$this->released_date."</td>
                    <td>".$this->plate."</td>
                    <td>".$this->mileage."</td>
                    <td>".$this->color."</td>
                    <td>".$this->weight."</td>
                    <td>".$this->state."</td>
                    <td>".$this->reserved."</td>                                        
                </tr>";
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
        $anthony = new Car( 'ogaMobile', 2019, 18990, 'skoda', 'Superb', 'black', 4);
    ?>
    <table>
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>released_date</th>
            <th>plate</th>
            <th>mileage</th>
            <th>color</th>
            <th>weight</th>
            <th>state</th>
            <th>reserved</th>
        </tr>
        <?php
            echo $thibaut->display();
            echo $anthony->display();
            $thibaut->drive();
        ?>
    </table>
</body>
<style>
    table{
        width: 100%;
        border: 1px solid black;
        border-collapse: collapse;
    }
    th{
        background-color: #ea480c;
        color: white;
        text-transform: uppercase;
        text-align: center;
        border: 1px solid black;
    }
    td {
        text-align: center;
    }
    tr:nth-child(odd) {background-color: #f2f2f2;}
</style>
</html>